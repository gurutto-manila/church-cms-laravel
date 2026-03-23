<template>
    <div>
        <div v-if="this.success!=null" class="alert alert-success" id="success-alert">{{this.success}}</div>
        <div>
            <div class="my-8">
                <div class="w-full flex flex-wrap items-center justify-between mb-4">
                    <div class="flex items-center text-sm">
                        <div class="px-3 border-r" v-if="this.membersCount > 0">
                            {{ parseInt(this.membersCount) }} Members Selected
                        </div>
                        <div class="px-3 border-r relative">
                            <input class="opacity-0 absolute w-full h-full cursor-pointer" type="checkbox" @click="selectAll($event)" v-model="allSelected"><span>Select All</span>
                        </div>
                        <div class="px-3 relative" v-if="this.membersCount > 0">
                            <input class="opacity-0 absolute w-full h-full cursor-pointer" type="checkbox" @click="selectNone($event)" v-model="noneSelected"><span>Select None</span>
                        </div>
                    </div> 
                </div>
                <span v-if="errors.members" class="text-red-500 text-xs font-semibold">{{ errors.members[0] }}</span>
                <div class="flex flex-wrap" v-if="Object.keys(this.users).length > 0">
                    <div class="w-full lg:w-1/4 md:w-1/4 my-2 relative" v-for="user in users">
                        <div class="flex justify-between member-list">
                            <div class="flex items-center student_select">
                                <input class="w-5 h-5" type="checkbox" v-model="selected" :value="user.id" @click="selectedCount(user.id,$event)">
                                <label></label>
                            </div>
                            <div class="flex p-2 active w-full" :id="user.id">
                                <div class="px-2">
                                    <h2 class="text-sm text-gray-700">{{ user.fullname }}</h2>
                                     <h1 class="text-xs text-gray-700">{{ user.usergroup }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-6">
                <a href="#" dusk="submit-btn" class="btn btn-submit blue-bg text-white rounded px-3 py-1 mr-3 text-sm font-medium" @click="submit()">Submit</a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:['url' , 'id'],
        data(){
            return{
                conferences:[],
                users:[],
                selected: [],
                members:[],
                membersCount:0,
                allSelected: false,
                noneSelected:false,
                errors:[],
                success:null,
            }
        },

        methods:
        {
            getData()
            {
                axios.get('/admin/video-conference/editList/'+this.id).then(response => {
                    this.conferences = response.data;
                    this.setData();
                    //console.log(this.conferences);
                });
            },

            setData()
            {
                if(Object.keys(this.conferences).length > 0)
                {
                    this.selected       = this.conferences.members;
                    this.members        = this.conferences.members;
                    this.membersCount   = Object.keys(this.members).length;
                    this.users          = this.conferences.users;
                }
            },

            selectAll(e) 
            { 
                var selected = [];
                var members = [];
                if (e.target.checked) 
                {
                    $('.member-list').addClass('student_selected');
                    if(this.allSelected == false) 
                    {
                        this.users.forEach(function (user) 
                        {
                            members.push(user.id);
                            selected.push(user.id);
                        });
                        this.selected = selected; 
                        this.members = members; 
                        this.membersCount = selected.length;
                        this.allSelected = true;
                    }
                }
                else
                {
                    this.users.forEach(function (user) 
                    {
                        //selected.splice(user.id);
                        //members.splice(user.id);
                        for (var i=0 ; i < selected.length ; i++)
                        {
                            if (selected[i]==user.id)
                            {
                                selected.splice(i,1); //this delete from the "i" index in the array to the "1" length
                                break;
                            }
                        } 

                        for (var i=0 ; i < members.length ; i++)
                        {
                            if (members[i]==user.id)
                            {
                                members.splice(i,1); //this delete from the "i" index in the array to the "1" length
                                break;
                            }
                        }
                    });
                    this.selected = selected; 
                    this.members = members;
                    this.membersCount = selected.length;
                    this.noneSelected = false;
                    $('.member-list').removeClass('student_selected');
                }
            },

            selectNone(e) 
            { 
                var selected = [];
                var members = [];
                if (e.target.checked) 
                {
                    $('.member-list').removeClass('student_selected');
                    this.users.forEach(function (user) 
                    {
                        //selected.splice(user.id);
                        //members.splice(user.id);
                        for (var i=0 ; i < selected.length ; i++)
                        {
                            if (selected[i]==user.id)
                            {
                                selected.splice(i,1); //this delete from the "i" index in the array to the "1" length
                                break;
                            }
                        } 

                        for (var i=0 ; i < members.length ; i++)
                        {
                            if (members[i]==user.id)
                            {
                                members.splice(i,1); //this delete from the "i" index in the array to the "1" length
                                break;
                            }
                        } 
                    });
                    this.selected = selected;
                    this.members = members;
                    this.membersCount = selected.length;
                    this.noneSelected = false;
                }
            },

            submit()
            {
                this.errors=[];
                this.success=null;
        
                axios.post('/admin/video-conference/save-invites/'+this.id,{ 
                    id:this.id,
                    members:this.members,
                }).then(response => {
                    this.success = response.data.success;
                    window.location.reload();
                }).catch(error => {
                    this.errors = error.response.data.errors;
                });
            },

            selectedCount(id,e) 
            { 
                if (e.target.checked == true) 
                {
                    this.membersCount++;
                    this.members.push(id);
                    $('#'+id).addClass('student_selected');
                }
                else
                {
                    this.membersCount--;
                    //this.members.splice(id);
                    this.removeUser(id,this.members);
                    $('#'+id).removeClass('student_selected');
                }
            },

            removeUser(item, arr)
            {
                for (var i=0 ; i < arr.length ; i++)
                {
                    if (arr[i]==item)
                    {
                        arr.splice(i,1); //this delete from the "i" index in the array to the "1" length
                        break;
                    }
                } 
            },
        },

        created() 
        {
            this.getData();
        },
    }
</script>
<template>
    <div>
        <portal to="guestdetail">
            <div class="hide-menu absolute top-0" id="show-guest-detail">
                <div class="bg-white w-full  lg:w-2/5 md:w-3/5 shadow-lg border border-r-0 member-detail z-40 right-0 fixed h-full overflow-y-auto">
                    <a href="#" @click="disableform()" class="absolute right-0">
                        <img :src="this.url+'/uploads/icons/cancel.svg'" class="w-3 h-3 m-3">
                    </a>
                    <div class="flex flex-col lg:flex-row md:flex-row py-3">
                        <div class="w-3/4 lg:w-1/5 md:w-1/5 p-3">
                            <img v-bind:src="user.avatar" class="lg:w-24 lg:h-24 md:w-24 md:h-20">
                        </div>
                        <div class="w-full lg:w-4/5 md:w-4/5 px-3 lg:px-0 md:px-0">
                            <div>
                                <div class="leading-relaxed">
                                    <h1 class="text-2xl font-semibold text-gray-700 capitalize">{{ user.fullname }}</h1>
                                </div>
                                <p class="text-gray-700 text-sm my-1 capitalize">{{ user.profession_display }}</p>
                                <div class="flex items-center my-4">
                                    <img :src="this.url+'/uploads/icons/location.svg'" class="w-5 h-5">
                                    <p class="text-gray-600 text-sm mx-2">Currently in <span class="font-bold">{{this.user.city}}</span></p>
                                </div>
                            </div>  
                            <div class="my-4 p-2 member-contact">
                                <ul class="list-reset leading-loose">
                                    <li class="flex items-center py-1">
                                        <img :src="this.url+'/uploads/icons/phone.svg'" class="w-5 h-5">
                                        <p class="text-gray-600 text-sm mx-2">{{ user.mobile_no }}</p>
                                    </li>
                                    <li class="flex items-center py-1">
                                        <img :src="this.url+'/uploads/icons/mail.svg'" class="w-5 h-5">
                                        <p class="text-gray-600 text-sm mx-2" v-if="user.email != null">
                                            <a href="#">{{ user.email }} ( {{  user.email_verified }} )</a>
                                        </p>
                                        <p class="text-gray-600 text-sm mx-2" v-else>--</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="my-4">
                                <h1 class="admin-h1">About {{ user.fullname }}</h1>
                                <p class="text-xs leading-loose pr-1 my-2">{{ user.notes }}</p>
                            </div>
                            <div class="pt-3 border-t">
                                <a :href="this.url+'/admin/guest/show/'+this.guestname" class="text-blue-500 text-sm flex items-center">
                                    <span>View {{ user.fullname }}'s Full Detail</span>
                                    <img :src="this.url+'/uploads/icons/next.svg'" class="w-4 h-4 mx-2">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </portal>
    </div>
</template>

<script>

    import { bus } from "../../app";
    import PortalVue from "portal-vue";

    export default {
        props:['url'],
        data(){
            return{
                user:[],
                errors:[],
                success:null,
                guestname:null,
            }
        },

        created() 
        {
            //
            bus.$on("dataGuestName", data => {
                if(data!='')
                {
                    this.guestname=data;  
                    this.getData();
                }
            });

            bus.$on("datashowFilter", data => {
                if(data!='')
                {
                    this.disableform();
                }
            });
        },

        methods:
        { 
            disableform()
            {
                $('#show-guest-detail').removeClass('block').addClass('hide-menu');
            },

            getData()
            {
                axios.get('/admin/guest/show/details/'+this.guestname).then(response => {
                    this.user = response.data.data[0];
                    //console.log(this.user);   
                });
            } 
        }
    }
</script>

<style>
    .hide-menu {
        display: none;
    }
</style>
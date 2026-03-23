<template>
  <div>
  <div v-if="this.success!=null" class="alert alert-success" id="success-alert">{{this.success}}</div>

  <div class="tw-form-group w-full flex flex-wrap items-center">

    <div class="mb-2 w-24">
      <label class="tw-form-label">Search Member<span class="text-red-500">*</span></label>
    </div>
<div class="w-full lg:w-1/3 md:w-1/3 lg:mx-4 md:mx-4">
    <multiselect v-model="selectedUsers" id="ajax" dusk="search" label="fullname" track-by="fullname" placeholder="Type to search" open-direction="bottom" :options="users" :custom-label="customLabel" :show-labels="false" :multiple="true" :searchable="true" :loading="isLoading" :internal-search="true" :clear-on-select="false" :close-on-select="false" :options-limit="300" :limit="5" :limit-text="limitText" :max-height="600" :show-no-results="true" :hide-selected="true" @search-change="asyncFind">

        <template slot="tag" slot-scope="{ option, remove }">
          <span class="custom__tag">
            <span>{{ (option.fullname) }}</span>
            <span class="custom__remove" @click="remove(option)">❌</span>
          </span>
        </template>

        <template slot="clear" slot-scope="props">
          <div class="multiselect__clear" v-if="selectedUsers.length" @mousedown.prevent.stop="clearAll(props.search)"></div>
        </template>
        
        <template slot="option" slot-scope="props">
        <div class="flex">
          <img class="option__image w-10 h-10" :src="props.option.avatar">
          <div>
          <div class="option__desc">
            <span class="option__name">{{ props.option.fullname }}</span>
          </div>
          <div class="option__desc">
            <span class="option__small">{{ props.option.mobile_no }}</span>
          </div>
          </div>
          </div>
        </template>

        <span slot="noResult">Oops! No users found.</span>

    </multiselect>
    </div>

  </div>
<!--end-->
<!--start-->

<div class="my-3">
  <div class="flex flex-wrap items-center">
    <div class="w-24">
      <label class="tw-form-label">Member Role<span class="text-red-500">*</span></label>
    </div>
    <div class="w-full lg:w-1/3 md:w-1/3 lg:mx-4 md:mx-4 my-1 lg:my-0 md:my-0">
      <select v-model="role" class="repeats tw-form-control w-full" placeholder = "Select role" id="role">
        <option value="" disabled>Select Role</option>
        <option v-for="list in rolelist" :value="list.id">{{ list.name }}</option>
      </select> 
      <span v-if="errors.role"><p class="text-danger text-xs my-1">{{errors.role[0]}}</p></span>
    </div>
  </div>
</div>
<!--end-->
<!--start-->
  <div class="custom-table overflow-x-auto">
  <table class="w-full">
    <thead class="bg-grey-light">
      <tr class="border-t-2 border-b-2">
        <th class="text-left text-sm px-2 py-2 text-grey-darker">Modules</th>
        <th class="text-left text-sm px-2 py-2 text-grey-darker">Read</th>
        <th class="text-left text-sm px-2 py-2 text-grey-darker">Create</th>
        <th class="text-left text-sm px-2 py-2 text-grey-darker">Update</th>
        <th class="text-left text-sm px-2 py-2 text-grey-darker">View</th>
        <th class="text-left text-sm px-2 py-2 text-grey-darker">Delete</th>
      </tr>
    </thead>
    <tbody  class="bg-grey-light">
      <tr class="border-t-2 border-b-2">
        <td class="py-3 px-2"><p class="font-semibold text-xs">Members</p></td>
        <td class="py-3 px-2"><input type="checkbox" value="read-members" id="read-members" name="permissions" v-model="permissions"></td>
        <td class="py-3 px-2"><input type="checkbox" value="create-members" id="create-members" name="permissions" v-model="permissions"></td>
        <td class="py-3 px-2"><input type="checkbox" value="update-members" id="update-members" name="permissions" v-model="permissions"></td>
        <td class="py-3 px-2"></td>
        <td class="py-3 px-2"></td>
      </tr>
      <tr class="border-t-2 border-b-2"> 
        <td class="py-3 px-2"><p class="font-semibold text-xs">Events</p></td>
        <td class="py-3 px-2"><input type="checkbox" value="read-events" id="read-events" name="permissions" v-model="permissions"></td>
        <td class="py-3 px-2"><input type="checkbox" value="create-events" id="create-events" name="permissions" v-model="permissions"></td>
        <td class="py-3 px-2"><input type="checkbox" value="update-events" id="update-events" name="permissions" v-model="permissions"></td>
        <td class="py-3 px-2"></td>
        <td class="py-3 px-2"></td>
      </tr>
      <tr class="border-t-2 border-b-2"> 
        <td class="py-3 px-2"><p class="font-semibold text-xs">Gallery</p></td>
        <td class="py-3 px-2"><input type="checkbox" value="read-gallery" id="read-gallery" name="permissions" v-model="permissions"></td>
        <td class="py-3 px-2"><input type="checkbox" value="create-gallery" id="create-gallery" name="permissions" v-model="permissions"></td>
        <td class="py-3 px-2"><input type="checkbox" value="update-gallery" id="update-gallery" name="permissions" v-model="permissions"></td>
        <td class="py-3 px-2"></td>
        <td class="py-3 px-2"></td>
      </tr>
      <!-- <tr class="border-t-2 border-b-2"> 
        <td class="py-3 px-2"><p class="font-semibold text-xs">Files</p></td>
        <td class="py-3 px-2"><input type="checkbox" value="read-files" id="read-files" name="permissions" v-model="permissions"></td>
        <td class="py-3 px-2"><input type="checkbox" value="create-files" id="create-files" name="permissions" v-model="permissions"></td>
        <td class="py-3 px-2"></td>
        <td class="py-3 px-2"><input type="checkbox" value="view-files" id="view-files" name="permissions" v-model="permissions"></td>
        <td class="py-3 px-2"></td>
      </tr> -->
      <tr class="border-t-2 border-b-2"> 
        <td class="py-3 px-2"><p class="font-semibold text-xs">Videos</p></td>
        <td class="py-3 px-2"><input type="checkbox" value="read-videos" id="read-videos" name="permissions" v-model="permissions"></td>
        <td class="py-3 px-2"><input type="checkbox" value="create-videos" id="create-videos" name="permissions" v-model="permissions"></td>
        <td class="py-3 px-2"></td>
        <td class="py-3 px-2"><input type="checkbox" value="view-videos" id="view-videos" name="permissions" v-model="permissions"></td>
        <td class="py-3 px-2"></td>
      </tr>
      <!-- <tr class="border-t-2 border-b-2"> 
        <td class="py-3 px-2"><p class="font-semibold text-xs">Sermons</p></td>
        <td class="py-3 px-2"><input type="checkbox" value="read-sermons" id="read-sermons" name="permissions" v-model="permissions"></td>
        <td class="py-3 px-2"><input type="checkbox" value="create-sermons" id="create-sermons" name="permissions" v-model="permissions"></td>
        <td class="py-3 px-2"><input type="checkbox" value="update-sermons" id="update-sermons" name="permissions" v-model="permissions"></td>
        <td class="py-3 px-2"></td>
        <td class="py-3 px-2"><input type="checkbox" value="delete-sermons" id="delete-sermons" name="permissions" v-model="permissions"></td>
      </tr> -->
      <tr class="border-t-2 border-b-2"> 
        <td class="py-3 px-2"><p class="font-semibold text-xs">Bulletins</p></td>
        <td class="py-3 px-2"><input type="checkbox" value="read-bulletins" id="read-bulletins" name="permissions" v-model="permissions"></td>
        <td class="py-3 px-2"><input type="checkbox" value="create-bulletins" id="create-bulletins" name="permissions" v-model="permissions"></td>
        <td class="py-3 px-2"></td>
        <td class="py-3 px-2"><input type="checkbox" value="view-bulletins" id="view-bulletins" name="permissions" v-model="permissions"></td>
        <td class="py-3 px-2"></td>
      </tr>
      <tr class="border-t-2 border-b-2"> 
        <td class="py-3 px-2"><p class="font-semibold text-xs">Groups</p></td>
        <td class="py-3 px-2"><input type="checkbox" value="read-groups" id="read-groups" name="permissions" v-model="permissions"></td>
        <td class="py-3 px-2"><input type="checkbox" value="create-groups" id="create-groups" name="permissions" v-model="permissions"></td>
        <td class="py-3 px-2"><input type="checkbox" value="update-groups" id="update-groups" name="permissions" v-model="permissions"></td>
        <td class="py-3 px-2"></td>
        <td class="py-3 px-2"><input type="checkbox" value="delete-groups" id="delete-groups" name="permissions" v-model="permissions"></td>
      </tr>
      <tr class="border-t-2 border-b-2"> 
        <td class="py-3 px-2"><p class="font-semibold text-xs">Funds</p></td>
        <td class="py-3 px-2"><input type="checkbox" value="read-funds" id="read-funds" name="permissions" v-model="permissions"></td>
        <td class="py-3 px-2"><input type="checkbox" value="create-funds" id="create-funds" name="permissions" v-model="permissions"></td>
        <td class="py-3 px-2"><input type="checkbox" value="update-funds" id="update-funds" name="permissions" v-model="permissions"></td>
        <td class="py-3 px-2"><input type="checkbox" value="view-funds" id="view-funds" name="permissions" v-model="permissions"></td>
        <td class="py-3 px-2"></td>
      </tr>
      <tr class="border-t-2 border-b-2"> 
        <td class="py-3 px-2"><p class="font-semibold text-xs">Quotes</p></td>
        <td class="py-3 px-2"><input type="checkbox" value="read-quotes" id="read-quotes" name="permissions" v-model="permissions"></td>
        <td class="py-3 px-2"><input type="checkbox" value="create-quotes" id="create-quotes" name="permissions" v-model="permissions"></td>
        <td class="py-3 px-2"><input type="checkbox" value="update-quotes" id="update-quotes" name="permissions" v-model="permissions"></td>
        <td class="py-3 px-2"></td>
        <td class="py-3 px-2"></td>
      </tr>
      <!-- <tr class="border-t-2 border-b-2"> 
        <td class="py-3 px-2"><p class="font-semibold text-xs">Preachers</p></td>
        <td class="py-3 px-2"><input type="checkbox" value="read-preachers" id="read-preachers" name="permissions" v-model="permissions"></td>
        <td class="py-3 px-2"><input type="checkbox" value="create-preachers" id="create-preachers" name="permissions" v-model="permissions"></td>
        <td class="py-3 px-2"><input type="checkbox" value="update-preachers" id="update-preachers" name="permissions" v-model="permissions"></td>
        <td class="py-3 px-2"></td>
        <td class="py-3 px-2"></td>
      </tr> -->
      <tr class="border-t-2 border-b-2"> 
        <td class="py-3 px-2"><p class="font-semibold text-xs">Reports</p></td>
        <td class="py-3 px-2"><input type="checkbox" value="read-reports" id="read-reports" name="permissions" v-model="permissions"></td>
        <td class="py-3 px-2"></td>
        <td class="py-3 px-2"></td>
        <td class="py-3 px-2"><input type="checkbox" value="view-reports" id="view-reports" name="permissions" v-model="permissions"></td>
        <td class="py-3 px-2"></td>
      </tr>
      <tr class="border-t-2 border-b-2"> 
        <td class="py-3 px-2"><p class="font-semibold text-xs">Payments</p></td>
        <td class="py-3 px-2"><input type="checkbox" value="read-payments" id="read-reports" name="permissions" v-model="permissions"></td>
        <td class="py-3 px-2"><input type="checkbox" value="create-payments" id="create-payments" name="permissions" v-model="permissions"></td>
        <td class="py-3 px-2"></td>
        <td class="py-3 px-2"></td>
        <td class="py-3 px-2"></td>
      </tr>
    </tbody> 
  </table>
  </div>

  <div class="flex flex-wrap">
    <div class="block w-full lg:w-1/4 md:w-1/4 my-2 lg:mr-2" id="show-user" v-for="selectedUser in selectedUsers">
      <div class="shadow-md p-3">
        <div class="flex p-2">
          <div class="leading-loose my-1">
            <p class="text-sm font-semibold  text-gray-800 capitalize">
              <a :href="url+'/admin/member/show/'+selectedUser['name']">{{ selectedUser['fullname'] }}</a>
            </p>
            <a href="#" class="btn btn-primary submit-btn" id=add_user @click="addUser(selectedUser['id'])">Add</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>
</template>

<script>
  import Multiselect from 'vue-multiselect'
  // register globally
  Vue.component('multiselect', Multiselect)
  export default {
    props:['url' , 'church_id' , 'group_id'],
  components: {
    Multiselect
  },
  data () {
    return {
      selectedUsers: [],
      users: [],
      role:'',
      isLoading: false,
      permissions:[],
      memberlist:[],
      errors:[],
      success:null,
      rolelist:[{id : 'leader' , name : 'Leader'} , {id : 'president' , name : 'President'} , {id : 'secretary' , name : 'secretary'} , {id : 'treasurer' , name : 'Treasurer'} , {id : 'member' , name : 'Member'}],
    }
  },

  methods: 
  {
    getMember(query)
    {
      axios.get('/admin/group/showMember/'+this.group_id+'?'+query).then(response => {
        this.user = response.data;
        this.setData(query); 
      });
    },

    setData(query)
    {
      if(Object.keys(this.user).length>0)
      {
        this.users = this.user.memberlist;
        //console.log(this.users)
        this.isLoading = false;
      }
    },

    limitText (count) 
    {
      return `and ${count} other users`
    },

    customLabel ({ fullname, mobile_no }) 
    {
      return `${fullname} – ${mobile_no}`
    },

    clearAll () 
    {
      this.selectedUsers = []
    },

    asyncFind (query) 
    {
      //console.log(query);
      this.isLoading = true
      this.getMember(query);
    },

    disableUser()
    {
      $('#show-user').removeClass('block').addClass('hide-menu');
    },

    addUser(user_id)
    {
      this.errors=[];
      this.success=null;                 
              
      axios.post('/admin/group/addMember/'+this.group_id,{
                church_id: this.church_id,
                group_id: this.group_id,
                role:this.role,
                user_id:user_id,
                permissions:this.permissions
            }).then(response => {   
          this.success = response.data.success;
          this.disableUser();
        }).catch(error => {
          this.errors = error.response.data.errors;
        });
    },
  },

  created()
  {
    this.getMember();
  }
}

</script>

<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
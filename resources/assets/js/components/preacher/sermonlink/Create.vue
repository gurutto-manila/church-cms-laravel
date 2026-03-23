
<template>
 <!-- template for the modal component -->
 <div>

<div v-if="this.success!=null" class="alert alert-success" id="success-alert">{{this.success}}</div>
<div class="flex flex-row justify-between">
 <div class="">
   <h1 class="admin-h1 my-3">Series</h1>
 </div>
   
    <div class="flex items-center justify-end">
   <!-- <a href="#" class="no-underline text-white  px-4 my-3  flex items-center custom-green py-1" @click="createEvents()" id="create-event-modal"> -->
        <button class="btn btn-success blue-bg text-white rounded px-3 py-1 text-sm font-medium" @click="createSeries()" id="add">Add</button>

         
   
   </div>

</div>


<!--  <button class="btn btn-primary" @click="createEvents()" id="create-event-modal">Add</button> -->

  
    <div  v-if="this.showEvents">    
 
    <div class="modal-mask">
      <div class="modal-wrapper px-4">
   
        <div class="modal-container w-full  max-w-md px-8 mx-auto">
          <div class="modal-header flex justify-between items-center">
          <h2>Add Series</h2>
             <button class="modal-default-button text-2xl py-1"  @click="closeModal()">
                &times;
            </button>
          </div>


          <div class="modal-body">
            <div>
                <!-- start -->

               <div class="my-3">
        <div class="flex">
        <div class="w-1/4">
            <label class="tw-form-label ">Type</label>
        </div>
        <div class="w-full">
        <div class="flex flex-wrap">
        <div class="text-sm flex items-center">
         <input type="radio" v-model="type" id="audio"  value="audio"><span class="mr-4">Audio</span>
        </div>
          <div class="text-sm flex items-center mr-4"><input type="radio" v-model="type" id="video" value="video"><span class="mx-1">Video</span>
      </div>

       <div class="text-sm flex items-center mr-4"><input type="radio" v-model="type" id="document" value="document"><span class="mx-1">Document</span>
      </div>

      </div>
     <span v-if="errors.type"><p class="text-danger text-xs my-1">{{errors.type[0]}}</p></span>

      </div>
  </div>

</div>


    <div class="my-3">
    <div class="flex">
        <div class="w-1/4">
        <label for="location" class="tw-form-label">Location</label>
        </div>
        <div class="w-full">
        <input type="text"  v-model="location" id="location" placeholder="Include a place or address" class="tw-form-control w-full">
        <span v-if="errors.location"><p class="text-danger text-xs my-1">{{errors.location[0]}}</p></span>
        </div>
    </div>    
    </div>


    <div class="my-3">
        <div class="flex">
        <div class="w-1/4">
            <label for ="date" class="tw-form-label ">Date</label>
        </div>
        <div class="w-full text-sm">
            <input type="date" v-model="date" id="date" class="tw-form-control w-full">
           <span v-if="errors.date"><p class="text-danger text-xs my-1">{{errors.date[0]}}</p></span>
        </div>
        </div>
</div>

   
   <div class="my-3" v-if ="this.type!='document'">
       <div class="flex">
             <div class="w-1/4">
             <label class="tw-form-label ">Url</label>
             </div>
             <div class="w-full text-sm">
               <input type="text" v-model="url" id="url" class="tw-form-control w-full">
               <span v-if="errors.url"><p class="text-danger text-xs my-1">{{errors.url[0]}}</p></span>
            </div>
       </div>
   </div>

    <div class="my-3" v-if="this.type=='document'">
          <div class="flex">
                <div class="w-1/4">
                    <label class="tw-form-label">File</label>
                    </div>
                     <div class="w-full text-sm">
                     <input type="file"  @change="OnFileSelected" id="url" class="tw-form-control w-full">
                      <span v-if="errors.url"><p class="text-danger text-xs my-1">{{errors.url[0]}}</p></span>
                </div>
          </div>
     </div>

 <!-- end -->
  <!-- start -->

<div class="my-6">
 <button class="btn btn-primary blue-bg text-white rounded px-3 py-1 text-sm font-medium" @click="sendData()" id="submit">Submit</button>
 </div>
 <!-- end -->
 </div>           
  </div>
 </div>

</div>
          
        </div>
      </div>

   


</div>
</template>

<script >

export default {
       props:['sermons_id'],
    
    data() {

         return {
          sermon:[],
          type:'',
          location:'',
          date:'',
          url:'',
          showEvents:0,
          errors:[],
          success:null,
        }
    },

     methods:{

          createSeries()
            {
                this.showEvents=1;
            },
            

             sendData()
            {

              this.errors=[];
              this.success=null;    
              let formData=new FormData();
             
              formData.append('type',this.type);          
              formData.append('location',this.location);          
              formData.append('date',this.date);               
              formData.append('url',this.url);
              //console.log(this.errors[0]);
        axios.post('/preacher/links/'+this.sermons_id,formData,{headers: {'Content-Type': 'multipart/form-data'}}).then(response => {     
           this.success = response.data.success;
            this.closeModal();
            settimelimit(2000);
            window.location.reload();
          
        }).catch(error => {
          this.errors = error.response.data.errors;
        });
    },

    OnFileSelected(event)
      {
        this.url = event.target.files[0];
      },
     

 

    closeModal()
    {
     this.showEvents=0;
    },
},
    
  created()
  {
    
        //this.getData();
  }
 }

</script>
<style scoped>

.modal-mask {
  position: fixed;
  z-index: 9998;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, .5);
  display: table;
  transition: opacity .3s ease;
}

.modal-wrapper {
  display: table-cell;
  vertical-align: middle;
    overflow:auto;
}

.modal-container {
  margin: 0px auto;
  padding: 20px 30px;
  background-color: #fff;
  border-radius: 2px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, .33);
  transition: all .3s ease;
  height: auto;
  overflow:auto;
}

.modal-header h3 {
  margin-top: 0;
  color: #42b983;
}

.modal-body {
  margin: 20px 0;
}

.modal-default-button {
  float: right;
}

/*
 * The following styles are auto-applied to elements with
 * transition="modal" when their visibility is toggled
 * by Vue.js.
 *
 * You can easily play with the modal transition by editing
 * these styles.
 */

.modal-enter {
  opacity: 0;
}

.modal-leave-active {
  opacity: 0;
}

.modal-enter .modal-container,
.modal-leave-active .modal-container {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}

.text-danger
{
  color:red;
}
</style>







   

  

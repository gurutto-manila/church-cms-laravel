<template>
<div>
<div v-if="this.success!=null" class="alert alert-success" id="success-alert">{{this.success}}</div>
  <div v-bind:class="[isphotos==1?'block':'hidden']">
  <GallerySlider  :url="this.url" :gallery_id="this.gallery_id"></GallerySlider>
  </div>
  <div>
   <VueUploadMultipleImage
          @upload-success="uploadImageSuccess"
          @before-remove="beforeRemove"
          @edit-image="editImage"
          @data-change="dataChange"
          @limit-exceeded="limitExceeded"
          ></VueuploadMultipleImage> 

          <div class="my-2">
          <input type="submit" class="btn btn-primary submit-btn cursor-pointer w-full" name="submit" value="Submit" id="submit" @click="saveImage()">
        </div>
 
    <div>
   <!--  <h1 class="admin-h1 mt-8 px-2">Photos({{Object.keys(this.photos).length}})</h1> -->
    <div class="flex flex-wrap" @click="openimage(image['path'])" v-for="image in gallery">
    
    </div>
    </div>

    <!-- start -->
    <div id="myModal" class="modal">
      <span class="close">&times;</span>
      <img class="modal-content" id="img01">
      <div id="caption"></div>
      </div>
    <!-- end -->
</div>
</div>

</template>
<script>
   import { bus } from "../../app";
   import GallerySlider from './GallerySlider'
   import  VueUploadMultipleImage from '../VueUploadMultipleImage'
import Loading from 'vue-loading-overlay';
/*  import 'vue-loading-overlay/dist/vue-loading.css';*/
   export default {
     props:['url','name','gallery_id'],
   data () {
         return {
               isphotos:0,
               photos:[],
               image:[],
               gallery:[],
              success:null,
              errors:[],
              isLoading: false,
              fullPage: true,
    
             }
           },
    components: {
       GallerySlider,
       VueUploadMultipleImage,
      Loading,
    },
    methods: {


      getData()
      {

        //alert('jhg');
        axios.get('/admin/gallery/details/'+this.gallery_id).then(response => {
           this.gallery = response.data.data;
           //console.log(this.gallery);
           });
      },
   openimage(src)
    { 

     var modalImg = document.getElementById("img01");
//var captionText = document.getElementById("caption");
  modal.style.display = "block";
  modalImg.src = src;
  this.closeModal();
  //captionText.innerHTML = this.alt;

},
// Get the <span> element that closes the modal
//var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
//span.onclick = function() { 
  closeModal()
  {

    var modal = document.getElementById("myModal");

    modal.style.display = "none";
},

 uploadImageSuccess(formData, index, fileList) {
     this.image = fileList;
    },

      saveImage(val)
    {
      this.isLoading = true;
      let formData = new FormData();
      axios.post('/admin/gallery/upload/photos/'+this.gallery_id,{ data: this.image }).then(response => {
        this.success = response.data.message;
        //window.setTimeout(window.location.href = '/admin/gallery/'+this.gallery_id,10000);
         bus.$emit("photoadded","photouploaded");
       if(this.success=="Uploaded Successfully"){
          //window.setTimeout(window.location.href = "/admin/gallery/"+this.gallery_id,5000);
           this.isLoading=false;
         }
        else
        {
          this.success = response.data.message;
          this.isLoading=false;
        }
      });
    },


     beforeRemove (index, done, fileList) {
      console.log('index', index, fileList)
      var r = confirm("remove image")
      if (r == true) {
        done()
      } else {
      }
    },
    editImage (formData, index, fileList) {
      console.log('edit data', formData, index, fileList)
    },
    dataChange (data) {
      console.log(data)
    },
    limitExceeded(amount){
      console.log(amount)
    },
    onCancel() 
    {
      console.log('User cancelled the loader.')
    },

 

  },

  created()
  {

    //alert('hffhj');

     bus.$on("galleryCount",data => {
      //alert(data);
      if(data>0)
      {
        this.isphotos=1;

      }
      
    });

     bus.$on('limit-exceeded',data => {
      //alert(data);
    
      this.errors['count']='Count Exceeded';
      console.log(this.errors['count']);

      //this.count='';
      //console.log(this.count);
   
    });
    },

    }
  

</script>

<style>
.gallery-img {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

.gallery-img:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>
@endsection
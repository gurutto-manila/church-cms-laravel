<template>
    <div class="bg-white shadow px-4 py-3 my-3">
        <div v-if="this.success!=null" class="alert alert-success" id="success-alert">{{this.success}}</div>

        <div class="flex flex-col -mx-2 mb-8">
        <div class="w-full lg:w-1/2 px-2"> <!-- basic start -->
        <div class="my-6">
            <div class="px-2">
                <img :src="this.cover_image_display" class="img-responsive w-32 h-32">
                <div class="mx-2">
                    <label class="tw-label cursor-pointer text-xs text-gray-600"> Change Cover Photo<span class="text-red-500">*</span>
                        <input type="file" size="60" name="cover_image" id="cover_image" @change="OnFileSelected">
                    </label> 
                </div>
                <span v-if="errors.cover_image" class="text-red-500 text-xs font-semibold">{{errors.cover_image[0]}}</span>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row w-full">
            <div class="tw-form-group w-full lg:w-3/4">
                <div class="lg:mr-8 md:mr-8 px-2">
                    <div class="mb-2">
                        <label for="page_name" class="tw-form-label">Page Name<span class="text-red-500">*</span></label>
                    </div>
                    <div class="mb-2">
                        <input type="text" class="tw-form-control w-full" id="page_name" v-model="page_name" name="page_name" Placeholder="Page Name" :maxlength="25">
                        <div class="text-gray-700 text-xs my-1" v-text="(25 - page_name.length)+'/'+25" style="text-align: right"></div>
                    </div>
                    <span v-if="errors.page_name" class="text-red-500 text-xs font-semibold">{{errors.page_name[0]}}</span>
                </div> 
            </div>
        </div>

        <div class="flex flex-col lg:flex-row w-full">
            <div class="tw-form-group w-full lg:w-3/4">
                <div class="lg:mr-8 md:mr-8 px-2">
                    <div class="mb-2">
                        <label for="category" class="tw-form-label">Category<span class="text-red-500">*</span></label>
                    </div>
                    <div class="mb-2">
                        <select v-model="category" name="category" id="category" class="tw-form-control w-full">
                            <option value="" disabled>Select Category</option>
                            <option v-for="item in categorylist" v-bind:value="item.id">{{ item.display_name }}</option>
                        </select>
                    </div>
                    <span v-if="errors.category" class="text-red-500 text-xs font-semibold">{{errors.category[0]}}</span>
                </div> 
            </div>
        </div>
         </div>

        <div class="w-full lg:w-3/4 px-2"> <!-- description start -->
        <div class="w-full"> <!-- flex flex-col lg:flex-row  -->
            <div class="tw-form-group w-full lg:w-full">
                <div class="lg:mr-8 md:mr-8 px-2">
                    <div class="mb-2">
                        <label for="description" class="tw-form-label">Description<span class="text-red-500">*</span></label>
                    </div>
                    <div class="mb-2">
                    <div>
                        <input type="hidden" v-if="this.description != null" name="description" :value="this.description">
                        <trix-editor v-model="description" name="description" input="x"></trix-editor>
                        </div>
                    </div>
                        <!-- <div class="text-gray-700 text-xs my-1" v-text="(500 - description.length)+'/'+500" style="text-align: right"></div> -->
                    </div>
                    <span v-if="errors.description" class="text-red-500 text-xs font-semibold">{{errors.description[0]}}</span>
                </div> 
            </div>
        
        <input type="hidden" v-if="this.description != null" name="description" :value="this.description">
        </div> </div>
        <div class="mb-6 px-2">
            <a href="#" dusk="submit-btn" class="btn btn-primary submit-btn" @click="submitForm()">Submit</a>
            <a href="#" class="btn btn-reset reset-btn" @click="resetForm()">Reset</a>
        </div>
    </div>
</template>

<script>
    export default {
        props:['url' , 'id' , 'mode'],
        data(){
            return {
                page:[],
                page_name:'',
                description:'',
                category:'',
                cover_image:'',
                cover_image_display:'',
                option:{
                    theme: 'snow',
                    modules: {
                        toolbar: [
                            ['bold', 'italic', 'underline'],
                            [{ 'list': 'ordered' }, { 'list': 'bullet' }]
                        ]
                    },
                    placeholder: '', 
                },
                categorylist:[],
                errors:[],
                success:null,
            }
        },

        methods:
        {
            getData()
            {
                axios.get(this.url+'/'+this.mode+'/page/editList/'+this.id).then(response => {
                    this.page = response.data;
                    this.setData();
                });

                axios.get(this.url+'/'+this.mode+'/pageCategory/list').then(response => {
                    this.categorylist = response.data.data;
                });
            },

            setData()
            {
                if(Object.keys(this.page).length > 0)
                {
                    this.page_name            = this.page.page_name;
                    this.description          = this.page.description;
                    this.category             = this.page.category;
                    this.cover_image_display  = this.page.cover_image;

                    var element = document.querySelector("trix-editor");
                    element.editor.insertHTML(this.page.description); 
                }
            },

            submitForm()
            {
                this.errors=[];
                this.success=null;

                let formData=new FormData(); 
                var element = document.querySelector("trix-editor");
                this.description = element.innerHTML; 
                formData.append('page_name',this.page_name);          
                formData.append('category',this.category);
                formData.append('description',this.description);          
                formData.append('cover_image',this.cover_image);

                axios.post(this.url+'/'+this.mode+'/page/edit/'+this.id,formData,{headers: {'Content-Type': 'multipart/form-data'}}).then(response => {     
                    this.success = response.data.success;
                    window.location.reload();
                }).catch(error => {
                    this.errors = error.response.data.errors;
                });
            },

            OnFileSelected(event)
            {
                this.cover_image = event.target.files[0];
            },
        },
      
        created()
        {
            this.getData();
        }
    }
</script>

<style scoped>
    .tw-label{
        color:#3492e2;
    }
    .tw-label input[type="file"] {
        display: none;
    }
    .quill-editor {
    width: 100% !important;
    }
</style>
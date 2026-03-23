<template>
    <div class="relative">
        <div v-if="this.success!=null" class="alert alert-success" id="success-alert">{{this.success}}</div>
        <div class="">
            <div class="flex-wrap custom-table overflow-auto">
                <div class="flex flex-wrap">
                    <table class="w-full">
                        <thead class="border-t-2 border-b-2">
                            <tr class="border-t-2 border-b-2">
                                <th class="text-left text-sm px-2 py-2 text-grey-darker" width="30%">Category Name</th>
                                <th class="text-left text-sm px-2 py-2 text-grey-darker" width="20%">Question</th>
                                <th class="text-left text-sm px-2 py-2 text-grey-darker" width="20%">Answer</th>
                                <th class="text-left text-sm px-2 py-2 text-grey-darker" width="15%">Order</th>
                                <th class="text-left text-sm px-2 py-2 text-grey-darker" width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-grey-light" v-if="Object.keys(faqs).length > 0">
                            <tr class="border-t-2 border-b-2" v-for="faq in faqs">
                                <td class="py-3 px-2">{{ faq.category }}</a></td>
                                <td class="py-3 px-2">{{ trim(faq.question) }}</td>
                                <td class="py-3 px-2" v-html="trim(faq.answer)">{{ faq.answer }}</td>
                                <td class="py-3 px-2">{{ faq.order }}</td>
                                <td class="py-3 px-2">
                                    <a :href="url+'/admin/faq/show/'+faq.id" class="capitalize text-white blue-bg rounded px-2 py-1 font-medium" target="_blank">View</a>
                                    <a :href="url+'/admin/faq/edit/'+faq.id" class="capitalize text-white blue-bg rounded px-2 py-1 font-medium" target="_blank">Edit</a>
                                    <a href="#" class="capitalize text-white bg-red-500 rounded px-2 py-1 font-medium" @click="deleteFaq(faq.id)">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                        <tbody v-else>
                            <tr class="border-t-2 border-b-2">
                                <td colspan="5" style="text-align: center;">No records found</td>
                            </tr>
                        </tbody>
                    </table>

                    <div v-if="this.page_count > 1">
                        <paginate v-model="page" :page-count="this.page_count" :page-range="3" :margin-pages="1" :click-handler="getData" :prev-text="'<'" :next-text="'>'" :container-class="'pagination'" :page-class="'page-item'" :prev-link-class="'prev'" :next-link-class="'next'"></paginate>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
 
<script>
    export default {
        props:['url'],
        data () {
            return {
                faqs: [],
                success:null,
                errors:[],
                total: 0,
                page: 1,
                page_count: 0,
            }
        },

        methods:
        {
            getData(page=1)
            {
                axios.get('/admin/faq/list'+'?page='+page).then(response => {
                    this.faqs = response.data.data;
                    this.page_count = response.data.meta.last_page;
                    this.total = response.data.meta.total;
                });
            },

            trim(string) 
            {
                return string.substring(0,75) + '...';
            },

            deleteFaq(id) 
            {
                var thisswal = this;
                swal({
                    title: 'Are you sure',
                    text: 'Do you want to delete this Faq ?',
                    icon: "info",
                    buttons: [
                        'No',
                        'Yes'
                    ],
                    dangerMode: true,
                }).then(function(isConfirm) {
                    if (isConfirm) 
                    {
                        axios.get(thisswal.url+ '/admin/faq/delete/'+ id).then(response => {
                            thisswal.success = response.data.success;
                            window.location.reload();
                        }); 
                    }
                    else 
                    {
                        swal("Cancelled");
                    }
                });
            },
        },

        created () 
        {
            this.getData();
        }
    }
</script>
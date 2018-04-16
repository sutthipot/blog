<template>
    <div class="col-12 col-md-9">
        <div class="border bg-white rounded border-success pt-2 pb-2 mb-3" v-for="lists in lists">
            <div class="col-12 border-success list-inline" style="border-left: 5px solid;">
                <h4><span class="badge badge-secondary">ID</span> <div class="list-inline-item text-muted">{{lists.id}}</div></h4>
                <h5><span class="badge badge-secondary">Description</span> <div class="list-inline-item text-muted">{{lists.description}}</div></h5>
                <h6>
                    <span class="badge badge-secondary">Latitude</span> <div class="list-inline-item text-muted">{{lists.latitude}}</div>
                    <span class="badge badge-secondary">Longitude</span> <div class="list-inline-item text-muted">{{lists.longitude}}</div>
                </h6>
                <div class="w-100 list-inline">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#EditModal" @click="modelshow(lists)">Edit</button>
                </div>
            </div>
        </div>

        <div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="w-100 d-flex justify-content-center">
                            <h4><span class="badge badge-secondary">ID</span> <div class="list-inline-item text-muted">{{this.listid}}</div></h4>
                        </div>
                        <input type="text" class="form-control mt-3" placeholder="Description" aria-label="Description" v-model="des" aria-describedby="basic-addon1">
                        <input type="text" class="form-control mt-3" placeholder="Latitude" aria-label="Latitude" v-model="lat" aria-describedby="basic-addon1">
                        <input type="text" class="form-control mt-3" placeholder="Longitude" aria-label="Longitude" v-model="long" aria-describedby="basic-addon1">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal" @click="editsave()">Save And Confirm</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        name: "list-two-component",
        data () {
            return{
                lists : [],
                listid: 0,
                des: '',
                lat: '',
                long: ''
            }
        },
        methods: {
            loadlist: function (event) {
                axios.get('/api/garageregisters/admin/list/1').then((response)=>{
                    if(response.data.length > 0){
                        this.lists = response.data
                    }else{
                        this.lists = []
                    }
                }).catch((error)=>{
                    console.log(error.response.data)
                });
            },
            modelshow: function(lists){
                this.listid = lists.id
                this.des = lists.description
                this.lat = lists.latitude
                this.long = lists.longitude
            },
            editsave:function(){
                axios.post('api/garageregisters/admin/edit/'+this.listid,{des:this.des,lat:this.lat,long:this.long}).then((response)=>{
                    console.log(response)
                    if(response.data == '1'){
                        swal({
                            position: 'top-end',
                            type: 'success',
                            title: 'Your work has been saved',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        this.loadlist()
                    }else{
                        swal({
                            position: 'top-end',
                            type: 'error',
                            title: 'Error save',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }
                }).catch((error)=>{
                    console.log(error.response.data)
                });
            }
        },
        mounted(){
            this.loadlist()
        }
    }
</script>

<style scoped>

</style>
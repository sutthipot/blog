<template>
    <div class="bg-cover" style="background-color: #000;height: 600px;overflow: hidden;background-image: url('images/bg-1a1.png')">
    <div class="container">
        <div>
            <component :is="currentView"></component>
        </div>

        <div class="w-100 text-center text-white list-inline mt-5">
            <h3 class="font-weight-bold list-inline-item">Welcome</h3> <h5 class="list-inline-item">Parking place Car</h5>
        </div>
        <div class="w-100 d-flex justify-content-center mt-5 mb-5">
            <div class="card col-10 col-md-6">
                <div class="card-body">
                    <h4 class="card-title">Login</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Administrator Control {{ $route.params.id }}</h6>
                    <div class="w-100 mt-3">
                        <input type="text" v-model="txtuser" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="w-100 mt-3">
                        <input type="password" v-model="txtpass" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                    </div>
                    <div class="w-100 mt-3">
                        <button type="button" class="btn btn-danger w-100" v-on:click="login">Sign now <i class="fas fa-angle-double-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100 d-flex justify-content-center mt-5 mb-5 text-white">
            <div class="col-6 text-center list-inline">
                <h1 class="list-inline-item"><i class="fab fa-facebook-square "></i></h1>
                <h1 class="list-inline-item"><i class="fab fa-youtube list-inline-item"></i></h1>
            </div>
        </div>
    </div>
    </div>
</template>

<script>
    import Vue from 'vue'; // Importing Vue Library
    import home from './HomeComponent.vue'
    Vue.component('logincomponent', home);

    export default {
        name: 'test',
        data () {
            return {
                txtuser: '',
                txtpass: '',
                currentView: null
            }
        },
        created: function() {

        },
        methods: {
            login: function (event) {
                axios.post('/api/login',{user:this.txtuser,pass:this.txtpass
                }).then((response)=>{
                    console.log(response)
                    if(response.data.length > 0){
                        //alert("login ok")
                        //this.currentView = 'logincomponent'
                        window.location.href = '/home'
                    }else{
                        alert('login false')
                    }
                }).catch((error)=>{
                    console.log(error.response.data)
                });
            }
        }
            //console.log('Component mounted.')
            // noinspection JSAnnotator
    }
</script>

<style scoped>

</style>
<template>
    <div class="container">
        <div class="row mt-3 d-flex justify-content-center">
            <div class="col-12 d-flex justify-content-center">
                <div class="text-center border bg-white rounded pt-3 p-2 pr-4 pl-4 hover d-inline-flex" @click="listoneshow()">
                    <h1><i class="fas fa-align-center"></i></h1>
                </div>
                <div class="text-center border bg-white rounded pt-3 p-2 pr-4 pl-4 ml-2 hover d-inline-flex" @click="listtwoshow()">
                    <h1><i class="fas fa-clipboard-check"></i></h1>
                </div>
                <div class="text-center border bg-white rounded pt-3 p-2 pr-4 pl-4 ml-2 hover d-inline-flex" @click="logout()">
                    <h1><i class="fas fa-sign-out-alt"></i></h1>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 d-flex justify-content-center">
                <component :is="currentView"></component>
            </div>
        </div>
    </div>
</template>

<script>
    import Vue from 'vue'; // Importing Vue Library
    import list1 from './ListOneComponent'
    import list2 from './ListTwoComponent'
    Vue.component('listonecomponent', list1);
    Vue.component('listtwocomponent', list2);

    export default {
        name: "home-component",
        data () {
            return {
                test:i_var,
                currentView: 'listonecomponent'
            }
        },
        methods: {
            listoneshow:function(){
                this.currentView = 'listonecomponent'
            },
            listtwoshow:function(){
                this.currentView = 'listtwocomponent'
            },
            logout(){
                window.location.href = '/login'
            }
        }
    }
</script>

<style scoped>

</style>
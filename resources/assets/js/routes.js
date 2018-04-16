import Vue from 'vue'
import VueRouter from 'vue-router'
import login from './components/LoginComponent.vue';
import home from './components/HomeComponent.vue';

let routes=[
    {
        path:'/login',
        component: login
    },
    {
        path:'/login/:id',
        component: login
    },
    {
        path:'/home',
        component: home
    }
];


export default new VueRouter({
    hashbang: false,
    history: true,
    mode: 'history',
    routes
})
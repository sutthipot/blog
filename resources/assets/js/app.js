
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue'; // Importing Vue Library
import VueRouter from 'vue-router';
import router from './routes';

Vue.use(VueRouter)

var token = document.head.querySelector('meta[name="csrf-token"]');
window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;

//import login from './components/LoginComponent.vue'

//const NotFound = { template: '<p>Page not found</p>' }

//import login from './components/LoginComponent'

new Vue({
    el: '#app',
    router
});

// const routes = {
//     '/login': login
// }

// new Vue({
//     el: '#app',
//     data: {
//         currentRoute: window.location.pathname
//     },
//     computed: {
//         ViewComponent () {
//             return routes[this.currentRoute] || NotFound
//         }
//     },
//     render (h) { return h(this.ViewComponent) }
// })


//import Example from './components/LoginComponent.vue'

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Vue.component('example-component', require('./components/ExampleComponent.vue'));
// Vue.component('logincomponent', Example);
//
// const login = new Vue({
//     el: '#app'
// });



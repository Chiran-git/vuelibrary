/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'
Vue.use(VueRouter)

import BootstrapVue from 'bootstrap-vue/dist/bootstrap-vue.esm';
// Import the styles directly. (Or you could add them via script tags.)
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';
Vue.use(BootstrapVue);

// VueToastr
import VueToastr from "vue-toastr";

Vue.use(VueToastr, {
    defaultTimeout: 5000,
    defaultClassNames: ["animated", "zoomInUp"]
});

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('index', require('./components/Index.vue').default);

const routes = [{
        path: '/libraries',
        component: require('./components/pages/EmptyLibraryView').default,
        children: [{
                path: "",
                component: require('./components/pages/Home').default,
            },
            {
                path: "add",
                component: require('./components/pages/AddLibrary').default,
            },
            {
                path: ':id',
                component: require('./components/pages/Library').default,
            },
        ]
    },
    {
        path: '/books/add',
        component: require('./components/pages/AddBook').default,
    },
    {
        path: '/books/:id',
        component: require('./components/pages/Book').default,
    },
];

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const router = new VueRouter({
    routes
});

const app = new Vue({
    el: '#app',
    router,
});


$(".btn-refresh").click(function () {
    $.ajax({
        type: 'GET',
        url: `${CP.baseUrl}/refresh_captcha`,
        success: function (data) {
            $(".captcha span").html(data.captcha);
        }
    })
})

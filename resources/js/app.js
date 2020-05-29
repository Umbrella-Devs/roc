require('./bootstrap');
window.Vue = require('vue');

import VueRouter from 'vue-router'
import vuetify from './vuetify'

import CoolLightBox from 'vue-cool-lightbox'
import 'vue-cool-lightbox/dist/vue-cool-lightbox.min.css'

Vue.use(CoolLightBox)



/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

Vue.use(VueRouter)
window.Vue = require('vue');

import App from './Components/App.vue'
import About from './Components/Pages/About.vue'
import Home from './Components/Pages/Home.vue'
import Activites from './Components/Pages/Activities.vue'
import Projects from './Components/Pages/Projects.vue'
import Gallery from './Components/Pages/Gallery.vue'
import Donate from './Components/Pages/Donate.vue'
import Join from './Components/Pages/JoinUs.vue'
import Blog from './Components/Pages/Blog.vue'
import singleProject from './Components/Pages/Projects/singleProject.vue'
import birdTrack from './Components/Pages/Projects/birdTrack.vue'
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {path: '/', name: 'home', component: Home,},
        {path: '/about', name: 'about', component: About,},
        {path: '/activities', name: 'activity', component: Activites,},
        {path: '/projects', name: 'projects', component: Projects,},
        {path: '/gallery', name: 'gallery', component: Gallery,},
        {path: '/donate', name: 'donate', component: Donate,},
        {path: '/join-us', name: 'join', component: Join,},
        {path: '/blog', name: 'blog', component: Blog,},
        {path: '/projects/:slug', name: 'singleProject', component: singleProject,},
        {path: '/project/bird-tracking', name: 'birdTrack', component: birdTrack,},
    ],
});
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    components: { App,About,Activites,Projects,Gallery,Home,Donate,Join,Blog,singleProject,birdTrack },
    router,
    vuetify,
});
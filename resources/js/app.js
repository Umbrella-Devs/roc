require('./bootstrap');
window.Vue = require('vue');

import VueRouter from 'vue-router'
import vuetify from './vuetify'



Vue.use(VueRouter)

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
        {path: '/join-us', name: 'blog', component: Blog,},
        {path: '/projects/:slug', name: 'singleProject', component: singleProject,},
        {path: '/project/bird-tracking', name: 'birdTrack', component: birdTrack,},
    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
    vuetify,
});

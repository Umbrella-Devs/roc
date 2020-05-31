<template>
    <div>
        <div>
            <div class="w-100">
                <div class="bg w-100 xs:h-px-300-i">
                    <div class="flex w-100 "></div>
                    <div class="mx-auto w-90 xs:mt-16" style=" margin-top: 120px;">
                        <div class="w-100 flex">
                            <div class="xl:w-5 md:w-5 xs:w-10 pt-5 relative">
                                <div class="xl:w-30 md:w-60 xs:w-60">
                                    <div class="line"></div>
                                    <a href="https://web.facebook.com/" target="_blank">
                                        <div class="-ml-3 my-2">
                                            <img src="/img/svg/whitefb.svg" alt="">
                                        </div>
                                    </a>
                                    <a href="https://web.facebook.com/" target="_blank">
                                        <div class="-ml-3 my-4">
                                            <img src="/img/svg/whiteig.svg" alt="">
                                        </div>
                                    </a>
                                    <a href="https://web.facebook.com/" target="_blank">
                                        <div class="-ml-3 my-2">
                                            <img src="/img/svg/whitetwi.svg" alt="">
                                        </div>
                                    </a>
                                    <div class="line"></div>
                                    <div>
                                    </div> 
                                </div>
                                
                            </div>
                            <div class="xl:w-75 md:w-70 xs:w-85 pt-5"
                            data-aos="fade-down"
                            data-aos-duration="1500">
                                <div class="text-white xs:pt-5 md:pt-5">
                                    <div>
                                        <h1 class="xs:text-5xl" style="font-size:100px;">Rugezi</h1>
                                    </div>
                                    <div class="xs:mt-0 xs:ml-0" style="margin-top:-28px; margin-left:170px;">
                                        <span>Ornithology Center</span>
                                    </div>
                                    <div class="xl:w-60 xs:w-100 py-2 pb-3"> 
                                        <p class="xl:text-lg md:text-lg xs:text-sm">
                                            Rugezi Ornithology Center is birders community, which intends to promote birdwatching in Rwanda and ensure sustainable conservation of birds in their habitats.
                                        </p>
                                    </div>
                                    <div class="flex xl:w-40 md:w-50 relative z-999">
                                        <div class="xs:w-50 w-50 mx-1">
                                            <button class="btn xs:w-100 w-100 xl:px-5 border-white text-orange xl:mr-2">
                                                <a class="text-white no-underline" href="#activity">Explore </a>
                                            </button>
                                        </div>
                                        <div data-app class="xs:w-50 mx-1 w-50">
                                            <Popup/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xl:w-20 md:w-25 xs:hidden">
                                
                            </div>
                        </div>
                    </div>
                    <div class="w-100 md:hidden flex -mt-24 xs:hidden">
                        <div class="w-50">

                        </div>
                        <div>
                            <div class="pb-2">
                                <h2 class="text-white text-2xl">Gallery</h2>
                            </div>
                            <div class="grid grid-4">
                                <div class="mr-3"
                                data-aos="fade-up"
                                data-aos-duration="1500">
                                    <v-img class="rounded shadow-md" src="/img/IMG_8805.jpg" height="190" width="150"></v-img>
                                </div>
                                <div class="mr-3"
                                data-aos="fade-up"
                                data-aos-duration="1500">
                                    <v-img class="rounded shadow-md" src="/img/IMG_8827.jpg" height="190" width="150"></v-img>
                                </div>
                                <div class="mr-3"
                                data-aos="fade-up"
                                data-aos-duration="1500">
                                    <v-img class="rounded shadow-md" src="/img/IMG_2004.jpg" height="190" width="150"></v-img>
                                </div>
                                <div class="mr-3"
                                data-aos="fade-up"
                                data-aos-duration="1500">
                                    <v-img class="rounded shadow-md" src="/img/IMG_1973.jpg" height="190" width="150"></v-img>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white-smoke relative mx-auto pt-5" id="activity">
            <div class="xl:py-5 xs:py-2 text-centered text-grey-darkest">
                <h2 class="text-3xl xs:text-2xl">Our Special Activities</h2>
            </div>
            <div>
                <div class="w-90 mx-auto py-3">
                    <div class="w-100 grid xl:grid-3 md:grid-2  mb-12 " style="">
                        <div class="md:mx-2" v-for="activity in activities" :key="activity.id" data-aos="zoom-in" data-aos-duration="2000">
                            <a :href="activity.href" class="no-underline">
                                <div class="w-100 mx-5">
                                    <div class="">
                                        <v-avatar class="bg-orange-dark shadow-lg" size="60">
                                            <div class="w-80">
                                                <img :src="activity.svg" alt="svg-icon">
                                            </div>
                                        </v-avatar>
                                    </div>
                                </div>
                                <div class="bg-white pb-4 -mt-6 shadow-sm mb-3 xl:mr-4 pt hover:shadow-md" 
                                    style="border-radius: 40px 0px 40px 0px; padding-top: 0px;">
                                    <div class=" text-grey-darkest">
                                        <h2 class="text-xl px-5 pt-8 pb-3">{{activity.head}}</h2>
                                        <p class="px-5 text-sm">{{activity.body}}</p>
                                    </div>
                                        <!-- <div class="text-centered">
                                            <button class="bg-orange-dark py-1 px-2 mb-2 text-sm text-white">
                                                <router-link :to="{name: 'activity'}" class="no-underline">
                                                    <span class="text-white">Read More</span>
                                                </router-link>
                                            </button>
                                        </div> -->
                                </div>
                            </a>
                        </div>     
                    </div> 		
                </div>
            </div>
        </div>
        <div class="w-100 bg-green-darkest py-5 ">
            <div class="w-90 mx-auto py-5">
                
                <div class="w-100 xs:block flex pt-2 pb-2">
                    <div class="w-50 xs:w-100 xl:mx-2" style="margin-top: 0px" data-aos="fade-right" data-aos-duration="2000">
                         <v-img src="/img/IMG_1600.jpg" class="w-100"></v-img>
                    </div>
                    <div class="w-50 xs:w-100 mx-2 my-auto" data-aos="fade-left" data-aos-duration="2000">
                        <div class="pt-2">
                            <h2 class="text-white xl:text-3xl md:text-2xl xs:text-2xl text-center ">Who are we?</h2>
                        </div>
                        <div class="text-center pt-2">
                            <p class="text-white xs:text-sm">
                           Rugezi Ornithology Center is birders community, which intends to promote birdwatching in Rwanda and ensure sustainable conservation of birds in their habitats.
                        </p>
                        <div class="py-3 text-center">
                            <button class="border-orange-dark w-35 btn text-sm text-white">
                                <a class="no-underline text-white" href="/join-us">Join Us</a>
                            </button>
                        </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div>
            <!-- <div class="w-100 bg-green-darker bg-pjt"> </div>
            <div class="opacity bg-green-darker opacity-80"></div> -->
            <div class="bg-pjt w-100  mx-auto xs:py-5">
                <div class="py-5">
                    <div class="pl-2 xl:py-5">
                        <h2 class="text-center xl:text-3xl xs:text-2xl text-white">Our Blog</h2>
                    </div>
                    <div class="py-5">
                        <div class="w-100 text-grey-darkest">
                            <div class="w-90 xs:block flex mx-auto">
                                <div class="w-5 xs:hidden"></div>
                                <div class="bg-white xl:w-30 md:w-30 md:mx-1 xs:w-100 xl:mx-3 xs:my-2 shadow-md" 
                                    v-for="post in posts" :key="post" 
                                    data-aos="zoom-in" data-aos-duration="2000">
                                    <div class="">
                                        <v-img :src="'/storage/' + post.image" width="100%" height="200"></v-img>
                                    </div>
                                    <div class="xs:pb-2">
                                        <div class="py-2">
                                            <h4 class="text-xs text-right px-2 text-orange-dark">Fri, May 23, 2020</h4>
                                        </div>
                                        <div class="px-4">
                                            <h3 class="text-sm py-2">{{post.title}}</h3>
                                            <p class="text-sm">{{post.excerpt | snippet}}</p>
                                        </div>
                                        <div class="text-right mx-5 mb-4">
                                            <button class="">
                                                <a :href="'/post/'+ post.id"  class="text-sm text-black btn border-orange-darker">Read More</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-5 xs:hidden"></div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>
<script>
import Popup from './Popup.vue'

export default {
    components:{Popup},
    data(){
        return{
            posts:[],
            activities:[
                {id:'1', head:'Education', slug:'education', body:'We are dedicated to providing young African birders with the skills they need to become future leaders in conservation and education.', svg:'/img/svg/hat.svg', href:'/activities#education'},
                {id:'2', head:'Research', slug:'research', body:'Science is a critical part of our work, because it provides important information about the birds in the forest ecosystem they all share.', svg:'/img/svg/research.svg', href:'/activities#research'},
                {id:'3', head:'Bird Conservation', slug:'bird-conservation', body:'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, enim. Ullam placeat facere esse. Ipsum, a quidem. Error!', svg:'/img/svg/peace.svg', href:'/activities#bird-conservation'},
                {id:'4', head:'Daily Protection', slug:'daily-protection', body:'The most-effective conservation strategy is direct, sustained protection of wild animal populations. This is the foundation of our work.', svg:'/img/svg/protection.svg', href:'/activities#daily-protection'},
                {id:'5', head:'Events', slug:'events', body:'We believe that conservation succeeds best when it is a community effort.Many local people who live where we work need help.', svg:'/img/svg/calendar.svg', href:'/activities#events'},
                {id:'6', head:'Helping Community', slug:'community', body:'We believe that conservation succeeds best when it is a community effort.Many local people who live where we work need help.', svg:'/img/svg/conservation.svg', href:'/activities#education'},
            ],
        }
    },
    created(){
        this.fectchPosts()
    },
    methods:{
        fectchPosts(){
            fetch('api/posts')
            .then(res => res.json())
            .then(res => {
                this.posts = res.data
            })
        }
    }
}
</script>
<style scoped>

    .bg{
        background-image: url('/img/cropped_1973.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        height: 615px;
        
    }
    .bg-pjt{
        background-image: url('/img/lake.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        
    }
    .opacity{
        width: 100%;
        height: 615px;

    }
    .content{
        width: 100%;
        height: 615px;
        position: relative;
    }
    .line{
        height: 100px;
        border-left: 2px solid white;
    }
</style>
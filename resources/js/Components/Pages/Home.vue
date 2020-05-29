<template>
    <div>
        <div>
            
            <div class="w-100">
                <div class="bg">
                    <div class="flex w-100 "></div>
                    <div class=" mx-auto w-90" style=" margin-top: 90px;">
                        <div class="w-100 flex">
                            <div class="w-5 pt-5 relative">
                                <div class="w-30 ">
                                    <div class="line"></div>
                                    <div class="-ml-3 my-2">
                                        <img src="/img/svg/whitefb.svg" alt="">
                                    </div>
                                    <div class="-ml-3 my-4">
                                        <img src="/img/svg/whiteig.svg" alt="">
                                    </div>
                                    <div class="-ml-3 my-2">
                                        <img src="/img/svg/whitetwi.svg" alt="">
                                    </div>
                                    <div class="line"></div>
                                    <div>
                                    </div> 
                                </div>
                                
                            </div>
                            <div class="w-75 pt-5"
                            data-aos="fade-down"
                            data-aos-duration="1500">
                                <div class="text-white">
                                    <div>
                                        <h1 style="font-size:100px;">Rugezi</h1>
                                    </div>
                                    <div style="margin-top:-28px; margin-left:170px;">
                                        <span>Ornithology Center</span>
                                    </div>
                                    <div class="w-60 py-2 pb-3"> 
                                        <p class="text-lg">
                                            Rugezi Ornithology Center is birders community, which intends to promote birdwatching in Rwanda and ensure sustainable conservation of birds in their habitats.
                                        </p>
                                    </div>
                                    <div class="flex relative z-999">
                                        <div class="">
                                            <button class="btn px-5 border-white text-orange mr-2">
                                                <a class="text-white no-underline" href="">Explore </a>
                                            </button>
                                        </div>
                                        <div data-app class="">
                                            <Popup/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-20">
                                
                            </div>
                        </div>
                    </div>
                    <div class="w-100 flex -mt-24">
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
        <div class="bg-white-smoke relative mx-auto pt-3" id="activity">
            <div class="py-5 text-centered text-grey-darkest">
                <h2 class="text-3xl">Our Special Activities</h2>
            </div>
            <div>
                <div class="w-90 mx-auto py-3">
                    <div class="w-100 grid grid-3 mb-12 " style="">
                        <div class="" v-for="activity in activities" :key="activity.id"
                         data-aos="zoom-in"
                         data-aos-duration="2000">
                            <div class="w-100 mx-5">
                                <div class="">
                                    <v-avatar class="bg-orange-dark shadow-lg" size="60">
                                        <div class="w-80">
                                            <img :src="activity.svg" alt="svg-icon">
                                        </div>
                                    </v-avatar>
                                </div>
                            </div>
                            <div class="bg-white pb-4 -mt-6 shadow-sm mb-3 mr-4 pt hover:shadow-md" 
                            style="border-radius: 40px 0px 40px 0px; padding-top: 30px;">
                                <div class=" text-grey-darkest">
                                    <h2 class="text-xl px-5 pt-10 pb-3">{{activity.head}}</h2>
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
                        </div>     
                    </div> 		
                </div>
            </div>
        </div>
        <div class="w-100 bg-green-darkest py-3 ">
            <div class="w-90 mx-auto py-5">
                
                <div class="w-100 flex pb-2">
                    <div class="w-50 mx-2" style="margin-top: 0px"
                    data-aos="fade-right"
                    data-aos-duration="2000">
                         <v-img src="/img/IMG_1600.jpg" class="w-100"></v-img>
                    </div>
                    <div class="w-50  mx-2 py-5"
                    data-aos="fade-left"
                    data-aos-duration="2000">
                        <div class="pt-3">
                            <h2 class="text-white text-3xl text-center ">Who are we?</h2>
                        </div>
                        <div class="text-center pt-3">
                            <p class="text-white">
                           Rugezi Ornithology Center is birders community, which intends to promote birdwatching in Rwanda and ensure sustainable conservation of birds in their habitats.
                        </p>
                        <div class="py-3 text-center">
                            <button class="border-orange-dark w-35 btn text-sm text-white">
                                <router-link :to="{ name: 'join' }" class="no-underline text-white">Join Us</router-link>
                            </button>
                        </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="w-100 bg-pjt"> </div>
            <div class="opacity bg-green-darker opacity-80"></div>
            <div class="content w-90 mx-auto">
                <div class="py-5">
                    <div class="pl-2">
                        <h2 class="text-center text-3xl text-white">Our Blog</h2>
                    </div>
                    <div class="py-5">
                        <div class="w-100 flex text-grey-darkest">
                            <div class="bg-white w-30 mx-3" >
                                <div class="">
                                    <v-img src="img/IMG_2802.jpg" width="360" height="200"></v-img>
                                </div>
                                <div class="">
                                    <div class="py-2">
                                        <h4 class="text-xs text-right px-2 text-orange-dark">Fri, May 23, 2020</h4>
                                    </div>
                                    <div class="px-4">
                                        <h3 class="text-sm py-2">Birds Day in Rugezi Center</h3>
                                        <p class="text-sm">Just like in humans, birds communication can occur through a variety of methods—body postures...</p>
                                    </div>
                                    <div class="text-right mx-5 mb-4">
                                        <button class="text-sm btn border-orange-darker">Read More</button>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white w-30 mx-3">
                                <div class="">
                                    <v-img src="img/IMG_1600.jpg" width="360" height="200"></v-img>
                                </div>
                                <div class="py-2">
                                    <div>
                                        <h4 class="text-xs text-right px-2 text-orange-dark">Thur, Jan 01, 2020</h4>
                                    </div>
                                    <div class="px-4">
                                        <h3 class="text-sm py-2">Bird Watching the great thing</h3>
                                        <p class="text-sm">Just like in humans, birds communication can occur through a variety of methods—body postures...</p>
                                    </div>
                                    <div class="text-right mx-5 mb-4">
                                        <button class="text-sm btn border-orange-darker">Read More</button>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white w-30 mx-3">
                                <div class="">
                                    <v-img src="img/IMG_4782.jpg" width="360" height="200"></v-img>
                                </div>
                                <div class="py-2">
                                    <div>
                                        <h4 class="text-xs text-right px-2 text-orange-dark">Wed, Jun 12, 2020</h4>
                                    </div>
                                    <div class="px-4">
                                        <h3 class="text-sm py-2">Internship to students </h3>
                                        <p class="text-sm">Just like in humans, birds communication can occur through a variety of methods—body postures...</p>
                                    </div>
                                    <div class="text-right mx-5 mb-4">
                                        <button class="text-sm btn border-orange-darker">Read More</button>
                                    </div>
                                </div>
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
            activities:[
                {id:'1', head:'Education', slug:'education', body:'We are dedicated to providing young African birders with the skills they need to become future leaders in conservation and education.', svg:'/img/svg/hat.svg'},
                {id:'2', head:'Research', slug:'research', body:'Science is a critical part of our work, because it provides important information about the birds in the forest ecosystem they all share.', svg:'/img/svg/research.svg'},
                {id:'3', head:'Bird Conservation', slug:'bird-conservation', body:'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, enim. Ullam placeat facere esse. Ipsum, a quidem. Error!', svg:'/img/svg/peace.svg'},
                {id:'4', head:'Daily Protection', slug:'daily-protection', body:'The most-effective conservation strategy is direct, sustained protection of wild animal populations. This is the foundation of our work.', svg:'/img/svg/protection.svg'},
                {id:'5', head:'Events', slug:'events', body:'We believe that conservation succeeds best when it is a community effort.Many local people who live where we work need help.', svg:'/img/svg/calendar.svg'},
                {id:'6', head:'Helping Community', slug:'community', body:'We believe that conservation succeeds best when it is a community effort.Many local people who live where we work need help.', svg:'/img/svg/conservation.svg'},
            ],
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
        height: 615px;
        
    }
    .opacity{
        width: 100%;
        height: 615px;
        margin-top: -615px;

    }
    .content{
        width: 100%;
        height: 615px;
        margin-top: -615px;
        position: relative;
    }
    .line{
        height: 100px;
        border-left: 2px solid white;
    }
</style>
<template>
    <div>
        <div>
            
            <div class="w-100">
                <v-img src="/img/IMG_1973.jpg" height="670">
                    <div class="text-right">
                       <Popup/>
                    </div>
                    <div class="mx-auto w-90" style="margin-top:90px">
                        <div class="w-100 flex">
                            <div class="w-10">
                                <div class="w-20 ">
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
                            <div class="w-70">
                                <div class="text-white">
                                    <div>
                                        <h1 style="font-size:100px;">Rugezi</h1>
                                    </div>
                                    <div style="margin-top:-28px; margin-left:170px;">
                                        <span>Ornithology Center</span>
                                    </div>
                                    <div class="w-60 py-5">
                                        <p class="text-lg">
                                            Rugezi Ornithology Center is birders community, which intends to promote birdwatching in Rwanda and ensure sustainable conservation of birds in their habitats.
                                        </p>
                                    </div>
                                    <div>
                                        <button class="btn px-5 bg-orange-dark text-white rounded">
                                            <a class="text-white no-underline" href="#activity">Explore More</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-20">
                                
                            </div>
                        </div>
                    </div>
                    <div class="w-100 flex -mt-12">
                        <div class="w-50">

                        </div>
                        <div>
                            <div>
                                <h2 class="text-white">Gallery</h2>
                            </div>
                            <div class="grid grid-4">
                                <div class="mr-3">
                                    <v-img class="rounded shadow-xl" src="/img/IMG_8805.jpg" height="190" width="150"></v-img>
                                </div>
                                <div class="mr-3">
                                    <v-img class="rounded shadow-xl" src="/img/IMG_8827.jpg" height="190" width="150"></v-img>
                                </div>
                                <div class="mr-3">
                                    <v-img class="rounded shadow-xl" src="/img/IMG_2004.jpg" height="190" width="150"></v-img>
                                </div>
                                <div class="mr-3">
                                    <v-img class="rounded shadow-xl" src="/img/IMG_1973.jpg" height="190" width="150"></v-img>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </v-img>
            </div>
        </div>
        <div class="relative mx-auto mt-5" id="activity">
            <div class="py-12 text-centered">
                <h2>Our Special Activities</h2>
            </div>
            <div>
                <div class="w-80 mx-auto">
                    <div class="w-100 grid grid-3 mb-12 " style="">
                        <div class="" v-for="activity in activities" :key="activity.id">
                            <div class="w-100 mx-5">
                                <div class="">
                                    <v-avatar class="bg-white shadow-lg" size="60">
                                        <div class="w-80">
                                            <img :src="activity.svg" alt="svg-icon">
                                        </div>
                                    </v-avatar>
                                </div>
                            </div>
                            <div class="bg-white shadow-sm mb-3 mr-4 hover:shadow-lg hover:cursor-pointer" style="border-radius: 40px 0px 40px 0px; margin-top: -30px;">
                                <div class=" text-grey-darkest">
                                    <h2 class="text-xl px-5 pt-10 pb-3">{{activity.head}}</h2>
                                    <p class="px-5 text-sm">{{activity.body}}</p>
                                </div>
                                <div class="text-centered">
                                    <button class="bg-orange-dark py-1 px-2 mb-2 text-sm text-white">
                                        <router-link :to="{name: 'activity'}" class="no-underline">
                                            <span class="text-white">Read More</span>
                                        </router-link>
                                    </button>
                                </div>
                            </div>
                        </div>     
                    </div> 		
                </div>
            </div>
        </div>
        <div class="w-100 bg-green-darker">
            <div class="w-80 mx-auto">
                <div>
                    <h2 class="text-white text-center py-5">Who are we?</h2>
                </div>
                <div class="w-100 flex">
                    <div class="w-50" style="margin-top:-50px">
                        <img src="/img/ornithology center.png" alt="">
                    </div>
                    <div class="w-50 pt-12 text-centered">
                        <p class="text-white">
                           Rugezi Ornithology Center is birders community, which intends to promote birdwatching in Rwanda and ensure sustainable conservation of birds in their habitats.
                        </p>
                        <div class="text-centered">
                            <button class="bg-orange-dark px-2 py-1 text-sm  mb-5 text-white">
                                <router-link :to="{ name:'about' }" class="no-underline">
                                    <span class="text-white">More About Us</span>
                                </router-link>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="w-100 bg-pjt"> </div>
            <div class="opacity bg-green-darker opacity-70"></div>
            <div class="content w-80 mx-auto">
                <div class="">
                    <div>
                        <h2 class="text-centered py-5 text-white">Our Blog</h2>
                    </div>
                    <div>
                        <div class="w-100 grid grid-3 text-grey-darkest">
                            <div class="bg-white shadow-lg">
                                <div class="">
                                    <v-img src="img/IMG_2802.jpg" width="360" height="250"></v-img>
                                </div>
                                <div class="">
                                    <div>
                                        <h4 class="text-lg py-2 text-right px-2 text-orange-dark">Fri, May 23, 2020</h4>
                                    </div>
                                    <div class="px-4">
                                        <h3 class="text-xl py-4">Birds Day in Rugezi Center</h3>
                                        <p class="text-sm">Just like in humans, birds communication can occur through a variety of methods—body postures, facial expressions, vocalizations.  Communicating Dominance.</p>
                                    </div>
                                    <div class="text-right mx-5 mb-4">
                                        <button class="py-1 px-2 bg-orange-dark text-sm text-white">Read More</button>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white shadow-lg mx-5">
                                <div class="">
                                    <v-img src="img/IMG_1600.jpg" width="360" height="250"></v-img>
                                </div>
                                <div class="">
                                    <div>
                                        <h4 class="text-lg py-2 text-right px-2 text-orange-dark">Thur, Jan 01, 2020</h4>
                                    </div>
                                    <div class="px-4">
                                        <h3 class="text-xl py-4">Bird Watching the great thing</h3>
                                        <p class="text-sm">Just like in humans, birds communication can occur through a variety of methods—body postures, facial expressions, vocalizations.  Communicating Dominance.</p>
                                    </div>
                                    <div class="text-right mx-5 mb-4">
                                        <button class="py-1 px-2 bg-orange-dark text-sm text-white">Read More</button>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white shadow-lg">
                                <div class="">
                                    <v-img src="img/IMG_4782.jpg" width="360" height="250"></v-img>
                                </div>
                                <div class="">
                                    <div>
                                        <h4 class="text-lg py-2 text-right px-2 text-orange-dark">Wed, Jun 12, 2020</h4>
                                    </div>
                                    <div class="px-4">
                                        <h3 class="text-xl py-4">Internship to students </h3>
                                        <p class="text-sm">Just like in humans, birds communication can occur through a variety of methods—body postures, facial expressions, vocalizations.  Communicating Dominance.</p>
                                    </div>
                                    <div class="text-right mx-5 mb-4">
                                        <button class="py-1 px-2 bg-orange-dark text-sm text-white">Read More</button>
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
            data: [
                '<div class="example-slide"><v-img src="/img/IMG_2900.jpg" height="585"></v-img></div>',
                '<div class="example-slide"><v-img src="/img/IMG_1973.jpg" height="585"></v-img></div>',
                '<div class="example-slide"><v-img src="/img/IMG_9069.jpg" height="585"></v-img></div>',
            ],
        }
    }
}
</script>
<style scoped>
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
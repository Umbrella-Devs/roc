<template>
    <v-app class="bg-white-smoke">
        <div>
            <div class="w-100 flex bg-green-darker" >
                        <div class="w-50">
                            <div class="w-30 flex">
                                <div class="w-40">
                                    <img src="/img/ornithology center.png" alt="" width="90px">
                                </div>
                                <div class="w-50 py-4 -ml-3">
                                    <span class="text-white">ROC</span>
                                </div>
                            </div>
                        </div>
                        <div class="w-50 pt-3">
                            <div class="" style="margin-top:-10px">
                                <ul class="list inline-block">
                                    <li class="px-5">
                                    <router-link :to="{ name: 'home' }" class="no-underline">
                                        <span class="text-white hover:text-orange pb-2 ">Home</span>
                                    </router-link>
                                    </li>
                                    <li class=" ">
                                        <router-link :to="{ name: 'activity' }" class="no-underline">
                                            <span class="text-white hover:text-orange">Activities</span>
                                        </router-link>
                                    </li>
                                    <li class="px-5">
                                        <router-link :to="{ name: 'projects' }" class="no-underline">
                                            <span class="text-white hover:text-orange">Projects</span>
                                        </router-link>
                                    </li>
                                    <li class="">
                                        <router-link :to="{ name: 'about' }" class="no-underline">
                                            <span class="text-white hover:text-orange">About us</span>
                                        </router-link>
                                    </li>
                                    <li class="px-5">
                                        <router-link :to="{ name: 'gallery' }" class="no-underline">
                                            <span class="text-white hover:text-orange">Gallery</span>
                                        </router-link>
                                    </li>  
                                    <li class="">
                                        <button class="px-3 py-1 bg-orange-dark">
                                            <router-link :to="{ name: 'donate' }" class="no-underline">
                                                <span class="text-white hover:text-grey-light">Donate</span>
                                            </router-link>
                                        </button>
                                    </li>
                                    <li class="">
                                        <button class="px-3 py-1 bg-orange-dark">
                                            <router-link :to="{ name: 'join' }" class="no-underline">
                                                <span class="text-white hover:text-grey-light">Join Us</span>
                                            </router-link>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            <!--<div class="">
                <nav>
                    <v-toolbar app style="height: 30px;" class="bg-black-darker">
                        <div class="w-100 flex" style="margin-top:-35px;">
                            <div class="w-80" style="margin-top:-10px">
                                <ul class="list inline-block text-white">
                                    <li class="text-sm">Call us: +250 781 234 567  </li>
                                    <li class="px-3">|</li>
                                    <li class="text-sm">+250 781 234 567</li>
                                    <li class="px-3">|</li>
                                    <li class="text-sm">info@roc.rw</li>
                                </ul>
                            </div>
                            <div class=""></div>
                        </div>
                    </v-toolbar>
                </nav>
                <nav class="">
                    <v-toolbar app flat style="height:50px" class=" shadow-sm bg-black">
                        <div class="w-50 -mt-4">
                            <div class="w-30 flex">
                                <div>
                                    <img src="/img/ornithology center.png" alt="" width="100px">
                                </div>
                                <div class="w-50 mt-6 -ml-5">
                                    <span class="text-white">ROC Ltd</span>
                                </div>
                            </div>
                        </div>
                        <div class="" style="margin-top: -29px">
                            <ul class="list inline-block text-white">
                                <li class=" px-4">
                                    <router-link :to="{ name: 'home' }" class="no-underline">
                                        <span class="text-white hover:text-green">Home</span>
                                    </router-link>
                                </li>
                                <li class="">
                                    <router-link :to="{ name: 'activity' }" class="no-underline">
                                        <span class="text-white hover:text-green">Activities</span>
                                    </router-link>
                                </li>
                                <li class=" px-4">
                                    <router-link :to="{ name: 'projects' }" class="no-underline">
                                        <span class="text-white hover:text-green">Projects</span>
                                    </router-link>
                                </li>
                                <li class="">
                                    <router-link :to="{ name: 'about' }" class="no-underline">
                                        <span class="text-white hover:text-green">About us</span>
                                    </router-link>
                                </li>
                                <li class="px-4">
                                    <router-link :to="{ name: 'gallery' }" class="no-underline">
                                        <span class="text-white hover:text-green">Gallery</span>
                                    </router-link>
                                </li>
                                <li class="">
                                    <router-link :to="{ name: 'blog' }" class="no-underline">
                                        <span class="text-white hover:text-green">Blog</span>
                                    </router-link>
                                </li>   
                                <li class="pl-10">
                                    <button class="border-solid border-1 px-3 border-green rounded-full hover:bg-green">
                                        <router-link :to="{ name: 'donate' }" class="no-underline">
                                            <span class="text-white hover:text-white">Donate</span>
                                        </router-link>
                                    </button>
                                </li>
                                <li class="pl-4">
                                    <button class="border-solid border-1 px-3 border-green rounded-full hover:bg-green hover:text-white">
                                       <router-link :to="{ name: 'join' }" class="no-underline">
                                            <span class="text-white hover:text-white">Join Us</span>
                                        </router-link>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </v-toolbar>
                </nav>
            </div>-->
            <div class="">
                <router-view></router-view>
            </div>
            <footer>
                <div class="bg-green-darker w-100 mx-auto">
                    <div class="pt-12 w-90 mx-auto">
                        <div>
                            <div class="w-100 flex">
                                <div>
                                    <div class="text-white text-sm">
                                        <h5 class="pl-5">Location</h5>
                                        <ul class="list py-5">
                                            <li>
                                                <span>
                                                    
                                                </span>
                                                <span>Musanze, Rwanda</span>
                                            </li>
                                            <li>+ 250 712 345 567 | + 250 712 345 567 </li>
                                            <li>info@roc.rw</li>
                                        </ul>
                                    </div>
                                    <div>
                                        <div class="w-100 flex -mt-2 mx-4">
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="text-white w-30 ml-24 text-sm">
                                    <h5 class="pl-5">About Us</h5>
                                    <ul class="list">
                                        <li>Our Staff</li>
                                        <li>Terms & Conditions</li>
                                        <li>Blog</li>
                                        <li>Activities</li>
                                        <li>Services</li>

                                    </ul>
                                </div>
                                <div class="w-40 mx-auto">
                                    <form>
                                        <div class="flex w-100">
                                            <div class="w-50 xs:w-100 md:w-100 xs:mb-4 p-0 mr-4 md:mr-2 sm:mr-2 xs:mr-2  relative border-1 border-solid border-white">
                                                <label class="text-sm absolute -mt-3 ml-1 px-2 bg-green-darker text-white">Names</label>
                                                <input type="text" name="name" class="form-input bg-transparent outline-none mt-2 my-0 py-2 xs:py-1 border-0 focus:shadow-none  outline-none rounded-none text-white relative">
                                            </div>
                                            <div class="w-50 xs:w-100 md:w-100 xs:mb-4 p-0 mr-4 md:mr-2 sm:mr-2 xs:mr-2  relative border-1 border-solid border-white">
                                                <label class="text-sm absolute -mt-3 ml-1 px-2 bg-green-darker text-white">E-mail</label>
                                                <input type="text" name="email" class="form-input bg-transparent outline-none mt-2 my-0 py-2 xs:py-1 border-0 focus:shadow-none  outline-none rounded-none text-white relative">
                                            </div>
                                        </div>
                                        <div class="mt-3 xs:w-100 xl:pt-3 md:pt-3 sm:pt-4 pb-2 xs:w-95 mx-auto xl:pr-4">
                                            <div class="w-97 xs:w-100 p-0 xs:mr-0  relative border-1 border-solid border-white">
                                                <label class="text-sm absolute -mt-3 ml-1 px-2 bg-green-darker text-white">Message</label>
                                                <textarea name="message" class="form-input bg-transparent outline-none mt-2 my-0 py-2 xs:py-1 border-0 focus:shadow-none  outline-none rounded-none text-white relative"></textarea>
                                            </div>
                                        </div>
                                        <div class="w-100 text-center mt-2">
                                            <input class="px-3 py-1 bg-orange-dark text-white" type="submit" value="Send">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="pt-10">
                            <h4 class="text-sm text-white text-centered">All rights reserved © 2020 ROC.</h4>
                        </div>
                    </div>
                <div class="pt-4 pb-2 px-4 text-right">
                    <h4 class="text-sm text-white">
                        <span>
                            <a href="https://umbrellagrp.rw/" target="_blank">UmbrellaGrp</a>
                        </span>
                        <span>Developed it</span>
                    </h4>
                </div>
            </div>
            </footer>
            
        </div>
    </v-app>
</template>
<script>
    export default {}
</script>
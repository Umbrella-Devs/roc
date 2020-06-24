<template>
    <v-app class="bg-white-smoke">
        <div>
            
                <div>
                   <router-view></router-view>
                </div>      
                <div class="bg-green-darkest w-100 py-5 z-999 relative xs:hidden" id="footer">
                    <div class="py-5 xl:w-85  md:w-90 mx-auto">
                        <div class="py-5">
                            <div class="w-100 flex">
                                <div class="w-25">
                                    <div class="text-white text-xs">
                                        <h5 class="text-lg">Contact Us</h5>
                                        <ul class="list pt-2 p-0">
                                            <li>
                                                + 250 784 556 850
                                            </li>
                                            <li>+ 250 783 772 300  </li>
                                            <li>rocenter2020@gmail.com</li>
                                        </ul>
                                    </div>
                                    
                                </div>
                                <div class="w-25">
                                    <div class="text-white text-xs">
                                        <h5 class="text-lg">Location</h5>
                                        <ul class="list pt-2 p-0">
                                            <li>
                                                <span>Musanze, Rwanda</span>
                                            </li>
                                            <li>NR 100 kv </li>
                                            <li>rocenter2020@gmail.com</li>
                                        </ul>
                                    </div>
                                    
                                </div>
                                <div class="w-25">
                                    <div class="text-white text-xs">
                                        <h5 class="text-lg">Quick links</h5>
                                        <ul class="list pt-2 p-0">
                                            <li>
                                                <a class="text-white no-underline" href="/blog">Blog</a>
                                            </li>
                                            <li>
                                                <a class="text-white no-underline" href="/about#team">Team</a>
                                            </li>
                                            <li>
                                                <a class="text-white no-underline" href="/about#our-story">Our story</a>
                                            </li>
                                            <li>
                                                <a class="text-white no-underline" href="/projects#bird-track">Bird Track</a>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                </div>
                                <div class="w-25">
                                    <div class="text-white text-xs">
                                        <h5 class="text-lg">Activities</h5>
                                        <ul class="list pt-2 p-0">
                                            <li>
                                                <a class="text-white no-underline" href="/activities#education">Education</a>
                                            </li>
                                            <li>
                                                <a class="text-white no-underline" href="/activities#research">Research</a>
                                            </li>
                                            <li>
                                                <a class="text-white no-underline" href="/activities#bird-conservation">Bird Conservation</a>
                                            </li>
                                            <li>
                                                <a class="text-white no-underline" href="/activities#daily-protection">Daily Protection</a>
                                            </li>

                                        </ul>
                                    </div>
                                    
                                </div>
                                <div class="my-auto">
                                    <Message/>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                        <div class="flex w-85 mx-auto text-sm pt-5">
                            <div class="w-50">
                            <h4 class="text-xs text-white-50 text-left">All rights reserved © 2020 ROC.</h4>
                            </div>
                            <div class="w-50 text-right pr-1">
                                <h4 class="text-xs text-white-50">
                                    <span>
                                        Developed by <a class="text-orange-dark" href="https://umbrellagrp.rw/" target="_blank">Umbrella</a>
                                    </span>
                                </h4>
                            </div>
                        </div>
                
            </div>
         </div>   

         <div class="w-100 relative z-999 bg-green-darkest md:hidden xl:hidden">
             <div class="w-95 mx-auto flex py-3">
                 <div class="w-50 text-white text-xs">
                    <h5 class="text-lg">Contact Us</h5>
                    <ul class="list pt-1 p-0">
                        <li>
                            + 250 784 556 850
                        </li>
                        <li>+ 250 783 772 300  </li>
                        <li>rocenter2020@gmail.com</li>
                    </ul>
                </div>
                <div class="my-auto text-center w-50">
                    <Message/>
                </div>
             </div>
             
             <div class="flex w-90 mx-auto text-sm pt-3 pb-4">
                <div class="w-50">
                <h4 class="text-xs text-white-50 text-left">All © 2020 ROC.</h4>
                </div>
                <div class="w-50 text-right pr-1">
                    <h4 class="text-xs text-white-50">
                        <span>
                            Developed by <a class="text-orange-dark" href="https://umbrellagrp.rw/" target="_blank">Umbrella</a>
                        </span>
                    </h4>
                </div>
            </div>
         </div>
       
    </v-app>
</template>
<script>
    import Message from './Pages/message.vue'
    export default {
        components:{ Message},
    }
</script>
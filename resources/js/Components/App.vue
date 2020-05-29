<template>
    <v-app class="bg-white-smoke">
        <div>
            
                <div>
                   <router-view></router-view>
                </div>      
                <div class="bg-green-darkest w-100 py-5">
                    <div class="py-5 w-80 mx-auto">
                        <div class="py-5">
                            <div class="w-100 flex">
                                <div class="w-25">
                                    <div class="text-white text-xs">
                                        <h5 class="text-lg">Contact Us</h5>
                                        <ul class="list pt-2 p-0">
                                            <li>
                                                + 250 712 345 567
                                            </li>
                                            <li>+ 250 712 345 567  </li>
                                            <li>info@roc.rw</li>
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
                                            <li>info@roc.rw</li>
                                        </ul>
                                    </div>
                                    
                                </div>
                                <div class="w-25">
                                    <div class="text-white text-xs">
                                        <h5 class="text-lg">Quick links</h5>
                                        <ul class="list pt-2 p-0">
                                            <li>
                                                Blog
                                            </li>
                                            <li>Team</li>
                                            <li>Our story</li>
                                            <li>Bird Track</li>
                                        </ul>
                                    </div>
                                    
                                </div>
                                <div class="w-25">
                                    <div class="text-white text-xs">
                                        <h5 class="text-lg">Activities</h5>
                                        <ul class="list pt-2 p-0">
                                            <li>
                                                Education
                                            </li>
                                            <li>Research </li>
                                            <li>Bird Conservation</li>
                                            <li>Daily Protection</li>

                                        </ul>
                                    </div>
                                    
                                </div>
                                <div class="my-auto">
                                    <Message/>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                    <div class="flex w-80 mx-auto text-sm pt-5">
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
       
    </v-app>
</template>
<script>
    import Message from './Pages/message.vue'
    export default {
        components:{ Message},
    }
</script>
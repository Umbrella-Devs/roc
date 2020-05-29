<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mobile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tablet.css') }}">
    <link rel="stylesheet" href="{{ asset('css/desktop.css') }}">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&family=Roboto&display=swap" rel="stylesheet">
    
    <title>ROC | Rugezi Ornithology Center</title>
    <style>
        span, h1, h2, h5{
            font-family: 'Roboto', sans-serif;
        }
        p, h4, li{
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body>
    <div class="w-100 bg-green-darkest fixed z-9999 shadow-md">
        <div class="w-90 flex mx-auto py-3">
            <div class="w-30">
                        <div class="">
                            <a class="text-white no-underline" href="{{ route('home') }}">Rugezi O.C</a>
                        </div>
                </div>
                <div class="w-70 text-right">
                    <div class="" style="margin-top:-10px">
                        <ul class="list inline-block">
                            <li class="mx-3 text-sm">
                            <a class="text-white no-underline" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="mx-3 text-sm">
                                <a class="text-white no-underline" href="{{ route('activities') }}">Activities</a>
                            </li>
                            <li class="mx-3 text-sm">
                                <a class="text-white no-underline" href="{{ route('projects') }}">Projects</a>
                            </li>
                            <li class="mx-3 text-sm">
                                <a class="text-white no-underline" href="{{ route('about_us') }}">About us</a>
                            </li>
                            <!-- <li class="mx-2 text-sm">
                                <router-link :to="{ name: 'gallery' }" class="no-underline">
                                    <span class="text-white hover:text-orange">Gallery</span>
                                </router-link>
                            </li>   -->
                            <li class="mx-3 text-sm">
                                <a class="text-white no-underline" href="{{ route('join_us') }}">Join Us</a>
                            </li>
                            <li class="mx-3 text-sm">
                                <button class="px-3 rounded-full py-1 bg-orange-dark">
                                    <a class="text-white no-underline" href="{{ route('donate') }}">Donate</a>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
        </div>
    </div>
    
    <div class="xs:hidden md:hidden" id="app">
        
        @yield('content')
        
    </div>
    <!--{{-- <div>
            <div class="bg-green-darkest w-100 pb-3 pt-5">
                <div class="w-80 mx-auto">
                    <div class="">
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
                                        <li>Team </li>
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
        
    </div> --}}-->
    
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        AOS.init();
    </script>
</body>
</html>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@5.x/css/materialdesignicons.min.css" rel="stylesheet">
    <title>ROC | Rugezi Ornithology Center</title>
    <style>
        span, h1, h2, h5{
            font-family: 'Roboto', sans-serif;
        }
        p, h4, li{
            font-family: 'Nunito', sans-serif;
        }
        .topnav {
        overflow: hidden;
        position: relative;
        }

        .topnav #myLinks {
        display: none;
        }

        .topnav a {
        color: white;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
        display: block;
        }

        .topnav a.icon {
        display: block;
        position: absolute;
        right: 0;
        top: 0;
        }

        .topnav a:hover {
        background-color: rgb(29, 56, 17);
        }

        .active {
        color: white;
        }
        .dropdown {
        position: relative;
        display: inline-block;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            border: none
        }
        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left
        }
        .dropdown-content a:hover {background-color: ;}
        .dropdown:hover .dropdown-content {display: block;}

    </style>
</head>
<body class="w-100 overflow-x-hidden">
    {{-- mobile nav --}}
        <div class="topnav shadow-md bg-green-darkest fixed xs:w-100 xl:hidden md:hidden z-9999">
            <a href="{{ route('home') }}" class="active  bg-green-darkest">ROC</a>
            <div id="myLinks">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('activities') }}">Activities</a>
            <a href="{{ route('projects') }}">Projects</a>
            <a href="{{ route('blog') }}">Blog</a>
            <a href="{{ route('about_us') }}">About Us</a>
            <a href="{{ route('join_us') }}">Join us</a>
            <a href="{{ route('join_us') }}">Gallery</a>
            <a href="{{ route('donate') }}">Donate</a>
            </div>
            <a href="javascript:void(0);" class="icon bg-orange-dark" onclick="myFunction()">
            <i class="fa fa-bars text-white"></i>
            </a>
        </div>
    {{-- end mobile nav --}}
    <div class="w-100 bg-green-darkest fixed z-9999 shadow-md xs:hidden">
        <div class="w-90 flex mx-auto py-3">
            <div class="xl:w-30 md:w-20">
                        <div class="">
                            <a class="text-white no-underline" href="{{ route('home') }}">
                                <span class="text-xl">R.O.C</span></a>
                        </div>
                </div>
                <div class="w-70 md:w-80 text-right pt-1">
                    <div class="" style="margin-top:-10px">
                        <ul class="list inline-block">
                            <li class="xl:mx-3 md:mx-1 text-sm">
                                <a class="text-white no-underline" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="xl:mx-3 md:mx-1 text-sm">
                                <div class="dropdown">
                                    <a class="text-white no-underline" href="{{ route('about_us') }}">
                                        About us<i class="fa fa-caret-down px-2"></i>
                                    </a>
                                    <div class="dropdown-content bg-green-darkest">
                                        <a href="{{ route('activities') }}" class="hover:bg-green-darker">Programs</a>
                                        <a href="{{ route('gallery') }}" class="hover:bg-green-darker">Gallery</a>
                                    </div>
                                </div>  
                            </li>
                            <li class="xl:mx-3 md:mx-1 text-sm">
                                <a class="text-white no-underline" href="{{ route('projects') }}">Projects</a>
                            </li>
                            <li class="xl:mx-3 md:mx-1 text-sm">
                                <a class="text-white no-underline" href="{{ route('blog') }}">Blog</a>
                            </li>
                            <li class="xl:mx-3 md:mx-1 text-sm">
                                <a class="text-white no-underline" href="{{ route('join_us') }}">Join Us</a>
                            </li>
                            <li class="xl:mx-3 md:mx-1 text-sm">
                                    <a class="rounded-full bg-orange-dark px-3 py-2 text-white no-underline" href="{{ route('donate') }}">Donate</a>
                            </li>
                        </ul>
                    </div>
                </div>
        </div>
    </div>
    
    <div class="w-100" id="app">
        <v-app>
            <div class="">
                @yield('content')
            </div>
            <div>
            <div>
                <div class="bg-green-darkest w-100 py-5 z-999 relative xs:hidden " id="footer">
                    <div class="xl:w-85  md:w-90 mx-auto">
                        <div class=" py-5">
                            <div class="w-100 flex">
                                <div class="w-25">
                                    <div class="text-white text-xs">
                                        <h5 class="text-lg">Contact Us</h5>
                                        <ul class="list pt-2 p-0">
                                            <li>+ 250 783 772 300  </li>
                                            <li>+ 250 784 556 850</li>
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
                                        <h5 class="text-lg">Programs</h5>
                                        <ul class="list pt-2 p-0">
                                            <li>
                                                <a class="text-white no-underline" href="/activities#education">Workshop & Training</a>
                                            </li>
                                            <li>
                                                <a class="text-white no-underline" href="/activities#research">Bird Research</a>
                                            </li>
                                            <li>
                                                <a class="text-white no-underline" href="/activities#bird-conservation">Bird Conservation</a>
                                            </li>
                                            <li>
                                                <a class="text-white no-underline" href="/activities#daily-protection">Bird Ringing & Banding</a>
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
                            <li>info@roc.rw</li>
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
    </div>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        function myFunction() {
          var x = document.getElementById("myLinks");
          if (x.style.display === "block") {
            x.style.display = "none";
          } else {
            x.style.display = "block";
          }
        }
    </script>
    
    <script>
        AOS.init();
    </script>
</body>
</html>
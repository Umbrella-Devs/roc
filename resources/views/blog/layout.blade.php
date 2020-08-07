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
        .bg{
        background-image: url('/img/IMG_2663.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }  
    body {font-family: Arial, Helvetica, sans-serif;}

    #myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
    }

    #myImg:hover {opacity: 0.7;}

    /* The Modal (background) */
    .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
    }

    /* Modal Content (image) */
    .modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    }

    /* Caption of Modal Image */
    #caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
    }

    /* Add Animation */
    .modal-content, #caption {  
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
    }

    @-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
    }

    @keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
    }

    /* The Close Button */
    .close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
    }

    .close:hover,
    .close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
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
        <a href="{{ route('gallery') }}">Gallery</a>
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
                            <span class="text-xl">Rugezi O.C</span></a>
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
                                <a href="{{ route('activities') }}" class="hover:bg-green-darker">Activities</a>
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
    
    <div class=" w-100" id="app">
        
        @yield('content')
        
    </div>
    <div class="bg-green-darkest w-100 py- z-999 relative xs:hidden">
        <div class="py- w-85 mx-auto">
            <div class="py-3">
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
            <div class="flex w-85 mx-auto text-sm pt-3">
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
 <div class="w-95 mx-auto flex py-">
     <div class="w-50 text-white text-xs">
        <h5 class="text-lg line-height-small">Contact Us</h5>
        <ul class="list pt- p-0">
            <li>
                + 250 712 345 567
            </li>
            <li>+ 250 712 345 567  </li>
            <li>info@roc.rw</li>
        </ul>
    </div>
    <div class="my-auto text-center w-50">
        <Message/>
    </div>
 </div>
 
 <div class="flex w-90 mx-auto text-sm pt-1 pb-2">
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

@yield('extra-script')

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


</body>
</html>
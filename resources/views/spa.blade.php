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
                                <a class="text-white no-underline" href="{{ route('activities') }}">Activities</a>
                            </li>
                            <li class="xl:mx-3 md:mx-1 text-sm">
                                <a class="text-white no-underline" href="{{ route('projects') }}">Projects</a>
                            </li>
                            <li class="xl:mx-3 md:mx-1 text-sm">
                                <a class="text-white no-underline" href="{{ route('blog') }}">Blog</a>
                            </li>
                            <li class="xl:mx-3 md:mx-1 text-sm">
                                <a class="text-white no-underline" href="{{ route('about_us') }}">About us</a>
                            </li>
                            <li class="xl:mx-3 md:mx-1 text-sm">
                                <a class="text-white no-underline" href="{{ route('gallery') }}">Gallery</a>
                            </li>
                            
                            <!-- <li class="mx-2 text-sm">
                                <router-link :to="{ name: 'gallery' }" class="no-underline">
                                    <span class="text-white hover:text-orange">Gallery</span>
                                </router-link>
                            </li>   -->
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
        
        @yield('content')
        
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
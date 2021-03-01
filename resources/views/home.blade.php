@extends('spa')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
    body{
        border: 0ch;    
    }
    .bg{
        background-image: url('/img/cropped_1973.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        height: 600px;
        
    }
    .line{
        height: 150px;
        border-left: 2px solid white;
    }
    .bg-pjt{
        background-image: url('/img/lake.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        
    }
</style>
@section('content')
<div class="bg" style="margin-top:60px;">
    <div class="flex w-100 "></div>
    <div class="mx-auto w-90 xs:mt-16" style=" margin-top: 60px;">
        <div class="w-100 flex">
            <div class="xl:w-5 md:w-5 xs:w-10 pt-3 relative">
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
                    </div>
                </div>
                <div class="xl:w-75 md:w-70 xs:w-85 pt-5" data-aos="fade-down" data-aos-duration="1500">
                    <div class="text-white xs:pt-5 md:pt-5">
                        <div>
                            <h1 class="xs:text-5xl" style="font-size:100px;">Rugezi</h1>
                        </div>
                        <div class="xs:mt-0 xs:ml-0" style="margin-top:-28px; margin-left:175px;">
                            <span>Ornithology Center</span>
                        </div>
                        <div class="xl:w-60 xs:w-100 py-2 pb-3"> 
                            <p class="xl:text-lg md:text-lg xs:text-sm">
                            Welcome to Rugezi Ornithology Center (ROC) birds conservation organization which intends to conduct bird’s research, conservation, trainings and workshops by strengthening ringing and banding scheme to carry out community awareness on birding services and ensuring avi-tourism promotion   through birdlife events hosting.  
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
        <div class="w-100 md:hidden flex xs:hidden" style="margin-top: -10em">
            <div class="w-50">

            </div>
            <div>
                <!--<div class="pb-2">
                    <h2 class="text-white text-2xl">Gallery</h2>
                </div>-->
                <!--<div class="grid grid-4">
                    <div class="mr-3" data-aos="fade-up" data-aos-duration="1500">
                        <img class="rounded shadow-md" src="/img/IMG_8805.jpg" height="190" width="150">
                    </div>
                    <div class="mr-3" data-aos="fade-up" data-aos-duration="1500">
                        <img class="rounded shadow-md" src="/img/IMG_8827.jpg" height="190" width="150">
                    </div>
                    <div class="mr-3" data-aos="fade-up" data-aos-duration="1500">
                        <img class="rounded shadow-md" src="/img/IMG_2004.jpg" height="190" width="150">
                    </div>
                    <div class="mr-3" data-aos="fade-up" data-aos-duration="1500">
                        <img class="rounded shadow-md" src="/img/IMG_1973.jpg" height="190" width="150">
                    </div>
                </div>-->
            </div>            
        </div>
</div>
<!--<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="/img/slide1.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" style="height: 615px" src="/img/IMG_8827.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" style="height: 615px" src="/img/IMG_8827.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>-->
<div class="">
    <Services />
</div>
<div class="w-100 bg-green-darkest py-5 ">
    <div class="w-90 mx-auto py-5">  
        <div class="w-100 xs:block flex pt-2 pb-2">
            <div class="w-50 xs:w-100 xl:mx-2" style="margin-top: 0px" data-aos="fade-right" data-aos-duration="2000">
                <img src="/img/IMG_1600.jpg" class="w-100">
            </div>
            <div class="w-50 xs:w-100 mx-2 my-auto" data-aos="fade-left" data-aos-duration="2000">
                <div class="pt-2">
                    <h2 class="text-white xl:text-3xl md:text-2xl xs:text-2xl text-center ">Who are we?</h2>
                </div>
                <div class="text-center pt-2">
                    <p class="text-white xs:text-sm">
                    Rugezi Ornithology Center (ROC) is Rwandan non- governmental organisation aiming to provide birds research, conservation, trainings and workshops by strengthening ringing and banding scheme to carry community awareness on birding services and ensuring avi-tourism promotion   through birdlife events hosting.  
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

<div class="w-100 bg-pjt">
    <div class="w-90 mx-auto py-3">
        <div class="pl-2 xl:py-3">
            <h2 class="text-center xl:text-3xl xs:text-2xl text-white">Our Blog</h2>
        </div>  
        <div class="grid grid-3">
            @foreach ($posts as $post)
            <div class="bg-white xl:mx-3 md:mx-2 md:my-2 xl:my-3 xs:my-2 shadow-md" >
                <div class="">
                    <img src="/storage/{{ $post->image }}" width="100%" height="200">
                </div>
                <div class="xs:pb-2">
                    <div class="">
                        <h4 class="text-xs text-right px-2 text-orange-dark">Fri, May 23, 2020</h4>
                    </div>
                    <div class="px-4">
                        <h3 class="text-sm py-1">{{ $post->title }}</h3>
                        <p class="text-sm">{{ Illuminate\Support\Str::limit($post->excerpt, 80) }}</p>
                    </div>
                    <div class="text-right mx-5 mb-4">
                        <a href="/post/{{ $post->id }}" class="text-sm btn border-orange-darker">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
@endsection

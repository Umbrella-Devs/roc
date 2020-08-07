@extends('spa')
<style>
    .bg{
        background-image: url('/img/cropped_1973.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        height: 615px;
        
    }
    .line{
        height: 150px;
        border-left: 2px solid white;
    }
</style>
@section('content')
<div class="bg" style="margin-top:60px;">
    <div class="flex w-100 "></div>
    <div class="mx-auto w-90 xs:mt-16" style=" margin-top: 120px;">
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
                                Rugezi Ornithology Center is birders community, which intends to promote birdwatching in Rwanda and ensure sustainable conservation of birds in their habitats.
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
        <div class="w-100 md:hidden flex -mt-24 xs:hidden">
            <div class="w-50">

            </div>
            <div>
                <div class="pb-2">
                    <h2 class="text-white text-2xl">Gallery</h2>
                </div>
                <div class="grid grid-4">
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
                </div>
            </div>            
        </div>
</div>
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
                        Rugezi Ornithology Center is birders community, which intends to promote birdwatching in Rwanda and ensure sustainable conservation of birds in their habitats.
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
<div class="">
    <Blog/>
</div>
@endsection

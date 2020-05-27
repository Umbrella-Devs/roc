<template>
    <div>
        <div class="bg">
            <div class="w-100 flex">
                <div class="w-50 mx-auto mt-32 text-black px-5 py-2 rounded">
                    <div class=" text-black">
                        <h1 class="pb-3  text-grey-darkest">What We Do</h1>
                        <p class="text-grey-darkest">Our 5 years of successful conservation work in saving gorillas is based on a holistic model with four key parts: direct, daily protection of gorillas; scientific research on gorillas and their ecosystems; educating the next generation of scientists and conservationists in Africa; and helping local people with basic needs, so that communities can thrive and work together with us.</p>
                    </div>
                    <div class="text-left">
                        <button class="btn bg-orange-dark text-white hover:bg-green">
                            <a class="no-underline text-white" href="#activities">Explore</a>  
                        </button>
                    </div>
                </div>
                <div class="w-40"></div>
            </div>
        </div>
        <div>
            <div class="w-80 mx-auto mb-5" id="activities">
                <div class="text-centered my-5">
                    <h2 class="py-5">Our Activities</h2>
                </div>
                <div class="w-100 flex mb-5">
                    <div class="w-45">
                        <v-img class="" src="/img/IMG_4694.jpg"></v-img>
                    </div>
                    <div class="w-50 mx-auto mt-12 text-grey-darkest">
                        <div class="pl-5">
                            <h2>Education </h2>
                            <p class="pt-10">Education is key to empowering people and creating the next generation of conservationists. We work directly with local educational institutions and partner organizations to strengthen their programs and capacity, training hundreds of young scientists each year.</p>
                        </div>
                        <div class="text-right">
                            <button class="py-2 px-2 rounded shadow-sm bg-orange-dark text-white">View More</button>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="w-100  bg-grey-darkest"> 
                <div class="w-80 mx-auto py-4">
                    <div class="w-100 flex">
                    <div class="w-50 mt-12">
                        <div class="text-grey">
                            <h2>Bird Conservation</h2>
                            <p class="pt-10">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint quos impedit excepturi error placeat exercitationem atque, nulla odit reiciendis quis blanditiis obcaecati officiis vel perspiciatis fuga incidunt alias voluptate quo?</p>
                        </div>
                        <div class="text-left ">
                            <button class="py-2 px-2 rounded shadow-sm bg-orange-dark text-white">View More</button>
                        </div>
                    </div>
                    <div class="w-45" style="">
                        <v-img src="/img/IMG_1600.jpg" class="w-100"></v-img>
                    </div>
                    
                </div>
                </div>
            </div>
            <div class="w-100 bg-grey py-4">
                <div class="w-80 mx-auto">
                    <div class="w-100 flex mb-5">
                    <div class="w-45">
                        <v-img class="" src="/img/IMG_1734.jpg"></v-img>
                    </div>
                    <div class="w-50 mx-auto mt-12 text-grey-darkest">
                        <div class="pl-5">
                            <h2>Research </h2>
                            <p class="pt-10">We operate the longest-running gorilla research site in the world, the Karisoke Research Center. Most of what is known about gorillas is based on studies conducted at Karisoke over the past 50 years.  Our research also focuses on understanding many of the unique animals and plants that also call these forests home.</p>
                        </div>
                        <div class="text-right">
                            <button class="py-2 px-2 rounded shadow-sm bg-orange-dark text-white">View More</button>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="w-100  bg-grey-darkest"> 
                <div class="w-80 mx-auto py-4">
                    <div class="w-100 flex">
                    <div class="w-50 mt-12">
                        <div class="text-grey">
                            <h2>Events</h2>
                            <p class="pt-10">We believe that working with and helping local communities is crucial to effective and sustainable conservation. Only when people are thriving can gorillas, other wildlife and their habitats thrive, too. That’s why our motto is “Learning Birds. Keeping them safe.”</p>
                        </div>
                        <div class="text-left ">
                            <button class="py-2 px-2 rounded shadow-sm bg-orange-dark text-white">View More</button>
                        </div>
                    </div>
                    <div class="w-45" style="">
                        <v-img src="/img/IMG_1600.jpg" class="w-100"></v-img>
                    </div>
                    
                </div>
                </div>
            </div>
            <div class="w-100 bg-grey py-4">
                <div class="w-80 mx-auto">
                    <div class="w-100 flex mb-5">
                    <div class="w-45">
                        <v-img class="" src="/img/IMG_1608.jpg"></v-img>
                    </div>
                    <div class="w-50 mx-auto mt-12  text-grey-darkest">
                        <div class="pl-5">
                            <h2>Daily Protection</h2>
                            <p class="pt-10">The best way to save endangered species and conduct effective conservation is with direct, sustained protection in the wild. This is the foundation of our work and why mountain gorillas are the only wild ape whose population is growing.</p>
                        </div>
                        <div class="text-right">
                            <button class="py-2 px-2 rounded shadow-sm bg-orange text-white">View More</button>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    

}
</script>
<style scoped>
    .bg{
        background-image: url('/img/IMG_2004.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        height: 615px;
    }
    .opacity{
        width: 100%;
        height: 615px;
        background-color: black;
        opacity: 0.5;
        
        margin-top: -615px;
    }
</style>
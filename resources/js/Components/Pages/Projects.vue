<template>
    <div>
        <div class="bg">
            <div class="w-100 flex">
                <div class="w-45 mx-auto mt-24 text-grey-darkest bg-black px-5 py-5 opacity-75 rounded" data-aos="fade-down" data-aos-duration="2000">
                    <div class=" text-white text-centered">
                        <h1 class="pb-3 text-3xl">Our Projects</h1>
                        <p>Saving Birds is an important mission, but the value of this work is even more far reaching. When birds are protected, so are their  forest habitats, which are critical ecosystems that support our planet and all life on earth.</p>
                    </div>
                    <div class="text-centered">
                        <button class="btn bg-orange-dark text-white">
                            <a href="#projects" class="no-underline text-white">Explore</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="w-100 mb-24" id="projects">
                <div>
                    <h2 class="text-centered p-5  text-grey-darkest">Our Projects</h2>
                </div>
                <div>
                    <div class="">
                        <div class="w-80 mx-auto">
                            <div class="w-100 grid grid-3 mb-5">
                                <div class="bg-white shadow-md px-4 py-3 hover:shadow-lg mr-2 mb-3 rounded  text-grey-darkest" data-aos="zoom-in" data-aos-duration="2000">
                                    <h3 class="text-xl">Bird Tracking</h3>
                                    <p class="pt-4 text-sm">BirdTrack is a free and convenient way of storing your bird records online. View the latest trends...</p>
                                    <div class="text-right">
                                        <button class="py-1 px-1 bg-orange-dark text-white">
                                            <router-link :to="{ name: 'birdTrack' }"     class="no-underline">
                                                <span class="text-sm text-white hover:text-white">Read More</span>
                                            </router-link>
                                        </button>
                                    </div>
                                </div>
                                <div class="bg-white shadow-md px-4 py-3 hover:shadow-lg mr-2 mb-3 rounded  text-grey-darkest" v-for="project in projects" :key="project.id" data-aos="zoom-in" data-aos-duration="2000">
                                    <h3 class="text-xl">{{project.name}}</h3>
                                    <p class="pt-4 text-sm">{{project.description | snippet }}</p>
                                    <div class="text-right">
                                        <button class="py-1 px-1 bg-orange-dark text-white">
                                            <router-link :to="'/projects/' + project.slug" class="no-underline">
                                                <span class="text-sm text-white hover:text-white">Read More</span>
                                            </router-link>
                                        </button>
                                    </div>
                                </div>
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
    components:{
        
    },

    data(){
        return{
            projects:[],
            birds: [],
        }
    },
     created(){
        this.fetchBirds()
    },
    methods:{
        fetchBirds(){
            fetch('api/projects')
            .then(res => res.json())
            .then(res => {
                this.projects = res.data
            })
        }
    }

}
</script>
<style scoped>
    .bg{
        background-image: url('/img/IMG_2808.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        height: 470px;
    }
    .opacity{
        width: 100%;
        height: 615px;
        background-color: black;
        opacity: 0.5;
        
        margin-top: -615px;
    }
</style>
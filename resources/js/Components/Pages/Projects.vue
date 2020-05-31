<template>
    <div>
        <div class="bg xs:h-84">
            <div class="w-100 flex">
                <div class="xl:w-45 xs:w-90 md:w-50 md:py-3 md:mt-24 mx-auto xl:mt-24 xs:mt-6 text-black xl:px-5 xs:px-3 xs:py-3 xl:py-4 rounded bg-black opacity-75" data-aos="fade-down" data-aos-duration="1500">
                    <div class="text-centered text-white">
                        <h1 class="pb-3 xl:text-3xl xs:text-xl">Our Projects</h1>
                        <p class="xs:text-sm">Our 5 years of successful conservation work in  educating the next generation of scientists and conservationists in Africa so that communities can thrive and work together with us.</p>
                    </div>
                    <div class="text-centered py-3">
                        <button class="btn bg-orange-dark text-white hover:bg-green">
                            <a class="no-underline text-white" href="#projects">Explore</a>  
                        </button>
                    </div>
                </div>
                
            </div>
        </div>
        <div>
            <div class="w-100" id="projects" data-aos="fade-right" data-aos-duration="2000">
                <div class="xs:py-4">
                    <h2 class="text-centered xl:p-5 xs:text-2xl text-grey-darkest">Our Projects</h2>
                </div>
                <div>
                    <div class="">
                        <div class="">
                            <!--<div class="w-100 grid xl:grid-3 mb-5">
                                <div class="bg-white shadow-md px-4 py-3 hover:shadow-lg xl:mr-2 mb-3 rounded  text-grey-darkest" data-aos="zoom-in" data-aos-duration="2000">
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
                            </div>-->
                            <div class=" w-80 mx-auto shadow-sm rounded hover:shadow-md pl-3" data-aos="zoom-in" data-aos-duration="2000">
                                <v-card flat>
                                    <v-tabs vertical color="orange">
                                        <v-tab v-for="project in projects" :key="project">
                                            <h5 class="text-none text-sm">{{project.name}}</h5>
                                        </v-tab>
                                        
                                        <v-tab-item v-for="project in projects" :key="project">
                                            
                                            <v-card flat>
                                                <v-card-text class="">
                                                    
                                                    <div class="">
                                                        <h2 class="text-centered py-2">{{project.name}}</h2>
                                                        <p class="px-5 text-sm">{{project.description}}</p>
                                                    </div>
                                                </v-card-text>
                                            </v-card>
                                        </v-tab-item>
                                    </v-tabs>
                                </v-card>
                            </div>
                            <div class=" w-80 mx-auto mb-12" data-aos="fade-down" data-aos-duration="2000">
                                <div class="">
                                    <h2 class="text-grey-darker py-12 text-centered">Bird Tracking Project</h2>
                                </div>
                                <div class="rounded shadow-sm hover:shadow-lg" data-aos="zoom-in" data-aos-duration="2000">
                                    <v-card flat>
                                        <v-tabs color="orange">
                                            <v-tab>
                                                <h5 class="text-none text-sm">Bird Tracking</h5>
                                            </v-tab>
                                            <v-tab>
                                                <h5 class="text-none text-sm">Bird Recorded</h5>
                                            </v-tab>
                                            <v-tab-item>
                                                <v-card flat>
                                                    <v-card-text class="">
                                                        <div class="">
                                                            <h2 class="text-centered py-3">Bird Tracking</h2>
                                                            <p class="px-5">
                                                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
                                                                The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, 
                                                                as opposed to using Content here, content here, making it look like readable English. 
                                                                Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
                                                                and a search for lorem ipsum will uncover many web sites still in their infancy. 
                                                                Various versions have evolved over the years, 
                                                                sometimes by accident, sometimes on purpose (injected humour and the like).
                                                            </p>
                                                        </div>
                                                    </v-card-text>
                                                </v-card>
                                            </v-tab-item>
                                            <v-tab-item>
                                                <v-card flat>
                                                    <v-card-text class="">
                                                        <v-data-table :headers="headers" :items="birds" :items-per-page="5" class="elevation-1"></v-data-table>
                                                    </v-card-text>
                                                </v-card>
                                            </v-tab-item>
                                        </v-tabs>
                                    </v-card>
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
            headers: [
            { text: 'ID', value: 'id' },
          {
            text: 'Bird Name',
            align: 'start',
            sortable: false,
            value: 'name',
          },
          { text: 'No of Birds', value: 'number' },
          { text: 'Activity', value: 'activity' },
          { text: 'Username', value: 'username' },
          { text: 'Location', value: 'location' },
          
        ],
        
        }
    },
     created(){
        this.fetchProjects()
        this.fetchBirds()
    },
    methods:{
        fetchProjects(){
            fetch('api/projects')
            .then(res => res.json())
            .then(res => {
                this.projects = res.data
            })
        },
        fetchBirds(){
            fetch('api/birds')
            .then(res => res.json())
            .then(res => {
                this.birds = res.data;
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
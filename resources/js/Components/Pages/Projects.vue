<template>
    <div>
        <div class="bg">
            <div class="w-100 flex">
                <div class="w-45 mx-5 mt-24 text-grey-darkest bg-black px-5 py-2 opacity-75 rounded">
                    <div class=" text-white">
                        <h1 class="pb-3">Our Projects</h1>
                        <p>Saving Birds is an important mission, but the value of this work is even more far reaching. When birds are protected, so are their  forest habitats, which are critical ecosystems that support our planet and all life on earth.</p>
                    </div>
                    <div class="text-right">
                        <button class="btn bg-orange text-white">
                            <a href="#projects" class="no-underline text-white">Explore</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="w-100 mb-24" id="projects">
                <div>
                    <h2 class="text-centered p-5">Our Projects</h2>
                </div>
                <div>
                    <div class="">
                        <div class="w-80 mx-auto">
                            <div class="w-100 grid grid-3 mb-5">
                                <div class="bg-white shadow-md px-4 py-3 hover:shadow-lg mr-2 mb-3 rounded">
                                    <h3 class="text-xl">Bird Tracking</h3>
                                    <p class="pt-4 text-sm">BirdTrack is a free and convenient way of storing your bird records online. View the latest trends, and contribute your data to ROC science.</p>
                                    <div class="text-right">
                                        <button class="py-1 px-1 bg-orange-dark text-white">
                                            <router-link :to="{ name: 'birdTrack' }"     class="no-underline">
                                                <span class="text-sm text-white hover:text-white">Read More</span>
                                            </router-link>
                                        </button>
                                    </div>
                                </div>
                                <div class="bg-white shadow-md px-4 py-3 hover:shadow-lg mr-2 mb-3 rounded" v-for="project in projects" :key="project.id">
                                    <h3 class="text-xl">{{project.title}}</h3>
                                    <p class="pt-4 text-sm">{{project.descriptionSum}}</p>
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
            projects:[
                {
                    id:'1',
                    slug:'link-bird-to-community',
                    title:'Link Birds to the Community', 
                    descriptionSum:'Bird ringing generates information on the survival, productivity and movements of birds, helping us to understand why populations are changing.',
                    coverImg:'/img/IMG_9069.jpg',
                    descriptionFull:'Whilst ringers collect data on survival, volunteers for the Nest Record Scheme collect information on productivity. The results can be analysed in combination with population trend data, such as that collected through the BTO/JNCC/RSPB Breeding Bird Survey, to determine at which stage of a bird’s life cycle there might be a problem. This enables scientists and conservationists to target appropriate mitigation measures.',
                    descriptionIntro:'Ringing data make a major contribution to the study of population changes and to our understanding of species declines. Bird populations are determined by the number of fledglings raised and the survival of both juveniles and adults.',
                    img1:'/img/IMG_1536.jpg',
                    img2:'/img/IMG_1600.jpg',
                },
                {
                    id:'2',
                    slug:'green-birding',
                    title:'Green Birding',
                    descriptionSum:'Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                    coverImg:'/img/IMG_8827.jpg',
                    descriptionIntro:'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                    descriptionFull:'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?',
                    img1:'/img/IMG_8805.jpg',
                    img2:'/img/IMG_2835.jpg',
                },
                {
                    id:'3',
                    slug:'endemic-survey',
                    title:'Endemics Survey',
                    descriptionSum:'The Waterways Breeding Bird Survey is an annual survey of breeding birds along rivers and canals.',
                    coverImg:'/img/IMG_2669.jpg',
                    descriptionIntro:'Rivers and canals are great places for birds and birdwatchers, creating wildlife corridors that strike into the heart of our cities and stretch from moorland to estuary. The Waterways Breeding Bird Survey (WBBS) provides both a great excuse for a summer morning walk and an effective way to monitor the health of the species that live by our waterways.',
                    descriptionFull:'The WBBS uses transect methods akin to those of the Breeding Bird Survey (BBS) but with minor adaptations to a linear habitat. Volunteers walk along from just 500 metres to a maximum of 5 km of waterway, making a note of all of the birds that they see and hear. Surveys are conducted twice a year, between April and June, along with a reconnaissance before that to check the route. Data is then submitted by the end of August, via field recording forms or to submit your data on BBS-Online.',
                    img1:'/img/IMG_1734.jpg',
                    img2:'/img/IMG_2738.jpg',
                },
                {
                    id:'4',
                    slug:'bird-ringing-&-banding',
                    title:'Bird Ringing & Banding',
                    descriptionSum:'Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                    coverImg:'/img/IMG_1973.jpg',
                    descriptionIntro:'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                    descriptionFull:'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?',
                    img1:'/img/IMG_2004.jpg',
                    img2:'/img/IMG_2807.jpg',
                }
            ],
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
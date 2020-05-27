<template>
    <div>
        <div v-for="project in myProject" :key="project.slug">
            <div class="w-100">
               <v-img :src="project.coverImg" max-height="500">
                   <div class="bg-black w-40 mx-auto mt-32 py-4 rounded opacity-75">
                       <h2 class="text-centered text-white">{{project.title}}</h2>
                       <p class="text-centered pt-4 px-2 text-white">{{project.descriptionSum}}</p>
                   </div>
               </v-img>
            </div>
            <div>
                <div class="w-80 mx-auto mb-12">
                    <div class="py-5 my-5 text-centered">
                        <h1>{{project.title}}</h1>
                    </div>
                    <div>
                        <h3 class="py-5">Introduction</h3>
                        <p>{{project.descriptionIntro}}</p>
                    </div>
                    <div class="w-100 grid grid-3 my-5">
                        <div class="mx-2">
                            <v-img :src="project.img1" width="500" height="400"></v-img>
                        </div>
                        <div class="mx-2">
                            <v-img :src="project.img2" width="500" height="400"></v-img>
                        </div>

                    </div>
                    <div>
                        <h3 class="py-5">Description</h3>
                        <p>{{project.descriptionFull}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100 bg-green mb-5">
            <div class="w-60 mx-auto py-12">
                <div class="w-100 flex">
                    <div class="w-50">
                        <div class="text-centered">
                            <h3>Do you wish to donate?</h3>
                        </div>
                        <div class="text-centered pt-5">
                            <button class="border-solid border-1 py-2 px-3 border-orange rounded bg-orange">
                                <router-link :to="{ name: 'donate' }" class="no-underline">
                                    <span class="text-white hover:text-black">Donate</span>
                                </router-link>
                            </button>
                        </div>
                    </div>
                    <div class="border-r-1 border-solid border-l-0 border-black border-t-0 border-b-0"></div>
                    <div class="w-50">
                        <div class="text-centered">
                            <h3>Feel free to Join Us?</h3>
                        </div>
                        <div class="text-centered pt-5">
                            <button class="border-solid border-1 py-2 px-3 border-orange rounded bg-orange">
                                <router-link :to="{ name: 'join' }" class="no-underline">
                                    <span class="text-white hover:text-black">Join Us</span>
                                </router-link>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
   data(){
       return{
           projects:[
                {
                    id:'1',
                    slug:'link-bird-to-community',
                    title:'Link Birds to the Community', 
                    descriptionSum:'Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                    coverImg:'/img/IMG_9069.jpg',
                    descriptionFull:'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?',
                    descriptionIntro:'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
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
                    descriptionSum:'Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                    coverImg:'/img/IMG_2669.jpg',
                    descriptionIntro:'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                    descriptionFull:'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?',
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
            id: this.$route.params.slug
            
        }
    },
    computed:{
        myProject(){
            return this.projects.filter(project => {
                return project.slug === this.id
            })
        }
    } 
}
</script>
<style scoped>
    
</style>
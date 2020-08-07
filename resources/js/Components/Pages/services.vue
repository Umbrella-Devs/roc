<template>
    <div>
        
        <div class="bg-white-smoke relative mx-auto pt-5" id="activity">
            <div class="xl:py-3 xs:py-2 text-centered text-grey-darkest">
                <h2 class="text-3xl xs:text-2xl">Our Special Activities</h2>
            </div>
            <div>
                <div class="w-90 mx-auto py-3">
                    <div class="w-100 grid xl:grid-3 md:grid-2  mb-12 " style="">
                        <div class="md:mx-2" v-for="activity in activities" :key="activity.id" data-aos="zoom-in" data-aos-duration="2000">
                            <a :href="activity.href" class="no-underline">
                                <div class="w-100 mx-5">
                                    <div class="">
                                        <v-avatar class="bg-orange-dark shadow-lg" size="60">
                                            <div class="w-80">
                                                <img :src="activity.svg" alt="svg-icon">
                                            </div>
                                        </v-avatar>
                                    </div>
                                </div>
                                <div class="bg-white pb-4 -mt-6 shadow-sm mb-3 xl:mr-4 pt hover:shadow-md" 
                                    style="border-radius: 40px 0px 40px 0px; padding-top: 0px;">
                                    <div class=" text-grey-darkest">
                                        <h2 class="text-xl px-5 pt-8 pb-3">{{activity.head}}</h2>
                                        <p class="px-5 text-sm">{{activity.body}}</p>
                                    </div>
                                </div>
                            </a>
                        </div>     
                    </div> 		
                </div>
            </div>
        </div>
        
    </div>

</template>
<script>
import Popup from './Popup.vue'

export default {
    components:{Popup},
    data(){
        return{
            posts:[],
            activities:[
                {id:'1', head:'Education', slug:'education', body:'We are dedicated to providing young African birders with the skills they need to become future leaders in conservation and education...', svg:'/img/svg/hat.svg', href:'/activities#education'},
                {id:'2', head:'Research', slug:'research', body:'Science is a critical part of our work, because it provides important information about the birds in the forest ecosystem they all share...', svg:'/img/svg/research.svg', href:'/activities#research'},
                {id:'3', head:'Bird Conservation', slug:'bird-conservation', body:'We believe that working with and helping local communities is crucial to effective and sustainable conservation...', svg:'/img/svg/peace.svg', href:'/activities#bird-conservation'},
                {id:'4', head:'Daily Protection', slug:'daily-protection', body:'We realized that the reality is found from the field. In that context, our best way of protecting bird’s species and conduct effective conservation... ', svg:'/img/svg/protection.svg', href:'/activities#daily-protection'},
                {id:'5', head:'Conservation Events', slug:'events', body:'We are dedicated to organize events with students and local communities to provide bird conservation messages...', svg:'/img/svg/calendar.svg', href:'/activities#events'},
                {id:'6', head:'Helping Community', slug:'community', body:'We believe that conservation succeeds best when it is a community effort.Many local people who live where we work need help...', svg:'/img/svg/conservation.svg', href:'/activities#education'},
            ],
        }
    },
    
    
}
</script>
<style scoped>

</style>
<template>
    <div>
        <div class="bg-white-smoke relative mx-auto pt-5" id="activity">
            <div class="xl:py-3 xs:py-2 text-centered text-grey-darkest">
                <h2 class="text-3xl xs:text-2xl">Our Special Programs</h2>
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
                {id:'1', head:'Workshop & Training', slug:'education', body:'Education play a significant role to empower people and encourage young generation to take action in in biodiversity conservation through capacity building provision. Indeed, trainings and workshops are our best way to provide birds skills. ', svg:'/img/svg/hat.svg', href:'/programs#workshops&trainings'},
                {id:'2', head:'Bird Research', slug:'research', body:'We perform scientific research on birds to strengthen bird’s science. We are highly motivated to conduct and develop our uniqueness birds’ research and their habitats, to help understand the status of birds and their habitat within our working areas.', svg:'/img/svg/research.svg', href:'/programs#research'},
                {id:'3', head:'Bird Conservation', slug:'bird-conservation', body:'Biodiversity conservation is our critical part of work to ensure sustainable development of nature in our region. We committed to protect Rwanda birds’ habitats against gradual loss and degradation in different parts of country.', svg:'/img/svg/peace.svg', href:'/programs#bird-conservation'},
                {id:'4', head:'Bird ringing & Banding', slug:'daily-protection', body:'We believe Science is the paramount way to get effective information about birdlife and their habitats, birds ringing and banding are critical parts of our work to ensure effective birds monitoring, of passerines and waders species which breed in IBAs of Rwanda.', svg:'/img/svg/protection.svg', href:'/programs#bird-ringing&banding'},
                {id:'5', head:'Bird Events', slug:'events', body:'Mass gatherings events like exhibition are great opportunity to communicate issues reflecting bird’s conservation as well as promoting bird watching, through hosting events people get informed about destinations to explore for bird watching and nature rejoicing.', svg:'/img/svg/calendar.svg', href:'/programs#events'},
                {id:'6', head:'Community Engagement', slug:'community', body:'We believe that working with and helping local communities solving social security issues is crucial to effective and sustainable conservation. We are enthusiastic to improve and develop community-based conservation approach around Important Bird Areas (IBA) in Rwanda.', svg:'/img/svg/conservation.svg', href:'/programs#community-engagement'},
            ],
        }
    },
    
    
}
</script>
<style scoped>

</style>
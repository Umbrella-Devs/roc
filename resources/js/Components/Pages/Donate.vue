<template>
    <div class="pt-5">
        <div class=" w-100 flex">
            <div class="w-50 relative">
                <div class="absolute bg-black z-0" style="height: 100vh">
                     <v-img src="/img/IMG_2663.jpg" class="w-100 opacity-50 clip-full"></v-img>
                </div>
                <div class="text-centered relative w-100 mx-auto text-grey-darkest mt-16">
                    <div class="w-90 mx-auto text-centered text-white">
                    <h3>We cannot reverse extinction,but together,</h3><h3> we CAN prevent it.</h3>
                    </div>
                    <div class="flex w-90 mx-auto pt-5">
                        <div class="w-50 bg-white mx-3 py-4">
                            <p class="">Educating next generation</p>
                        </div>
                        <div class="w-50 bg-white mx-3 py-4">
                            <p class="">Bird Track</p>
                        </div>
                        
                    </div>
                    <div class="flex w-90 mx-auto pt-5">
                    <div class="w-50 bg-white mx-3 py-4">
                        <p class="">Conservation of Birds</p>
                    </div>
                    <div class="w-50 bg-white mx-3 py-4">
                        <p class="">Green Birding</p>
                    </div>
                    </div>
                </div>
                
            </div>
            <div class="my-12 w-50 mx-12 " v-show="!submitted">
                <div class="py-3 text-centered">
                    <h3 class="text-grey-darkest">Donate Here</h3>
                </div>
                <div class="mx-5 bg-white shadow-lg rounded p-3">
                    <v-form ref="form" @submit.prevent="addDonate">
                        <div class="w-100 flex  mt-5">
                            <div class="w-50 mr-2">
                                <v-text-field label="First Name" v-model="firstname" :rules="nameRules"></v-text-field>
                            </div>
                            <div class="w-50">
                                <v-text-field label="Last Name" v-model="lastname" :rules="nameRules"></v-text-field>
                            </div>
                        </div>
                        <div class="w-100 flex ">
                            <div class="w-100">
                                <v-text-field label="Email" v-model="email" :rules="emailRules"></v-text-field>
                            </div>
                        </div>
                        <div class="w-100 flex">
                            <div class="w-50 mr-2">
                                <v-select v-model="country" label="Country" :items="countries" :rules="countryRules"></v-select>
                            </div>
                            <div class="w-50">
                                <v-text-field label="City" v-model="city" :rules="otherRules"></v-text-field>
                            </div>
                        </div>
                        <div class="w-100">
                            <v-text-field label="Phone" v-model="phone" :rules="otherRules"></v-text-field>
                        </div>
                        <div class="">
                            <v-select v-model="project" chips attach multiple :items="projects" label="Where to donate"></v-select>
                        </div>
                        <div class="">
                            <v-textarea label="Leave a comment"></v-textarea>
                        </div>
                        <div class="text-centered">
                            <input type="submit" class="bg-orange-dark btn text-white" value="Donate Now"/>
                        </div>
                    </v-form>
                </div>
            </div>
            <div class="">

            </div>
        </div>
        <div v-show="submitted = submitted">
            <div class="w-40 mx-auto border-1 border-solid border-grey mb-12">
                <div class="w-30 mx-auto">
                    <v-img src="/img/svg/correct.svg"></v-img>
                </div>
                <div class="text-centered w-80 mx-auto">
                    <h2 class="py-2">Thanks for Helping Us</h2>
                    <p>You will receive an email with an account to deposit the donation</p>
                </div>
                <div class="text-centered py-3">
                    <button class="px-2 py-1 rounded bg-green">
                        <router-link :to="{ name: 'home' }" class="no-underline">
                            <span class="text-white">Return to Home</span>
                        </router-link>
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data(){
        return{
            firstname:'',
            lastname:'',
            email:'',
            phone:'',
            country:'',
            state:'',
            city:'',
            zipcode:'',
            projects:[],
            select:null,
            countries:['Rwanda','Uganda','United States of America'],
            projects:['Education','Bird Track','Conservation','Green Birding','Research','Bird Ringing',],

            submitted: false,
            nameRules:[
                v => !!v || 'Name is required',
            ],
            emailRules:[
                v => !!v || 'E-mail is required',
                v => /.+@.+/.test(v) || 'E-mail must be valid',
            ],
            countryRules:[
                v => !!v || 'This field is required'
            ],
            otherRules:[
                v => !!v || 'This field is required'
            ],
        }
    },
    methods:{
        submit(){
            if(this.$refs.form.validate()){
                console.log(this.email)
                this.submitted = true
                
            } 
        },
        addDonate(){ 
            alert('Adding Donate')
        }

    }
}
</script>
<style scoped>
    
</style>
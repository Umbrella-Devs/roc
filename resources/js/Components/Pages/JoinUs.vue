<template>
    <div class="pt-5">
        <div class="w-100 flex">
            <div class="relative w-50 z-0">
                <div class="absolute bg-black z-0" style="height: 100vh">
                     <v-img src="/img/IMG_2663.jpg" class="w-100 opacity-50 clip-full"></v-img>
                </div>
                <div class="relative w-100 text-white mt-24 text-grey-darkest text-centered z-9999">
                    <h1>Your Support will be Highly appreciated</h1>
                    <p class="text-2xl">Together We can conserve birds</p>
                </div>
                
            </div>
            <div class="w-50 bg-white text-white py-2">
                <div class="pt-3">
                    <div class="text-centered py-5">
                        <h3 class="text-grey-darkest">Together We can protect the Birds </h3>
                    </div>
                    <div class="w-90 mx-auto px-5">
                        <div>
                            <v-form ref="form">
                                <div class="w-100 flex">
                                    <div class="w-50 mr-5">
                                        <v-text-field label="First Name" v-model="firstname" :rules="nameRules"></v-text-field>
                                    </div>
                                    <div class="w-50">
                                        <v-text-field label="Last Name" v-model="lastname" :rules="nameRules"></v-text-field>
                                    </div>
                                </div>
                                <div class="w-100 flex">
                                    <div class="w-60 mr-5">
                                        <v-text-field label="Email" v-model="email" :rules="emailRules"></v-text-field>
                                    </div>
                                    <div class="w-40">
                                        <v-text-field label="Phone" v-model="phone"></v-text-field>
                                    </div>
                                </div>
                                <div>
                                    <v-select label="Country" :items="items" class="" :rules="countryRules"></v-select>
                                </div>
                                <div class="w-100 flex">
                                    <div class="w-50 mr-5">
                                        <v-text-field label="State" v-model="state" :rules="otherRules" color="red"></v-text-field>
                                    </div>
                                    <div class="w-50">
                                        <v-text-field label="City" v-model="city" :rules="otherRules"></v-text-field>
                                    </div> 
                                </div>
                                <div class="text-grey-darker">
                                    <input type="radio" v-model="option" value="Member" ><span class="px-2">Member</span>
                                    <input type="radio" v-model="option" value="Volunteer" ><span class="px-2">Volunteer</span>
                                </div>
                                <div class="text-centered py-5">
                                    <button v-on:click.prevent="submit" class="bg-orange-dark btn text-white">Join Us Now</button>
                                </div>
                                
                            </v-form>
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
            firstname:'',
            lastname:'',
            email:'',
            phone:'',
            country:'',
            state:'',
            city:'',
            option:'',
            projects:[],
            select:null,
            items:['Rwanda','Uganda','United States of America'],
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
            
        }
    }
}
</script>
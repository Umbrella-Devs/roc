<template>
    <div class="pt-5">
        <div class=" w-100 flex pt-5">
            <div class="w-50 my-12">
                <div class="w-90 mx-auto">
                    <h3 class="text-centered text-grey-darker">Your gift will give a critical boost to the ROC's work in the areas of:</h3>
                </div>
                <div class="text-centered my-12 w-40 mx-auto text-grey-darker">
                    <h5 class="py-5 bg-white-smoke border-1 border-solid border-grey rounded mb-3">Educating next generation</h5>
                    <h5 class="py-5 bg-white-smoke border-1 border-solid border-grey rounded mb-3">Bird Track</h5>
                    <h5 class="py-5 bg-white-smoke border-1 border-solid border-grey rounded mb-3">Conservation of Birds</h5>
                    <h5 class="py-5 bg-white-smoke border-1 border-solid border-grey rounded mb-3">Green Birding</h5> 
                </div>
                <div class="w-90 mx-auto text-centered text-grey-darker">
                    <h3>We cannot reverse extinction,but together,</h3><h3> we CAN prevent it.</h3>
                </div>
            </div>
            <div class="my-12 w-40 mx-12 border-1 border-solid border-grey rounded" v-show="!submitted">
                <div class="py-3 bg-grey text-centered">
                    <h3 class="text-grey-darker">Register Here</h3>
                </div>
                <div class="mx-5">
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
                            <div class="w-40">
                                <v-text-field label="State" v-model="state" :rules="otherRules"></v-text-field>
                            </div>
                            <div class="w-40 mx-4">
                                <v-text-field label="City" v-model="city" :rules="otherRules"></v-text-field>
                            </div>
                            <div class="w-20">
                                <v-text-field label="Zip Code" v-model="zipcode" :rules="otherRules"></v-text-field>
                            </div>
                        </div>
                        <div class="w-100">
                            <h5 class="font-weight-light text-sm py-2">Where to donote</h5>
                            <div class="inline-block pb-5">
                                <input type="checkbox" v-model="projects" value="Education"><span class="text-sm mr-3"> Education</span>
                                <input type="checkbox" v-model="projects" value="Bird Track"><span class="text-sm mr-3"> Bird Track</span>
                                <input type="checkbox" v-model="projects" value="Conservation"><span class="text-sm mr-3"> Conservation</span>
                                <input type="checkbox" v-model="projects" value="Green Birding"><span class="text-sm mr-3"> Green Birding</span>
                            </div>
                            <div class="inline-block">
                                <input type="checkbox" v-model="projects" value="Research"><span class="text-sm mr-3"> Research</span>
                                <input type="checkbox" v-model="projects" value="Bird Ringing"><span class="text-sm mr-3"> Bird Ringing</span>
                            </div>
                            <div>
                                <v-textarea label="Leave a comment"></v-textarea>
                            </div>
                        </div>
                        <div class="text-centered py-5">
                            <button v-on:click.prevent="submit" class="bg-orange-dark btn text-white">Donate Now</button>
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
<style scoped>
    
</style>
<template>
    <div class="pt-5">
        <div class=" w-100 flex pt-5">
            <div class="w-50 my-12">
                <div class="w-90 mx-auto">
                    <h3 class="text-centered text-grey-darkest">Your gift will give a critical boost to the ROC's work in the areas of:</h3>
                </div>
                <div class="text-centered my-12 w-40 mx-auto text-grey-darkest">
                    <h5 class="py-3 bg-white-smoke border-1 border-solid border-grey rounded mb-3">Educating next generation</h5>
                    <h5 class="py-3 bg-white-smoke border-1 border-solid border-grey rounded mb-3">Bird Track</h5>
                    <h5 class="py-3 bg-white-smoke border-1 border-solid border-grey rounded mb-3">Conservation of Birds</h5>
                    <h5 class="py-3 bg-white-smoke border-1 border-solid border-grey rounded mb-3">Green Birding</h5> 
                </div>
                <div class="w-90 mx-auto text-centered text-grey-darkest">
                    <h3>We cannot reverse extinction,but together,</h3><h3> we CAN prevent it.</h3>
                </div>
            </div>
            <div class=" w-40 " v-show="!submitted">
                <div class="py-3 text-centered">
                    <h3 class="text-grey-darkest">Donate Here</h3>
                </div>
                <div class="mx-5 bg-white shadow-lg rounded">
                    <v-form ref="form">
                        <div class="w-100 flex">
                            <div class="w-50">
                                <v-text-field outlined label="First Name" v-model="firstname" :rules="nameRules"></v-text-field>
                            </div>
                            <div class="w-50">
                                <v-text-field outlined label="Last Name" v-model="lastname" :rules="nameRules"></v-text-field>
                            </div>
                        </div>
                        <div class="w-100 flex">
                            <div class="w-100">
                                <v-text-field outlined label="Email" v-model="email" :rules="emailRules"></v-text-field>
                            </div>
                        </div>
                        <div class="w-100 flex">
                            <div class="w-50">
                                <v-select outlined v-model="country" label="Country" :items="countries" :rules="countryRules"></v-select>
                            </div>
                            <div class="w-50">
                                <v-text-field outlined label="City" v-model="city" :rules="otherRules"></v-text-field>
                            </div>
                        </div>
                        <div class="w-100">
                            <v-text-field outlined label="Phone" v-model="phone" :rules="otherRules"></v-text-field>
                        </div>
                        <div>
                            <v-select v-model="project" outlined chips attach multiple :items="projects" label="Where to donate"></v-select>
                        </div>
                        <div>
                            <v-textarea outlined label="Leave a comment"></v-textarea>
                        </div>
                        <div class="text-centered">
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
            
        }
    }
}
</script>
<style scoped>
    
</style>
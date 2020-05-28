<template>
    <div class="pt-5">
        <div class="w-100 flex py-5">
            <div class="w-50 bg-white-smoke text-white my-5">
                <div>
                    <div class="text-centered py-5">
                        <h3 class="text-grey-darkest">Together We can protect the Birds </h3>
                    </div>
                    <div class="w-80 mx-auto border-1 border-solid border-grey rounded px-5">
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
            <div class=" w-50 my-auto">
                <div class=" text-grey-darkest text-centered">
                    <h3>Your Support will be Highly appreciated</h3>
                    <h5 class="pt-5">Together We can conserve birds</h5>
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
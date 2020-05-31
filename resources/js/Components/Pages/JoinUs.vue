<template>
    <div class="pt-5">
        <div class="w-100 xs:block flex">
            <div class="relative w-50 z-0 xs:hidden">
                <div class="absolute bg-black z-0" style="height: 100vh">
                     <v-img src="/img/IMG_2663.jpg" height="100%" class="w-100 opacity-50 clip-full"></v-img>
                </div>
                <div class="relative w-100 text-white  text-grey-darkest text-centered z-9999" style="margin-top: 14em">
                    <h1>Your Support will be Highly appreciated</h1>
                    <p class="text-2xl">Together We can conserve birds</p>
                </div>
                
            </div>
            <div class="xl:w-50 xs:w-100 bg-white text-white py-5">
                <div class="pt-5">
                    <div class="text-centered py-5">
                        <h3 class="text-grey-darkest xs:text-xl py-3">Join Us </h3>
                    </div>
                    <div class="w-90 mx-auto px-5">
                        <div>
                            <v-form ref="form" @submit="addMember">
                                <div>
                                    <p id="success" class="text-black"></p>
                                </div>
                                <div class="w-100 xs:block flex">
                                    <div class="xl:w-50 xs:w-100 mr-5">
                                        <v-text-field label="First Name" v-model="firstname" :rules="nameRules"></v-text-field>
                                    </div>
                                    <div class="xl:w-50 xs:w-100 ">
                                        <v-text-field label="Last Name" v-model="lastname" :rules="nameRules"></v-text-field>
                                    </div>
                                </div>
                                <div class="w-100 flex xs:block">
                                    <div class="xl:w-100  md:w-100 xs:w-100  ">
                                        <v-text-field label="Email" v-model="email" :rules="emailRules"></v-text-field>
                                    </div>
                                </div>
                                <div class="w-100 flex xs:block">
                                    <div class="xl:w-100  md:w-100  xs:w-100 ">
                                        <v-text-field label="Phone" v-model="phone"></v-text-field>
                                    </div>
                                </div>
                                <div class="w-100 flex xs:block">
                                    <div class="xl:w-50 xs:w-100 mr-5">
                                        <v-select label="Country" v-model="country" :items="items" class="" :rules="countryRules"></v-select>
                                    </div>
                                    <div class="xl:w-50 xs:w-100 ">
                                        <v-text-field label="City" v-model="city" :rules="otherRules"></v-text-field>
                                    </div>
                                    
                                </div>
                                
                                <div class="text-grey-darker">
                                    <input type="radio" v-model="option" value="Member" ><span class="px-2">Member</span>
                                    <input type="radio" v-model="option" value="Volunteer" ><span class="px-2">Volunteer</span>
                                </div>
                                <div class="text-centered py-5">
                                    <input type="submit" v-on:click.prevent="validate" class="bg-orange-dark btn text-white" value="Join Us Now">
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
        validate(){
            if(this.$refs.form.validate()){
                console.log(this.email)
                this.submitted = true
                this.addMember()
            }
        },
        addMember(){
            axios.post('/join-us',{
                first_name: this.firstname,
                last_name: this.lastname,
                email: this.email,
                phone: this.phone,
                city: this.city,
                country: this.country,
                
            }).then(response =>{
                $('#success').html(response.data.message)
                this.$refs.form.reset()
            })
        }

    }
}
</script>
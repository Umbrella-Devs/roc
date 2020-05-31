<template>
    <div class="pt-5">
        <div class=" w-100 xs:block flex">
            <div class="w-50 relative xs:hidden">
                <div class="absolute bg-black z-0" style="height: 130vh">
                     <v-img src="/img/IMG_2663.jpg" height="100%" class="w-100 opacity-50 clip-full"></v-img>
                </div>
                <div class="text-centered relative w-100 mx-auto text-grey-darkest" style="margin-top: 15em">
                    <div class="w-90 mx-auto text-centered text-white">
                    <h3>We cannot reverse extinction,but together,</h3><h3> we CAN prevent it.</h3>
                    </div>
                    <div class="flex w-90 mx-auto pt-5 text-xl font-weight-bold">
                        <div class="w-50 bg-white mx-3 pt-5 pb-2">
                            <p class="md:text-sm">Educating next generation</p>
                        </div>
                        <div class="w-50 bg-white mx-3 pt-5 pb-2">
                            <p class="md:text-sm">Bird Track</p>
                        </div>
                        
                    </div>
                    <div class="flex w-90 mx-auto pt-5 text-xl font-weight-bold">
                    <div class="w-50 bg-white mx-3 pt-5 pb-2">
                        <p class="md:text-sm">Conservation of Birds</p>
                    </div>
                    <div class="w-50 bg-white mx-3 pt-5 pb-2">
                        <p class="md:text-sm">Green Birding</p>
                    </div>
                    </div>
                </div>
                
            </div>
            <div class="my-12 xl:w-50 xs:w-100 xl:mx-12 ">
               
                <div>
                    
                    <div class="mx-5 p-3">
                        <div class="py-3 text-centered">
                        <h3 class="text-grey-darkest">Donate Here</h3>
                        </div>
                        <v-form ref="form" @submit.once="addDonate">
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
                            <div class="w-100">
                                <v-text-field label="Phone" v-model="phone" :rules="otherRules"></v-text-field>
                            </div>
                            <div class="w-100 flex">
                                <div class="w-50 mr-2">
                                    <v-text-field v-model="country" label="Country"  :rules="countryRules"></v-text-field>
                                </div>
                                <div class="w-50">
                                    <v-text-field label="City" v-model="city" :rules="otherRules"></v-text-field>
                                </div>
                            </div>
                            
                            <div class="">
                                <v-select v-model="project" chips attach multiple :items="projects" label="Where to donate"></v-select>
                            </div>
                            <div class="">
                                <v-textarea label="Leave a comment"></v-textarea>
                            </div>
                            <div class="text-centered">
                                <input type="submit" @click.prevent="validate" class="bg-orange-dark btn text-white" value="Donate Now"/>
                            </div>
                            <div>
                                <p id="success"></p>
                            </div>
                        </v-form> 
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
            zipcode:'',
            project:'',
            project_id:1,
            projects:[],
            select:null,
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
    created(){
        
    },
    methods:{
        validate(){
            if(this.$refs.form.validate()){
                console.log(this.email)
                this.submitted = true
                this.addDonate()
            } 
        },
        addDonate(){ 
            axios.post('/donate', {
                first_name: this.firstname,
                last_name: this.lastname,
                email: this.email,
                phone: this.phone,
                city: this.city,
                country: this.country,
                project_id: this.project_id
            }).then(response => {
                $('#success').html(response.data.message)
                this.$refs.form.reset()
            })
        },
    }
}
</script>
<style scoped>
    
</style>
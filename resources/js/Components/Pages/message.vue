<template>
    <div class="">
        <v-dialog v-model="dialog" max-width="600">
            <template v-slot:activator="{ on }">
                <button class="btn bg-orange-dark text-white" v-on="on">Send Message</button>
            </template>
            <v-card>
                <div class="flex bg-green-darkest">
                    <div class="w-100 bg-green-darkest">
                        <h3 class="text-centered headline text-white lighten-2 py-2">Send Message</h3>
                    </div>
                    <v-spacer></v-spacer>
                    <div class="pt-3">
                        <button @click="dialog = false" class="rounded-full px-2 text-white">X</button>
                    </div> 
                </div>
                <v-card-text>
                    <v-form ref="form" @submit="sendMessage">

                        <div class="text-center mt-2">
                            <p class="px-3 bg-green-dark rounded-r-full text-white w-60" v-show="submitted = submitted">Message Delivered</p>
                        </div>

                        <div>
                            <div class="flex xs:block w-100 mt-5">
                                <div class="xl:w-50 xs:w-100  xl:mr-5 mr-5">
                                    <v-text-field label="E-mail" v-model="email" :rules="emailRules"></v-text-field>
                                </div>
                                <div class="xl:w-50 xs:w-100 ">
                                    <v-text-field  label="Name" v-model="name" :rules="nameRules"></v-text-field>
                                </div>
                            </div>
                            <div>
                                <v-textarea label="Message" v-model="message" :rules="nameRules"></v-textarea>
                            </div>
                            <v-divider></v-divider>
                            <div class="text-centered py-3">
                                <input type="submit" @click.prevent="submit" value="Send Now" class="btn bg-orange-dark text-white"/>
                            </div>
                        </div>
                    </v-form>
                </v-card-text>
                <div class="text-centered py-2">
                    <h4 v-show="submitted = submitted" class="text-sm text-green"></h4>
                </div>
            </v-card>
        </v-dialog>
  </div>
</template>
<script>
  export default {
    data () {
      return {
        dialog: false,
        submitted:false,
        name:'',
        email:'',
        message:'',
        nameRules:[
            v => !!v || 'This field is required',
        ],
        emailRules:[
            v => !!v || 'E-mail is required',
            v => /.+@.+/.test(v) || 'E-mail must be valid',
        ],
      }
    },
    methods:{
        submit(){
            if(this.$refs.form.validate()){
                this.submitted = true
                this.sendMessage()
            }
        },
        sendMessage(){
            axios.post('/message',{
                name: this.name,
                email: this.email,
                message: this.message,
            }).then(response => {
                $('#success').html(response.data.message)
                this.$refs.form.reset()
            })
        }
    }
  }
</script>
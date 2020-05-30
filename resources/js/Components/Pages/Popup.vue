
<template>
    <div class="w-100">
        <v-dialog v-model="dialog" max-width="600">
            <template v-slot:activator="{ on }">
                <button class="btn bg-orange-dark w-100 text-white xs:w-100" v-on="on">Bird Track</button>
            </template>
            <v-card>
                <div class="flex bg-green-darkest">
                    <div class="w-100 bg-green-darkest">
                        <h3 class="text-centered headline text-white lighten-2 py-2">Record Birds Here</h3>
                    </div>
                    <v-spacer></v-spacer>
                    <div class="pt-3">
                        <button @click="dialog = false" class="text-white rounded-full px-2 text-white">X</button>
                    </div> 
                </div>
                <v-card-text>
                    <v-form ref="form">
                        <div>
                            <div class="w-100 flex">
                                <div class="w-60 mr-3">
                                    <v-text-field label="Bird Name" v-model="birdname" :rules="nameRules"></v-text-field>
                                </div>
                                <div>
                                    <v-text-field label="No of birds" v-model="numBirds"></v-text-field>
                                </div>
                            </div>
                            <div>
                                <v-text-field label="Activity Birds are doing" v-model="activity" :rules="nameRules"></v-text-field>
                            </div>
                            <div>
                                <v-textarea label="Some description here" v-model="description"></v-textarea>
                            </div>
                            <div class="w-100 flex">
                                <v-text-field label="Location" v-model="location" :rules="nameRules"></v-text-field>
                            </div>
                        </div>
                    </v-form>
                </v-card-text>
                <v-divider></v-divider>
                <div class="text-center">
                    <v-card-actions>
                        <h4 v-show="submitted = submitted" class="text-sm text-green">Data Succesfully submitted</h4>
                        <v-spacer></v-spacer>
                        <button @click="submit" class="btn bg-orange-dark text-center text-white">Submit</button>
                        <button @click="reset" class="btn border-red text-center text-red mx-3">Reset Form</button>
                    </v-card-actions>
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
        birdname:'',
        numBirds:'',
        description:'',
        activity:'',
        location:'',
        submitted:false,
        nameRules:[
            v => !!v || 'This field is required',
        ],
        
      }
    },
    methods:{
        submit(){
            if(this.$refs.form.validate()){
                this.submitted = true
                console.log('Done')
            }
        },
        reset () {
        this.$refs.form.reset()
            this.submitted = false;
            console.log('Resetted')  
        },
    }
  }
</script>
<template>
    <div>
        <div class="bg">
            <div  class="w-100 flex">
                <div class="w-45 mx-auto  text-grey-darkest bg-black px-5 py-5 opacity-75 rounded"
                    data-aos="fade-down" data-aos-duration="2000" style="margin-top:250px">
                    <div class=" text-white text-centered">
                        <h1 class="pb-3 text-3xl">Our Projects</h1>
                        <p>Saving Birds is an important mission, but the value of this work is even more far reaching. When birds are protected, so are their  forest habitats, which are critical ecosystems that support our planet and all life on earth.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-80 mx-auto">
            <div class="text-centered py-12">
                <h2>Birds Tracked</h2>
            </div>
            <div class="w-100 grid grid-4">
                <div class="shadow-md rounded bg-white mr-3">
                    <div class="w-100 flex  py-2 px-2">
                        <div class="w-50">
                            <h5 class="text-sm">Bird Name</h5>
                        </div>
                        <div class="w-50 text-right">
                            <p>45</p>
                        </div>
                    </div>
                    <div class="py-1 px-2">
                        <p>Actvity:hhhhhhhhh</p>
                    </div>
                    <div class="py-1 px-2">
                        <p>descripption</p>
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
            birds:{},
            bird:{
                name:'',
                activity:'',
                description:'',
                number:'',
            }
        }
    },
    created(){
        this.fetchBirds()
    },
    methods:{
        fetchBirds(){
            fetch('api/birds')
            .then(res => res.json())
            .then(res => {
                console.log(res.data);
            })
        }
    }
}
</script>
<style scoped>
    .bg{
        background-image: url('/img/IMG_1973.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        height: 470px;
    }
</style>
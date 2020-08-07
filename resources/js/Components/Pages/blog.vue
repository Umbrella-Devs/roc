<template>
    <div>
        <div class="bg-pjt w-100  mx-auto xs:py-5">
            <div class="py-5">
                <div class="pl-2 xl:py-3">
                    <h2 class="text-center xl:text-3xl xs:text-2xl text-white">Our Blog</h2>
                </div>
                <div class="py-5">
                    <div class="w-100 text-grey-darkest">
                        <div class="w-90 xs:block flex mx-auto">
                            <div class="w-5 xs:hidden"></div>
                            <div class="bg-white xl:w-30 md:w-30 md:mx-1 xs:w-100 xl:mx-3 xs:my-2 shadow-md" v-for="post in posts" :key="post" data-aos="zoom-in" data-aos-duration="2000">
                                <div class="">
                                    <img :src="'/storage/' + post.image" width="100%" height="200">
                                </div>
                                <div class="xs:pb-2">
                                    <div class="py-2">
                                        <h4 class="text-xs text-right px-2 text-orange-dark">Fri, May 23, 2020</h4>
                                    </div>
                                    <div class="px-4">
                                        <h3 class="text-sm py-2">{{post.title}}</h3>
                                        <p class="text-sm">{{post.excerpt | snippet}}</p>
                                    </div>
                                    <div class="text-right mx-5 mb-4">
                                        <button class="">
                                            <a :href="'/post/'+ post.id"  class="text-sm text-black btn border-orange-darker">Read More</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-5 xs:hidden"></div>
                        </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import Popup from './Popup.vue'

export default {
    components:{Popup},
    data(){
        return{
            posts:[],
        }
    },
    created(){
        this.fectchPosts();
    },
    methods:{
        fectchPosts(){
            fetch('api/posts')
            .then(res => res.json())
            .then(res => {
                this.posts = res.data
            })
        }
    }
}
</script>
<style scoped>

    .bg{
        background-image: url('/img/cropped_1973.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        height: 615px;
        
    }
    .bg-pjt{
        background-image: url('/img/lake.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        
    }
    .opacity{
        width: 100%;
        height: 615px;

    }
    .content{
        width: 100%;
        height: 615px;
        position: relative;
    }
    .line{
        height: 100px;
        border-left: 2px solid white;
    }
</style>
<template>
  <div v-if="!loading" class="py-12">
   <img class="w-full" src="https://picsum.photos/850/450" alt="">

    <section>
        <div class="container py-10">
            <h1 class="text-3xl">{{post.title}}</h1>
            <p class="text-cyan-500" v-if="post.category">{{post.category.name}}</p>
            <ul class="flex gap-2 items-center">
                <li class="text-white/50 italic text-sm after:content-[',']" v-for="tag in post.tags" :key="tag.id" >{{tag.name}}</li>
            </ul>

            <div class="py-12" v-html="post.content"></div>
        </div>
    </section>

  </div>
</template>

<script>
export default { 
    data(){
        return {
            post: null,
            loadign: true
        }
    },
    methods: {

        fetchPost(){
            axios.get(`/api/posts/${ this.$route.params.slug }`)
            .then( res => {
                const { post } = res.data
                this.post = post
                this.loadign = false
            })
            .catch( err => {
                console.warn(err)
            })
        }
    },
    beforeMount(){
        this.fetchPost();
    }
}
</script>

<style lang="scss" scoped>

</style>
<template>
  <div>
      <div class="container">
          <h1>Ultimi Post</h1>
      </div>
      <div class="container grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-8">
          <PostCard v-for="post in posts" :key="post.id" :post="post" />
      </div>
  </div>
</template>

<script> 

import PostCard from '../components/PostCard.vue'

export default {
    components: {
        PostCard,
    },
    data() {
        return {
            posts: []
        }
    },
    methods: {
        fetchPosts(){
            axios.get('/api/posts')
            .then(res => {
                const { posts } = res.data
                this.posts = posts
            })
            .catch( err => {
                console.warn(err)
            })
        }
    },
    mounted(){
        this.fetchPosts();
    }
}
</script>

<style lang="scss" scoped>

</style>
<template>
  <div class="app bg-zinc-700 text-white">
      <header class="ml-4">
          <nav>
              <ul>
                  <li>Home</li>
                  <li>Posts</li>
                  <li>Categories</li>
              </ul>
          </nav>
      </header>
      <PostGrid />
      <footer class="ml-4">
          Boolpress&copy; 2022 
      </footer>
  </div>
</template>

<script>
import PostGrid from './Posts.index.vue'

export default {

    components: {
        PostGrid,
    }
}
</script>

<style lang="scss" scoped>
.app{
    min-height: 100vh;
}
</style>
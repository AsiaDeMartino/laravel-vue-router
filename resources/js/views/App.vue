<template>
  <div class="app bg-zinc-700 text-white">
      <header class="ml-4">
          <nav class="py-6 flex gap-4 items-center">
              <ul class="contents">
                  <li>
                      <router-link :to="{name:'posts.index'}">Posts</router-link>
                  </li>
                  <li>
                      <router-link :to="{name:'contact'}">Contacts</router-link>
                  </li>
              </ul>
          </nav>
      </header>
      
    <router-view></router-view>

      <footer class="ml-4">
          Boolpress&copy; 2022 
      </footer>
  </div>
</template>

<script>
import PostGrid from '../pages/Posts.index.vue'

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
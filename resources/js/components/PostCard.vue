<template>
  <div class="card post rounded-lg border border-white/30 p-2">
      <img class="w-full object-cover" :src="post.cover" alt="">
      <div class="card-body p-6">
          <h4 class="mb-4 text-lg">{{post.title}}</h4>
          <p class="text-cyan-500 mb-2 text-sm font-bold" v-if="post.category">{{post.category.name}}</p>
          <ul class="flex flex-wrap gap-4 items-center">
              <li class="tag bg-white/30 rounded-full block px-4 text-xs" v-for="tag in post.tags" :key="tag.id">{{tag.name}}</li>
          </ul>
      </div>
  </div>
</template>

<script>
export default {
    props: {
        post: {
            type: Object,
            required: false,
        }
    }
}
</script>

<style lang="scss" scoped>

</style>
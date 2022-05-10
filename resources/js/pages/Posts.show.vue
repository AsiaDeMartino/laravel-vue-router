<template>
  <div class="py-12">
   {{ $route.params.slug }}
  </div>
</template>

<script>
export default {
    beforeMount(){
        axios.get(`/api/posts/${ this.$route.params.slug }`)
    }
}
</script>

<style lang="scss" scoped>

</style>
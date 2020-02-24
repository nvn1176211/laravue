<template>
    <div>
        <span v-html="$store.state.posts.posts[$store.state.posts.currentPostPage][$store.state.posts.currentPostDetailId].postContent"></span>
    </div>
</template>


<script>
export default {
  name: "postDetail",
  data: function() {
    return {

    };
  },
  created: function(){
    this.$store.commit("isInCurrentPostPage", '');
  }
};
</script>

<style scoped>
</style>

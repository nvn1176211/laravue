<template>
  <div class="post-heading-ctn">
    <b-container>
      <b-row>
        <b-col
          cols="12"
          lg="6"
          v-for="(item, index) in $store.state.posts.posts[$store.state.posts.currentPostPage]"
          :key="index"
          class="mb-15"
        >
          <div v-if="item.imgContent">
            <img class="loaded-img-ctn" :src="item.imgContent" alt="heading image" />
          </div>
          <div class="loading-img-ctn" v-else>
            <b-spinner variant="success" label="Spinning"></b-spinner>
            <span>Loading image...</span>
          </div>
          <b-card :title="item.heading" style="width: 350px;height: 200px" class="mb-2">
            <b-card-text>{{item.overall}}</b-card-text>
            <span class="fake-link-1 rp-p" @click="toDetail(item.id)">More</span>
          </b-card>
        </b-col>
      </b-row>
    </b-container>
  </div>
</template>


<script>
export default {
  name: "postComposer",
  data: function() {
    return {};
  },
  methods: {
    toDetail: function(postId) {
      this.$store.commit('changeCurrentPostDetailId', postId);
      if(this.$store.state.posts.posts[this.$store.state.posts.currentPostPage][this.$store.state.posts.currentPostDetailId]['postContent']){
        return;
      }
      axios({
        method: "post",
        url:
          this.$store.state.client_config.baseApiUrl + "post/detail",
        data: {
          postId: postId
        }
      })
        .then(response => {
          let postDetail = response.data.content;
          this.$store.commit('addPostContent', {
            postId: postId,
            postContent: postDetail,
          });
          this.$store.commit("changePageTitle", this.$store.state.posts.posts[this.$store.state.posts.currentPostPage][this.$store.state.posts.currentPostDetailId]['heading']);
          this.$store.commit("addBreadcrumb", {
            name: 'Post Detail',
            url: '#',
            clear: false
          });
        })
        .catch(error => {
          console.log(error); // eslint-disable-line no-console
        });
    }
  }
};
</script>

<style scoped>
.rp-p {
  position: absolute;
  bottom: 10px;
  right: 15px;
}
</style>

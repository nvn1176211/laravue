<template>
  <div>
    <allTags 
      v-if="isInAllTags"
    />
    <tag 
      v-if="isTag"
    />
  </div>
  <!-- <b-col sm="12" md="9" lg="10" class="main-content-ctn"> -->
  <!-- <div class="heading mb-10">
      <h2>{{page_title}}</h2>
      <div>
        <span v-for="(item, index) in $store.state.client_config.breadcrumb" :key="index">
          <span v-if="index + 1 != $store.state.client_config.breadcrumb.length">{{ item.name }} > </span>
          <span v-else>{{ item.name }}</span>
        </span>
      </div>
  </div>-->

  <!-- <div v-if="$store.state.client_config.page_title == 'Post'">
      <div>
        <button class="btn btn-primary" v-on:click="hiddenPostBtn" v-if="$store.state.posts.showPostBtn">New Post</button>
      </div>
      <PostComposer v-if="$store.state.posts.showPostCompose"></PostComposer>
  </div>-->

  <!-- <PostHeading v-if="$store.state.posts.isInPostHeading !== ''"></PostHeading>
  <PostDetail v-if="$store.state.posts.isInPostDetail !== ''"></PostDetail>-->
  <!-- </b-col> -->
</template>

<script>
import allTags from "../contents/AllTagsComponent";
import tag from "../contents/TagComponent";
// import PostComposer from "../contents/PostComposeComponent";
// import PostHeading from "../contents/PostHeadingComponent";
// import PostDetail from "../contents/PostDetailComponent";
export default {
  name: "layoutMaincontent",
  components: {
    allTags,
    tag,
    // PostComposer,
    // PostHeading,
    // PostDetail,
  },
  data: function() {
    return {
      isInAllTags: this.$store.state.client_config.pageInfo.isInAllTags,
      isTag: this.$store.state.client_config.pageInfo.isTag,
    };
  },
  computed: {
    page_title: function() {
      return this.$store.state.client_config.page_title;
    }
  },
  methods: {
    composerView: function() {
      window.history.length > 1 ? this.$router.go(-1) : this.$router.push("/");
    },
    hiddenPostBtn: function() {
      this.$store.commit("setPostBtnVisibility", false);
      this.$store.commit("setPostComposeVisibility", true);
    }
  }
};
</script>

<style scoped>
</style>
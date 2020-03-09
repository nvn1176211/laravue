<template>
  <div>
    <div class="head-ctn-1">
      <div class="w-200px">
        <b-form-input
          placeholder="filter by tag name"
        ></b-form-input>
      </div>
      
      <div class="bill-o1">
        <span class="bill-o1-f">Popular</span>
        <span class="bill-o1-m">Name</span>
        <span class="bill-o1-e">New</span>
      </div>
    </div>
    <div class="card-ctn">
      <div class="card-o1">
        <span>php</span>
        <br>
        <p class="t-ellipsis">comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment </p>
        <div class="total-o1">
          <span>100 questions</span>
          <span>50 asked today, 50 this week</span>
        </div>
      </div>
      <div class="card-o1">
        <span>php</span>
        <br>
        <p>comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment </p>
        <div class="total-o1">
          <span>100 questions</span>
          <span>50 asked today, 50 this week</span>
        </div>
      </div>
      <div class="card-o1">
        <span>php</span>
        <br>
        <p>comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment </p>
        <div class="total-o1">
          <span>100 questions</span>
          <span>50 asked today, 50 this week</span>
        </div>
      </div>
      <div class="card-o1">
        <span>php</span>
        <br>
        <p>comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment </p>
        <div class="total-o1">
          <span>100 questions</span>
          <span>50 asked today, 50 this week</span>
        </div>
      </div>
      <div class="card-o1">
        <span>php</span>
        <br>
        <p>comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment </p>
        <div class="total-o1">
          <span>100 questions</span>
          <span>50 asked today, 50 this week</span>
        </div>
      </div> 
    </div>
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
    </div> -->

    <!-- <div v-if="$store.state.client_config.page_title == 'Post'">
      <div>
        <button class="btn btn-primary" v-on:click="hiddenPostBtn" v-if="$store.state.posts.showPostBtn">New Post</button>
      </div>
      <PostComposer v-if="$store.state.posts.showPostCompose"></PostComposer>
    </div> -->

    <!-- <PostHeading v-if="$store.state.posts.isInPostHeading !== ''"></PostHeading>
    <PostDetail v-if="$store.state.posts.isInPostDetail !== ''"></PostDetail> -->
  <!-- </b-col> -->
</template>

<script>
// import PostComposer from "../contents/PostComposeComponent";
// import PostHeading from "../contents/PostHeadingComponent";
// import PostDetail from "../contents/PostDetailComponent";
export default {
  name: "layoutMaincontent",
  components: {
    // PostComposer,
    // PostHeading,
    // PostDetail,
  },
  data: function() {
    return {
      showPostCompose: false,
    };
  },
  computed: {
    page_title: function () {
      return this.$store.state.client_config.page_title;
    }
  },
  methods: {
    composerView: function() {
      window.history.length > 1 ? this.$router.go(-1) : this.$router.push("/");
    },
    hiddenPostBtn: function() {
      this.$store.commit('setPostBtnVisibility', false);
      this.$store.commit('setPostComposeVisibility', true);
    }
  },
};
</script>

<style scoped>
/* .main-content-ctn div.heading {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 15px;
} */
div.head-ctn-1{
  display: flex;
  justify-content: space-between;
  width: 100%;
}
div.bill-o1{
  display: flex;
}
div.bill-o1 span.bill-o1-f{
  border: 1px solid lightgray;
  border-right: none;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
  padding: 5px;
}
div.bill-o1 span.bill-o1-m{
  border: 1px solid lightgray;
  padding: 5px;
}
div.bill-o1 span.bill-o1-e{
  border: 1px solid lightgray;
  padding: 5px;
  border-left: none;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  padding: 5px;
}
div.card-ctn{
  display: flex;
  flex-wrap: wrap;
}
div.card-o1{
  border: 1px solid lightgray;
  border-radius: 5px;
  width: 300px;
  height: 200px;
  margin-right: 20px;
  margin-top: 20px;
  padding: 10px;
}
div.card-o1 p{
  width: 300px;
  height: 120px;
  overflow: hidden;
  /* white-space: nowrap;  */
}
div.total-o1{
  display: flex;
  justify-content: space-between;
}
div.total-o1 span{
  font-size: 12px;
  color: gray;
}
</style>
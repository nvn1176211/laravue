<template>
  <b-col cols="12" md="3" lg="2" class="aside-o1">
    <b-form-input v-model="search" placeholder="Search"></b-form-input>
    <div class="test-block-1 aside-search-result-view" v-if="$store.state.search.searchResult">
      <div v-for="(item, index) in $store.state.search.searchResult" :key="index">
        <p
          class="aside-search-result-view"
          @click="goTo(item.heading, item.url, true, item.postType, true)"
        >{{item.heading}}</p>
      </div>
    </div>
    <span class="menu-item" :class="{active: $store.state.posts.currentPostPage == 1}" @click="goTo('Front End', 'front_end', true, 1)">Front End</span>
    <span class="menu-item" :class="{active: $store.state.posts.currentPostPage == 2}" @click="goTo('PHP', 'php', true, 2)">PHP</span>
    <span class="menu-item" :class="{active: $store.state.posts.currentPostPage == 3}" @click="goTo('Laravel', 'laravel', true, 3)">Laravel</span>
    <span class="menu-item" :class="{active: $store.state.posts.currentPostPage == 4}" @click="goTo('CI', 'ci', true, 4)">CI</span>
    <span class="menu-item" :class="{active: $store.state.posts.currentPostPage == 5}" @click="goTo('Vue', 'vue', true, 5)">Vue</span>
  </b-col>
</template>

<script>
import { mapState } from "vuex";
export default {
  name: "layoutLeftaside",
  data: function() {
    return {
      search: ""
    };
  },
  methods: {
    goTo: function(name, url, clear, postType = "", isSearch = false) {
      if (isSearch) {
        this.$store.commit("changeSearchResult", "");
        this.search = "";
      }

      this.$store.commit("addBreadcrumb", {
        name: name,
        url: url,
        clear: clear
      });
      this.$store.commit("changePageTitle", name);
      this.$store.commit("setCurrentPostPage", postType);
      this.$store.commit("isInPostDetail", '');

      if(this.$store.state.posts.posts[postType]){
        return;
      }

      axios({
        method: "post",
        url:
          this.$store.state.client_config.baseApiUrl + "post/get_post_heading",
        data: {
          postType: postType
        }
      })
        .then(response => {
          let arr = response.data;

          Object.keys(arr).forEach((item, index) =>{
            arr[item].imgContent = "";
            arr[item].postContent = "";
          });

          this.$store.commit("addPostHeading", {
            postType: postType,
            data: arr
          });
          for (const [postId, data] of Object.entries(arr)) {
            axios({
              method: "post",
              url:
                this.$store.state.client_config.baseApiUrl + "images/download",
              data: {
                url: data.heading_img_url
              }
            })
              .then(response => {
                arr[postId].imgContent = response.data;
                this.$store.commit("addPostHeading", {
                  postType: postType,
                  data: arr,
                });
              })
              .catch(error => {
                console.log(error);
              });
          }
        })
        .catch(error => {
          console.log(error); // eslint-disable-line no-console
        });
    },
  },
  watch: {
    search: function(val) {
      if (val === "") {
        this.$store.commit("changeSearchResult", "");
        return;
      }
      let searchObject = this.$store.state.search.searchObject;
      let searchResult = [];
      searchObject.forEach((item, index) => {
        let text1 = item.heading.trim().toLowerCase();
        val = val.trim().toLowerCase();
        if (text1.indexOf(val) >= 0) {
          searchResult.push(item);
        }
      });
      this.$store.commit("changeSearchResult", searchResult);
    }
  }
};
</script>

<style scoped>
.aside-o1 {
  width: 15%;
  display: flex;
  flex-direction: column;
  padding: 15px;
  border-right: 1px solid #a8a8a8;
}
.aside-o1 span.menu-item {
  color: rgba(0, 0, 0, 0.65);
  padding-top: 10px;
  padding-left: 5px;
  cursor: pointer;
}
.aside-o1 span.menu-item:hover {
  color: black;
}
.aside-o1 span.active {
  color: black;
  font-weight: bolder;
}

div.test-block-1 {
  padding: 15px 0;
  background-color: white;
  width: 100%;
  height: 40vh;
  z-index: 99;
  margin-top: 10px;
  border: 1px solid rgb(168, 168, 168);
}

div.test-block-1 p {
  padding: 10px 15px;
  margin: 0;
  cursor: pointer;
}
div.test-block-1 p:hover {
  background-color: #e8ffee;
}

@media only screen and (min-width: 768px) {
  div.test-block-1 {
    width: 40vw;
    height: 40vh;
  }
}
</style>

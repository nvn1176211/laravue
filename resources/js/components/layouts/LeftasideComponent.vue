<template>
  <b-col sm="12" md="3" class="aside-o1">
    <b-form-input v-model="search" placeholder="Search"></b-form-input>
    <span class="menu-item" @click="goTo('Front End', 'front_end', true, 1)">Front End</span>
    <span class="menu-item" @click="goTo('PHP', 'php', true, 2)">PHP</span>
    <span class="menu-item" @click="goTo('Laravel', 'laravel', true, 3)">Laravel</span>
    <span class="menu-item" @click="goTo('CI', 'ci', true, 4)">CI</span>
    <span class="menu-item" @click="goTo('Vue', 'vue', true, 5)">Vue</span>
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
    goTo: function(name, url, clear, postType = "") {
      this.$store.commit("addBreadcrumb", {
        name: name,
        url: url,
        clear: clear
      });
      this.$store.commit("changePageTitle", name);
      this.$store.commit("setCurrentPostPage", postType);

      axios({
        method: "post",
        url:
          this.$store.state.client_config.baseApiUrl + "post/get_post_heading",
        data: {
          postType: postType
        }
      })
        .then(response => {
          console.log(response.data); // eslint-disable-line no-console

          this.$store.commit("addPostHeading", response.data);
        })
        .catch(error => {
          console.log(error); // eslint-disable-line no-console
        });
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
</style>

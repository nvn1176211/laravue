<template>
  <aside class="aside-o1">
    <span class="menu-item" @click="goTo('Front End', 'front_end', true, 1)">Front End</span>
    <span class="menu-item" @click="goTo('PHP', 'php', true, 2)">PHP</span>
    <span class="menu-item" @click="goTo('Laravel', 'laravel', true, 3)">Laravel</span>
    <span class="menu-item" @click="goTo('CI', 'ci', true, 4)">CI</span>
    <span class="menu-item" @click="goTo('Vue', 'vue', true, 5)">Vue</span>
  </aside>
</template>

<script>
import { mapState } from "vuex";
export default {
  name: "layoutLeftaside",
  methods: {
    goTo: function(name, url, clear, postType = '') {
      this.$store.commit("addBreadcrumb", {
        name: name,
        url: url,
        clear: clear
      });
      this.$store.commit("changePageTitle", name);

      axios({
        method: "post",
        url: this.$store.state.client_config.baseApiUrl + "post/get_post_heading",
        data: {
          postType: postType
        }
      })
        .then(response => {
          console.log(response.data); // eslint-disable-line no-console
          

          this.$store.state.posts.postHeadings = response.data;
        })
        .catch(error => {
          console.log(error); // eslint-disable-line no-console
        });
    }
  }
};
</script>

<template>
  <aside class="aside-o1">
    <span class="menu-item" @click="goTo('Front End', 'front_end', true)">Front End</span>
    <span class="menu-item" @click="goTo('PHP', 'php', true)">PHP</span>
    <span class="menu-item" @click="goTo('Laravel', 'laravel', true)">Laravel</span>
    <span class="menu-item" @click="goTo('CI', 'ci', true)">CI</span>
    <span class="menu-item" @click="goTo('Vue', 'vue', true)">Vue</span>
  </aside>
</template>

<script>
import { mapState } from "vuex";
export default {
  name: "layoutLeftaside",
  methods: {
    goTo: function(name, url, clear) {
      this.$store.commit("addBreadcrumb", {
        name: name,
        url: url,
        clear: clear
      });
      this.$store.commit("changePageTitle", name);
    }
  }
};
</script>

<template>
  <aside class="aside-o1">
    <a href class="active">Front End</a>
    <a href>PHP</a>
    <a href>Laravel</a>
    <a href>CI</a>
    <a href>Vue</a>
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

<template>
  <nav class="nav-o1">
    <div>
      <a href class="logo mr-15">NVN</a>
      <a href class="active">Docs</a>
      <a href class="pl-10">About Me</a>
    </div>
    <div>
      <span class="menu-item" @click="goTo('Post', 'post', true)">Post</span>
    </div>
  </nav>
</template>

<script>
export default {
  name: "layoutHeader",
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

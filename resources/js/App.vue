<template>
  <div @click="closeSearchResult1" v-on:keyup.esc="closeSearchResult2">
    <layoutHeader v-if="!$store.state.client_config.isLandingPage" />
    <headerLandingPage v-else />
    <middle />
    <layoutFooter />
  </div>
</template>

<script>
import layoutHeader from "./components/layouts/HeaderComponent";
import headerLandingPage from "./components/layouts/HeaderLandingPageComponent";
import middle from "./components/layouts/MiddleComponent";
import layoutFooter from "./components/layouts/FooterComponent";
export default {
  components: {
    layoutHeader,
    middle,
    layoutFooter,
    headerLandingPage
  },
  data: function() {
    return {
      screenWidth: screen.width
    };
  },
  methods: {
    closeSearchResult1: function(event) {
      if (this.$store.state.client_config.isLandingPage) return;
      let className = event.target.className;
      if (className.indexOf("aside-search-result-view") < 0) {
        this.$store.commit("changeSearchResult", "");
      }
    },
    closeSearchResult2: function() {
      this.$store.commit("changeSearchResult", "");
    }
  }
};
</script>

<style scoped>

</style>


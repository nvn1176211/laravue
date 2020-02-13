<template>
  <div @click="closeSearchResult1"  v-on:keyup.esc="closeSearchResult2">
    <layoutHeader  v-if="!$store.state.client_config.isLandingPage" />
    <headerLandingPage v-if="$store.state.client_config.isLandingPage" />

    <middle />
    <layoutFooter />
    <!-- <div class="h-100per">
    <layoutHeader />
    <div class="middle-ctn" :style="{minHeight: minMiddleCtn + 'px'}">
      <layoutLeftaside />
      <layoutMaincontent />
    </div>
    <layoutFooter />
    </div>-->
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
    headerLandingPage,
  },
  data: function() {
    return {
    };
  },
  methods: {
    closeSearchResult1: function(event){
      let className = event.target.className;
      if( className.indexOf('aside-search-result-view') < 0 ){
        this.$store.commit('changeSearchResult', '');
      }
    },
    closeSearchResult2: function(){
      this.$store.commit('changeSearchResult', '');
    },
  }
};
</script>

<style scoped>

</style>


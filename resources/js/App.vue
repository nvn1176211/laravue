<template>
  <div @click="closeSearchResult1" v-on:keyup.esc="closeSearchResult2">
    <layoutHeader v-if="!$store.state.client_config.isLandingPage" />
    <headerLandingPage v-if="$store.state.client_config.isLandingPage" />
    <middle />
    <layoutFooter />

    <div class="svg-ctn-1" v-if="screenWidth < 576">
      <svg class="modal-svg">
        <!-- <rect x="0" y="0" fill="none" width="226" height="162" rx="3" ry="3" /> -->
        <rect
          x="5vw"
          y="60"
          width="90vw"
          height="150"
          style="fill:none;stroke:pink;stroke-width:2px"
        />
      </svg>
    </div>
    <div class="svg-ctn-1" v-else-if="screenWidth < 992">
      <svg class="modal-svg">
        <!-- <rect x="0" y="0" fill="none" width="226" height="162" rx="3" ry="3" /> -->
        <line x1="0" y1="0" x2="100" y2="0" style="fill:none;stroke:pink;stroke-width:2px" />
      </svg>
    </div>
    <div class="svg-ctn-1" v-else>
      <svg class="modal-svg">
        <!-- <rect x="0" y="0" fill="none" width="226" height="162" rx="3" ry="3" /> -->
        <!-- <line  x1="0%" y1="50" x2="100%" y2="50" stroke-dashoffset='100' class="sketch-animation-1" /> -->
        <line  x1="0%" y1="50" x2="100%" y2="50" class="sketch-animation-1" />
      </svg>
    </div>
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
div.svg-ctn-1 {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: calc(100% + 130px);
}
.modal-svg {
  width: 100%;
  height: 100%;
}
.sketch-animation-1 {
  stroke: green;
  stroke-dasharray: 100vw;
  stroke-dashoffset: 100vw;
  animation: sketchIn 2s infinite;
}

@keyframes sketchIn {
  0% {
    stroke-dashoffset: 100vw;
  }
  100% {
    stroke-dashoffset: 0vw;
  }
}
</style>


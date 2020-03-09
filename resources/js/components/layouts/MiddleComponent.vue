<template>
  <b-container fluid class="mh-100vh">
    <landingPage v-if="$store.state.client_config.isLandingPage" />
    <div v-if="!$store.state.client_config.isLandingPage" class="mh-100vh">
      <!-- <layoutLeftaside /> -->
      <layoutMaincontent />
    </div>
  </b-container>
</template>

<script>
import landingPage from "../contents/LandingPageComponent";
// import layoutLeftaside from "./LeftasideComponent";
import layoutMaincontent from "./MaincontentComponent";
export default {
  name: "middle",
  components: {
    landingPage,
    // layoutLeftaside,
    layoutMaincontent,
  },
  data: function() {
    return {};
  },
};
</script>


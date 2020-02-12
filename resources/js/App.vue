<template>
  <div>
    <layoutHeader />
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
import middle from "./components/layouts/MiddleComponent";
import layoutFooter from "./components/layouts/FooterComponent";
export default {
  components: {
    layoutHeader,
    middle,
    layoutFooter
  },
  data: function() {
    return {
    };
  },
};
</script>



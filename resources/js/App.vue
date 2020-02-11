<template>
  <div>
    <layoutHeader />
    <b-container fluid style="height: 100vh">
      <div class="test-ctn-1" :style="testCtn1">
        <div class="nvn-block-1" :style="nvnBlock1"></div>
        <div class="nvn-block-1" :style="nvnBlock2"></div>
        <div class="nvn-block-1" :style="nvnBlock3"></div>
        <div class="nvn-block-1" :style="nvnBlock4"></div>
        <div class="nvn-block-1" :style="nvnBlock5"></div>
        <div class="nvn-block-1" :style="nvnBlock6"></div>
        <div class="nvn-block-1" :style="nvnBlock7"></div>
        <div class="nvn-block-1" :style="nvnBlock8"></div>
      </div>
      <!-- <b-row>
        <b-col md="3" xl="2" class="sidebar-o1">
          <b-nav-form>
            <b-form-input size="sm" class="mr-sm-2" placeholder="Search"></b-form-input>
          </b-nav-form>
        </b-col>
        <b-col md="9" xl="10">2 of 3</b-col>
      </b-row>-->
    </b-container>
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
import layoutLeftaside from "./components/layouts/LeftasideComponent";
import layoutMaincontent from "./components/layouts/MaincontentComponent";
import layoutFooter from "./components/layouts/FooterComponent";
export default {
  components: {
    layoutHeader,
    layoutLeftaside,
    layoutMaincontent,
    layoutFooter
  },
  data: function() {
    return {
      minMiddleCtn: window.innerHeight,
      nvnBlock1: "",
      nvnBlock2: "",
      nvnBlock3: "",
      nvnBlock4: "",
      nvnBlock5: "",
      nvnBlock6: "",
      nvnBlock7: "",
      nvnBlock8: "",
      testCtn1: ""
    };
  },
  mounted: function() {
    setTimeout(() => {
      this.nvnBlock1 = {
        transform: "translate(10vw,0) rotate(90deg)",
      };
      this.nvnBlock2 = {
        transform: "translate(5vw,0) rotate(45deg)",
      };
      this.nvnBlock3 = {
        transform: "translate(0vw,0) rotate(90deg)",
      };
      this.nvnBlock6 = {
        transform: "translate(0vw,0) rotate(90deg)",
      };    
      this.nvnBlock7 = {
        transform: "translate(-5vw,0) rotate(45deg)",
      };
      this.nvnBlock8 = {
        transform: "translate(-10vw,0) rotate(90deg)",
      };
      this.nvnBlock4 = {
        transform: "translate(2.25vw,0) rotate(60deg)",
      };
      this.nvnBlock5 = {
        transform: "translate(-2.25vw,0) rotate(-60deg)",
      };
    }, 1000);
  }
};
</script>

<style scoped>
.nvn-block-1 {
  display: inline-block;
  width: 8vw;
  height: 2vw;
  background-color: green;
  transition: width 1s, transform 1s;   
}
.test-ctn-1 {
  padding-top: 40vh;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: 1s;
}
</style>

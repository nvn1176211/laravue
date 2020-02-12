<template>
  <div>
    <p class="lp-ia" :style="lpiaStyle">I&nbsp; AM</p>
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
  </div>
</template>


<script>
export default {
  name: "landingPage",
  data: function() {
    return {
      lpiaStyle: "",
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
      this.lpiaStyle = {
        textShadow: '1vw 1vw 4vw, -1vw -1vw 4vw',
        opacity: 0,
      };
      this.nvnBlock1 = {
        transform: "translate(10vw,0) rotate(90deg)"
      };
      this.nvnBlock2 = {
        transform: "translate(5vw,0) rotate(45deg)"
      };
      this.nvnBlock3 = {
        transform: "translate(0vw,0) rotate(90deg)"
      };
      this.nvnBlock6 = {
        transform: "translate(0vw,0) rotate(90deg)"
      };
      this.nvnBlock7 = {
        transform: "translate(-5vw,0) rotate(45deg)"
      };
      this.nvnBlock8 = {
        transform: "translate(-10vw,0) rotate(90deg)"
      };
      this.nvnBlock4 = {
        transform: "translate(2.25vw,0) rotate(60deg)"
      };
      this.nvnBlock5 = {
        transform: "translate(-2.25vw,0) rotate(-60deg)"
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
  display: flex;
  justify-content: center;
  align-items: center;
  transition: 1s;
}

p.lp-ia {
  text-align: center;
  font-size: 8vw;
  color: green;
  transition: 1s;
}
</style>
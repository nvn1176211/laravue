<template>
  <div class="post-heading-ctn">

    <!-- SAVE -->
    
    <b-container>
      <b-row>
        <b-col cols="12" lg="6" v-for="(item, index) in $store.state.posts.postHeadings" :key="index" class="mb-15">
          <div v-if="item.imgContent">
            <img
              class="loaded-img-ctn"
              :src="item.imgContent"
              alt="heading image"
            />
          </div>
          <div class="loading-img-ctn" v-else>
            <b-spinner variant="success" label="Spinning"></b-spinner>
            <span>Loading image...</span>
          </div>
          <b-card :title="item.heading" style="width: 350px;height: 200px" class="mb-2">
            <b-card-text>{{item.overall}}</b-card-text>
            <a href="#" class="card-link rp-p">More</a>
          </b-card>
        </b-col>
      </b-row>
    </b-container>
  </div>
</template>


<script>
export default {
  name: "postComposer",
  data: function() {
    return {
    };
  },
};
</script>

<style scoped>
  .rp-p{
    position: absolute;
    bottom: 10px;
    right: 15px;
  }
</style>

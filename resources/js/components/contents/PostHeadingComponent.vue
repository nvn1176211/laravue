<template>
  <div class="post-heading-ctn">
    <b-container>
      <b-row>
        <b-col>1 of 3</b-col>
        <b-col>2 of 3</b-col>
        <b-col>3 of 3</b-col>
      </b-row>
    </b-container>

    <div v-for="(item, index) in $store.state.posts.postHeadings" :key="index">
      <div class="loading-img-ctn">
        <b-spinner variant="success" label="Spinning"></b-spinner>
        <span>Loading image...</span>
      </div>
      <b-card :title="item.heading" style="width: 20rem;height: 10rem" class="mb-2">
        <b-card-text>{{item.overall}}</b-card-text>

        <b-button href="#" variant="primary">More</b-button>
      </b-card>
    </div>
  </div>
</template>


<script>
export default {
  name: "postComposer"
};
</script>

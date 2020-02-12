<template>
  <div class="post-heading-ctn">
    <b-container>
      <b-row >
        <b-col v-for="(item, index) in $store.state.posts.postHeadings" :key="index" class="mb-15">
          <div class="loading-img-ctn">
            <b-spinner variant="success" label="Spinning"></b-spinner>
            <span>Loading image...</span>
          </div>
          <b-card :title="item.heading" style="width: 350px;height: 200px" class="mb-2">
            <b-card-text>{{item.overall}}</b-card-text>
          </b-card>
        </b-col>
      </b-row>
    </b-container>
  </div>
</template>


<script>
export default {
  name: "postComposer"
};
</script>

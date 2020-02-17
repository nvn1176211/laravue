<template>
  <div class="post-heading-ctn">
    <!-- <p>{{test123}}</p> -->
    <b-container>
      <b-row>
        <b-col v-for="(item, index) in $store.state.posts.postHeadings" :key="index" class="mb-15">
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
  computed: {
    // test123: function() {
    //   // watch this.$store.state.posts.postHeadings
    //   let arr = this.$store.state.posts.postHeadings;

    //   //same request problem, can't resolve because asynchronous

    //   for (let i = 0, l = arr.length; i < l; i++) {
    //     axios({
    //       method: "post",
    //       url: this.$store.state.client_config.baseApiUrl + "images/download",
    //       data: {
    //         url: arr[i].heading_img_url
    //       }
    //     })
    //       .then(response => {
    //         let param = {
    //           postPage: arr[i].type_id,
    //           headingId: arr[i].id,
    //           img64: response.data,
    //         }
    //         this.$store.commit("addPostHeadingImg64", param);
    //       })
    //       .catch(error => {
    //         console.log(error); // eslint-disable-line no-console
    //       });
    //   }

    // }
  }
};
</script>

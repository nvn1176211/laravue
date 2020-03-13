<template>
  <div>
    <div class="head-ctn-1">
      <div class="w-200px">
        <b-form-input placeholder="filter by tag name"></b-form-input>
      </div>

      <div class="bill-o1">
        <span class="bill-o1-f">Popular</span>
        <span class="bill-o1-m">Name</span>
        <span class="bill-o1-e">New</span>
      </div>
    </div>
    <div class="card-ctn">
      <div class="card-o1" v-for="(tag, index) in allTags" :key="index">
        <img :src="tag.img_content" alt="logo_tag" class="h150-mw300">
        <div>
          <p>{{tag.tag_name}}</p>
          <div class="total-o1">
            <span>{{tag.total}} questions</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
export default {
  name: "allTags",
  data: function() {
    return {
      allTags: []
    };
  },
  created: function() {
    axios({
      method: "post",
      url: this.$store.state.client_config.baseApiUrl + "tags/all"
    })
      .then(response => {
        let data = response.data;
        data.forEach(element => {
          element.img_content = '';
        });
        this.allTags = data;

        data.forEach((value, index) => {
          axios({
            method: "post",
            url: this.$store.state.client_config.baseApiUrl + "images/download",
            data: {
              url: value.logo_img_url
            }
          })
            .then(response => {
              value.img_content = response.data;
              this.allTags = data;
            })
            .catch(error => {
              console.log(error);
            });
        });
      })
      .catch(error => {
        console.log(error); // eslint-disable-line no-console
      });
  }
};
</script>

<style scoped>
div.head-ctn-1 {
  display: flex;
  justify-content: space-between;
  width: 100%;
}
div.bill-o1 {
  display: flex;
}
div.bill-o1 span.bill-o1-f {
  border: 1px solid lightgray;
  border-right: none;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
  padding: 5px;
}
div.bill-o1 span.bill-o1-m {
  border: 1px solid lightgray;
  padding: 5px;
}
div.bill-o1 span.bill-o1-e {
  border: 1px solid lightgray;
  padding: 5px;
  border-left: none;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  padding: 5px;
}
div.card-ctn {
  display: flex;
  flex-wrap: wrap;
}
div.card-o1 {
  border: 1px solid lightgray;
  border-radius: 5px;
  width: 300px;
  height: 200px;
  margin-right: 20px;
  margin-top: 20px;
  padding: 10px;
  display: flex;
  flex-direction: column;
  align-content: center;
}

div.total-o1 {
  display: flex;
  justify-content: space-between;
}
div.total-o1 span {
  font-size: 12px;
  color: gray;
}
</style>

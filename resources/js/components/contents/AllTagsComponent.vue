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
      <div class="card-o1" v-for="item in items" :key="item.message">

      </div>
      <div class="card-o1">
        <span>php</span>
        <br />
        <p
          class="t-ellipsis"
        >comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment</p>
        <div class="total-o1">
          <span>100 questions</span>
          <span>50 asked today, 50 this week</span>
        </div>
      </div>
      <div class="card-o1">
        <span>php</span>
        <br />
        <p>comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment</p>
        <div class="total-o1">
          <span>100 questions</span>
          <span>50 asked today, 50 this week</span>
        </div>
      </div>
      <div class="card-o1">
        <span>php</span>
        <br />
        <p>comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment</p>
        <div class="total-o1">
          <span>100 questions</span>
          <span>50 asked today, 50 this week</span>
        </div>
      </div>
      <div class="card-o1">
        <span>php</span>
        <br />
        <p>comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment</p>
        <div class="total-o1">
          <span>100 questions</span>
          <span>50 asked today, 50 this week</span>
        </div>
      </div>
      <div class="card-o1">
        <span>php</span>
        <br />
        <p>comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment</p>
        <div class="total-o1">
          <span>100 questions</span>
          <span>50 asked today, 50 this week</span>
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
      allTags: [],
    };
  },
  created: function() {
    axios({
      method: "post",
      url: this.$store.state.client_config.baseApiUrl + "tags/all",
    })
      .then(response => {
        console.log(response.data);
        this.allTags = response.data;
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
}
div.card-o1 p {
  width: 300px;
  height: 120px;
  overflow: hidden;
  /* white-space: nowrap;  */
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

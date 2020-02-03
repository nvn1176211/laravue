<template>
  <div class="box">
    <form id="postForm">
      <div class="alert alert-danger alert-dismissible" v-if="overallError">
        <h4 class="p-0">{{overallError}}</h4>
      </div>
      <div class="box-header with-border">
        <div class="form-group">
          <label>Select</label>
          <select class="form-control" v-model="postType">
            <option v-for="(item, index) in postTypes" :key="index" :value="item.id">{{item.name}}</option>
          </select>
        </div>
        <div>
          <p class="text-red" v-for="(item, index) in postHeadingError" :key="index">{{item}}</p>
        </div>
        <input
          name="postHeading"
          type="text"
          class="form-control"
          placeholder="Heading title"
          v-model="postHeading"
        />
      </div>
      <div class="box-body">
        <div>
          <p class="text-red" v-for="(item, index)  in postContentError" :key="index">{{item}}</p>
        </div>
        <ckeditor :editor="editor" v-model="editorData" :config="editorConfig"></ckeditor>
      </div>
      <div class="box-footer">
        <button type="button" @click="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</template>


<script>
import CKEditor from "@ckeditor/ckeditor5-vue";
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";
export default {
  name: "postComposer",
  components: {
    ckeditor: CKEditor.component
  },
  data: function() {
    return {

      overallError: "",
      postHeadingError: "",
      postContentError: "",
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
      postHeading: "",
      editor: ClassicEditor,
      editorData: "<p>Content of the editor.</p>",
      editorConfig: {
        // The configuration of the editor.
      },
      postType: '',
      postTypes: [
        {
          'id': '',
          'name': '',
        }
      ],
      
    };
  },
  methods: {
    submit: function() {
      axios({
        method: "post",
        url: this.$store.state.client_config.baseApiUrl + "post/create",
        data: {
          postType: this.postType,
          postHeading: this.postHeading,
          postContent: this.editorData,
        }
      })
        .then(function(response) {
          console.log(response); // eslint-disable-line no-console
        })
        .catch(error => {
          let overallError = error.response.data.message;
          let postHeadingError = error.response.data.errors.postHeading;
          let postContentError = error.response.data.errors.postContent;
          postHeadingError.forEach((item, index) => {
            postHeadingError[index] = item.replace(/(\[ ")|(" \])/g, "");
          });
          postHeadingError.forEach((item, index) => {
            postContentError[index] = item.replace(/(\[ ")|(" \])/g, "");
          });
          this.overallError = overallError;
          this.postHeadingError = postHeadingError;
          this.postContentError = postContentError;
        });
    }
  },
  created: function() {
    axios({
      method: "get",
      url: this.$store.state.client_config.baseApiUrl + "post/get_post_types",
    })
      .then(response => {
        this.postTypes = response.data;
      });
  }
};
</script>

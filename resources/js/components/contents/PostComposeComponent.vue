<template>
  <div>
    <b-form-select v-model="postType" :options="postTypes" class="mb-15">
      <template v-slot:first>
        <b-form-select-option :value="null" disabled>-- Post Type --</b-form-select-option>
      </template>
    </b-form-select>
    <b-form-file
      v-model="headingImg"
      name="headingImg"
      placeholder="Choose a file image or drop it here..."
      drop-placeholder="Drop file image here..."
    ></b-form-file>
    <b-form-input v-model="postHeading" placeholder="-- Post Heading --" class="mb-15 mt-15"></b-form-input>
    <ckeditor :editor="editor" v-model="editorData" :config="editorConfig"></ckeditor>
    <button type="button" @click="submit" class="btn btn-primary mt-15">Submit</button>
    <button type="button" @click="reset" class="btn btn-danger mt-15">Reset</button>
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
      csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
      headingImg: '',
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
      postType: null,
      postTypes: []
    };
  },
  methods: {
    submit: function() {
      let formData = new FormData();
      formData.append('postType', this.postType);
      formData.append('postHeading', this.postHeading);
      formData.append('postContent', this.postContent);
      formData.append('headingImg', this.headingImg);
      axios({
        method: "post",
        url: this.$store.state.client_config.baseApiUrl + "post/create",
        data: formData,
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
    },
    reset: function() {
      this.postHeading = "";
      this.postType = null;
      this.editorData = "<p>Content of the editor.</p>";
    },
  },
  created: function() {
    axios({
      method: "get",
      url: this.$store.state.client_config.baseApiUrl + "post/get_post_types"
    }).then(response => {
      let arr = [];
      response.data.forEach(function(item, index) {
        arr.push({ value: item.id, text: item.name });
      });
      this.postTypes = arr;
    });
  }
};
</script>

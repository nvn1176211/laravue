<template>
  <b-navbar type="light" variant="light" class="header-nav-1">
    <b-navbar-nav class="ml-auto">
      <b-nav-item href="#" v-b-modal.modal-login>Login</b-nav-item>
      <b-modal id="modal-login" title="Login">
        <b-form ref="loginForm">
          <b-form-group label="Username:">
            <b-form-input type="text" v-model="loginUserName" required></b-form-input>
          </b-form-group>
          <b-form-group label="Password:">
            <b-form-input type="text" v-model="loginPassword" required></b-form-input>
          </b-form-group>
        </b-form>
        <template v-slot:modal-footer="{ }">
          <b-button type="reset" size="md" variant="danger">Reset</b-button>
          <b-button size="md" variant="success" @click="submitLogin">Submit</b-button>
        </template>
      </b-modal>
    </b-navbar-nav>
  </b-navbar>
</template>

<script>
export default {
  name: "headerLandingPage",
  data: function() {
    return {
      loginForm2: "",
      loginUserName: "",
      loginPassword: "",
    };
  },
  methods: {
    submitLogin: function() {
      axios
        .post(this.$store.state.client_config.baseApiUrl + "users/login", {
          username: this.loginUserName,
          password: this.loginPassword,
        })
        .then(function(response) {
          console.log(response);
        })
        .catch(function(error) {
          console.log(error);
        });
    }
  }
};
</script>

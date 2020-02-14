<template>
  <b-navbar type="light" variant="light" class="header-nav-1">
    <b-navbar-nav class="ml-auto">
      <b-nav-item href="#" v-b-modal.modal-login>Login</b-nav-item>
      <b-modal id="modal-login" title="Login">
        <b-form>
          <b-form-group label="Username:">
            <b-form-input type="text" name="loginUserName" required></b-form-input>
          </b-form-group>
          <b-form-group label="Password:">
            <b-form-input type="text" name="loginPassword" required></b-form-input>
          </b-form-group>
        </b-form>
        <template v-slot:modal-footer="{ }">
          <b-button type="reset" size="lg" variant="danger">Reset</b-button>
          <b-button size="lg" variant="success">Submit</b-button>
        </template>
      </b-modal>
    </b-navbar-nav>
  </b-navbar>
</template>

<script>
export default {
  name: "headerLandingPage"
};
</script>

<template>
  <div class="container">
    <loading :active="this.isLoading" />
    <div class="row justify-content-center">
      <div class="col-md-6 pr-0">
        <img src="/images/login1.jpg" width="100%" alt="" />
      </div>
      <div class="col-md-6 pl-0">
        <div class="account">
          <h2>Login</h2>
          <p>Welcome back! Please login to your account.</p>
          <form @submit.prevent="handleSubmit">
            <div class="form-group">
              <label for="">User Email</label>
              <input
                type="email"
                name="email"
                v-model="email"
                class="form-control"
                autocomplete="off"
              />
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input
                type="password"
                name="password"
                v-model="password"
                class="form-control"
              />
              <span v-if="submit && err_not_match"> {{ err_not_match }} </span>
            </div>
            <div
              class="form-group d-flex align-items-center justify-content-between form-check"
            >
              <div>
                <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
              </div>
              <a href="#">Forget Passowrd?</a>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
          </form>
          <div class="new-user d-flex align-items-center">
            New User?
            <router-link :to="{ name: 'register' }"> Signup </router-link>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Loading from "../../components/Loading.vue";
export default {
  components: { Loading },
  data() {
    return {
      email: "",
      password: "",
      submit: false,
      isLoading: false,
    };
  },

  computed: {
    err_not_match() {
      return this.$store.getters.ERR_NOT_MATCH;
    },
  },

  methods: {
    handleSubmit() {
      this.submit = true;
      const formData = {
        email: this.email,
        password: this.password,
      };
      this.isLoading = true;
      setTimeout(() => {
        this.isLoading = false;
        this.$store.dispatch("login", formData);
      }, 1000);
    },
  },
};
</script>

<style scoped>
.container {
  margin-top: 70px;
  margin-bottom: 200px;
}
.row {
  height: 600px;
}
img {
  border-radius: 10px 0 0 10px;
  height: 100%;
  object-fit: cover;
  box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
}
.account {
  display: flex;
  padding: 0 100px;
  justify-content: center;
  flex-direction: column;
  border-radius: 0 10px 10px 0;
  height: 100%;
  box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
}
.account h2 {
  color: #2f3542;
  font-weight: 800;
  font-size: 24px;
}
.account p {
  color: #a4b0be;
  font-size: 18px;
  margin-top: 15px;
  margin-bottom: 30px;
}
.account form .form-group {
  margin-bottom: 30px;
}
.account form .form-group span {
  color: #ff4757;
  display: block;
  margin: 10px 0;
}
.account form label {
  color: #a4b0be;
  font-size: 18px;
}
.account form .form-group .form-control:focus {
  box-shadow: none;
  border-color: #a4b0be;
}
.account form .form-group .form-check-label {
  color: #2f3542;
  font-size: 16px;
  font-weight: 600;
}
.account form .form-check a {
  color: #a4b0be;
  font-size: 16px;
  text-decoration: none;
}
.account form button {
  width: 100%;
  padding: 15px 0;
  font-weight: 700;
  margin-bottom: 30px;
}
.account .new-user {
  color: #a4b0be;
}
.account .new-user a {
  font-weight: 700;
  margin-left: 10px;
  text-decoration: none;
}
</style>

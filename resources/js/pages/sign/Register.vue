<template>
  <div class="container">
    <loading :active="this.isLoading" />
    <div class="row justify-content-center">
      <div class="col-md-6 pr-0">
        <img src="/images/sidebar-bg.jpg" width="100%" alt="" />
      </div>
      <div class="col-md-6 pl-0">
        <div class="account">
          <h2>Register</h2>
          <form @submit.prevent="handleSubmit">
            <div class="form-group">
              <label for="">User Name</label>
              <input type="text" class="form-control" v-model="name" />
              <span v-if="submit && err_name"> {{ err_name[0] }} </span>
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" class="form-control" v-model="email" />
              <span v-if="submit && err_email"> {{ err_email[0] }} </span>
            </div>
            <div class="form-group">
              <label for=""> Password </label>
              <input type="password" class="form-control" v-model="password" />
              <span v-if="submit && err_pass"> {{ err_pass[0] }} </span>
            </div>
            <div class="form-group">
              <label for=""> Password Confirmation </label>
              <input
                type="password"
                class="form-control"
                v-model="password_confirmation"
              />
              <span v-if="check_pass_confirm"> Password do not match </span>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
          </form>
          <div class="new-user d-flex align-items-center">
            Old User?
            <router-link :to="{ name: 'login' }"> Signin </router-link>
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
      name: "",
      email: "",
      password: "",
      password_confirmation: "",
      submit: false,
      check_pass_confirm: false,
      isLoading: false,
    };
  },
  computed: {
    err_email() {
      return this.$store.getters.ERR_EMAIL;
    },
    err_name() {
      return this.$store.getters.ERR_NAME;
    },
    err_pass() {
      return this.$store.getters.ERR_PASSWORD;
    },
  },
  methods: {
    handleSubmit() {
      this.submit = true;
      if (this.password !== this.password_confirmation) {
        this.password_confirmation = "";
        this.password = "";
        this.check_pass_confirm = true;
      } else {
        this.check_pass_confirm = false;
      }
      const formData = {
        name: this.name,
        email: this.email,
        password: this.password,
      };
      this.isLoading = true;
      setTimeout(() => {
        this.isLoading = false;
        this.$store.dispatch("register", formData);
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
  height: 700px;
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
  margin-bottom: 25px;
}
.account p {
  color: #a4b0be;
  font-size: 18px;
  margin-top: 15px;
  margin-bottom: 30px;
}

.account form .form-group span {
  color: #ff4757;
  margin-top: 10px;
  display: block;
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

<template>
  <form class="form-acc" @submit.prevent="login">
    <h1>Đăng nhập</h1>
    <input class="input-acc" type="email" placeholder="Email" v-model="email" />
    <input class="input-acc" type="password" placeholder="Password" v-model="password" />
    <button class="acc-form-btn" type="submit">đăng nhập</button>
  </form>
</template>

<script>
import AuthService from '../services/AuthService';

export default {
  data() {
    return {
      email: "",
      password: "",
    };
  },

  methods: {
    async login() {
      try {
        const credentials = {
          email: this.email,
          password: this.password,
        };
        const response = await AuthService.login(credentials);
        const token = response.token;
        const user = response.email;
        this.$store.dispatch("login", { token, user });
        this.$router.push("/");
        alert("Chào mừng bạn đến với trang speedy car");
      } catch (error) {
        console.log(error);
      }
    },
  },
};
</script>

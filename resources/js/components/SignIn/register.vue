<template>
  <form class="form-acc" @submit.prevent="signUp">
    <h1>Đăng ký</h1>
    <!-- <input type="hidden" name="_token" :value="csrfToken" /> -->
    <input class="input-acc" type="text" placeholder="Name" v-model="name" />
    <input class="input-acc" type="email" placeholder="Email" v-model="email" />
    <input class="input-acc" type="password" placeholder="Password" v-model="password" />
    <button class="acc-form-btn" type="submit">Đăng ký</button>
  </form>
</template>

<script>

import AuthService from '../services/AuthService';

export default {
  data() {
    return {
      name: "",
      email: "",
      password: "",
    };
  },
  methods: {
    async signUp() {
      try {
        const credentials = {
          name: this.name,
          email: this.email,
          password: this.password,
        };
        const response = await AuthService.signUp(credentials);
        alert("Đăng ký thành công , vui lòng đăng nhập để truy cập vào trang web");
      } catch (error) {
        console.log(error);
      }
    },
  },
};
</script>

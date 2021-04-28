<template>
  <nav class="navbar navbar-expand-md px-5" @scroll="scrollNav">
    <loading :active="this.isLoading" />
    <router-link :to="{ name: 'home' }" class="navbar-brand">
      <img src="/images/logo-dark.png" width="100%" alt="" />
    </router-link>
    <button
      class="navbar-toggler bg-light btn"
      type="button"
      data-toggle="collapse"
      data-target="#collapsibleNavbar"
    >
      <span class="navbar-toggler-icon">
        <i class="fas fa-bars"></i>
      </span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <router-link :to="{ name: 'home' }" class="nav-link"> Home </router-link>
        </li>
        <li class="nav-item">
          <router-link :to="{ name: 'shop' }" class="nav-link ml-5"> Shop </router-link>
        </li>
        <li class="nav-item">
          <router-link :to="{ name: 'blog' }" class="nav-link ml-5"> Blog </router-link>
        </li>
        <li class="nav-item">
          <router-link :to="{ name: 'gallery' }" class="nav-link ml-5">
            Gallery
          </router-link>
        </li>
        <li class="nav-item">
          <router-link :to="{ name: 'about' }" class="nav-link ml-5">
            About us
          </router-link>
        </li>
      </ul>
    </div>
    <div
      class="collapse navbar-collapse align-items-center justify-content-end"
      id="collapsibleNavbar"
    >
      <ul class="navbar-nav is-auth" v-if="!auth">
        <li>
          <router-link class="nav-link" :to="{ name: 'login' }">Login</router-link>
        </li>
        <li>
          <router-link class="nav-link" :to="{ name: 'register' }">Register</router-link>
        </li>
      </ul>
      <ul class="navbar-nav is-auth" v-else>
        <li>
          <a href="#" class="nav-link" v-if="user.is_admin == 1">
            Admin: {{ user.name }}
          </a>
          <a href="#" class="nav-link" v-else> Hi: {{ user.name }} </a>
        </li>
        <li v-if="user.is_admin == 1">
          <a href="/home" class="nav-link">Dashboard </a>
        </li>
        <li v-else>
          <a href="/home" class="nav-link"> User Dasboard </a>
        </li>
        <li>
          <a href="#" class="nav-link" @click="logout">
            <i class="fas fa-sign-out-alt mr-1"></i>
            Logout
          </a>
        </li>
      </ul>
    </div>
  </nav>
</template>

<script>
import Loading from "./Loading";
export default {
  components: {
    Loading,
  },
  data() {
    return {
      isLoading: false,
    };
  },
  computed: {
    auth() {
      return this.$store.getters.IF_AUTH;
    },
    user() {
      return this.$store.getters.GET_USER;
    },
  },

  methods: {
    logout() {
      this.isLoading = true;
      setTimeout(() => {
        this.isLoading = false;
        this.$store.dispatch("logout");
      }, 1000);
    },
    scrollNav() {
      let nav = document.querySelector(".navbar");
      if (window.scrollY > 20) {
        nav.classList.add("active");
      } else {
        nav.classList.remove("active");
      }
    },
  },
  created() {
    window.addEventListener("scroll", this.scrollNav);
  },
};
</script>
<style scoped>
.navbar {
  position: relative;
  width: 100%;
  z-index: 3;
  background: transparent;
}
.navbar.active {
  background: white;
  position: fixed;
  top: 0;
  box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
  transition: all 0.7s;
}
.navbar-nav .nav-link {
  font-weight: 400;
  font-size: 18px;
  color: #232628;
  font-weight: bold;
}
.navbar-nav .nav-link:hover {
  color: #0988ff;
  transition: all 0.5s;
}
.router-link-exact-active {
  color: #0988ff !important;
}
.is-auth .nav-link:hover {
  color: #232628;
}
.is-auth .nav-link {
  font-size: 16px;
}

/* .is-auth .nav-link:hover {
  color: #fff;
} */
.navbar.active .is-auth .nav-link {
  color: #232628;
}
</style>

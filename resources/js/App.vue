<template>
  <div>
    <nav-bar />
    <transition name="fade">
      <router-view></router-view>
    </transition>
    <check-onl />
    <footer-shop />
  </div>
</template>
<script>
import NavBar from "./components/NavBar";
import FooterShop from "./components/Footer";
import CheckOnl from "./components/CheckOnl";
export default {
  components: {
    NavBar,
    FooterShop,
    CheckOnl,
  },
};
</script>

<style lang="scss">
$fa-font-path: "~@fortawesome/fontawesome-free/webfonts";
@import "~@fortawesome/fontawesome-free/scss/fontawesome";
@import "~@fortawesome/fontawesome-free/scss/solid";
@import "~@fortawesome/fontawesome-free/scss/regular";
@import "~@fortawesome/fontawesome-free/scss/brands";
</style>

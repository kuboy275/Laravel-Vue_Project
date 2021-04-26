<template>
  <div class="page-not-found">
    <loading :active="this.isLoading" />
    <div class="content text-center">
      <h5>OPPs! This Pages Can't Be Found</h5>
      <a href="#" @click.prevent="loader()" class="btn btn-primary mt-3"
        >GO TO HOME
        <i class="fas fa-long-arrow-alt-right"></i>
      </a>
    </div>
  </div>
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
  methods: {
    loader() {
      this.isLoading = true;
      setTimeout(() => {
        this.isLoading = false;
        this.$router.push("/");
      }, 1000);
    },
  },
};
</script>

<style scoped>
.page-not-found {
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100vh;
  background: url(/images/404_page.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  z-index: 10;
  overflow: hidden;
}
.page-not-found .content {
  position: absolute;
  width: 100%;
  left: 50%;
  bottom: 10%;
  transform: translateX(-50%);
}
.page-not-found .content a i {
  margin-left: 5px;
  transform: translateY(1px);
}
.page-not-found .content a {
  font-size: 18px;
  color: #ffffff;
  font-weight: 600;
}
</style>

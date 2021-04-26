<template>
  <div class="shop-dream pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="title-all mb-5">
            <h1>Dream <span>Car</span></h1>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
          </div>
        </div>
        <div
          class="col-lg-3 col-md-3 col-sm-6 col-6 mb-5 mt-3"
          v-for="product in products"
          :key="product.id"
        >
          <div class="item">
            <img v-lazy="product.feature_img_path" alt="img" width="100%" />
            <div class="content p-3">
              <span> {{ product.price | formatNumber }} $</span>
              <h2>{{ product.name }}</h2>
              <p class="module fade-text" v-html="product.content"></p>
              <a :href="`shop-detail/${product.id}`" class="btn btn-primary">
                View detail
                <i class="fas fa-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    this.$store.dispatch("products");
  },
  computed: {
    products() {
      return this.$store.getters.GET_PRODUCTS;
    },
  },
};
</script>

<style scoped>
.item {
  position: relative;
  border-radius: 10px;
  box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
}
.item:hover {
  transition: all 0.5s ease-in-out;
  transform: translateY(-10px);
  box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
  cursor: pointer;
}
.item img {
  object-fit: cover;
  height: 180px;
  border-radius: 10px 10px 0 0;
}
.item .content {
  display: flex;
  margin-top: 10px;
  flex-direction: column;
}
.item .content span {
  position: absolute;
  top: 50%;
  right: 10%;
  transform: translateY(-40%);
  border-radius: 5px;
  background-color: #0988ff;
  padding: 10px 15px;
  font-size: 16px;
  color: #ffffff;
  font-weight: 700;
}
.item .content h2 {
  font-size: 20px;
  color: #232628;
  font-weight: 700;
}
.item .content .module {
  width: 100%;
  margin: 0 0 1em 0;
  overflow: hidden;
}
.item .content .fade-text {
  position: relative;
  height: 50px; /* exactly three lines */
}
.item .content .fade-text:after {
  content: "";
  text-align: right;
  position: absolute;
  bottom: 0;
  right: 0;
  width: 80%;
  height: 1.2em;
  background: linear-gradient(
    to right,
    rgba(255, 255, 255, 0),
    rgba(255, 255, 255, 1) 50%
  );
}
.item .content .module p {
  margin: 0;
  font-size: 16px;
  color: #888888;
  font-weight: 400;
}
.item .content a {
  font-size: 16px;
  color: #ffffff;
  font-weight: 600;
}
.item .content a i {
  margin-left: 5px;
  transform: translateY(1px);
}
</style>

<template>
  <div class="mb-5">
    <banner v-bind:title="title" />
    <!-- START SHOP DETAIL -->
    <div class="shop-detail py-5">
      <div class="container">
        <div class="row">
          <!-- TODO:SLIDE SHOP DETAIL -->
          <div class="col-lg-7 col-md-5 col-sm-12 col-12 slide">
            <!-- START SLIDE COMPONENTS IMAGES  -->
            <slide-detail />
            <!-- END SLIDE COMPONENTS -->
          </div>
          <!-- END -->
          <!-- TODO:SHOP ITEM DESCRIPTION -->
          <div class="col-lg-5 col-md-7 col-sm-12 col-12 item">
            <div class="name">
              <h1>{{ product.name }}</h1>
              <p v-html="product.content"></p>
            </div>
            <div class="price">
              <h1>
                {{ product.price | formatNumber }}
                <i class="fas fa-dollar-sign"></i>
              </h1>
            </div>
            <div class="check">
              <i class="fas fa-check-circle"></i>
              <h1>Check Availability</h1>
            </div>
            <div class="feature">
              <div class="row">
                <div class="col-6">
                  <h3><i class="fas fa-tachometer-alt"></i> 35000 mm</h3>
                </div>
                <div class="col-6">
                  <h3><i class="fas fa-car-alt"></i> Model 2019</h3>
                </div>
                <div class="col-6">
                  <h3><i class="fas fa-gas-pump"></i> Mileage 45/46</h3>
                </div>
                <div class="col-6">
                  <h3><i class="fas fa-hand-holding-usd"></i>price $ ($4.8M)</h3>
                </div>
              </div>
            </div>
            <!-- eslint-disable -->
            <div
              class="category mb-3"
              v-for="cate in category"
              :key="cate.id"
              v-if="cate.id === product.category_id"
            >
              Category: {{ cate.name }}
            </div>
            <div class="checkout">
              <router-link :to="{ path: '/checkout?pid=' + product.id }" class="btn"
                >Buy Now</router-link
              >
            </div>
          </div>
          <!-- END -->
        </div>
      </div>
    </div>
    <!-- END SHOP DETAIL -->
    <!-- START PRODUCT RELATED -->
    <product-related :ProductByCate="this.product" />
    <!-- END PRODUCTS RELATED -->
  </div>
</template>

<script>
import Banner from "@/components/Banner";
import SlideDetail from "./SlideDetail";
import ProductRelated from "./ProductRelated.vue";
export default {
  components: {
    Banner,
    SlideDetail,
    ProductRelated,
  },
  data() {
    return {
      title: "Shop detail",
      slides: [],
    };
  },
  computed: {
    product() {
      return this.$store.getters.GET_PRODUCT_DETAIL;
    },
    category() {
      return this.$store.getters.GET_CATEGORY;
    },
  },
  mounted() {
    this.$store.dispatch("productDetail", this.$route.params.id);
    this.$store.dispatch("category");
  },
};
</script>

<style scoped>
.shop-detail .item .name h1 {
  font-size: 42px;
  letter-spacing: -1px;
  line-height: 56px;
  color: #232628;
  font-weight: 700;
}
.shop-detail .item .name p {
  font-size: 14px;
  line-height: 28px;
  color: #888888;
  font-weight: 400;
}

.shop-detail .item .price {
  background-color: #0988ff;
  padding: 25px;
  text-align: center;
  margin-bottom: 20px;
}
.shop-detail .item .price h1 {
  font-size: 40px;
  line-height: 32px;
  color: #ffffff;
  font-weight: 600;
}

.shop-detail .item .check {
  background-color: #eef7ff;
  padding: 20px;
  display: flex;
  align-items: flex-end;
  margin-bottom: 20px;
}
.shop-detail .item .check i {
  color: #0988ff;
  font-size: 40px;
  margin-right: 20px;
}
.shop-detail .item .check h1 {
  font-size: 18px;
  color: #232628;
  font-weight: 600;
}

.shop-detail .item .feature {
  background-color: #1f2441;
  padding: 20px;
  margin-bottom: 20px;
}
.shop-detail .item .feature h3 {
  font-size: 17px;
  line-height: 28px;
  color: #bcc4f4;
  font-weight: 400;
}
.shop-detail .item .feature h3 i {
  color: #ff9600;
  margin-right: 3px;
}
.shop-detail .item .feature .row {
  width: 90%;
  margin: 0 auto;
}

.shop-detail .item .checkout a {
  width: 50%;
  font-size: 18px;
  line-height: 28px;
  color: #ffffff;
  font-weight: 700;
  border-radius: 5px;
  background-color: #0988ff;
}
</style>

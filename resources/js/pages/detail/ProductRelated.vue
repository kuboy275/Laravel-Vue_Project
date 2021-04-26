<template>
  <div class="related my-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 title-all text-center">
          <h1 class="mb-5">Products <span>Related</span></h1>
        </div>
        <div class="col-lg-12 pb-5">
          <carousel
            :perPageCustom="[
              [100, 1],
              [768, 1],
              [1024, 3],
            ]"
            :navigation-enabled="true"
            :mouse-drag="true"
          >
            <!-- eslint-disable -->
            <slide
              class="item-slider"
              v-for="product in products"
              :key="product.id"
              v-if="
                product.category_id === ProductByCate.category_id &&
                product.name !== ProductByCate.name
              "
            >
              <div class="wrap-item col-12">
                <img v-lazy="product.feature_img_path" width="100%" :alt="product.name" />
                <div class="content_item">
                  <span> {{ product.price | formatNumber }} $ </span>
                  <h1>{{ product.name }}</h1>
                  <a :href="product.id" class="btn btn-primary w-100">
                    View To Car <i class="fas fa-long-arrow-alt-right ml-2"></i>
                  </a>
                </div>
              </div>
            </slide>
          </carousel>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { Carousel, Slide } from "vue-carousel";
export default {
  props: {
    ProductByCate: "",
  },
  components: {
    Carousel,
    Slide,
  },

  computed: {
    products() {
      return this.$store.getters.GET_PRODUCTS;
    },
  },

  mounted() {
    this.$store.dispatch("products");
  },
};
</script>

<style scoped>
/* CUSTOM SLIDE IN RELATED */
.related .item-slider .wrap-item img {
  width: 100%;
  height: 300px;
  object-fit: cover;
}
.related .item-slider .wrap-item .content_item {
  filter: drop-shadow(0px 16px 16px rgba(186, 186, 186, 0.33));
  background-color: #ffffff;
  padding: 20px;
  margin-bottom: 30px;
}
.related .item-slider .wrap-item .content_item span {
  font-size: 22px;
  letter-spacing: -1px;
  line-height: 35px;
  color: #555555;
  font-weight: 400;
}
.related .item-slider .wrap-item .content_item h1 {
  font-size: 18px;
  letter-spacing: -1px;
  line-height: 35px;
  color: #232628;
  font-weight: 700;
  margin-bottom: 10px;
}
.related .item-slider .wrap-item .content_item a {
  font-size: 14px;
  font-weight: 700;
  background-color: #0988ff;
}
.related .item-slider .wrap-item .content_item a i {
  transform: translateY(1px);
}
</style>

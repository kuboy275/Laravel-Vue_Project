<template>
  <div>
    <div class="related mb-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="title-related mb-5">Related Products</h1>
          </div>
          <div class="col-lg-12 pt-3 mb-5">
            <carousel
              :perPageCustom="[
                [100, 1],
                [768, 1],
                [1024, 3],
              ]"
              :navigation-enabled="true"
              :mouse-drag="true"
            >
              <!-- TODO: RENDER DATA BY RELATED PRODUCTS -->
              <!-- eslint-disable -->
              <slide
                class="item-slider"
                v-for="related in productsRelated"
                :key="related.id"
                v-if="
                  related.category_id === singleProduct.category_id &&
                  related.name != singleProduct.name
                "
              >
                <div class="col-12">
                  <div class="wrap-item">
                    <img v-lazy="related.feature_img_path" />
                    <div class="content_item">
                      <span class="price"> {{ related.price | formatNumber }} $ </span>
                      <h1 class="title">
                        {{ related.name }}
                      </h1>
                      <a :href="related.id">
                        <span>
                          View To Car
                          <font-awesome-icon
                            :icon="['fas', 'angle-double-right']"
                            class="icon_link"
                          />
                        </span>
                        <div class="liquid"></div>
                      </a>
                    </div>
                  </div>
                </div>
              </slide>
              <!-- END RENDER -->
            </carousel>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { Carousel, Slide } from "vue-carousel";
export default {
  components: {
    Carousel,
    Slide,
  },
  props: {
    singleProduct: {},
  },
  computed: {
    productsRelated() {
      return this.$store.getters.getProducts;
    },
  },
  methods: {
    getProductsRelated() {
      this.$store.dispatch("getApiProducts");
    },
  },

  created() {
    this.getProductsRelated();
  },
};
</script>

<style scoped>
.related .title-related {
  font-size: 55px;
  letter-spacing: -2px;
  line-height: 40px;
  color: #232628;
  font-weight: 700;
  margin-left: 18px;
}

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
.related .item-slider .wrap-item .content_item .price {
  font-size: 22px;
  letter-spacing: -1px;
  line-height: 35px;
  color: #555555;
  font-weight: 400;
}
.related .item-slider .wrap-item .content_item .title {
  font-size: 18px;
  letter-spacing: -1px;
  line-height: 35px;
  color: #232628;
  font-weight: 700;
  margin-bottom: 10px;
}

.related .item-slider .wrap-item .content_item a {
  /* background-color: #0988ff; */
  border-radius: 30px;
  padding: 15px;
  text-align: center;
  text-transform: uppercase;
  margin-right: 5px;
  text-decoration: none;
  display: inline-block;
  margin-bottom: 15px;
  overflow: hidden;
  position: relative;
}
.related .item-slider .wrap-item .content_item a span {
  position: relative;
  color: #ffffff;
  font-size: 14px;
  font-weight: 700;
  z-index: 1;
}
.related .item-slider .wrap-item .content_item a .liquid {
  position: absolute;
  top: -80px;
  left: 0;
  width: 200px;
  height: 200px;
  background: #0988ff;
  box-shadow: inset 0 0 50px rgba(0, 0, 0, 0.5);
  transition: 0.5s;
}

.related .item-slider .wrap-item .content_item a .liquid::after,
.related .item-slider .wrap-item .content_item a .liquid::before {
  content: "";
  width: 200%;
  height: 200%;
  position: absolute;
  top: 0;
  left: 50%;
  transform: translate(-50%, -75%);
  background: #000;
}
.related .item-slider .wrap-item .content_item a .liquid::before {
  border-radius: 45%;
  background: rgba(20, 20, 20, 0.6);
  animation: animate 5s linear infinite;
}
.related .item-slider .wrap-item .content_item a .liquid::after {
  border-radius: 40%;
  background: rgba(20, 20, 20, 0.5);
  animation: animate 10s linear infinite;
}
.related .item-slider .wrap-item .content_item a:hover .liquid {
  top: -120px;
}
@keyframes animate {
  0% {
    transform: translate(-50%, -75%) rotate(0deg);
  }
  100% {
    transform: translate(-50%, -75%) rotate(360deg);
  }
}
/* ---------------------------------- */
</style>

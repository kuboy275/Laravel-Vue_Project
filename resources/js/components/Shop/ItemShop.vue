<template>
  <div>
    <div class="container py-5 mb-5">
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-9">
          <div class="show-items">
            <div class="row align-items-center justify-content-between m-0">
              <h3>Show all 19 Results</h3>
              <b-dropdown id="dropdown-1" text="Defaut Shorting" class="m-md-2 bg-dark">
                <b-dropdown-item @click="sortLowest">Price Tang</b-dropdown-item>
                <b-dropdown-item @click="sortHighest">Price Giam</b-dropdown-item>
                <b-dropdown-item>Third Action</b-dropdown-item>
              </b-dropdown>
              <select>
                <option value="">ABCV</option>
                <option value="">ABCV 1</option>
              </select>
            </div>
          </div>

          <!--  Top show item   -->
          <paginate
            class="paginate-products"
            name="productsItem"
            :list="products"
            :per="3"
          >
            <div class="shop--car__item mt-4">
              <div class="row">
                <div
                  class="col-lg-4 col-md-6 col-sm-12 col-12 item"
                  v-for="product in paginated('productsItem')"
                  :key="product.id"
                >
                  <div class="item_img">
                    <img v-lazy="`${product.feature_img_path}`" />
                  </div>
                  <div class="content_item">
                    <span class="price"> {{ product.price | formatNumber }} $</span>
                    <h1 class="title">
                      {{ product.name }}
                    </h1>
                    <router-link class="link_item" :to="`/MainCarDetail/${product.id}`">
                      View To Car
                      <font-awesome-icon
                        :icon="['fas', 'angle-double-right']"
                        class="icon_link"
                      />
                      <span></span><span></span><span></span><span></span>
                    </router-link>
                  </div>
                </div>
              </div>
            </div>
          </paginate>
          <paginate-links
            for="productsItem"
            :show-step-links="true"
            :step-links="{ next: '>', prev: '<' }"
          >
          </paginate-links>
        </div>
      </div>
      <!--  Item shop   -->
    </div>
  </div>
</template>

<script>
export default {
  name: "ItemsProducts",

  data() {
    return {
      paginate: ["productsItem"],
    };
  },

  mounted() {
    this.$store.dispatch("getApiProducts");
  },

  computed: {
    products() {
      return this.$store.getters.getProducts;
    },
  },

  methods: {
    getByProduct() {
      if (this.$route.params.id != null) {
        this.$store.dispatch("getProductById", this.$route.params.id);
      } else {
        this.$store.dispatch("getProducts");
      }
    },

    sortLowest() {
      this.products.sort(function (a, b) {
        return a.price - b.price;
      });
    },
    sortHighest() {
      this.products.sort(function (a, b) {
        return b.price - a.price;
      });
    },
  },

  watch: {
    $route(to, from) {
      this.getByProduct();
    },
  },
};
</script>

<style scoped>
/* TOP  SHOP */

.show-items h3 {
  font-size: 18px;
  color: #555555;
  font-weight: 400;
}

/* ------------------------------------------ */
/* MAIN SHOP */
.shop--car__item .item .item_img {
  position: relative;
  overflow: hidden;
}
.shop--car__item .item .item_img::before {
  position: absolute;
  top: 0;
  left: -100%;
  z-index: 2;
  content: "";
  width: 60%;
  height: 100%;
  background: -webkit-linear-gradient(
    left,
    rgba(255, 255, 255, 0.2) 0%,
    rgba(0, 0, 0, 0.3) 100%
  );
  background: linear-gradient(
    to right,
    rgba(255, 255, 255, 0.2) 0%,
    rgba(0, 0, 0, 0.4) 100%
  );
  transform: skewX(-25deg);
  opacity: 1;
}
.shop--car__item .item .item_img:hover::before {
  animation: shine 0.5s;
}
@keyframes shine {
  100% {
    left: 100%;
  }
}

.shop--car__item .item .item_img img {
  height: 250px;
  transform: scale(1.1);
  object-fit: cover;
  margin-left: 10px;
  width: 100%;
}
.shop--car__item .item .item_img:hover img {
  transform: scale(1);
  transition: all 0.5s ease-in-out;
  margin-left: 0;
}
.shop--car__item .item .content_item {
  filter: drop-shadow(0px 16px 16px rgba(186, 186, 186, 0.73));
  background-color: #ffffff;
  padding: 20px;
  margin-bottom: 30px;
}
.shop--car__item .item .content_item .price {
  font-size: 22px;
  letter-spacing: -1px;
  line-height: 35px;
  color: #555555;
  font-weight: 400;
}
.shop--car__item .item .content_item .title {
  font-size: 18px;
  letter-spacing: -1px;
  line-height: 35px;
  color: #232628;
  font-weight: 700;
}
.shop--car__item .item .content_item .link_item {
  list-style: none;
}
.shop--car__item .item .content_item .link_item {
  --c: #0988ff;
  color: var(--c);
  font-size: 15px;
  border: 2px solid var(--c);
  border-radius: 7px;
  text-transform: uppercase;
  font-weight: bold;
  letter-spacing: 1px;
  text-align: center;
  position: relative;
  overflow: hidden;
  z-index: 1;
  transition: 0.5s;
  display: inline-block;
  padding: 10px 15px;
  text-decoration: none;
}
.shop--car__item .item .content_item .link_item span {
  position: absolute;
  width: 50px;
  height: 100%;
  background-color: var(--c);
  transform: translateY(100%);
  border-radius: 50%;
  left: calc((var(--n) - 2) * 50px);
  transition: 0.5s;
  transition-delay: calc((var(--n) - 1) * 0.1s);
  z-index: -1;
}
.shop--car__item .item .content_item .link_item:hover {
  color: white;
}
.shop--car__item .item .content_item .link_item:hover span {
  transform: translateY(0) scale(2);
}
.shop--car__item .item .content_item .link_item span:nth-child(1) {
  --n: 1;
}
.shop--car__item .item .content_item .link_item span:nth-child(2) {
  --n: 2;
}
.shop--car__item .item .content_item .link_item span:nth-child(3) {
  --n: 3;
}
.shop--car__item .item .content_item .link_item span:nth-child(4) {
  --n: 4;
}
/* ------------------------------------------ */
</style>

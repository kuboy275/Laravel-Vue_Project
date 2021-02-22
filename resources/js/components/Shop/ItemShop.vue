<template>
  <div>
    <div class="container py-5 mb-5">
      <div class="row">
        <div class="col-lg-0"></div>
        <div class="col-lg-12">
          <div class="show-items">
            <div class="row align-items-center justify-content-between m-0">
              <div class="col-4">
                <h3>Show all 9 Results</h3>
              </div>
            
              <div class="col-5 d-flex align-items-center justify-content-end">
                <b-nav-form class="form_search">
                  <b-form-input
                    v-model="query"
                    @keyup.enter="searchProducts"
                    placeholder="Search here"
                  ></b-form-input>
                  <font-awesome-icon
                    @click="searchProducts"
                    :icon="['fas', 'search']"
                    class="icon_search"
                  />
                </b-nav-form>
                <b-dropdown id="dropdown-1" text="Shorting" class="m-md-2 bg-dark">
                  <b-dropdown-item @click="sortLowest">Price Lowest</b-dropdown-item>
                  <b-dropdown-item @click="sortHighest">Price Highest</b-dropdown-item>
                </b-dropdown>
              </div>
            </div>
          </div>

          <!--  Top show item   -->
          <paginate
            class="paginate-products"
            name="productsItem"
            :list="groupedProducts"
            :per="9"
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
import _ from "lodash";
import { mapGetters } from "vuex";

export default {
  name: "ItemsProducts",

  props: {},

  data() {
    return {
      paginate: ["productsItem"],
      query: "",
    };
  },

  mounted() {
    this.$store.dispatch("getApiProducts");

    window.Echo.channel("search").listen(".searchResults", (e) => {
      this.$store.commit("products", e.products);
    });
  },

  computed: {
    groupedProducts() {
      return this.$store.getters.getProducts;
    },
    // ...mapGetters(["getProducts"]),
    // products() {
    //   return this.$store.getters.getProducts;
    // },
    singleProduct() {
      return this.$store.getters.detailProduct;
    },
  },

  methods: {
    searchProducts() {
      this.$store.dispatch("SEARCH_PRODUCTS", this.query);
    },

    getByProduct() {
      if (this.$route.params.id != null) {
        this.$store.dispatch("getProductById", this.$route.params.id);
      } else {
        this.$store.dispatch("getProducts");
      }
    },

    sortLowest() {
      this.groupedProducts.sort(function (a, b) {
        return a.price - b.price;
      });
    },

    sortHighest() {
      this.groupedProducts.sort(function (a, b) {
        return b.price - a.price;
      });
    },
  },

  watch: {
    // $route(to, from) {
    //   this.getByProduct();
    // },

    query: {
      handler: _.debounce(function () {
        this.searchProducts();
      }, 100),
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



.form_search {

  border-radius: 5px;
  border: 2px solid #0988ff;
}
.form_search .icon_search {
  color: #0988ff;
  font-size: 14px;
  cursor: pointer;
  margin-right: 15px;
}
.form_search input:focus {
  border: none;
  outline: none;
  box-shadow: none;
}
.form_search input {
  background: transparent;
  border: none;
  font-size: 14px;
  color: #0988ff;
  font-weight: 600;
}
.form_search input::placeholder {
  color: #555555;
}
</style>

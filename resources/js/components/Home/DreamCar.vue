<template>
  <div>
    <div class="shop py-5">
      <div class="title-home text-center">
        <h1>Dreams <span> Cars </span></h1>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum, impedit dolorum.
          Quod iusto eaque alias
        </p>
      </div>
      <div class="container">
        <!-- <paginate name="itemPaginate" :list="dreams" :per="2">  -->
        <div class="row shop-items">
          <!-- <div class="col-lg-3 col-md-4 col-sm-6 col-12 item"
                v-for="dreamItem in paginated('itemPaginate')" :key="dreamItem.id"> -->
          <div
            class="col-lg-3 col-md-4 col-sm-6 col-12 item"
            v-for="dreamItem in dreams"
            :key="dreamItem.id"
          >
            <img
              v-lazy="`http://127.0.0.1:8000${dreamItem.feature_img_path}`"
              width="100%"
            />
            <div class="content p-3">
              <span class="price"> {{ dreamItem.price | formatNumber }} $ </span>
              <h1>{{ dreamItem.name }}</h1>
              <p v-html="dreamItem.content"></p>
              <!-- <router-link :to="`/MainCarDetail/${dreamItem.id}`" 
                        >
                  View TO Car
              </router-link> -->
              <a :href="`/MainCarDetail/${dreamItem.id}`" class="link_text">
                view to car</a
              >
            </div>
          </div>
        </div>
        <!-- </paginate> -->
        <div class="layout-shop">
          <img src="http://127.1:8000/storage/home/layered-img1.png" width="80%" alt="" />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {};
  },

  mounted() {
    this.$store.dispatch("getApiProductsLatest");
  },
  computed: {
    dreams() {
      return this.$store.getters.getProductslatest;
    },
  },
  methods: {
    getAllProduct() {
      if (this.$route.params.id != null) {
        this.$store.dispatch("getProductById", this.$route.params.id);
        //
      } else {
        this.$store.dispatch("getProductslatest");
      }
    },
  },
  watch: {
    $route(to, from) {
      this.getAllProduct();
    },
  },
  // created() {
  //     this.getItemDream();
  // },
  // methods: {
  //     getItemDream(){
  //         const url = "http://127.0.0.1:8000/api/products";
  //         axios
  //             .get(url)
  //             .then((reponse)=>{
  //                 this.dreams = reponse.data.products;
  //             })
  //     }
  // },
};
</script>

<style scoped>
/* ---------------------------------- */
.shop {
  background-image: url(http://127.1:8000/storage/home/section-bg2.jpg);
  background-repeat: no-repeat;
  background-size: cover;
}
.shop .shop-items .item {
  margin-bottom: 30px;
  z-index: 1;
}
.shop .shop-items .item img {
  height: 150px;
  object-fit: cover;
}
.shop .shop-items .item .content {
  filter: drop-shadow(0px 16px 16px rgba(212, 212, 212, 0.23));
  background-color: #ffffff;
  position: relative;
}
.shop .shop-items .item .content .price {
  border-radius: 5px;
  background-color: #0988ff;
  font-size: 16px;
  color: #ffffff;
  font-weight: 700;
  padding: 7px 14px;
  position: absolute;
  top: 0;
  right: 15px;
  transform: translateY(-50%);
}
.shop .shop-items .item .content h1 {
  font-size: 20px;
  color: #232628;
  font-weight: 700;
  margin-top: 15px;
}
.shop .shop-items .item .content p {
  font-size: 14px;
  line-height: 28px;
  color: #888888;
  font-weight: 400;
  margin-bottom: 8px;
}
.shop .shop-items .item .content .link_text {
  font-size: 14px;
  color: #888888;
  font-weight: 600;
  padding-bottom: 1px;
  border-bottom: 1px solid #cccccc;
}
.shop .shop-items .item .content .link_text:hover {
  text-decoration: none;
  color: #464545;
  border-bottom: 1px solid #464545;
}

.shop {
  position: relative;
}
.shop .layout-shop {
  position: absolute;
  top: 50px;
  right: -65px;
}
@media (max-width: 991px) {
  .shop .layout-shop {
    display: none;
  }
}

/* SHOP MAIN HOME */
</style>

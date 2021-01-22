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
              v-lazy="dreamItem.feature_img_path"
              width="100%"
            />
            <div class="content p-3">
              <span class="price"> {{ dreamItem.price | formatNumber }} $ </span>
              <h1>{{ dreamItem.name }}</h1>
              <p v-html="dreamItem.content"></p>

              <a :href="`/MainCarDetail/${dreamItem.id}`" class="link_text">
                  <svg><rect /></svg>
                  view to car
              </a>

            </div>
          </div>
        </div>
        <!-- </paginate> -->
        <div class="layout-shop">
          <img src="/photos/home/layered-img1.png" width="80%" alt="" />
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
  background-image: url(/photos/home/section-bg2.jpg);
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
  width: 100%;
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
  width: 140px;
  text-align: center;
  height: 40px;
  line-height: 40px;
  font-size: 18px;
  letter-spacing: 1px;
  color: #464545;
  position: relative;
  text-decoration: none;
  padding: 10px;
  font-weight: 600;
}
.shop .shop-items .item .content .link_text svg,
.shop .shop-items .item .content .link_text svg rect {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  fill: transparent;
}
.shop .shop-items .item .content .link_text svg rect{
  stroke-width: 5;
  stroke: #464545;
  stroke-dashoffset: -210;
  transition: 0.7s all ease;
  stroke-dasharray: 85 400;

}
.shop .shop-items .item:hover .link_text svg rect , 
.shop .shop-items .item .content .link_text:hover svg rect
{
  stroke-dasharray: 50 0;
  stroke-width: 3px;
  stroke-dashoffset: 0;
  stroke: #535c68;
}
/* .shop .shop-items .item .content .link_text:hover {
  text-decoration: none;
  color: #464545;
  border-bottom: 1px solid #464545;
} */

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

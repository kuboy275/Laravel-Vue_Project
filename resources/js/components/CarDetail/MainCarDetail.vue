<template>
  <div>
    <!-- START AREA MAIN HOME -->
    <Banner :title="title" />
    <!-- END AREA MAIN HOME -->
    <!-- **************************************** -->
    <!-- CAR DETAIL MAIN -->
    <div class="car-detail py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <vueper-slides
              ref="vueperslides1"
              :arrows="false"
              :touchable="false"
              :fade="true"
              :autoplay="true"
              :bullets="false"
              @slide="
                $refs.vueperslides2.goToSlide($event.currentSlide.index, { emit: false })
              "
              fixed-height="400px"
            >
              <vueper-slide
                v-for="(slide, i) in slides"
                :key="i"
                :image="slide.image"
                v-lazy="slide.image"
              >
              </vueper-slide>
            </vueper-slides>
            <vueper-slides
              class="no-shadow thumbnails"
              ref="vueperslides2"
              @slide="
                $refs.vueperslides1.goToSlide($event.currentSlide.index, { emit: false })
              "
              :visible-slides="slides.length"
              fixed-height="75px"
              :bullets="false"
              :touchable="false"
              :gap="2.5"
              :arrows="false"
            >
              <vueper-slide
                v-for="(slide, i) in slides"
                :key="i"
                :image="slide.image"
                @click.native="$refs.vueperslides2.goToSlide(i)"
              >
              </vueper-slide>
            </vueper-slides>
            <!-- SLIDE IMAGES -->

            <TagDetail :singleProduct="this.singleProduct" />

            <!-- TODO: COMPONENT CHILD TAG DETAIL -->

            <div class="review pb-5 mt-5">
              <div class="col-lg-12">
                <b-card no-body>
                  <b-tabs pills card>
                    <b-tab title="Description" active>
                      <b-card-text>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet
                        itaque sapiente quidem consequuntur tenetur dolore sed
                        perspiciatis nisi asperiores. Incidunt laudantium error alias
                        possimus labore ea sunt modi quod enim?
                      </b-card-text>
                    </b-tab>
                    <b-tab title="reviews">
                      <b-card-text>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis
                        laudantium vero, itaque dolore aperiam facilis cum fuga.
                        Exercitationem adipisci consequuntur soluta repellendus iusto
                        obcaecati quas, minus cupiditate, ipsam, neque sapiente.
                      </b-card-text>
                    </b-tab>
                  </b-tabs>
                </b-card>
              </div>
            </div>

            <!-- REVIEW -->
          </div>
          <!-- TODO: RENDER DATA SINGLEPRODUCT -->
          <div class="col-lg-5 shop-des">
            <div class="name-product">
              <h1>{{ singleProduct.name }}</h1>
              <p v-html="singleProduct.content"></p>
            </div>
            <div class="price-product">
              <span>Maximum Price</span>
              <h1>{{ singleProduct.price | formatNumber }} $</h1>
            </div>
            <div class="check-product">
              <font-awesome-icon :icon="['fas', 'check-circle']" class="icon" />
              <h3>Check Availability</h3>
            </div>
            <div class="contact-product">
              <h5>Register for a price and test drive</h5>
              <b-nav-item  @click="addToCart()">
                <span class="text"> Add to cart</span>
                <span class="round">
                  <font-awesome-icon
                    :icon="['fas', 'angle-double-right']"
                    class="icon_nav_link"
                  />
                </span>
              </b-nav-item>
            </div>
            
            <!-- END RENDER SINGLE PRODUCTS-->

            <div class="spec-title">Specification</div>
            <div class="spec-table">
              <table class="table">
                <tbody>
                  <tr>
                    <td>condition</td>
                    <td>New</td>
                  </tr>
                  <tr>
                    <td>transimission</td>
                    <td>Manual</td>
                  </tr>
                  <tr>
                    <td>body style</td>
                    <td>Midsize Cars</td>
                  </tr>
                  <tr>
                    <td>fuel</td>
                    <td>Regular Unleaded</td>
                  </tr>
                  <tr>
                    <td>interior fabric</td>
                    <td>Alkantara</td>
                  </tr>
                  <tr>
                    <td>vin</td>
                    <td>W3SMLQK512</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- SHOP DECRIPTIONS && PRICE PRODUCT -->
        </div>
      </div>
    </div>
    <!-- END CAR DETAIL MAIN -->
    <!-- **************************************** -->
    <div class="container mb-2 pb-5">
      <hr />
    </div>
    <!-- END RELATED PRODUCTS MAIN -->
    <!-- **************************************** -->
    <RelatedProducts :singleProduct="this.singleProduct" />
  </div>
</template>

<script>
// import { image } from "vee-validate/dist/rules";
import { VueperSlides, VueperSlide } from "vueperslides";
import "vueperslides/dist/vueperslides.css";

import TagDetail from "./TagDetail";
import Banner from "../Banner";
import RelatedProducts from "./RelatedProducts";

export default {
  name: "SingleProduct",

  components: { VueperSlides, VueperSlide, TagDetail, Banner, RelatedProducts },

  data() {
    return {
      slides: [],
      title: "Product Detail",
    };
  },

  computed: {
    singleProduct() {
      return this.$store.getters.detailProduct;
    },
    imgProduct() {
      return this.$store.getters.getProductImage;
    },
    cartItem() {
      return this.$store.getters.cart;
    },
    // add data products relateds
  },

  methods: {
    itemProduct() {
      this.$store.dispatch("getProductById", this.$route.params.id);
    },
    itemPathImg() {
      this.$store.dispatch("getApiProductImage");
    },

    busNameProduct(name) {
      var nameProduct = name;
      this.$bus.$emit("name", nameProduct);
    },
    // đẩy data name product sang contact components theo cách events bus (no vueX );

    addToCart() {
      console.log(this.singleProduct);
      this.$store.dispatch("addProductToCart", {
        product : this.singleProduct,
        quantity: 1,
      });
    },
  },

  mounted() {
    this.itemProduct();
    this.itemPathImg();
  },
  watch: {
    imgProduct() {
      const imgPath = this.$store.getters.getProductImage;
      const product = this.$store.getters.detailProduct;
      for (let i = 0; i < imgPath.length; i++) {
        if (imgPath[i].product_id === product.id) {
          var path = new Object();
          path.image = imgPath[i].img_path;
          this.slides.push(path);
        }
      }
      // TODO: get img detail products and push into the slide[]
    },
  },
};
</script>

<style scoped>
/* ------------------------------------------ */

/* CAR DETAIL  */
.car-detail .shop-des .name-product h1 {
  font-size: 40px;
  line-height: 28px;
  color: #232628;
  font-weight: 700;
}
.car-detail .shop-des .name-product p {
  font-size: 14px;
  line-height: 28px;
  color: #888888;
  font-weight: 400;
}
.car-detail .shop-des .price-product {
  background-color: #0988ff;
  padding: 30px;
}
.car-detail .shop-des .price-product span {
  font-size: 14px;
  line-height: 32px;
  color: #ffffff;
  font-weight: 500;
  margin-bottom: 15px;
}
.car-detail .shop-des .price-product h1 {
  font-size: 40px;
  line-height: 32px;
  color: #ffffff;
  font-weight: 600;
  margin-top: 15px;
}
.car-detail .shop-des .check-product {
  background-color: #eef7ff;
  padding: 30px;
  display: flex;
  align-items: flex-end;
  margin-top: 20px;
}
.car-detail .shop-des .check-product .icon {
  color: #0988ff;
  font-size: 40px;
  margin-right: 20px;
}
.car-detail .shop-des .check-product h3 {
  font-size: 18px;
  color: #232628;
  font-weight: 600;
}
.car-detail .shop-des .spec-title {
  background-image: url(/photos/inventory/widget-bg2.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  padding: 30px;
  font-size: 40px;
  color: #ffffff;
  font-weight: 600;
  margin-top: 20px;
}
.car-detail .shop-des .spec-table {
  background: #f1f8ff;
  padding: 30px;
  font-size: 18px;
  color: #232628;
}
.car-detail .shop-des .spec-table table tbody tr td {
  border: none;
  font-size: 14px;
  color: #888888;
  font-weight: 600;
}
.car-detail .shop-des .spec-table table tbody tr td:nth-child(1) {
  text-transform: uppercase;
}
.car-detail .shop-des .contact-product {
  background-color: #0988ff;
  padding: 20px 30px;
  margin-top: 20px;
}
.car-detail .shop-des .contact-product h5 {
  font-size: 15px;
  color: #ffffff;
  font-weight: 600;
}
.car-detail .shop-des .contact-product .nav-item {
  list-style: none;
}
.car-detail .shop-des .contact-product .nav-item .nav-link {
  background: #fa8231;
  width: 50%;
  padding: 15px 18px;
  margin-top: 15px;
  border-radius: 30px;
  text-transform: uppercase;
  position: relative;
  overflow: hidden;
  color: #ffffff;
}
.car-detail .shop-des .contact-product .nav-item .nav-link::after {
  content: "";
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  width: 37px;
  height: 38px;
  position: absolute;
  right: 3px;
  top: 50%;
  transform: translateY(-50%);
  -moz-transition: all 0.3s ease-out;
  -o-transition: all 0.3s ease-out;
  -webkit-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
  background-color: #fd9644;
}
.car-detail .shop-des .contact-product .nav-item .nav-link:hover::after {
  right: 100%;
  width: 50%;
}
.car-detail .shop-des .contact-product .nav-item .nav-link span {
  position: relative;
  z-index: 3;
}
.car-detail .shop-des .contact-product .nav-item .nav-link .text {
  font-size: 14px;
  font-weight: 700;
}
.car-detail .shop-des .contact-product .nav-item .nav-link .round {
  border-radius: 50%;
  width: 38px;
  height: 38px;
  position: absolute;
  right: 3px;
  top: 50%;
  transform: translateY(-50%);
  transition: all 0.3s ease-out;
  z-index: 2;
  background-color: transparent;
}
.car-detail .shop-des .contact-product .nav-item .nav-link .round .icon_nav_link {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  left: 50%;
  transition: all 0.3s;
}
.car-detail .shop-des .contact-product .nav-item .nav-link:hover .icon_nav_link {
  margin-left: 5px;
}
/* ------------------------------------------ */

/* CUSTOM CAR DETAIL REVIEW MAIN SHOW */

.thumbnails {
  margin-top: 20px;
}
.thumbnails .vueperslide {
  border: 4px solid #fff !important;
}
.thumbnails .vueperslide--active {
  border-color: #0988ff !important;
}
.thumbnails .vueperslide {
  box-sizing: border-box;
  border: 1px solid #fff;
  transition: 0.3s ease-in-out;
  opacity: 0.7;
  cursor: pointer;
}

.thumbnails .vueperslide--active {
  box-shadow: 0 0 6px rgba(0, 0, 0, 0.3);
  opacity: 1;
  border-color: #000;
}
/* ------------------------------------------ */
</style>

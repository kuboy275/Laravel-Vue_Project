<template>
    <div>
        <!-- START AREA MAIN HOME -->
        <div class="area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Speedy Shop</h1>
                    </div>
                    <div class="col-lg-12">
                        <h5>Home || Speedy Shop Grid</h5>
                    </div>
                </div>
            </div>
        </div>
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
                            @slide="$refs.vueperslides2.goToSlide($event.currentSlide.index, { emit: false })"
                            fixed-height="400px">
                            <vueper-slide
                                v-for="(slide, i) in slides"
                                :key="i"
                                :image="slide.image">
                            </vueper-slide>
                        </vueper-slides>
                        <vueper-slides
                            class="no-shadow thumbnails"
                            ref="vueperslides2"
                            @slide="$refs.vueperslides1.goToSlide($event.currentSlide.index, { emit: false })"
                            :visible-slides="slides.length"
                            fixed-height="75px"
                            :bullets="false"
                            :touchable="false"
                            :gap="2.5"
                            :arrows="false">
                            <vueper-slide
                                v-for="(slide, i) in slides"
                                :key="i"
                                :image="slide.image"
                                @click.native="$refs.vueperslides2.goToSlide(i)">
                            </vueper-slide>
                        </vueper-slides>
                        <!-- SLIDE IMAGES -->

                        <div class="review pb-5 mt-5">
                            <div class="col-lg-12">
                                <b-card no-body>
                                    <b-tabs pills card>
                                        <b-tab title="Description" active>
                                            <b-card-text>
                                                Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit. Amet itaque sapiente
                                                quidem consequuntur tenetur dolore sed
                                                perspiciatis nisi asperiores. Incidunt
                                                laudantium error alias possimus labore
                                                ea sunt modi quod enim?
                                            </b-card-text>
                                        </b-tab>
                                        <b-tab title="reviews">
                                            <b-card-text>
                                                Lorem ipsum, dolor sit amet consectetur
                                                adipisicing elit. Nobis laudantium vero,
                                                itaque dolore aperiam facilis cum fuga.
                                                Exercitationem adipisci consequuntur
                                                soluta repellendus iusto obcaecati quas,
                                                minus cupiditate, ipsam, neque sapiente.
                                            </b-card-text>
                                        </b-tab>
                                    </b-tabs>
                                </b-card>
                            </div>
                        </div>

                        <!-- REVIEW -->
                    </div>


                    <div class="col-lg-5 shop-des">
                        <div class="name-product">
                            <h1> {{ singleProduct.name }}</h1>
                            <p v-html="singleProduct.content"></p>
                        </div>
                        <div class="price-product">
                            <span>Maximum Price</span>
                            <h1>{{ singleProduct.price | formatNumber}} $</h1>
                        </div>
                        <div class="check-product"> 
                            <font-awesome-icon
                                :icon="['fas', 'check-circle']"
                                class="icon"
                            />
                            <h3>Check Availability</h3>
                        </div>
                        <div class="contact-product">
                            <h5>Register for a price and test drive</h5>
                            <b-nav-item to="/MainContact" @click="busNameProduct(singleProduct.name)">
                                Contact now
                                <font-awesome-icon
                                    :icon="['fas', 'angle-double-right']"
                                    class="icon_nav_link"
                                />
                            </b-nav-item>
                        </div>
                        <div class="spec-title">
                           Specification
                        </div>
                        <div class="spec-table">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>condition</td>
                                        <td>New</td>
                                    </tr>
                                    <tr>
                                        <td>body style</td>
                                        <td>Midsize Cars</td>
                                    </tr>
                                    <tr>
                                        <td>engine</td>
                                        <td>Inline</td>
                                    </tr>
                                    <tr>
                                        <td>engine</td>
                                        <td>Inline</td>
                                    </tr>
                                    <tr>
                                        <td>engine</td>
                                        <td>Inline</td>
                                    </tr>
                                    <tr>
                                        <td>engine</td>
                                        <td>Inline</td>
                                    </tr>
                                    <tr>
                                        <td>engine</td>
                                        <td>Inline</td>
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
            <hr>
        </div>
        <!-- END RELATED PRODUCTS MAIN -->
        <!-- **************************************** -->
            <div class="related mb-5">
      <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="title-related mb-5"> Related Products </h1>
            </div>
            <div class="col-lg-12 pt-3 mb-5">
                <carousel  
                    :perPageCustom="[
                        [100, 1],
                        [768, 1],
                        [1024, 3]
                    ]"
                    :navigation-enabled="true"
                    :mouse-drag="true"
                >
                    <slide class="item-slider" v-for="relatedProduct in relatedProducts" :key="relatedProduct.id">
                        <div class="col-12">
                            <div class="wrap-item">
                                <img :src="`http://127.0.0.1:8000${relatedProduct.feature_img_path}`" alt="">
                                <div class="content_item">
                                    <span class="price"> {{ relatedProduct.price | formatNumber }} $ </span>
                                    <h1 class="title">
                                       {{relatedProduct.name}}
                                    </h1>
                                    <a :href="`/MainCarDetail/${relatedProduct.id}`">
                                        View To Car
                                        <font-awesome-icon
                                            :icon="['fas','angle-double-right']"
                                            class="icon_link" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </slide>
                </carousel>
            </div>
        </div>
      </div>
    </div>
    </div>
</template>


<script>


import { image } from 'vee-validate/dist/rules'
import { VueperSlides, VueperSlide } from 'vueperslides'
import 'vueperslides/dist/vueperslides.css'
import { Carousel, Slide } from "vue-carousel";


export default {
    name:"SingleProduct",

     components: { VueperSlides, VueperSlide,     Carousel,
    Slide, },

     data() {
         return {
            slides: [],
            relatedProducts:[],
         };
     },


     computed: {
         singleProduct(){
             return this.$store.getters.detailProduct;
         },
         imgProduct(){
             return  this.$store.getters.getProductImage;
         },
         // add data products relateds 
         productsRelated(){
              return this.$store.getters.getProducts; 
         }
     },

     methods: {
        itemProduct(){
              this.$store.dispatch("getProductById",this.$route.params.id);
        },
        itemPathImg(){
            this.$store.dispatch("getApiProductImage",this.$route.params.id);
        },
        busNameProduct(name){
            var nameProduct = name ;
            this.$bus.$emit("name",nameProduct);
        },
        // đẩy data name product sang contact components theo cách events bus (no vueX );

        getProductsRelated(){
            this.$store.dispatch("getApiProducts");
        },

     }, 

     mounted() {
         this.getProductsRelated();
         this.itemProduct();
         this.itemPathImg();
        
     },

     watch: {
         imgProduct(){
           const imgPath = this.$store.getters.getProductImage;
           const product =  this.$store.getters.detailProduct;
           const related = this.$store.getters.getProducts; 
            for (let i = 0; i < imgPath.length; i++) {
                if(imgPath[i].product_id === product.id){
                    var path = new Object();
                     path.image = imgPath[i].img_path;
                     this.slides.push(path)
                }
            };
            for (let i = 0; i < related.length; i++) {
                if(related[i].category_id === product.category_id && related[i].name != product.name){
                    this.relatedProducts.push(related[i])
                }
            }
         },
 
         $route(to,from){
             this.itemProduct();
             this.itemPathImg();
         }
     },

    // async created() {
          
    //     this.$bus.$on("item",(products,mypath)=>{
    //         this.product = products;
    //         this.slides.push(mypath);
    //     });



    //  },
     
    //  methods: {

    //  },

}
</script>


<style scoped>
/* AREA */

.area {
    margin-top: 40px;
    background-position: center;
    background-image: url(http://127.1:8000/storage/inventory/featured-title-bg.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    display: flex;
    align-items: center;
    height: 350px;
    text-align: center;
}
.area h1 {
    font-size: 85px;
    color: #ffffff;
    font-weight: 700;
}
.area h5 {
    font-size: 20px;
    color: #ffffff;
    font-weight: 600;
}
@media (max-width: 767px) {
    .area h1 {
        font-size: 75px;
    }
}
/* ------------------------------------------ */

/* CAR DETAIL  */
.car-detail .shop-des .name-product h1{
    font-size: 40px;
    line-height: 28px;
    color: #232628;
    font-weight: 700;
}
.car-detail .shop-des .name-product p{
    font-size: 14px;
    line-height: 28px;
    color: #888888;
    font-weight: 400;
}
.car-detail .shop-des .price-product{
    background-color: #0988ff;
    padding: 30px;
}
.car-detail .shop-des .price-product span{
    font-size: 14px;
    line-height: 32px;
    color: #ffffff;
    font-weight: 500;
    margin-bottom: 15px;
}
.car-detail .shop-des .price-product h1{
    font-size: 40px;
    line-height: 32px;
    color: #ffffff;
    font-weight: 600;
    margin-top: 15px;
}
.car-detail .shop-des .check-product{
    background-color: #EEF7FF;
    padding: 30px;
    display: flex;
    align-items: flex-end;
    margin-top: 20px;
}
.car-detail .shop-des .check-product .icon{
    color: #0988ff;
    font-size: 40px;
    margin-right: 20px;
}
.car-detail .shop-des .check-product h3{
    font-size: 18px;
    color: #232628;
    font-weight: 600;
}
.car-detail .shop-des .spec-title{
    background-image: url(http://127.1:8000/storage/inventory/widget-bg2.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    padding: 30px;
    font-size: 40px;
    color: #ffffff;
    font-weight: 600;
    margin-top: 20px;
}
.car-detail .shop-des .spec-table{
    background: #F1F8FF;
    padding: 30px;
    font-size: 18px;
    color: #232628;
}
.car-detail .shop-des .spec-table table tbody tr td {
    border: none;
    font-weight: 500;
}
.car-detail .shop-des .spec-table table tbody tr td:nth-child(1){
    text-transform: uppercase;
}
.car-detail .shop-des .contact-product{
    background-color: #0988ff;
    padding: 20px 30px;
    margin-top: 20px;
}
.car-detail .shop-des .contact-product h5{
        font-size: 15px;
        color: #ffffff;
        font-weight: 600;
}
.car-detail .shop-des .contact-product .nav-item {
    list-style: none;
}
.car-detail .shop-des .contact-product .nav-item .nav-link{
        background: white;
        width: 50%;
        color: #0988ff;
        font-size: 14px;
        font-weight: 700;
        padding: 15px 18px;
        margin-top: 15px;
        border-radius: 5px;
        animation: colorChange .3s infinite ;
        text-transform: uppercase;
}
@keyframes colorChange{
    50%{
        color: #3867d6;
    }
    100%{
        color: #0988ff; 
    }
}
/* ------------------------------------------ */


/* CUSTOM CAR DETAIL REVIEW MAIN SHOW */


.thumbnails{
    margin-top: 20px;
}
.thumbnails .vueperslide{
    border: 4px solid #fff!important;
}
.thumbnails .vueperslide--active{
    border-color: #0988ff!important;
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


.related .title-related{
    font-size: 55px;
    letter-spacing: -2px;
    line-height: 28px;
    color: #232628;
    font-weight: 700;
    margin-left: 18px;
}

/* CUSTOM SLIDE IN RELATED */
.related .item-slider .wrap-item img{
    width: 100%;
}
.related .item-slider .wrap-item .content_item{
    filter: drop-shadow(0px 16px 16px rgba(186, 186, 186, 0.33));
    background-color: #ffffff;
    padding: 20px;
    margin-bottom: 30px;
}
.related .item-slider .wrap-item .content_item .price{
    font-size: 22px;
    letter-spacing: -1px;
    line-height: 35px;
    color: #555555;
    font-weight: 400;
}
.related .item-slider .wrap-item .content_item .title{
    font-size: 18px;
    letter-spacing: -1px;
    line-height: 35px;
    color: #232628;
    font-weight: 700;
}
.related .item-slider .wrap-item .content_item .link_item{
        list-style: none;
}
.related .item-slider .wrap-item .content_item .link_item a{
    background-color: #0988ff;
    border-radius: 5px;
    padding: 15px;
    color: #ffffff;
    font-size: 14px;
    font-weight: 700;
    text-align: center;
    text-transform: uppercase;
    margin-right: 5px;
}
/* ---------------------------------- */
</style>

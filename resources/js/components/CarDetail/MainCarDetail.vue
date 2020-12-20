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
        <!-- SHOP SINGLE MAIN -->
        <div class="shop-single py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
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
                        <div class="review pb-5">
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
                    <div class="col-lg-6 shop-des">
                        <div class="name-product">
                            <h1>Blue Dark Gradiant</h1>
                            <p>Sed ut perspiciatis unde omnis iste natus error</p>
                        </div>
                        <div class="price-product">
                            <span>Maximum Price</span>
                            <h1>$23,500</h1>
                        </div>
                        <div class="check-product">
                            <font-awesome-icon
                                :icon="['fas', 'check-circle']"
                                class="icon"
                            />
                            <h3>Check Availability</h3>
                        </div>
                    </div>
                    <!-- SHOP DECRIPTIONS && PRICE PRODUCT -->
                </div>
            </div>
        </div>
        <div class="container mb-2 pb-5">
            <hr>
        </div>
        <RelatedProduct> </RelatedProduct>
        <!-- END SHOP SINGLE MAIN -->
        <!-- **************************************** -->
    </div>
</template>


<script>
import { VueperSlides, VueperSlide } from 'vueperslides'
import 'vueperslides/dist/vueperslides.css'
import RelatedProduct from '../RelatedProduct/RelatedProduct'
export default {
     components: { VueperSlides, VueperSlide,RelatedProduct },
     data() {
         return {
  slides: [
    { image: 'http://127.1:8000/storage/home/car-img1.jpg'},
    { image: 'http://127.1:8000/storage/home/car-img2.jpg'},
    { image: 'http://127.1:8000/storage/home/car-img3.jpg' },
    { image: 'http://127.1:8000/storage/home/car-img4.jpg'},
  ]
         }
     },
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

/* SHOP SINGLE  */

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
</style>

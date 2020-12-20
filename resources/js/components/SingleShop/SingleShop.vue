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
                        
                    </div>
                    <div class="col-lg-6 shop-des">
                        <h2>Green Business Class Grand Sedan Automobile</h2>
                        <span> $199 </span>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing
                            elit. Rem, voluptates iure voluptas, modi hic velit
                            non, sequi similique
                        </p>
                        <form action="">
                            <input
                                type="number"
                                min="1"
                                max="9"
                                step="1"
                                value="1"
                            />
                            <b-nav-item class="link_item" to="/MainContact">
                                ADD TO CART
                                <font-awesome-icon
                                    :icon="['fas', 'angle-double-right']"
                                    class="icon_link"
                                />
                            </b-nav-item>
                        </form>
                        <h5>Category : Uncategozied</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <hr />
        </div>
        <div class="review pb-5 mb-5">
            <div class="container">
                <div class="row">
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
            </div>
        </div>

        <div class="related">
            <div class="container">
                <div class="row">
                    <div class="title">
                        <div class="col-lg-12">
                            <h2>Related Products</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SHOP SINGLE MAIN -->
        <!-- **************************************** -->
    </div>
</template>


<script>
import { VueperSlides, VueperSlide } from 'vueperslides'
import 'vueperslides/dist/vueperslides.css'
export default {
     components: { VueperSlides, VueperSlide },
     data() {
         return {
  slides: [
    { image:'http://127.1:8000/storage/home/car-img1.jpg'},
    { image: 'http://127.1:8000/storage/home/car-img2.jpg'},
    { image: 'http://127.1:8000/storage/inventory/featured-title-bg.jpg' },
        { image:'http://127.1:8000/storage/home/car-img1.jpg'},
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
.shop-single .shop-des h2 {
    font-size: 42px;
    letter-spacing: -1px;
    line-height: 56px;
    color: #232628;
    font-weight: 700;
}
.shop-single .shop-des span {
    font-size: 26px;
    line-height: 55px;
    color: #999999;
    font-weight: 600;
}
.shop-single .shop-des p {
    font-size: 14px;
    line-height: 28px;
    color: #888888;
}
.shop-single .shop-des form {
    display: flex;
    align-items: center;
}
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
.shop-single .shop-des form input[type="number"] {
    text-align: center;
    width: 40px;
    height: 40px;
    background-color: rgb(233, 224, 224);
    border: none;
    outline: none;
    margin-right: 15px;
}
.shop-single .shop-des form .link_item {
    list-style: none;
}
.shop-single .shop-des form .link_item a {
    background-color: #0988ff;
    border-radius: 5px;
    color: #ffffff;
    font-size: 14px;
    font-weight: 700;
    text-align: center;
}
.shop-single .shop-des h5 {
    margin-top: 20px;
    font-size: 16px;
    line-height: 28px;
    color: #646464;
}

/* ------------------------------------------ */


/* CUSTOM SHOP SINGLE REVIEW MAIN SHOW */


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

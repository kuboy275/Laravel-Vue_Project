<template>
  <div>
    <div class="customer py-5">
      <div class="title-home text-center">
        <h1>Customer<span> Reviews </span></h1>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum, impedit dolorum.
          Quod iusto eaque alias
        </p>
      </div>
      <div class="container">
        <div class="customer-slide" >
          <carousel
            :perPageCustom="[
              [100, 1],
              [768, 1],
              [1024, 3],
            ]"
            :navigation-enabled="true"
            :mouse-drag="true" >
            <slide class="item-slide"  v-for="slide in sliders" :key="slide.id">
              <div class="col-12">
                <div class="wrap-item-slide">
                  <div class="icon-slide">
                    <font-awesome-icon :icon="['fas', 'quote-right']" class="icon" />
                  </div>
                  <h3 class="title">
                    {{ slide.description }}
                  </h3>
                  <div class="users d-flex align-items-center mt-4">
                    <img v-lazy="`${slide.image_path}`" alt="" />
                    <div class="name ml-3">
                      <h2>{{ slide.name }}</h2>
                      <p>Customer</p>
                    </div>
                  </div>
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
    components: {
        Carousel,
        Slide
    },

    computed: {
        sliders(){
          return this.$store.getters.getSlide;
        }
    },

    mounted() {
      this.$store.dispatch("getApiSlideCustomer");
    },


};
</script>

<style scoped>
/* ---------------------------------- */
.customer {
    background-image: url(/photos/home/section-bg5.png);
    background-size: cover;
    background-repeat: no-repeat;
}
.customer .customer-slide .VueCarousel-wrapper {
    overflow: unset;
}
.customer .customer-slide .item-slide .wrap-item-slide {
    border: 1px solid #e5e5e5;
    padding: 20px;
    position: relative;
    height: 450px;

}
.customer .customer-slide .item-slide .wrap-item-slide .users{
  position: absolute;
    left: 10%;
    bottom: 10%;
}
.customer .customer-slide .item-slide .icon-slide {
    width: 70px;
    height: 70px;
    border-radius: 35px;
    background-color: #ffffff;
    text-align: center;
    border: 1px solid #e5e5e5;
    line-height: 75px;
    margin-bottom: 20px;
    color: #16e48a;
}
.customer .customer-slide .item-slide:nth-child(odd) .icon-slide {
    color: #fc09ff;
}
.customer .customer-slide .item-slide:nth-child(3n + 1) .icon-slide {
    color: #ff9600;
}
.customer .customer-slide .item-slide .title {
    font-size: 17px;
    line-height: 32px;
    color: #505050;
    font-weight: 600;
}
.customer .customer-slide .item-slide .users img {
    width: 70px;
    height: 70px;
    border-radius: 35px;
}

.customer .customer-slide .item-slide .users .name h2 {
    font-size: 18px;
    line-height: 32px;
    color: #232628;
    font-weight: 700;
}
.customer .customer-slide .item-slide .users .name p {
    font-size: 14px;
    color: #0988ff;
    font-weight: 600;
}
/* CUSTOMER REVIEW MAIN HOME */

/* ---------------------------------- */
</style>

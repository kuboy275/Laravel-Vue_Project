<template>
  <div class="customer mb-5">
    <div class="title-all text-center mb-5">
      <h1>Customer <span>Reviews</span></h1>
      <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum, impedit dolorum.
        Quod iusto eaque alias
      </p>
    </div>
    <div class="container">
      <div class="customer-slide">
        <carousel
          :perPageCustom="[
            [300, 1],
            [768, 1],
            [1024, 3],
          ]"
          :navigation-enabled="true"
          :mouse-drag="true"
        >
          <slide class="item-slide" v-for="slide in sliders" :key="slide.id">
            <div class="col-12">
              <div class="wrap-item">
                <div class="icon-slide">
                  <i class="fas fa-quote-right"></i>
                </div>
                <div class="module line-clamp">
                  <h3>{{ slide.description }}</h3>
                </div>
                <div class="users d-flex align-items-center mt-4">
                  <img v-lazy="slide.image_path" alt="" />
                  <div class="info">
                    <h4>{{ slide.name }}</h4>
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
</template>

<script>
import { Carousel, Slide } from "vue-carousel";

export default {
  components: {
    Carousel,
    Slide,
  },
  data() {
    return {
      sliders: "",
    };
  },

  created() {
    axios.get("/api/slider").then((response) => {
      this.sliders = response.data.data;
    });
  },
};
</script>

<style scoped>
/* ---------------------------------- */
.customer .customer-slide .VueCarousel-wrapper {
  overflow: unset;
}
.customer .customer-slide .item-slide .wrap-item {
  border: 1px solid #e5e5e5;
  padding: 20px;
  position: relative;
  height: 450px;
  border-radius: 10px;
  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

.customer .customer-slide .item-slide .wrap-item .module {
  width: 100%;
  margin: 0 0 1em 0;
  overflow: hidden;
}
.customer .customer-slide .item-slide .wrap-item .line-clamp {
  display: -webkit-box;
  -webkit-line-clamp: 5;
  -webkit-box-orient: vertical;
}
.customer .customer-slide .item-slide .wrap-item .module h3 {
  margin: 0;
  font-size: 20px;
  color: #2f3640;
  letter-spacing: 1px;
}
.customer .customer-slide .item-slide .wrap-item .users {
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
  margin-right: 20px;
}

.customer .customer-slide .item-slide .users .info h4 {
  font-size: 18px;
  line-height: 32px;
  color: #232628;
  font-weight: 700;
}
.customer .customer-slide .item-slide .users .info p {
  font-size: 14px;
  color: #0988ff;
  font-weight: 600;
}
/* CUSTOMER REVIEW MAIN HOME */
</style>

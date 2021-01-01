<template>
  <div>
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
                    <slide class="item-slider">
                        <div class="col-12">
                            <div class="wrap-item">
                                <img src="http://127.1:8000/storage/home/car-img1.jpg" alt="">
                                <div class="content_item">
                                    <span class="price"> $199 </span>
                                    <h1 class="title">
                                        Green Business Class Dark Sedan
                                        Automobile
                                    </h1>
                                    <a href="/MainCarDetail">
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
import { Carousel, Slide } from "vue-carousel";
export default {
  components: {
    Carousel,
    Slide,
  },
};
</script>
<style scoped>

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

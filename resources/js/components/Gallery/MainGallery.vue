<template>
  <div>
    <!-- START AREA MAIN HOME -->
    <Banner v-bind:title="title"></Banner>
    <!-- END AREA MAIN HOME -->
    <!-- **************************************** -->
    <!-- GALLERY TITLE MAIN  -->
    <div class="title-gallery py-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <h1>Photo <span> Gallery </span></h1>
            <img src="/photos/gallery/title-gallery.PNG"/>
            <p>
              Lorem ipsum harum laborum ullam dolore aspernatur soluta, et, ab pariatur
              provident
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- **************************************** -->
    <!-- SHOW GALLERY MAIN -->
    <div class="show-gallery pb-5 mb-5">
      <div class="container">
        <div class="cate-gallery mb-5">
          <b-card no-body>
            <b-tabs card>
              <b-tab
                :title="category.name"
                v-for="category in categories"
                :key="category.id"
              >
                <div class="row">
                  <!-- eslint-disable -->
                  <!-- comment o tren dung de tat thong bao warning khi dung v-for va v-if -->
                  <div
                    class="col-lg-4 img-block"
                    v-for="productImg in productImgByCategory"
                    :key="productImg.id"
                    v-if="productImg.category_id === category.id"
                  >
                    <div class="item">
                      <!-- <b-card-img v-lazy="productImg.feature_img_path"> </b-card-img> -->
                        <img v-lazy="productImg.feature_img_path"  alt="">
                      <div class="layout-item">
                        <b-nav-item
                          class="link_nav"
                          :to="`/MainCarDetail/${productImg.id}`"
                        >
                          <font-awesome-icon :icon="['fas', 'plus']" class="icon" />
                        </b-nav-item>
                      </div>
                    </div>
                  </div>
                </div>
              </b-tab>
            </b-tabs>
          </b-card>
        </div>
      </div>
    </div>
    <!-- **************************************** -->
  </div>
</template>

<script>
import Banner from "../Banner";
export default {
  components: {
    Banner,
  },
  data() {
    return {
      title: "Gallery",
    };
  },

  computed: {
    categories() {
      return this.$store.getters.getCategory;
    },

    productImgByCategory() {
      return this.$store.getters.getProducts;
    },
  },
  mounted() {
    this.$store.dispatch("getApiCategory");
    this.$store.dispatch("getApiProducts");
  },
};
</script>

<style scoped>
/* Gallery title */
.title-gallery {
  position: relative;
}
.title-gallery h1 {
  padding: 20px 50px;
  font-size: 50px;
  letter-spacing: -4px;
  line-height: 85px;
  color: #232628;
  font-weight: 700;
}
.title-gallery img {
  position: absolute;
  top: -10px;
  left: 32%;
  z-index: -1;
  text-align: center;
}
.title-gallery h1 span {
  color: #0988ff;
  font-style: italic;
}
.title-gallery p {
  font-size: 16px;
  line-height: 28px;
  color: #888888;
  font-weight: 400;
}
/* ------------------------------------------ */

/* GALLERY SHOW ITEM */
.show-gallery .cate-gallery .item {
  position: relative;
  margin-bottom: 30px;
}
.show-gallery .cate-gallery .item img{
    height: 300px;
    object-fit:cover;
    width:100%;
    
}
.show-gallery .cate-gallery .item .layout-item {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  background: #1f2441;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0;
}
.show-gallery .cate-gallery .item .layout-item li {
  list-style: none;
}
.show-gallery .cate-gallery .item .layout-item li a .icon {
  font-size: 40px;
  color: white;
}
.show-gallery .cate-gallery .item:hover .layout-item {
  opacity: 0.7;
  transition: all 0.3s ease;
}
/* ------------------------------------------ */
</style>

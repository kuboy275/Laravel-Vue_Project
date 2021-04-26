<template>
  <div>
    <banner v-bind:title="title" />
    <div class="title-all text-center py-5">
      <h1>Photo <span>Gallery</span></h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit . Similique numquam
        perspiciatis <br />
        possimus dolores consequatur alias? Asperiores incidunt placeat.
      </p>
    </div>
    <div class="gallery">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <nav>
              <div
                class="nav nav-tabs justify-content-center mb-5 border-0"
                id="nav-tab"
                role="tablist"
              >
                <a
                  v-for="cate in categories"
                  @click="check(cate)"
                  :key="cate.id"
                  :class="[
                    'nav-item nav-link border-0',
                    cate.id == activeCategory ? 'active' : '',
                  ]"
                  id="nav-home-tab"
                  data-toggle="tab"
                  href="#nav-home"
                  role="tab"
                  aria-controls="nav-home"
                  aria-selected="true"
                >
                  {{ cate.name }}
                </a>
              </div>
            </nav>
            <div class="tab-content row" id="nav-tabContent">
              <div
                v-for="product in products"
                :key="product.id"
                class="tab-pane fade show active col-lg-4 mb-4"
                id="nav-home"
                role="tabpanel"
                aria-labelledby="nav-home-tab"
              >
                <div class="content position-relative">
                  <img v-lazy="product.feature_img_path" width="100%" alt="" />
                  <a :href="`/shop-detail/${product.id}`" class="layout">
                    <i class="fas fa-plus"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Banner from "@/components/Banner";
export default {
  components: {
    Banner,
  },
  data() {
    return {
      title: "Gallery",
      activeCategory: this.$store.getters.GET_CATEGORY[0].id,
    };
  },

  computed: {
    products() {
      return this.$store.getters.GET_PRODUCTS.filter(
        (x) => x.category_id === this.activeCategory
      );
    },
    categories() {
      return this.$store.getters.GET_CATEGORY;
    },
  },

  methods: {
    check(cate) {
      this.activeCategory = cate.id;
    },
  },

  created() {
    this.$store.dispatch("category");
    this.$store.dispatch("products");
  },
};
</script>

<style scoped>
.gallery {
  margin-bottom: 250px;
}
.nav-tabs .nav-link {
  font-size: 20px;
  font-weight: 600;
  color: #6a6a6a;
}
.nav-tabs .nav-link.active {
  color: #0988ff;
}
.tab-pane img {
  height: 340px;
  object-fit: cover;
  border-radius: 10px;
}
.tab-pane .content .layout {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  border-radius: 10px;
  background: #1f2441;
  opacity: 0;
  transition: all 0.5s ease;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px -5px,
    rgba(0, 0, 0, 0.04) 0px 10px 10px -5px;
}

.tab-pane .content .layout i {
  font-size: 50px;
  color: #ffffff;
  transform: translateY(-150px);
  opacity: 0;
}
.tab-pane .content:hover .layout {
  opacity: 0.8;
}
.tab-pane .content:hover .layout i {
  transform: translateY(0);
  transition: all 1s ease;
  opacity: 1;
}
</style>

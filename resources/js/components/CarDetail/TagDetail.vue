<template>
  <div>
    <!-- eslint-disable -->
    <div class="title-tags">
      <font-awesome-icon
        :icon="['fas', 'tags']"
        class="icon_link"
      />         
      Tags
    </div>
    <div class="row tags mt-3">
      <div  class="tag col-lg-3 col-md-3 col-sm-3 col-3"
          v-for="tagProductById in connectTagsProductById"
          :key="tagProductById.id"
          v-if="tagProductById.product_id === singleProduct.id" >
      <span
          v-for="tag in tagsProduct"
          :key="tag.id"
          v-if="tag.id === tagProductById.tag_id" >
        {{ tag.name }}
      </span>
    </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    singleProduct: {},
  },
  computed: {
    tagsProduct() {
      return this.$store.getters.getTags;
    },
    connectTagsProductById() {
      return this.$store.getters.getproductsTag;
    },
  },
  methods: {
    getTagsProduct() {
      return this.$store.dispatch("getApiTags");
    },
    getTagsProductById() {
      return this.$store.dispatch("getApiProductsTag");
    },
  },
  created() {
    this.getTagsProduct();
    this.getTagsProductById();
  },
};
</script>


<style scoped>
.title-tags{
  font-size: 30px;
  color: #007BFF;
  font-weight: 600;
}
.tags .tag span{
   background: #007BFF;
  border-radius: 3px 0 0 3px;
  color:white;
  display: inline-block;
  height: 26px;
  line-height: 26px;
  padding: 0 23px 0 30px;
  position: relative;
  text-decoration: none;
  -webkit-transition: color 0.2s;
    box-shadow: 0 10px 6px -6px black;
    font-weight: 700;
    width: 100%;
    text-align: center;
}
.tags .tag span::before{
  background: #fff;
  border-radius: 10px;
  box-shadow: inset 0 1px rgba(0, 0, 0, 0.25);
  content: '';
  height: 6px;
  left: 10px;
  position: absolute;
  width: 6px;
  top: 10px;
}
.tags .tag span::after{
  background: #fff;
  border-bottom: 13px solid transparent;
  border-right: 10px solid #007BFF;
  border-top: 13px solid transparent;
  content: '';
  position: absolute;
  left: 0;
  top: 0;
}
.tags .tag span:hover {
  background-color: crimson;
  color: white;
  cursor: pointer;
}

.tags .tag span:hover::after {
   border-right-color: crimson; 
}
</style>
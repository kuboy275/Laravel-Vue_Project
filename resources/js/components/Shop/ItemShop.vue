<template>
    <div>
       <div class="container py-5 mb-5">
            <div class="row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-9">
                    <div class="show-items">
                        <div class="row align-items-center justify-content-between m-0">
                            <h3>Show all 19 Results</h3>
                            <b-dropdown
                                id="dropdown-1"
                                text="Defaut Shorting"
                                class="m-md-2 bg-dark"
                            >
                                <b-dropdown-item>First Action</b-dropdown-item>
                                <b-dropdown-item>Second Action</b-dropdown-item>
                                <b-dropdown-item>Third Action</b-dropdown-item>
                            </b-dropdown>
                        </div>
                    </div>

                    <!--  Top show item   -->
                    <div class="shop--car__item mt-4">
                        <div class="row">

                            <div class="col-lg-4 col-md-6 col-sm-12 col-12 item" 
                                v-for="product in products" :key="product.id" >
                                <div class="item_img">
                                    <img :src=" `http://127.0.0.1:8000${product.feature_img_path}` " 
                                    width="100%" height="100%" />
                                </div>
                                <div class="content_item">
                                    <span class="price"> {{ product.price | formatNumber}} $</span>
                                    <h1 class="title">
                                        {{ product.name }}
                                    </h1>
                                    <!-- <b-nav-item class="link_item"
                                                 to="/MainCarDetail"
                                                 @click="addEvent(product.id)"   >
                                        View To Car
                                        <font-awesome-icon :icon="['fas','angle-double-right']"
                                                            class="icon_link" />
                                    </b-nav-item> -->
                                    <router-link :to="`/MainCarDetail/${product.id}`" 
                                                @click="addEvent(product.id)">
                                        View TO Car
                                    </router-link>
                                </div>
                  
                            </div>
              <!-- <img :src="`${imgPath.id}`" alt=""> -->
                        </div>
                    </div>
                </div>
            </div>
            <!--  Item shop   -->
        </div>
    </div>
</template>


<script>

export default {
    name:"ItemsProducts",

    // props: {
    //     product: Array,
    // },

    mounted() {
        this.$store.dispatch("getApiProducts");
        this.$store.dispatch("getApiProductImage");
    },

    computed: {
        products(){
            return this.$store.getters.getProducts;
        },
        prodcutImage(){
            return this.$store.getters.getProductImage;
        }
    },

    methods: {
        getAllProduct(){
           if(this.$route.params.id!=null){
               this.$store.dispatch("getProductById",this.$route.params.id);
            //    
           }else{
               this.$store.dispatch("getProducts");
           }
        },

        getPathImage(){

            for (let i = 0; i < this.productImage.length; i++) {
                console.log(this.prodcutImage[i].product_id);
            }
            // if(this.$route.params.id!=null){
            //     this.$store.dispatch("getApiProductImage",this.$route.params.id);
            // }else{
            //     console.log("deo lay duoc anh dau th ngu");
            // }
        },
    },

    watch: {
        $route(to,from){
            this.getAllProduct();
            this.getPathImage();
        }
    },







    // data() {
    //     return {
    //         imgPath:{},
            
    //     }
    // },
    // created() {
    //     this.getDataPath();

    // },
    // methods: {
    //     addEvent(id){
    //         var item = this.products.find(item => item.id === id);
    //         for (let i = 0; i < this.imgPath.length; i++) {
    //             if(this.imgPath[i].product_id === item.id){
    //                  var path = new Object();
    //                  path.image = this.imgPath[i].img_path;
    //                  console.log(this.path);
    //                 this.$bus.$emit("item",item,path)
    //             }
    //         }


    //     },
    //     getDataPath(){
    //         const url = "http://127.0.0.1:8000/api/product-image";
    //         axios
    //             .get(url)
    //             .then(reponse =>{
    //                 this.imgPath = reponse.data.productImage;
    //                 console.log(this.imgPath);  
    //             })
    //             .catch((error)=>{
    //                 console.log("Loi Api img path:")
    //             })
    //     },
    // },
}
</script>



<style scoped>

/* TOP  SHOP */

.show-items h3 {
    font-size: 18px;
    color: #555555;
    font-weight: 400;
}

/* ------------------------------------------ */
/* MAIN SHOP */
.shop--car__item .item .item_img img{
    height: 250px;
}
.shop--car__item .item .content_item {
    filter: drop-shadow(0px 16px 16px rgba(186, 186, 186, 0.73));
    background-color: #ffffff;
    padding: 30px;
    margin-bottom: 30px;
}
.shop--car__item .item .content_item .price {
    font-size: 22px;
    letter-spacing: -1px;
    line-height: 35px;
    color: #555555;
    font-weight: 400;
}
.shop--car__item .item .content_item .title {
    font-size: 15px;
    letter-spacing: -1px;
    line-height: 35px;
    color: #232628;
    font-weight: 700;
}
.shop--car__item .item .content_item .link_item {
    list-style: none;
}
.shop--car__item .item .content_item .link_item a {
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
/* ------------------------------------------ */
</style>
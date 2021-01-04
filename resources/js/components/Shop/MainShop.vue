<template>
    <div>
        <!-- START AREA MAIN  -->
        <div class="area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Shop View</h1>
                    </div>
                    <div class="col-lg-12">
                        <h5>Home || Shop View</h5>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- END AREA MAIN  -->

        <!-- START SHOP MAIN  -->
            <!-- <ItemShop :products="product"> </ItemShop> -->
            <ItemShop> </ItemShop>
        <!-- END SHOP MAIN  -->
    </div>
</template>

<script>
import ItemShop from './ItemShop';
export default {
    components:{
        ItemShop
    },
    // data() {
    //     return {
    //         product:[],
    //     }
    // },
    // created() {
    //     this.getApiProducts();

    // },
    // methods: {
    //     getApiProducts(){
    //         let url = "http://127.0.0.1:8000/api/products";
    //         this.axios.get(url)
    //         .then(reponse => {
    //             this.products=reponse.data.products
    //             console.log(this.products);
    //         });
    //     }
    // },
};
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

</style>

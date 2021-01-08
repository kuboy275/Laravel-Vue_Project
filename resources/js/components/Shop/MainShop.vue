<template>
    <div>
        <!-- START AREA MAIN  -->
        <Banner v-bind:title="title"></Banner>
        <!-- END AREA MAIN  -->

        <!-- START SHOP MAIN  -->
        <ItemShop> </ItemShop>
        <!-- END SHOP MAIN  -->
    </div>
</template>

<script>

import ItemShop from './ItemShop';
import Banner from '../Banner'
export default {
    components:{
        ItemShop,
        Banner
    },
    data() {
        return {
            title:"Shop View",
        }
    },
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

/* ------------------------------------------ */

</style>

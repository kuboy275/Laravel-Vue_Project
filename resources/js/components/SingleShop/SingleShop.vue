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
                    <div class="col-lg-6 shop-img__tabs">
                        <div id="panle">
                            <img
                                src="http://127.1:8000/storage/inventory/featured-title-bg.jpg"
                                width="100%"
                                alt=""
                            />
                        </div>
                        <div class="img_sub">
                            <div class="col-3 pl-0">
                                <a href="">
                                    <img
                                        src="http://127.1:8000/storage/inventory/car-img10.jpg"
                                        width="100%"
                                        alt=""
                                /></a>
                            </div>
                            <div class="col-3 pl-0">
                                <a href="">
                                    <img
                                        src="http://127.1:8000/storage/inventory/car-img10.jpg"
                                        width="100%"
                                        alt=""
                                /></a>
                            </div>
                            <div class="col-3 pl-0">
                                <a href="">
                                    <img
                                        src="http://127.1:8000/storage/inventory/car-img10.jpg"
                                        width="100%"
                                        alt=""
                                /></a>
                            </div>
                            <div class="col-3 pl-0">
                                <a href="">
                                    <img
                                        src="http://127.1:8000/storage/inventory/car-img10.jpg"
                                        width="100%"
                                        alt=""
                                /></a>
                            </div>
                        </div>
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
        <div class="review">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <b-card no-body class="review_tab">
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
</style>

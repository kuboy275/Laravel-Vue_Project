<template>
    <div>
        <!-- START FEATURES MAIN HOME -->
        <div class="features py-5 mb-5">
            <div class="title-home text-center">
                <h1>What We <span> Do? </span></h1>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Cum, impedit dolorum. Quod iusto eaque alias
                </p>
            </div>
            <div class="container">
                <div class="row mt-5">
                    <div class="col-lg-3 items">
                        <div class="fea-content text-right">
                            <div class="fea-content__item">
                                <div class="icon-fea_content">
                                    <font-awesome-icon
                                        :icon="['fas', 'car-side']"
                                        class="icon_content"
                                    />
                                </div>
                                <h3>Services & Maintenance</h3>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Amet provident mollitia
                                    laboriosam totam debitis iusto
                                </p>
                            </div>
                            <div class="fea-content__item">
                                <div class="icon-fea_content">
                                    <font-awesome-icon
                                        :icon="['fas', 'life-ring']"
                                        class="icon_content"
                                    />
                                </div>
                                <h3>Services & Maintenance</h3>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Amet provident mollitia
                                    laboriosam totam debitis iusto
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5 d-flex align-items-center">
                        <img
                            v-lazy="`/photos/home/icon-boxes-img.jpg`"
                            width="100%"
                            alt=""
                        />
                    </div>
                    <div class="col-lg-3 items">
                        <div class="fea-content text-left">
                            <div class="fea-content__item">
                                <div class="icon-fea_content">
                                    <font-awesome-icon
                                        :icon="['fas', 'hand-holding-heart']"
                                        class="icon_content"
                                    />
                                </div>
                                <h3>Services & Maintenance</h3>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Amet provident mollitia
                                    laboriosam totam debitis iusto
                                </p>
                            </div>
                            <div class="fea-content__item">
                                <div class="icon-fea_content">
                                    <font-awesome-icon
                                        :icon="['fas', 'tools']"
                                        class="icon_content"
                                    />
                                </div>
                                <h3>Services & Maintenance</h3>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Amet provident mollitia
                                    laboriosam totam debitis iusto
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END FEATURES MAIN HOME -->
        <!-- **************************************** -->
        <!-- START SHOP MAIN HOME  -->
        <DreamCar></DreamCar>
        <!-- END SHOP MAIN HOME -->
        <!-- *************************************** -->
        <!-- START SERVICES MAIN HOME -->
        <div class="services py-5">
            <div class="title-home text-center">
                <h1>Why Choose <span> Us </span></h1>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Cum, impedit dolorum. Quod iusto eaque alias
                </p>
            </div>
            <div class="container">
                <div class="row services-items">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 item">
                        <div class="icon-item">
                            <img
                                src="/photos/home/icon-box-icon1@2x.png"
                                width="90%"
                                alt=""
                            />
                        </div>
                        <h2>Dealership Provider</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Consequuntur sit nisi error nostrum quia!
                            Fugiat modi quo
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 item">
                        <div class="icon-item">
                            <img
                                src="/photos/home/icon-box-icon2@2x.png"
                                width="90%"
                                alt=""
                            />
                        </div>
                        <h2>Dealership Provider</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Consequuntur sit nisi error nostrum quia!
                            Fugiat modi quo
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 item">
                        <div class="icon-item">
                            <img
                                src="photos/home/icon-box-icon3@2x.png"
                                width="90%"
                                alt=""
                            />
                        </div>
                        <h2>Dealership Provider</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Consequuntur sit nisi error nostrum quia!
                            Fugiat modi quo
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 item">
                        <div class="icon-item">
                            <img
                                src="/photos/home/icon-box-icon4@2x.png"
                                width="90%"
                                alt=""
                            />
                        </div>
                        <h2>Dealership Provider</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Consequuntur sit nisi error nostrum quia!
                            Fugiat modi quo
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SERVICES MAIN HOME -->
        <!-- *************************************** -->
        <!-- START FAQ MAIN HOME -->
        <div class="faq">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 item">
                        <img
                            src="/photos/home/layered-img4.jpg"
                            width="100%"
                            alt=""
                            class="item-img"
                        />
                        <div class="layout-img">
                            <img
                                src="/photos/home/layered-img3.png"
                                width="80%"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 item">
                        <h1>Keep Up On Our Always Evolving Products</h1>
                        <div class="text">
                            <font-awesome-icon
                                :icon="['far', 'bell']"
                                class="icon_item"
                            />
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Nisi natus labore tenetur
                                vitae, nemo provident iure ipsa quas facere
                                perspiciatis debitis
                            </p>
                        </div>
                        <div class="text">
                            <font-awesome-icon
                                :icon="['far', 'bell']"
                                class="icon_item"
                            />
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Nisi natus labore tenetur
                                vitae, nemo provident iure ipsa quas facere
                                perspiciatis debitis
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 item">
                        <div class="item_toggle">
                            <b-button v-b-toggle.tab-1 class="btn_toggle">
                                <font-awesome-icon
                                    :icon="['fas', 'plus']"
                                    class="icon_toggle"
                                />
                                Why We Take Our Car ?
                            </b-button>
                            <b-collapse id="tab-1" accordion="my-group" visible>
                                <b-card-body class="text-white text_toggle">
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Quaerat eum velit modi
                                    repellat vero voluptate porro ad
                                </b-card-body>
                            </b-collapse>
                        </div>
                        <div class="item_toggle">
                            <b-button v-b-toggle.tab-2 class="btn_toggle">
                                <font-awesome-icon
                                    :icon="['fas', 'plus']"
                                    class="icon_toggle"
                                />
                                Looking Best Car Services ?
                            </b-button>
                            <b-collapse id="tab-2" accordion="my-group">
                                <b-card-body class="text-white text_toggle">
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Consequuntur, adipisci
                                    repellendus voluptatibus voluptatem
                                    necessitatibus, quia non eveniet, aliquam
                                    quam ratione deleni
                                </b-card-body>
                            </b-collapse>
                        </div>
                        <div class="item_toggle">
                            <b-button v-b-toggle.tab-3 class="btn_toggle">
                                <font-awesome-icon
                                    :icon="['fas', 'plus']"
                                    class="icon_toggle"
                                />
                                Making Freelancing ?
                            </b-button>
                            <b-collapse id="tab-3" accordion="my-group">
                                <b-card-body class="text-white text_toggle">
                                    Lorem ipsum dolor sit amet consectetur,
                                    adipisicing elit. Impedit, vitae! Possimus
                                    quisquam voluptatem, qui alias omnis id
                                    nihil molestiae laboriosam eligendi quod
                                    nemo consequuntur
                                </b-card-body>
                            </b-collapse>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END FAQ MAIN HOME -->
        <!-- ************************************** -->
        <!-- START CUSTOMER MAIN HOME -->
        <SlideCustomer></SlideCustomer>
        <!-- END CUSTOMER MAIN HOME -->
        <!-- ************************************** -->
        <!-- START BRANDS MAIN HOME -->
        <div class="brands py-5">
            <div class="container px-5">
                <div class="row align-items-center text-center">
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <img
                            v-lazy="`/photos/home/client-logo1.png`"
                            width="80%"
                            alt=""
                        />
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <img
                            v-lazy="`/photos/home/client-logo2.png`"
                            width="80%"
                            alt=""
                        />
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <img
                            v-lazy="`/photos/home/client-logo3.png`"
                            width="80%"
                            alt=""
                        />
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <img
                            v-lazy="`/photos/home/client-logo4.png`"
                            width="80%"
                            alt=""
                        />
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <img
                            v-lazy="`/photos/home/client-logo5.png`"
                            width="80%"
                            alt=""
                        />
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <img
                            v-lazy="`/photos/home/client-logo6.png`"
                            width="80%"
                            alt=""
                        />
                    </div>
                </div>
            </div>
        </div>
        <!-- END BRANDS MAIN HOME -->
        <!-- ************************************** -->
        <!-- START BLOG MAIN HOME -->
        <Blog/>
        <!-- END BLOG MAIN HOME -->
        <!-- ************************************** -->
    </div>
</template>

<script>
import DreamCar from './DreamCar';
import SlideCustomer from './SlideCustomer';
import Blog from './Blog'

export default {
    components: {
        SlideCustomer,
        DreamCar,
        Blog
    },
};
</script>

<style scoped>
.title-home {
    width: 50%;
    margin: 20px auto;
}
.title-home h1 {
    font-size: 55px;
    letter-spacing: -2px;
    line-height: 28px;
    color: #232628;
    font-weight: 700;
    margin-bottom: 25px;
}
.title-home h1 span {
    color: #0988ff;
    font-style: italic;
    font-weight: 700;
}
.title-home p {
    font-size: 16px;
    line-height: 28px;
    color: #888888;
    font-weight: 400;
}

/* ALL TITLE MAIN HOME  */

/* ---------------------------------- */
.features {
    background-image: url(/photos/home/section-bg1.png);
    background-repeat: no-repeat;
    background-size: cover;
}

.features .items:nth-child(1) .fea-content .fea-content__item {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
}
.features .fea-content .fea-content__item {
    margin: 35px 0;
}
.features .fea-content .fea-content__item .icon-fea_content {
    width: 60px;
    height: 60px;
    background-color: #0988ff;
    border-radius: 5px;
    text-align: center;
    line-height: 75px;
}
.features .fea-content .fea-content__item .icon-fea_content .icon_content {
    color: white;
    font-size: 30px;
}
.features .fea-content .fea-content__item h3 {
    font-size: 22px;
    letter-spacing: -1px;
    color: #232628;
    font-weight: 700;
    width: 100%;
    margin-top: 25px;
}
.features .fea-content .fea-content__item p {
    font-size: 14px;
    line-height: 32px;
    color: #888888;
    font-weight: 400;
}
@media (max-width: 991px) {
    .title-home {
        width: 100%;
    }
    .features .items:nth-child(1) .fea-content {
        text-align: left !important;
    }
    .features .items:nth-child(1) .fea-content .fea-content__item {
        align-items: flex-start;
    }
}
@media (max-width: 1200px) {
    .title-home {
        width: 80%;
    }
}
@media (max-width: 767px) {
    .title-home {
        width: 100%;
    }
    .title-home h1 {
        font-size: 45px;
    }
}

/* FEATURES MAIN HOME */



/* ---------------------------------- */
.services .services-items .item {
    margin-bottom: 30px;
}
.services .services-items .item h2 {
    font-size: 24px;
    letter-spacing: -1px;
    margin-top: 20px;
    color: #232628;
    font-weight: 700;
}
.services .services-items .item p {
    font-size: 14px;
    line-height: 32px;
    color: #888888;
    font-weight: 400;
}
.services .services-items .item img {
    height: 100px;
}

/* SERVICES MAIN HOME */

/* ---------------------------------- */
.faq {
    background-image: url(/photos/home/section-bg4.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    padding: 70px 0;
}
.faq .item {
    position: relative;
    margin-top: 50px;
}
.faq .item .item-img {
    position: relative;
    z-index: 1;
    height: 300px;
}
.faq .layout-img {
    position: absolute;
    top: -30px;
    left: -20px;
}
.faq .item h1 {
    font-size: 24px;
    letter-spacing: -1px;
    color: #ffffff;
    font-weight: 700;
    line-height: 30px;
}

.faq .item .text {
    display: flex;
    align-items: flex-start;
}
.faq .item .text .icon_item {
    font-size: 22px;
    line-height: 28px;
    color: #0988ff;
    margin-right: 15px;
    margin-top: 8px;
}
.faq .item .text p {
    font-size: 14px;
    line-height: 28px;
    color: #ffffff;
    font-weight: 400;
}
.faq .item .item_toggle .btn_toggle {
    background: none;
    border-radius: 0;
    border: none;
    box-shadow: none;
    font-size: 16px;
    color: #ffffff;
    font-weight: 600;
}
.faq .item .item_toggle .btn_toggle .icon_toggle {
    margin-right: 10px;
}
.faq .item .item_toggle .text_toggle {
    font-size: 14px;
    line-height: 28px;
    color: #ffffff;
    font-weight: 400;
    padding-left: 30px;
}

/* FAQ MAIN HOME */


.brands {
    margin-bottom: 150px;
}
.brands img {
    width: 70px;
    height: 70px;
    margin-bottom: 30px;
}
@media (max-width: 767px) {
    .brands {
        margin-bottom: 300px;
    }
}
/* BRANDS MAIN HOME */


</style>

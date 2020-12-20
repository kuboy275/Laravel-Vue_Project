<template>
    <div>
        <!-- START AREA MAIN HOME -->
        <div class="area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Inventory</h1>
                    </div>
                    <div class="col-lg-12">
                        <h5>Home || Inventory</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- END AREA MAIN HOME -->
        <!-- **************************************** -->
        <!-- GALLERY TITLE MAIN  -->
        <div class="title-gallery py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h1>Photo <span> Gallery </span></h1>
                        <img
                            src="http://127.1:8000/storage/gallery/title-gallery.PNG"
                            alt=""
                        />
                        <p>
                            Lorem ipsum harum laborum ullam dolore aspernatur
                            soluta, et, ab pariatur provident
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- **************************************** -->
        <!-- SHOW GALLERY MAIN -->
        <div class="show-gallery pb-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cate-gallery mb-5">
                            <b-card no-body>
                                <b-tabs card>
                                    <b-tab no-body title="Show All">
                                        <div class="img-show">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="item">
                                                        <b-card-img
                                                            src="https://picsum.photos/600/200/?image=21"
                                                        >
                                                        </b-card-img>
                                                        <div
                                                            class="layout-item"
                                                        >
                                                            <b-nav-item
                                                                class="link_nav"
                                                                to="/SingleShop"
                                                            >
                                                                <font-awesome-icon
                                                                    :icon="[
                                                                        'fas',
                                                                        'plus'
                                                                    ]"
                                                                    class="icon"
                                                                />
                                                            </b-nav-item>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="item">
                                                        <b-card-img
                                                            src="https://picsum.photos/600/200/?image=21"
                                                        >
                                                        </b-card-img>
                                                        <div
                                                            class="layout-item"
                                                        >
                                                            <b-nav-item
                                                                class="link_nav"
                                                                to="/SingleShop"
                                                            >
                                                                <font-awesome-icon
                                                                    :icon="[
                                                                        'fas',
                                                                        'plus'
                                                                    ]"
                                                                    class="icon"
                                                                />
                                                            </b-nav-item>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="item">
                                                        <b-card-img
                                                            src="https://picsum.photos/600/200/?image=21"
                                                        >
                                                        </b-card-img>
                                                        <div
                                                            class="layout-item"
                                                        >
                                                            <b-nav-item
                                                                class="link_nav"
                                                                to="/SingleShop"
                                                            >
                                                                <font-awesome-icon
                                                                    :icon="[
                                                                        'fas',
                                                                        'plus'
                                                                    ]"
                                                                    class="icon"
                                                                />
                                                            </b-nav-item>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="item">
                                                        <b-card-img
                                                            src="https://picsum.photos/600/200/?image=21"
                                                        >
                                                        </b-card-img>
                                                        <div
                                                            class="layout-item"
                                                        >
                                                            <b-nav-item
                                                                class="link_nav"
                                                                to="/SingleShop"
                                                            >
                                                                <font-awesome-icon
                                                                    :icon="[
                                                                        'fas',
                                                                        'plus'
                                                                    ]"
                                                                    class="icon"
                                                                />
                                                            </b-nav-item>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </b-tab>
                                    <b-tab no-body title="Moka">
                                        <div class="img-show">
                                            <div class="row">
                                                <div class="col-4 item">
                                                    <b-card-img
                                                        src="https://picsum.photos/600/200/?image=21"
                                                    >
                                                    </b-card-img>
                                                    <div class="layout-item">
                                                        <b-nav-item
                                                            class="link_nav"
                                                            to="/MainShop"
                                                        >
                                                            <font-awesome-icon
                                                                :icon="[
                                                                    'fas',
                                                                    'plus'
                                                                ]"
                                                                class="icon"
                                                            />
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
            </div>
        </div>

        <!-- **************************************** -->
    </div>
</template>

<style scope>
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
.show-gallery .cate-gallery .item .card-img {
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

<template>
    <div>
        <div id="top"></div>
        <div class="container-fluid">
            <div class="row align-items-center p-3 nav_scroll">
                <div class="col-lg-3 col-sm-5 col-8 text-center logo">
                    <a href="/vue"> 
                        <img
                        src="http://127.0.0.1:8000/storage/header/logo-white@2x.png"
                        width="50%"
                        />
                    </a>
                </div>
                <div class="col-lg-6 menu_link">
                    <b-navbar class="justify-content-center">
                        <div
                            class="btn_close d-lg-none d-sm-block"
                            @click="closeMenu"
                        >
                            <font-awesome-icon
                                :icon="['fas', 'times']"
                                class="icon_close"
                            />
                        </div>
                        <b-navbar-nav>
                            <b-nav-item class="link_nav" to="/vue">
                                <font-awesome-icon
                                    :icon="['fas', 'house-damage']"
                                    class="icon_nav_link"
                                />
                                Home
                            </b-nav-item>
                            <b-nav-item class="link_nav" to="/create">
                                <font-awesome-icon
                                    :icon="['fas', 'house-damage']"
                                    class="icon_nav_link"
                                />
                                Create
                            </b-nav-item>
                            <b-nav-item class="link_nav" to="/MainInventory">
                                <font-awesome-icon
                                    :icon="['fas', 'house-damage']"
                                    class="icon_nav_link"
                                />
                                MainInventory
                            </b-nav-item>
                            <b-nav-item class="link_nav" to="/MainShop">
                                <font-awesome-icon
                                    :icon="['fas', 'house-damage']"
                                    class="icon_nav_link"
                                />
                                MainShop
                            </b-nav-item>
                            <b-nav-item class="link_nav" to="/posts">
                                <font-awesome-icon
                                    :icon="['fas', 'house-damage']"
                                    class="icon_nav_link"
                                />
                                Post
                            </b-nav-item>
                            <b-nav-item class="link_nav" to="/posts">
                                <font-awesome-icon
                                    :icon="['fas', 'house-damage']"
                                    class="icon_nav_link"
                                />
                                Post
                            </b-nav-item>
                        </b-navbar-nav>
                    </b-navbar>
                </div>
                <div class="col-xl-3 col-sm-12 d-flex justify-content-center">
                    <b-nav-form class="form_search">
                        <b-form-input placeholder="Search here"></b-form-input>
                        <font-awesome-icon
                            :icon="['fas', 'search']"
                            class="icon_search"
                        />
                    </b-nav-form>
                </div>
                <div class="hambeger" @click="openMenu">
                    <font-awesome-icon :icon="['fas', 'hamburger']" />
                </div>
            </div>
            <div class="row m-4 p-5">
                <div class="col-lg-5 col-md-6 col-sm-7 col-12">
                    <div class="content">
                        <div class="content_text d-flex align-items-end">
                            <img
                                src="http://127.0.0.1:8000/storage/header/slider-small-car.png"
                                alt=""
                            />
                            <h4 class="mb-0 ml-4">dream cars provider</h4>
                        </div>
                        <div class="content_title">
                            <h1 class="mt-4">
                                Best Vehicles For <span>Dreams</span>
                                <img
                                    src="http://127.0.0.1:8000/storage/header/slider-text.png"
                                    class="mt-5"
                                    width="100%"
                                    alt=""
                                />
                            </h1>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur
                                adipisicing elit. Illo eius utmtione nostrum
                                iure!
                            </p>
                        </div>
                        <button>
                            visit shop
                            <font-awesome-icon
                                :icon="['fas', 'angle-double-right']"
                                class="icon_btn"
                            />
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {};
    },
    created() {
        window.addEventListener("scroll", this.handleScroll);
    },
    methods: {
        openMenu() {
            const meunLink = document.querySelector(".menu_link");
            meunLink.classList.add("active");
        },
        closeMenu() {
            const meunLink = document.querySelector(".menu_link");
            meunLink.classList.remove("active");
        },
        handleScroll() {
            const navScroll = document.querySelector(".nav_scroll");
            if (window.scrollY > 100) {
                navScroll.classList.add("active");
            } else {
                navScroll.classList.remove("active");
            }
        }
    }
};
</script>

<style scoped>

.nav-link:focus {
    color: #3d3d3d !important;
}
.nav_scroll.active {
    position: fixed;
    background: #45aaf2;
    width: 100%;
    z-index: 999;
    top: 0;
    transition: all 1s ease;
    padding: 15px !important;
}
.hambeger {
    display: none;
    position: absolute;
    right: 20px;
}

.hambeger svg {
    color: #fd7e14;
    font-size: 50px;
    cursor: pointer;
}
.container-fluid {
    background-image: url(http://127.1:8000/storage/header/slider-bg.jpg);
    height: 100vh;
    background-size: cover;
    background-repeat: no-repeat;
}
.menu_link {
    display: flex;
    justify-content: center;
}
.menu_link ul {
    color: #596275;
}
.menu_link .link_nav {
    font-size: 15px;
    font-weight: 700;
    text-transform: uppercase;
    font-family: "Montserrat", sans-serif;
}
.menu_link .link_nav .icon_nav_link{
    color: #0987FF;
    font-size: 16px;
    display: none;
}
.form_search {
    width: 220px;
    height: 50px;
    border-radius: 5px;
    border: 2px solid white;
}
.form_search .icon_search {
    color: #f4f4f4;
    font-size: 14px;
    cursor: pointer;
}
.form_search input:focus {
    border: none;
    outline: none;
    box-shadow: none;
}
.form_search input {
    background: transparent;
    border: none;
    font-size: 14px;
    color: #f4f4f4;
}
.form_search input::placeholder {
    color: #f4f4f4;
}

.content .content_text h4 {
    font-size: 14px;
    letter-spacing: 1px;
    color: #0988ff;
    font-weight: 700;
    text-transform: uppercase;
}
.content_title h1 {
    position: relative;
    font-size: 60px;
    letter-spacing: -3px;
    color: #232628;
    font-weight: 700;
}
.content_title h1 span {
    color: #0988ff;
}
.content_title h1 img {
    position: absolute;
    top: -28%;
    left: 0;
}
.content_title p {
    font-size: 16px;
    line-height: 32px;
    color: #808080;
    font-weight: 400;
    margin: 20px 0;
}
.content button {
    border: none;
    outline: none;
    background-color: #0988ff;
    border-radius: 5px;
    padding: 15px 35px;
    color: #ffffff;
    font-size: 14px;
    font-weight: 700;
    text-align: center;
    text-transform: uppercase;
    opacity: 1;
    transition: all 0.5s ease-in-out;
}
.content button:hover {
    opacity: 0.8;
}

@media (max-width: 1220px) {
    .form_search {
        display: none;
    }
    .menu_link .link_nav {
        font-size: 13px;
        color: #232628;
        font-weight: 700;
        text-transform: uppercase;
        font-family: "Montserrat", sans-serif;
    }

    .content_title h1 {
        font-size: 50px;
    }
    .content_title p {
        font-size: 14px;
    }
}

@media (max-width: 991px) {
    .menu_link {
        top: 0;
        position: absolute;
        right: 0;
        background: white;
        height: 100vh;
        width: 25%;
    display: none;
    }
    .menu_link.active {
        display: block;        z-index: 3;
    }
    .menu_link ul {
        flex-direction: column;
    }
    .content_title h1 {
        font-size: 45px;
    }
    .hambeger {
        display: block;
    }
    .btn_close {
        position: absolute;
        text-align: center;
        top: 20px;
        right: -30px;
        width: 40px;
        height: 40px;
        background-color: #fff;
        line-height: 43px;
        border-radius: 50%;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .btn_close .icon_close {
        font-size: 18px;
    }
    .btn_close:hover {
        background-color: #a5b1c2;
        color: #4b6584;
    }
    .logo .nav-item{
        list-style: none;
    }
    .logo img {
        width: 80%;
    }

    .menu_link .link_nav .icon_nav_link{
        display: inline-block;
    }

    .menu_link .link_nav {
        font-size: 16px;
        margin: 20px 0;
    }
}

@media(max-width: 767px){
        .btn_close {
         right: 0px;
    }
        .content_title h1 {
        font-size: 40px;
    }
    .menu_link{
        width: 40%;
    }
}
@media(max-width: 575px){
        .menu_link{
        width: 100%;
    }
    .btn_close {
         left: 40px;
         top: 30px;
    }

}
</style>

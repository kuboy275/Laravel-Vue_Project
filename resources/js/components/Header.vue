<template>
  <div>
    <div id="top"></div>
    <div class="container-fluid">
      <div class="row align-items-center p-3 nav_scroll">
        <div class="col-lg-3 col-sm-5 col-8 text-center logo">
          <a href="/">
            <img src="/photos/header/logo-white@2x.png" width="50%" />
          </a>
        </div>
        <div class="col-lg-6 menu_link">
          <b-navbar class="justify-content-center">
            <div class="btn_close d-lg-none d-sm-block" @click="closeMenu">
              <font-awesome-icon :icon="['fas', 'times']" class="icon_close" />
            </div>
            <b-navbar-nav>
              <b-nav-item class="link_nav" to="/">
                <font-awesome-icon
                  :icon="['fas', 'house-damage']"
                  class="icon_nav_link"
                />
                Home
              </b-nav-item>
              <b-nav-item class="link_nav" to="/MainInventory">
                <font-awesome-icon
                  :icon="['fas', 'house-damage']"
                  class="icon_nav_link"
                />
                Inventory
              </b-nav-item>
              <b-nav-item class="link_nav" to="/MainShop">
                <font-awesome-icon
                  :icon="['fas', 'house-damage']"
                  class="icon_nav_link"
                />
                Shop
              </b-nav-item>
              <b-nav-item class="link_nav" to="/MainGallery">
                <font-awesome-icon
                  :icon="['fas', 'house-damage']"
                  class="icon_nav_link"
                />
                Gallery
              </b-nav-item>
              <b-nav-item class="link_nav" to="/MainBlog">
                <font-awesome-icon
                  :icon="['fas', 'house-damage']"
                  class="icon_nav_link"
                />
                Blog
              </b-nav-item>
              <b-nav-item class="link_nav" to="/about">
                <font-awesome-icon
                  :icon="['fas', 'house-damage']"
                  class="icon_nav_link"
                />
                About
              </b-nav-item>
            </b-navbar-nav>
          </b-navbar>
        </div>
        <div class="col-xl-3 col-sm-12">
          <a href="" @click="logout" class="logout">
            <font-awesome-icon :icon="['fas', 'sign-out-alt']" />
            Logout Here
          </a>
        </div>
        <div class="hambeger" @click="openMenu">
          <font-awesome-icon :icon="['fas', 'hamburger']" />
        </div>
      </div>
      <div class="row m-4 p-5">
        <div class="col-lg-5 col-md-6 col-sm-7 col-12">
          <div class="content">
            <div class="content_text d-flex align-items-end">
              <img src="photos/header/slider-small-car.png" alt="" />
              <h4 class="mb-0 ml-4">dream cars provider</h4>
            </div>
            <div class="content_title">
              <h1 class="mt-4">
                Best Vehicles For <span>Dreams</span>
                <img
                  src="photos/header/slider-text.png"
                  class="mt-5"
                  width="100%"
                  alt=""
                />
              </h1>
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo eius
                utmtione nostrum iure!
              </p>
            </div>
            <!-- <button>
              visit shop
              <font-awesome-icon :icon="['fas', 'angle-double-right']" class="icon_btn" />
            </button> -->
            <a class="link link-white link-animation" href="/MainShop">
              visit shop
              <font-awesome-icon :icon="['fas', 'angle-double-right']" class="icon_btn" />
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import AuthService from "./services/AuthService";
export default {
  data() {
    return {
      name: "",
      secretMessage: "",
    };
  },
  // computed: {
  //   name() {
  //     return this.$store.getters.getUser.name;
  //   },
  // },
  async created() {
    window.addEventListener("scroll", this.handleScroll);
    if (!this.$store.getters.isLoggedIn) {
      this.$router.push("/sign");
    }
    this.name = this.$store.getters.getUser.name;
    this.secretMessage = await AuthService.getSecretContent();
  },
  methods: {
    logout() {
      this.$store.dispatch("logout");
      this.$router.push("/sign");
    },
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
      const links = document.querySelectorAll(".link_nav .nav-link");
      if (window.scrollY > 50) {
        navScroll.classList.add("active");
        links.forEach((item) => item.classList.add("white"));
      } else {
        navScroll.classList.remove("active");
        links.forEach((item) => item.classList.remove("white"));
      }
    },
  },
};
</script>

<style scoped>
/* .nav-link:focus {
    color: #3d3d3d !important;
} */
.nav-link.white {
  color: #fff;
}
.nav_scroll.active {
  position: fixed;
  background: #45aaf2;
  width: 100%;
  z-index: 999;
  top: 0;
  transition: all 0.5s ease;
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
  background-image: url(/photos/header/slider-bg.jpg);
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
.menu_link .link_nav .icon_nav_link {
  color: #0987ff;
  font-size: 16px;
  display: none;
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
  margin: 20px 0 30px 0;
}
.content .link {
  text-decoration: none;
  text-transform: uppercase;
  position: relative;
  top: 0;
  left: 0;
  padding: 20px 40px;
  border-radius: 30px;
  display: inline-block;
  transition: all 0.5s;
  font-weight: 700;
}
.content .link-white {
  background: #0988ff;
  color: #ffffff;
}
.content .link:hover {
  box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.2);
  transform: translateY(-3px);
}
.content .link::after {
  content: "";
  text-decoration: none;
  text-transform: uppercase;
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  border-radius: 30px;
  display: inline-block;
  z-index: -1;
  transition: all 0.5s;
}
.content .link-white::after {
  background: #0988ff;
}
.content .link-animation:hover::after {
  transform: scaleX(1.4) scaleY(1.6);
  opacity: 0;
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
  .nav-link.white {
    color: #000;
  }
  .menu_link.active {
    display: block;
    z-index: 3;
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
  .logo .nav-item {
    list-style: none;
  }
  .logo img {
    width: 80%;
  }

  .menu_link .link_nav .icon_nav_link {
    display: inline-block;
  }

  .menu_link .link_nav {
    font-size: 16px;
    margin: 20px 0;
  }
}

@media (max-width: 767px) {
  .btn_close {
    right: 0px;
  }
  .content_title h1 {
    font-size: 40px;
  }
  .menu_link {
    width: 40%;
  }
}
@media (max-width: 575px) {
  .menu_link {
    width: 100%;
  }
  .btn_close {
    left: 40px;
    top: 30px;
  }
}

.logout{
  color: white;
  font-weight: 600;
  font-size: 20px;
  display: block;
  text-align: center;
}
</style>

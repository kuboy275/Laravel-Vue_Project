<template>
  <div>
    <!-- START HEADER -->
    <div class="container-fluid header pl-5">
      <div class="row">
        <div class="col-md-6 col-sm-12 content">
          <div class="content-header d-flex align-items-end">
            <img src="/images/slider-small-car.png" alt="" />
            <h4>dream cars provider</h4>
          </div>
          <h1 class="title">
            Best Vehicles <br />
            For <span>Dreams</span>
          </h1>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo eius <br />
            utmtione nostrum iure!
          </p>
          <router-link :to="{ name: 'shop' }">
            Visit shop
            <i class="fas fa-long-arrow-alt-right ml-2 mt-1"></i>
          </router-link>
        </div>
      </div>
    </div>
    <!-- END HEADER -->
    <!-- START FEATURES -->
    <div class="features py-5 mb-5">
      <div class="title-all text-center">
        <h1>What We <span> Do? </span></h1>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum, impedit dolorum.
          Quod iusto eaque alias
        </p>
      </div>
      <div class="container">
        <div class="row mt-5">
          <div class="col-lg-3 items">
            <div class="fea-content text-right">
              <div class="fea-content__item">
                <div class="icon-fea_content">
                  <i class="fas fa-car"></i>
                </div>
                <h3>Services & Maintenance</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet provident
                  mollitia laboriosam totam debitis iusto
                </p>
              </div>
              <div class="fea-content__item">
                <div class="icon-fea_content">
                  <i class="fab fa-steam-symbol"></i>
                </div>
                <h3>Services & Maintenance</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet provident
                  mollitia laboriosam totam debitis iusto
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mt-5 d-flex align-items-center">
            <img v-lazy="'/images/icon-boxes-img.jpg'" width="100%" alt="" />
          </div>
          <div class="col-lg-3 items">
            <div class="fea-content text-left">
              <div class="fea-content__item">
                <div class="icon-fea_content">
                  <i class="fas fa-cogs"></i>
                </div>
                <h3>Services & Maintenance</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet provident
                  mollitia laboriosam totam debitis iusto
                </p>
              </div>
              <div class="fea-content__item">
                <div class="icon-fea_content">
                  <i class="fas fa-award"></i>
                </div>
                <h3>Services & Maintenance</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet provident
                  mollitia laboriosam totam debitis iusto
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END FEATURES -->
    <!-- DREAM CAR -->
    <dream-car />
    <!-- END DREAM CAR -->
    <!-- SERVICES -->
    <div class="services py-5">
      <div class="title-all text-center">
        <h1>Why Choose <span> Us </span></h1>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum, impedit dolorum.
          Quod iusto eaque alias
        </p>
      </div>
      <div class="container my-5">
        <div class="row services-items">
          <div class="col-lg-3 col-md-6 col-sm-6 col-12 item">
            <div class="icon-item">
              <img src="/images/icon-box-icon1@2x.png" width="90%" alt="" />
            </div>
            <h2>Dealership Provider</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur sit
              nisi error nostrum quia! Fugiat modi quo
            </p>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12 item">
            <div class="icon-item">
              <img src="/images/icon-box-icon2@2x.png" width="90%" alt="" />
            </div>
            <h2>Dealership Provider</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur sit
              nisi error nostrum quia! Fugiat modi quo
            </p>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12 item">
            <div class="icon-item">
              <img src="/images/icon-box-icon3@2x.png" width="90%" alt="" />
            </div>
            <h2>Dealership Provider</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur sit
              nisi error nostrum quia! Fugiat modi quo
            </p>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12 item">
            <div class="icon-item">
              <img src="/images/icon-box-icon4@2x.png" width="90%" alt="" />
            </div>
            <h2>Dealership Provider</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur sit
              nisi error nostrum quia! Fugiat modi quo
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- END SERVICES -->
    <!-- Slide home -->
    <slide-home />
    <!-- BRANDS LOGO -->
    <div class="brands pb-5 text-center">
      <div class="container px-5">
        <div class="row align-items-center">
          <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <img v-lazy="'/images/client-logo1.png'" width="80%" alt="logo" />
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <img v-lazy="'/images/client-logo2.png'" width="80%" alt="logo" />
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <img v-lazy="'/images/client-logo3.png'" width="80%" alt="logo" />
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <img v-lazy="'/images/client-logo4.png'" width="80%" alt="logo" />
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <img v-lazy="'/images/client-logo5.png'" width="80%" alt="logo" />
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <img v-lazy="'/images/client-logo6.png'" width="80%" alt="logo" />
          </div>
        </div>
      </div>
    </div>
    <!-- END BRANDS LOGO -->
  </div>
</template>

<script>
import DreamCar from "./DreamCar";
import SlideHome from "./SlideHome";
export default {
  components: {
    DreamCar,
    SlideHome,
  },
  data() {
    return {};
  },
};
</script>

<style scoped>
.header {
  background-image: url(/images/header.jpg);
  height: 110vh;
  background-size: cover;
  background-repeat: no-repeat;
  position: relative;
  margin-top: -110px;
}
.header .content {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
}
.header .content .content-header h4 {
  font-size: 16px;
  color: #0988ff;
  font-weight: 700;
  text-transform: uppercase;
  margin-left: 20px;
  line-height: 0;
}
.header .content .title {
  font-size: 80px;
  letter-spacing: -3px;
  color: #232628;
  font-weight: 800;
  line-height: 80px;
  margin: 15px 0;
}
.header .content .title span {
  color: #0988ff;
}
.header .content p {
  font-size: 16px;
  line-height: 25px;
  color: #2f3640;
  font-weight: 600;
  margin: 20px 0 30px 0;
}
.header a {
  width: 160px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-right: 5px;
  position: relative;
  background-color: #fff;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.25), 0 2px 3px rgba(0, 0, 0, 0.1);
  text-decoration: none;
  border-radius: 32px;
  color: #2f3542;
  font-weight: 600;
  font-size: 20px;
}
.header a:hover {
  transition: all 0.5s;
  box-shadow: 0px 10px 10px rgb(0 0 0 / 20%);
  transform: translateY(-3px);
  color: #fff;
}
.header a::before {
  content: "";
  position: absolute;
  z-index: -1;
  top: -8px;
  right: -8px;
  bottom: -8px;
  left: -8px;
  background-color: #0988ff;
  -moz-border-radius: 140px;
  -webkit-border-radius: 140px;
  border-radius: 140px;
  opacity: 0.5;
}
/*  */
/* ---------------------------------- */
.features {
  background-image: url(/images/section-bg1.png);
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
  line-height: 67px;
}
.features .fea-content .fea-content__item .icon-fea_content i {
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
  .features .items:nth-child(1) .fea-content {
    text-align: left !important;
  }
  .features .items:nth-child(1) .fea-content .fea-content__item {
    align-items: flex-start;
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
</style>

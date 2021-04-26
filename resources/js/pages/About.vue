<template>
  <div class="about">
    <banner v-bind:title="title" />
    <div class="team py-5">
      <div class="container">
        <div class="title-all text-center mb-5">
          <h1>Exclusive <span>Team</span></h1>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-6 col-12 item mb-5">
            <img src="/images/team-member3.jpg" width="100%" alt="" />
            <div class="content">
              <h2>JOSh Butalr CRO</h2>
              <h5>CEO & Founder</h5>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-12 item mb-5">
            <img src="/images/team-member7.jpg" width="100%" alt="" />
            <div class="content">
              <h2>JOSh Butalr CRO</h2>
              <h5>CEO & Founder</h5>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-12 item mb-5">
            <img src="/images/team-member8.jpg" width="100%" alt="" />
            <div class="content">
              <h2>JOSh Butalr CRO</h2>
              <h5>CEO & Founder</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="location">
      <p>ABOUT US</p>
      <div class="container">
        <div class="row">
          <div class="my-link">
            <a href="#!">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span>
                <i class="fab fa-facebook-f"></i>
              </span>
            </a>
          </div>
          <div class="my-link">
            <a href="#!">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span> <i class="fab fa-instagram"></i> </span>
            </a>
          </div>
          <div class="my-link">
            <a href="#!">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span> <i class="fab fa-twitter"></i> </span>
            </a>
          </div>
          <div class="my-link">
            <a href="#!">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span> <i class="fab fa-google-plus-g"></i> </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Banner from "../components/Banner.vue";
export default {
  components: { Banner },
  data() {
    return {
      title: "Team Member",
    };
  },
};
</script>

<style scoped>
.team {
  background-color: #f8fafa;
}
.item img {
  border-radius: 10px 10px 10px 0;
  object-fit: cover;
  height: 25 0px;
  box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
}
.item .content {
  width: 90%;
  box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
  background: #fff;
  padding: 20px 10px 20px 30px;
  transform: translateY(-50%);
  border-radius: 0 10px 10px 10px;
}
.item .content h2 {
  font-size: 18px;
  letter-spacing: -1px;
  line-height: 35px;
  color: #232628;
  font-weight: 700;
}
.item .content h5 {
  font-size: 16px;
  font-weight: 600;
  color: #0988ff;
}

/* LOCATION */
.location {
  background: url(/images/featured-title-bg.jpg);
  background-size: cover;
  background-position: bottom;
  width: 100%;
  margin-bottom: 200px;
  text-align: center;
  height: 90vh;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}
.location p {
  color: white;
  font-weight: 700;
  font-size: 30px;
}
.location .row {
  justify-content: center;
  align-content: center;
}
.location .my-link {
  position: relative;
  width: 60px;
  height: 60px;
  transform: rotate(-30deg) skew(25deg);
  margin: 0 40px;
  margin-top: 120px;
}
.location .my-link span {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  transition: 0.5s;
  display: flex !important;
  align-items: center;
  justify-content: center;
  color: #000;
  font-size: 30px;
  border-radius: 5px;
}
.location .my-link span i {
  color: white;
}
.location .my-link:hover span:nth-child(5) {
  transform: translate(40px, -40px);
  opacity: 1;
}
.location .my-link:hover span:nth-child(4) {
  transform: translate(30px, -30px);
  opacity: 0.8;
}
.location .my-link:hover span:nth-child(3) {
  transform: translate(20px, -20px);
  opacity: 0.6;
}
.location .my-link:hover span:nth-child(2) {
  transform: translate(10px, -10px);
  opacity: 0.4;
}
.location .my-link:hover span:nth-child(1) {
  transform: translate(0px, 0px);
  opacity: 0.2;
}

.location .my-link:nth-child(1) span {
  background: #55acee;
}
.location .my-link:nth-child(2) span {
  background: #dd4b39;
}
.location .my-link:nth-child(3) span {
  background: #3b5999;
}
.location .my-link:nth-child(4) span {
  background: #e4405f;
}

.location .my-link:hover span {
  box-shadow: -1px 1px 1px 2px rgba(0, 0, 0, 0.3);
}
</style>

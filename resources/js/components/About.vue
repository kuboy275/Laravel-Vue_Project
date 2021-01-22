<template>
  <div>
    <!-- Our Team -->
    <div class="container my-our-team mb-5">
      <h2 class="our-team-header" style="color: #17a2b8">Meet Our Team</h2>
      <div class="row justify-content-center">
        <!-- Thanh Tùng -->
        <div class="col-md-3 col-sm-6 col-12 mb-2">
          <div class="our-team">
            <div class="pic">
              <img src="/photos/inventory/team1.jpg" alt="Thanh Tung" />
            </div>
            <h3 class="title">Thanh Tùng</h3>
            <span class="post">Business Head</span>
          </div>
        </div>

        <!-- Đình Hiếu -->
        <div class="col-md-3 col-sm-6 col-12 mb-2">
          <div class="our-team">
            <div class="pic">
              <img src="/photos/inventory/team1.jpg" alt="Dinh Hieu" />
            </div>
            <h3 class="title">Đình Hiếu</h3>
            <span class="post">CEO & Founder</span>
          </div>
        </div>

        <!-- Phạm Tuân -->
        <div class="col-md-3 col-sm-6 col-12 mb-2">
          <div class="our-team">
            <div class="pic">
              <img src="/photos/inventory/team1.jpg" alt="Dinh Hieu" />
            </div>
            <h3 class="title">Phạm Tuân</h3>
            <span class="post">Web Deverloper</span>
          </div>
        </div>

        <!-- Quang Huy -->
        <div class="col-md-3 col-sm-6 col-12 mb-2">
          <div class="our-team">
            <div class="pic">
              <img src="/photos/inventory/team1.jpg" alt="Dinh Hieu" />
            </div>
            <h3 class="title">Quang Huy</h3>
            <span class="post">UI/UX Designer</span>
          </div>
        </div>
      </div>
    </div>
    <!-- END Our Team -->
    <div class="factory-image">
      <p class="factory-p">ABOUT US</p>

      <div class="row">
        <div class="my-link">
          <a href="#">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span>
              <font-awesome-icon :icon="['fab', 'facebook-f']" class="icon_social" />
            </span>
          </a>
        </div>
        <div class="my-link">
          <a href="#">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span>
              <font-awesome-icon :icon="['fab', 'twitter']" class="icon_social" />
            </span>
          </a>
        </div>
        <div class="my-link">
          <a href="#">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span>
              <font-awesome-icon :icon="['fab', 'instagram']" class="icon_social" />
            </span>
          </a>
        </div>
        <div class="my-link">
          <a href="#">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span>
              <font-awesome-icon :icon="['fab', 'google-plus-g']" class="icon_social" />
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
.our-team-header {
  text-align: center;
  padding-top: 1.08em;
  padding-bottom: 0.8em;
  /* color: inherit; */
  font-weight: 400;
  font-size: 2.8em;
  font-size: 3rem;
  font-family: "Trade Gothic W01", Helvetica, arial, "Microsoft Yahei", 微软雅黑, STXihei,
    华文细黑, sans-serif;
  /* line-height: 1.2em; */
  text-transform: uppercase;
  letter-spacing: 2px;
}
.our-team {
  /* background-color: #1f1f1f; */
  transition: all 0.5s ease 0s;
}
.our-team:hover {
  transform: scale(1.2) translateY(-3px);
}

.my-our-team .our-team {
  padding: 20px 15px 30px;
  /* background: #e3f2fdc5; */
  background: #e8eaf6c5;
  border-radius: 15px;
  text-align: center;
}
.my-our-team .our-team .pic {
  /* display: inline-block; */
  /* width: 100%; */
  /* height: 100%; */
  /* background: white; */
  padding: 10px;
  margin-bottom: 25px;
  transition: all 0.5s ease 0.1s;
}

.my-our-team .our-team:hover .pic {
  background: #17bebb;
  border-radius: 50%;
}

.my-our-team .our-team .pic img {
  width: 100%;
  height: auto;
  border-radius: 50%;
}

.my-our-team .our-team .title {
  display: block;
  font-size: 21px;
  font-weight: 600;
  color: #2e282a;
  text-transform: uppercase;
  margin: 0 0 7px 0;
  transition: all 0.5s ease 0s;
}

.my-our-team .our-team:hover .title {
  transform: scale(1.05);
}

.my-our-team .our-team .post {
  display: block;
  font-size: 16px;
  /* font-weight: 500 !important; */
  color: #17bebb;
  text-transform: capitalize;
  margin-bottom: 15px;
  transition: all 0.5s ease 0s;
}

.my-our-team .our-team:hover .post {
  transform: scale(1.1);
  color: #17a2b8;
}

.my-our-team .our-team .social {
  padding: 0;
  margin: 0;
  list-style: none;
}

.factory-image {
  background-image: url(/photos/header/featured-title-bg.jpg);
  background-size: cover;
  background-position: bottom;
  width: 100%;
  margin-bottom: 200px;
  text-align: center;
  padding: 150px 0;
}
.factory-image .row {
  align-items: center;
  justify-content: space-around;
  width: 70%;
  margin: 20px auto;
}
.factory-image p {
  color: white;
  font-weight: 700;
  font-size: 30px;
}
.factory-image .my-link {
  position: relative;
  width: 60px;
  height: 60px;
  margin: 0 30px;
  transform: rotate(-30deg) skew(25deg);
  margin-top: 150px;
}
.factory-image .my-link span {
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
.factory-image .my-link span .icon_social {
  color: white;
}
.factory-image .my-link:hover span:nth-child(5) {
  transform: translate(40px, -40px);
  opacity: 1;
}
.factory-image .my-link:hover span:nth-child(4) {
  transform: translate(30px, -30px);
  opacity: 0.8;
}
.factory-image .my-link:hover span:nth-child(3) {
  transform: translate(20px, -20px);
  opacity: 0.6;
}
.factory-image .my-link:hover span:nth-child(2) {
  transform: translate(10px, -10px);
  opacity: 0.4;
}
.factory-image .my-link:hover span:nth-child(1) {
  transform: translate(0, 0);
  opacity: 0.2;
}

.factory-image .my-link:nth-child(1) span {
  background: #55acee;
}
.factory-image .my-link:nth-child(2) span {
  background: #dd4b39;
}
.factory-image .my-link:nth-child(3) span {
  background: #3b5999;
}
.factory-image .my-link:nth-child(4) span {
  background: #e4405f;
}

.factory-image .my-link:hover span {
  box-shadow: -1px 1px 1px 2px rgba(0, 0, 0, 0.3);
}
</style>

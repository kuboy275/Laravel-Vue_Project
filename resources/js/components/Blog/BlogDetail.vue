<template>
  <div>
    <Banner :title="title" />
    <div class="detail py-5 my-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-sm-12 col-12">
            <div class="content">
              <img v-lazy="postDetail.img_path" />
              <div class="date d-flex align-items-center">
                <font-awesome-icon :icon="['far', 'calendar-alt']" class="icon mr-2" />
                <span> {{ postDetail.published_at }} </span>
              </div>
              <h1>{{ postDetail.title }}</h1>
              <p>{{ postDetail.body }}</p>
              <div class="promotext">
                <img src="/storage/gallery/quote-icon.png" alt="" />
                <h5>Must explain to you how all this mistaken idea of denouncing pl</h5>
                <div class="name-text">
                  <span class="line"></span>
                  <span>Michel Silva</span>
                </div>
              </div>
            </div>
            <div class="this-car">
              <div class="row align-items-center">
                <div class="col-6">
                  <img src="/storage/gallery/inner-img.jpg" />
                </div>
                <div class="col-6">
                  <h1>Why Use This Cars</h1>
                  <p>On the other hand, we denounce with righteous indignation and d</p>
                </div>
              </div>
            </div>
            <div class="auth">
              <div class="row align-items-center">
                <div class="col-sm-4 col-12">
                  <img src="/storage/gallery/team-member1.jpg" />
                </div>
                <div class="col-sm-8 col-12">
                  <h1>Nikoas Zakiloa</h1>
                  <p>Must explain to you how all this mistaken idea denouncing pleas</p>
                </div>
              </div>
            </div>
            <div class="share my-5">
              <div class="row">
                <div class="col-6">
                  <div class="item">
                    Tags :
                    <span> Car , SPeedy , Product , Category </span>
                  </div>
                </div>
                <div class="col-6">
                  <div class="item text-right">
                    Share :
                    <a href="">
                      <font-awesome-icon
                        :icon="['fab', 'facebook-f']"
                        class="icon_social"
                      />
                    </a>
                    <a href="">
                      <font-awesome-icon :icon="['fab', 'twitter']" class="icon_social" />
                    </a>
                    <a href="">
                      <font-awesome-icon
                        :icon="['fab', 'instagram']"
                        class="icon_social"
                      />
                    </a>
                    <a href="">
                      <font-awesome-icon
                        :icon="['fab', 'google-plus-g']"
                        class="icon_social"
                      />
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Main Blog Detail -->

          <div class="col-lg-5 col-sm-12 col-12">
            <SidebarDetailBlog  :SingleBlog="this.postDetail" />
          </div>
          <!-- Side Bar -->
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Banner from "../Banner";
import SidebarDetailBlog from "./SidebarDetailBlog";
export default {
  components: {
    Banner,
    SidebarDetailBlog,
  },
  data() {
    return {
      title: "Blog Detail",
    };
  },

  computed: {
    postDetail() {
      return this.$store.getters.getPostDetail;
    },
  },

  methods: {
    getPostById() {
      this.$store.dispatch("getApiPostDetail", this.$route.params.id);
    },
  },
  created() {
    this.getPostById();
  },
};
</script>

<style scoped>
.detail .content img {
  width: 100%;
  height: 400px;
  object-fit: cover;
  margin-bottom: 20px;
}
.detail .content .date {
  font-size: 15px;
  color: #0988ff;
}
.detail .content .date span {
  color: #888888;
  font-weight: 400;
  font-size: 17px;
}
.detail .content h1 {
  font-size: 35px;
  letter-spacing: -1px;
  line-height: 45px;
  color: #232628;
  font-weight: 700;
  margin: 20px 0;
}
.detail .content p {
  font-size: 14px;
  line-height: 28px;
  color: #888888;
  font-weight: 400;
}
.detail .content .promotext {
  padding: 40px;
  background-color: #0988ff;
  position: relative;
  margin-bottom: 30px;
}
.detail .content .promotext img {
  position: absolute;
  width: 40px;
  height: 40px;
}
.detail .content .promotext h5 {
  font-size: 18px;
  line-height: 30px;
  color: #ffffff;
  font-weight: 700;
}
.detail .content .promotext .name-text {
  display: flex;
  align-items: center;
}
.detail .content .promotext .name-text .line {
  width: 30px;
  height: 2px;
  background-color: #ffffff;
  margin-right: 5px;
}
.detail .content .promotext .name-text span {
  font-size: 16px;
  line-height: 30px;
  color: #ffffff;
  font-weight: 700;
}

.detail .this-car img {
  width: 100%;
  height: 320px;
  object-fit: cover;
  margin-bottom: 50px;
}

.detail .this-car h1 {
  font-size: 28px;
  line-height: 30px;
  color: #232628;
  font-weight: 700;
}
.detail .this-car p {
  font-size: 14px;
  line-height: 30px;
  color: #888888;
  font-weight: 400;
}
.detail .auth {
  background-color: #1f2441;
  padding: 40px;
}
.detail .auth img {
  width: 175px;
  height: 175px;
  border-radius: 88px;
}
.detail .auth h1 {
  font-size: 20px;
  line-height: 30px;
  color: #ffffff;
  font-weight: 700;
}
.detail .auth p {
  font-size: 14px;
  line-height: 30px;
  color: #ced1e0;
  font-weight: 400;
}
.detail .share .item {
  font-size: 18px;
  line-height: 30px;
  color: #232628;
  font-weight: 700;
}

.detail .share .item span {
  font-weight: 500;
  font-size: 17px;
  color: #393d41;
}
.detail .share .item a {
  font-size: 14px;
  line-height: 30px;
  color: #cbcbcb;
  padding: 0 5px;
}
.detail .share .item a:hover {
  transition: all 0.3s;
  color: #0988ff;
}
</style>

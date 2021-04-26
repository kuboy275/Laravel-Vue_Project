<template>
  <div>
    <banner v-bind:title="title" />
    <div class="detail py-5 my-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 content">
            <img v-lazy="blog.img_path" width="100%" alt="" />
            <div class="date">
              <i class="far fa-calendar-alt"></i>
              <span> {{ blog.published_at }} </span>
            </div>
            <h1>{{ blog.title }}</h1>
            <p v-html="blog.body"></p>
            <div class="promotext">
              <img src="/images/quote-icon.png" alt="" />
              <h5>
                Must explain to you how all this mistaken idea of denouncing pleasure and
                praising pain was born and i will give you a complete account
              </h5>
              <div class="name-text">
                <span class="line"></span>
                <span>Michel Silva</span>
              </div>
            </div>
            <div class="share d-flex align-items-center">
              <span> Share: </span>
              <div class="icon">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"> <i class="fab fa-twitter"></i> </a>
                <a href="#"><i class="fab fa-instagram-square"></i> </a>
                <a href="#"> <i class="fab fa-google"></i> </a>
              </div>
            </div>
            <!-- START COMMENT BLOG-->
            <blog-comment />
            <!-- END COMMENT BLOG-->
          </div>
          <!-- eslint-disable -->
          <div class="col-lg-4 col-12">
            <div class="side-bar">
              <h1>Recent news</h1>
              <div
                class="item"
                v-for="blg in blogs"
                :key="blg.id"
                v-if="blg.id != blog.id"
              >
                <img v-lazy="blg.img_path" alt="" />
                <a :href="blg.id">
                  <h3>{{ blg.title }}</h3>
                  <a :href="blg.id"> Read more <i class="fas fa-arrow-right"></i></a>
                </a>
              </div>
            </div>
            <div class="sale">
              <h2>Every Product Sale 20% Off</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Banner from "@/components/Banner.vue";
import BlogComment from "./BlogComment";
export default {
  components: {
    Banner,
    BlogComment,
  },
  data() {
    return {
      title: "Blog detail",
      blog: "",
    };
  },

  computed: {
    blogs() {
      return this.$store.getters.GET_BLOGS;
    },
  },

  created() {
    axios.get("/api/posts/" + this.$route.params.id).then((response) => {
      this.blog = response.data.data;
    });
    this.$store.dispatch("blogs");
  },
};
</script>

<style scoped>
.content img {
  object-fit: cover;
  border-radius: 10px;
  height: 450px;
}
.detail .content .date {
  font-size: 15px;
  color: #0988ff;
  margin-top: 15px;
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
  margin: 10px 0;
}
.detail .content p {
  font-size: 16px;
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

.share span {
  font-weight: 500;
  font-size: 20px;
  color: #393d41;
  margin-right: 20px;
}
.share .icon a {
  font-size: 18px;
  line-height: 30px;
  color: #cbcbcb;
  margin-right: 10px;
}
.share .icon a:hover {
  transition: all 0.3s;
  color: #0988ff;
}

/* side bar */
.side-bar {
  background-color: #f5faff;
  padding: 15px;
  margin-bottom: 30px;
}
.side-bar h1 {
  font-size: 24px;
  letter-spacing: -1px;
  line-height: 38px;
  color: #232628;
  font-weight: 700;
  margin-bottom: 20px;
}
.side-bar .item {
  display: flex;
  align-items: flex-start;
  padding-bottom: 15px;
}
.side-bar img {
  width: 100px;
  height: 100px;
  object-fit: cover;
  border-radius: 5px;
  margin-right: 15px;
}

.side-bar .item h3 {
  font-size: 20px;
  letter-spacing: -1px;
  line-height: 30px;
  color: #232628;
  font-weight: 700;
}
.side-bar .item a {
  font-size: 16px;
  color: #797979;
  font-weight: 600;
}
.side-bar .item a i {
  margin-left: 3px;
  transform: translateY(2px);
}
.side-bar .item a:hover {
  color: #0988ff;
  text-decoration: none;
  transition: all 0.3s;
}
/* sale */
.sale {
  background-image: url(/images/sidebar-bg.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  height: 550px;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
  margin-top: 50px;
}
.sale h2 {
  font-size: 30px;
  letter-spacing: -1px;
  color: #111111;
  font-weight: 700;
  background-color: #ffffff;
  text-align: center;
  padding: 30px 15px;
  width: 300px;
}
</style>

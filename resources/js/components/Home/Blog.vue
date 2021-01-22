<template>
  <div>
    <div class="blog">
      <div class="container">
        <div class="cta">
          <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <img
                src="/photos/home/action-box-img.jpg"
                width="100%"
                alt=""
              />
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 text_cta">
              <h1>High Quality Cars With Affordable Prices</h1>
              <button class="btn_cta">
                subscribe
                <font-awesome-icon
                  :icon="['fas', 'angle-double-right']"
                  class="icon_btn"
                />
              </button>
            </div>
          </div>
        </div>
        <!-- CTA MAIN HOME -->
        <div class="title">
          <div class="row">
            <div class="col-lg-12">
              <h1>Latest <span> News </span></h1>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-12 col-12">
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum unde
                laudantium aut provident minima, ipsam molestiae beatae incidunt
              </p>
            </div>
          </div>
        </div>
        <!-- TITLE BLOG  MAIN HOME -->
        <div class="slider">
          <carousel
            :perPageCustom="[
              [100, 1],
              [768, 1],
              [1024, 3],
            ]"
            :navigation-enabled="true"
            :mouse-drag="true"
          >
            <slide class="item-slider" v-for="blog in posts" :key="blog.id">
              <a :href="`/blog-detail/${blog.id}`">
                <div class="col-12">
                  <img class="img-blog" v-lazy="blog.img_path" width="100%" />
                  <div class="heart">
                    <font-awesome-icon :icon="['fas', 'heart']" class="icon" />
                    <br />
                    <span>3k</span>
                  </div>
                  <div class="content bg-white p-4">
                    <div class="comments d-flex align-items-center">
                      <div class="date d-flex align-items-center">
                        <font-awesome-icon :icon="['far', 'calendar-alt']" class="icon" />
                        <span> {{ blog.published_at | formatDate }} </span>
                      </div>
                      <div class="cmt d-flex align-items-center">
                        <font-awesome-icon :icon="['far', 'calendar-alt']" class="icon" />
                        <span> Comments(03) </span>
                      </div>
                    </div>
                    <!-- Comments And Date Top -->
                    <div class="title_slide">
                      <h1>{{ blog.title }}</h1>
                    </div>
                    <div class="user d-flex align-items-center">
                      <img
                        src="/photos/home/testimonial1.jpg"
                        width="40px"
                        alt=""
                      />
                      <span> Angelina Angel </span>
                    </div>
                  </div>
                </div>
              </a>
            </slide>
          </carousel>
        </div>
        <!-- SLIDER BLOG  MAIN HOME -->
      </div>
    </div>
  </div>
</template>

<script>
import { Carousel, Slide } from "vue-carousel";
export default {
  components: {
    Carousel,
    Slide,
  },

  computed: {
    posts() {
      return this.$store.getters.getPosts;
    },
  },

  methods: {
    getPosts() {
      return this.$store.dispatch("getApiPosts");
    },
    getByBlog() {
      if (this.$route.params.id != null) {
        this.$store.dispatch("getApiPostDetail", this.$route.params.id);
      } else {
        this.$store.dispatch("getApiPosts");
      }
    },
  },

  watch: {
    $route(to, from) {
      this.getByBlog();
    },
  },

  created() {
    this.getPosts();
  },
  filters: {
    formatDate: function (str) {
      if (!str) {
        ("(n/a)");
      }
      str = new Date(str);
      return (
        (str.getDate() < 10 ? "0" : "") +
        str.getDate() +
        "-" +
        (str.getMonth() < 9 ? "0" : "") +
        (str.getMonth() + 1) +
        "-" +
        str.getFullYear()
      );
    },
  },
};
</script>

<style scoped>
/* ---------------------------------- */

.blog {
  background-image: url(/photos/home/section-bg6.jpg);
  background-size: cover;
  background-repeat: no-repeat;
}
.blog .cta {
  background-image: url(/photos/home/action-box-bg.png);
  background-size: cover;
  background-repeat: no-repeat;
  transform: translateY(-50%);
}
.blog .cta img {
  height: 250px;
}
.blog .cta .text_cta h1 {
  font-size: 45px;
  letter-spacing: -1px;
  line-height: 60px;
  color: #232628;
  font-weight: 700;
  font-family: "Montserrat";
}
.blog .cta .text_cta .btn_cta {
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
  margin: 20px 0;
}
.blog .cta .text_cta .btn_cta:hover {
  opacity: 0.8;
}
.blog .title {
  position: relative;
  top: -30px;
}
.blog .title h1 {
  font-size: 55px;
  letter-spacing: -2px;
  color: #ffffff;
  font-weight: 700;
}
.blog .title h1 span {
  font-style: italic;
}
.blog .title p {
  font-size: 16px;
  line-height: 28px;
  color: #ffffff;
  font-weight: 400;
}
.blog .slider {
  padding-bottom: 150px;
}
@media (max-width: 991px) {
  .blog .cta .text_cta h1 {
    font-size: 35px;
  }
  @media (max-width: 767px) {
    .blog .cta .text_cta {
      padding-left: 30px;
    }
    .blog .title {
      top: -100px;
    }
  }
}
/* BLOG MAIN HOME */

/* ---------------------------------- */

/* BLOG SLIDER VUE CAROUSEL CUSTOM MAIN HOME */

.blog .slider {
  text-align: center;
}
.blog .slider .item-slider .content {
  filter: drop-shadow(0px 16px 16px rgba(186, 186, 186, 0.23));
  background-color: #ffffff;
}
.blog .slider .item-slider {
  position: relative;
  overflow: hidden;
}
.blog .slider .item-slider .img-blog{
  height: 300px;
  object-fit: cover;
}
.blog .slider .item-slider a {
  text-decoration: none;
}
.blog .slider .item-slider:hover .heart {
  background-color: #eb4d4b;
}
.blog .slider .item-slider .heart {
  position: absolute;
  top: 20px;
  left: 35px;
  clip-path: polygon(100% 0, 100% 100%, 50% 80%, 0% 100%, 0 48%, 0% 0%);
  background-color: #ff9600;
  color: white;
  width: 80px;
  height: 80px;
  font-weight: 700;
  transition: all 0.7s;
}
.blog .slider .item-slider .heart .icon {
  margin-top: 15px;
}

.blog .slider .item-slider .content .comments .icon {
  font-size: 15px;
  color: #0988ff;
  line-height: 35px;
  margin-right: 5px;
}
.blog .slider .item-slider .content .comments .date {
  margin-right: 23px;
}
.blog .slider .item-slider .content .comments span {
  font-size: 14px;
  letter-spacing: 0px;
  line-height: 35px;
  color: #888888;
  font-weight: 400;
}
.blog .slider .item-slider .content .title_slide h1 {
  font-size: 18px;
  letter-spacing: -1px;
  line-height: 35px;
  color: #232628;
  font-weight: 700;
  text-align: left;
}
.blog .slider .item-slider .content .user img {
  border-radius: 50%;
  margin-right: 15px;
}
.blog .slider .item-slider .content .user span {
  font-size: 16px;
  letter-spacing: -1px;
  line-height: 35px;
  color: #0988ff;
  font-weight: 600;
}
/* ---------------------------------- */
</style>

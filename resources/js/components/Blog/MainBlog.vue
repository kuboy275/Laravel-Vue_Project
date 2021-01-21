<template>
  <div>
    <Banner :title="title" />
    <div class="blog py-5 mb-5">
      <div class="container">
        <div class="row">
          <div
            class="col-lg-4 col-md-4 col-sm-6 col-12 mt-5 mb-4"
            v-for="post in posts"
            :key="post.id"
          >
            <div class="item-blog">
              <div class="img">
                <img v-lazy="post.img_path" />
              </div>
              <div class="content">
                <div class="date d-flex align-items-center">
                  <font-awesome-icon :icon="['far', 'calendar-alt']" class="icon mr-2" />
                  <span> {{ post.published_at }} </span>
                </div>
                <h1>{{ post.title }}</h1>
                <a
                  class="link link-white link-animation"
                  :href="`blog-detail/${post.id}`"
                >
                  Read More
                  <font-awesome-icon
                    :icon="['fas', 'angle-double-right']"
                    class="icon_btn"
                  />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Banner from "../Banner";
export default {
  components: {
    Banner,
  },
  data() {
    return {
      title: "Blog",
    };
  },
  computed: {
    posts() {
      return this.$store.getters.getPosts;
    },
  },

  methods: {
    getPosts() {
      this.$store.dispatch("getApiPosts");
    },
  },

  created() {
    this.getPosts();
  },
};
</script>

<style scoped>
.blog .item-blog .img img {
  width: 100%;
  object-fit: cover;
  height: 300px;
  cursor: pointer;
}
.blog .item-blog .content {
  width: 90%;
  filter: drop-shadow(0px 16px 16px rgba(186, 186, 186, 0.23));
  background-color: #ffffff;
  margin-top: -80px;
  padding: 20px;
}
.blog .item-blog .content .date {
  font-size: 15px;
  color: #0988ff;
}
.blog .item-blog .content .date span {
  color: #888888;
  font-weight: 400;
}
.blog .item-blog .content h1 {
  font-size: 18px;
  letter-spacing: -1px;
  line-height: 35px;
  color: #232628;
  font-weight: 700;
}

.blog .item-blog .content .link {
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
.blog .item-blog .content .link-white {
  background: #0988ff;
  color: #ffffff;
}
.blog .item-blog .content .link:hover {
  box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.2);
  transform: translateY(-3px);
}
.blog .item-blog .content .link::after {
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
.blog .item-blog .content .link-white::after {
  background: #0988ff;
}
.blog .item-blog:hover .content .link-animation::after {
  transform: scaleX(1.4) scaleY(1.6);
  opacity: 0;
}
</style>

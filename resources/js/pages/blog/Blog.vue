<template>
  <div>
    <banner v-bind:title="title" />
    <div class="blog mt-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-12" v-for="blog in blogs" :key="blog.id">
            <div class="item mb-5">
              <router-link :to="{ name: 'blog-detail', params: { id: blog.id } }">
                <img v-lazy="`${blog.img_path}`" width="100%" :alt="blog.img_name" />
                <div class="content">
                  <div class="date">
                    <i class="fas fa-calendar-day"></i>
                    <span> {{ blog.published_at }} </span>
                  </div>
                  <h1>{{ blog.title }}</h1>
                  <router-link
                    :to="{ name: 'blog-detail', params: { id: blog.id } }"
                    class="btn btn-primary"
                  >
                    Read more
                    <i class="fas fa-angle-double-right ml-2"></i>
                  </router-link>
                </div>
              </router-link>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Banner from "@/components/Banner.vue";
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
    blogs() {
      return this.$store.getters.GET_BLOGS;
    },
  },
  mounted() {
    this.$store.dispatch("blogs");
  },
};
</script>

<style scoped>
.blog {
  margin-bottom: 150px;
}
.blog .item {
  border-radius: 10px;
  background-color: #ffffff;
}
.blog .item img {
  border-radius: 10px 10px 10px 0;
  object-fit: cover;
  height: 250px;
}

.blog .item .content {
  padding: 20px 20px 35px 20px;
  box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
  width: 90%;
  margin-top: -80px;
  background-color: #ffffff;
  position: relative;
  z-index: 1;
  border-radius: 0 10px 10px 10px;
}
.blog .item .content .date {
  font-size: 15px;
  color: #0988ff;
}

.blog .item .content .date span {
  color: #888888;
  font-weight: 400;
}
.blog .item .content h1 {
  font-size: 18px;
  letter-spacing: -1px;
  line-height: 35px;
  color: #232628;
  font-weight: 700;
}
.blog .item .content a i {
  transform: translateY(2px);
}
</style>

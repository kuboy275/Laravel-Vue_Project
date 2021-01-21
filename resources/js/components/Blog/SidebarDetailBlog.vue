<template>
  <div>
    <div class="recent">
      <h1>Recent News</h1>
      <!-- eslint-disable -->
      <div
        class="item"
        v-for="post in postLatest"
        :key="post.id"
        v-if="post.title != SingleBlog.title"
      >
        <img v-lazy="post.img_path" />
        <div class="link">
          <h3>{{ post.title }}</h3>
          <a :href="post.id">
            Read more
            <font-awesome-icon :icon="['fas', 'arrow-right']" class="icon_social ml-2" />
          </a>
        </div>
      </div>
    </div>
    <div class="sale">
      <h2>Every Product Sale 20% Off</h2>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    SingleBlog: "",
  },
  computed: {
    postLatest() {
      return this.$store.getters.getPosts;
    },
  },

  methods: {
    getPostsLatest() {
      this.$store.dispatch("getApiPosts");
    },
    // getDetailPost() {
    //   if (this.$route.params.id != null) {
    //     this.$store.dispatch("getApiPostDetail", this.$route.params.id);
    //   } else {
    //     this.$store.dispatch("getApiPosts");
    //   }
    // },
  },

  // watch: {
  //   $route(to, from) {
      
  //   },
  // },

  created() {
    this.getPostsLatest();
    // this.getDetailPost();
  },
};
</script>

<style scoped>
.recent {
  background-color: #f5faff;
  padding: 15px;
  margin-bottom: 30px;
}
.recent h1 {
  font-size: 24px;
  letter-spacing: -1px;
  line-height: 38px;
  color: #232628;
  font-weight: 700;
}
.recent .item {
  display: flex;
  align-items: center;
  padding-bottom: 15px;
}
.recent img {
  width: 100px;
  height: 100px;
  object-fit: cover;
  border-radius: 5px;
  margin-right: 10px;
}
.recent .item .link h3 {
  font-size: 20px;
  letter-spacing: -1px;
  line-height: 30px;
  color: #232628;
  font-weight: 700;
}
.recent .item .link a {
  font-size: 16px;
  color: #797979;
  font-weight: 600;
}
.recent .item .link a:hover {
  color: #0988ff;
  text-decoration: none;
}
.sale {
  background-image: url(/storage/gallery/sidebar-bg.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  height: 500px;
  display: flex;
  align-items: center;
  justify-content: center;
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

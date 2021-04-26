<template>
  <div>
    <loading :active="this.isLoading" />
    <!-- eslint-disable -->
    <div class="comment my-4">
      <h2>Comments</h2>
      <div class="item mt-4" v-for="cmt in comments" :key="cmt.id">
        <img src="/images/avatar.png" alt="" />
        <div class="text">
          <h3 :class="[user && cmt.user_id === user.id ? 'text-primary' : '']">
            {{ cmt.email }}
          </h3>
          <p><span>Comment:</span> {{ cmt.comment }}</p>
        </div>
      </div>
    </div>
    <div class="rep-comment my-5">
      <h1>Comment:</h1>
      <form class="row" @submit.prevent="handleComment">
        <div class="form-group col-12">
          <textarea
            rows="3"
            class="form-control"
            placeholder="comments"
            v-model="comment"
          ></textarea>
          <span class="text-danger" v-if="this.err_comment">
            {{ this.err_comment[0] }}
          </span>
        </div>
        <div class="form-group not-auth ml-3" v-if="!isAuth">
          <h5 class="text-danger">please login or register for comment this blog</h5>
          <router-link :to="{ name: 'login' }" class="btn btn-primary">
            Login
          </router-link>
          <router-link :to="{ name: 'register' }" class="btn btn-secondary">
            Register
          </router-link>
        </div>
        <button v-if="isAuth" type="submit" class="btn btn-primary ml-3">
          Send message
        </button>
      </form>
    </div>
  </div>
</template>

<script>
import Loading from "@/components/Loading";
export default {
  components: {
    Loading,
  },
  data() {
    return {
      comment: "",
      // form
      isLoading: false,
      // data
      comments: [],
      params_id: this.$route.params.id,
      user: this.$store.getters.GET_USER,
      isAuth: this.$store.getters.IF_AUTH,
      err_comment: null,
    };
  },

  methods: {
    handleComment() {
      let formComment = {
        comment: this.comment,
        blog_id: this.params_id,
        user_id: this.user.id,
        email: this.user.email,
      };
      this.isLoading = true;
      axios
        .post("/api/comment", formComment)
        .then((response) => {
          setTimeout(() => {
            this.err_comment = "";
            this.comment = "";
            this.isLoading = false;
            this.fetchComment();
          }, 500);
        })
        .catch((error) => {
          setTimeout(() => {
            this.comment = "";
            this.isLoading = false;
            this.err_comment = error.response.data.errors.comment;
          }, 1000);
        });
    },

    fetchComment() {
      axios.get("/api/comment/" + this.params_id).then((response) => {
        this.comments = response.data.data;
      });
    },
  },

  created() {
    this.fetchComment();
  },
};
</script>

<style scoped>
.comment h1 {
  font-weight: 600;
  font-size: 18px;
  color: #393d41;
  margin: 30px 0;
}
.comment .item {
  display: flex;
  align-items: flex-start;
}
.comment .item img {
  margin-right: 15px;
  border-radius: 10px;
  width: 80px;
  height: 80px;
}
.comment .item .text h3 {
  font-size: 17px;
  color: #555555;
  font-weight: 500;
}
.comment .item .text p {
  font-size: 16px;
}
.comment .item .text p span {
  font-weight: 600;
}
.not-auth h5 {
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 15px;
}
</style>

<template>
  <div>
    <h1>Posts</h1>
    <div class="row">
      <div class="col-md-10"></div>
      <div class="col-md-2"></div>
    </div>
    <br />

    <paginate name="languages" :list="posts" :per="10">
      <span>show</span>
      
      <table class="table table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>Item Name</th>
            <th>Item Price</th>
            <th>Parent Id</th>
            <th>Actions</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="post in paginated('languages')" :key="post.id">
            <td>{{ post.id }}</td>
            <td>{{ post.name }}</td>
            <td>{{ post.slug }}</td>
            <td>{{ post.parent_id }}</td>
            <td>
              <router-link
                :to="{ name: 'edit', params: { id: post.id } }"
                class="btn btn-primary"
                >Edit</router-link
              >
            </td>
            <td>
              <button class="btn btn-danger" @click.prevent="deletePost(post.id)">
                Delete
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </paginate>

    <paginate-links
      for="languages"
      :show-step-links="true"
      :step-links="{ next: '>', prev: '<' }"
    >
    </paginate-links>
  </div>
</template>

<script>
export default {
  data() {
    return {
      posts: [],
      paginate: ["languages"],
      search_filter: "",
    };
  },
  created() {
    this.getApiCategory();
  },
  methods: {
    getApiCategory() {
      let url = "http://127.0.0.1:8000/api/category";
      this.axios.get(url).then((response) => {
        this.posts = response.data.categories;
        console.log(this.posts);
      });
    },

    deletePost(id) {
      let url = `http://127.0.0.1:8000/api/category/${id}`;
      this.axios.delete(url).then((response) => {
        this.posts.splice(this.posts.indexOf(id), 1);
      });
    },
  },
};
</script>
<style scoped></style>

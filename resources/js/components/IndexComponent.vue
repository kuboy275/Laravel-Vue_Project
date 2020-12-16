<template>
    <div>
        <h1>Posts</h1>
        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2">
                <router-link :to="{ name: 'create' }" class="btn btn-primary">Create Post</router-link>
            </div>
        </div>
        <br />
  <paginate name="languages" :list="posts" :per="10">
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
                                class="btn btn-primary">Edit</router-link>
                        </td>
                        <td>
                            <button
                                class="btn btn-danger"
                                @click.prevent="deletePost(post.id)">
                                Delete
                            </button>
                        </td>
                    </tr>
               
            </tbody>
        </table>
        </paginate>

        <paginate-links for="languages"
            :show-step-links="true"
            :step-links="{next: 'Next', prev: 'Prev'}">
        </paginate-links>  
    </div>
</template>

<script>
export default {
    data() {
        return {
            posts: [],
            paginate: ["languages"],
        };
    },
    created() {
        this.getApiCategory();
    },
    methods: {
        getApiCategory() {
            let url = "http://127.0.0.1:8000/api/v1/category?page=";
            this.axios.get(url).then(response => {
                this.posts = response.data.data;
            });
        },

        deletePost(id) {
            let url = `http://127.0.0.1:8000/api/v1/category/${id}`;
            this.axios.delete(url).then(response => {
                this.posts.splice(this.posts.indexOf(id), 1);
            });
        }
    }
};
</script>
<style scoped>
    ul.paginate-links.languages{
        display: flex;
        align-items: center;
        justify-content: center;
        list-style: none;
        color: red;
        cursor: pointer;
    }

</style>

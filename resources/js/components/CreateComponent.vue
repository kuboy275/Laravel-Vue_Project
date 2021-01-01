<template>
    <div>
        <h1>Create A Post</h1>
        <form @submit.prevent="addPost">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Post Name:</label>
                        <input
                            type="text"
                            class="form-control"
                            v-model="post.name"
                        />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Post Slug:</label>
                        <textarea
                            class="form-control"
                            v-model="post.slug"
                            rows="5"
                        ></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Post parent_id:</label>
                        <input
                            type="number"
                            class="form-control"
                            v-model="post.parent_id"
                        />
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            post: {}
        };
    },
    methods: {
        addPost() {
            let uri = "http://127.0.0.1:8000/api/category";
            this.axios.post(uri, this.post).then(response => {
                this.$router.push({ name: "posts" });
            });
        }
    }
};
</script>

<template>
    <div>
        <h1>Edit Post</h1>
        <form @submit.prevent="updatePost">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Post name:</label>
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
                        <label>Post slug:</label>
                        <input
                            type="text"
                            class="form-control"
                            v-model="post.slug"
                        />
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
                <button class="btn btn-primary">Update</button>
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
    created() {
        let uri = `http://127.0.0.1:8000/api/v1/category/${this.$route.params.id}`;
        this.axios.get(uri).then(response => {
            this.post = response.data;
        });
    },
    methods: {
        updatePost() {
            let uri = `http://127.0.0.1:8000/api/v1/category/${this.$route.params.id}`;
            this.axios.put(uri, this.post).then(response => {
                this.$router.push({ name: "posts" });
            });
        }
    }
};
</script>

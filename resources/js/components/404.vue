<template>
    <div>
        <div class="page-404 ">
            <div class="content">
                <h2>OPPs! This Pages Can’t Be Found</h2>
                <li>
                    <router-link :to="{ name: 'MainHome' }">
                        go to home
                        <font-awesome-icon
                            :icon="['fas', 'arrow-right']"
                            class="icon"
                        />
                    </router-link>
                </li>
                  <div v-for="category in getAllCategories" :key="category.id">
                      <p>{{category.id}}</p>
                  </div>
            </div>
        </div>
    </div>
</template>


<script>

export default {
    name:"list",
    mounted() {
        this.$store.dispatch("getApiCategory")
    },
    computed: {
        getAllCategories(){
            return this.$store.getters.getCategory; 
        }
    },
    methods: {
        
    },
}
</script>

<style scoped>

.page-404{
    background-image: url(http://127.1:8000/storage/home/404_page.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    height: 130vh;
    margin: 50px 0;
    background-position: center;
    position: relative;
}
.page-404 .content{
    position: absolute;
    left: 50%;
    width: 100%;
    text-align: center;
    bottom: 20%;
    transform: translateX(-50%);
}
.page-404 .content h2{
    font-size: 30px;
    line-height: 28px;
    color: #232628;
    font-weight: 700;
}
.page-404 .content li {
    list-style: none;
    margin-top: 50px;
    text-align: center;
}
.page-404 .content li a{
    padding: 15px 35px;
    border-radius: 5px;
    background-color: #0988ff;
    font-size: 14px;
    color: #ffffff;
    font-weight: 700;
    text-decoration: none;
    text-transform: uppercase;

}
.page-404 .content li a .icon{
    margin-left: 5px;
}
</style>
<template>
  <div class="dash">
    <loading :active="isLoading" />
    <banner :title="title" />
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-12">
          <div v-if="orders.length === 0">
            <h5>
              You do not have any products in dashboard, shopping
              <a href="/shop">here</a>
            </h5>
          </div>
          <table class="table table-hover text-center" v-else>
            <thead class="thead-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Product</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Check</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <!-- eslint-disable -->
              <tr class="mb-5" v-for="(order, index) in orders" :key="order.id" v-if="order.product">
                <td scope="row">{{ (index += 1) }}</td>
                <td class="w-25">
                  <router-link :to=" {path:`/shop-detail/${order.product.id}`} ">
                    <img
                    v-lazy="order.product.feature_img_path"
                    :alt="order.product.feature_img_name"
                  />
                  </router-link>
                <td>{{ order.product.name }}</td>
                </td>
                <td>{{ order.product.price | formatNumber }} $</td>
                <td> Đang xác thực </td>
                <td>
                  <button
                    type="button"
                    class="btn btn-danger"
                    @click.prevent="deleteOrder(order.id)"
                  >
                    <i class="far fa-trash-alt"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td> Total: </td>
                <td> {{ this.sumTotal | formatNumber }}$ </td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Banner from "@/components/Banner.vue";
import Loading from "@/components/Loading";
export default {
  components: {
    Banner,
    Loading,
  },
  data() {
    return {
      title: "User Dashboard",
      orders: [],
      user_id: this.$store.getters.GET_USER.id,
      isLoading: false,
    };
  },
  created() {
    this.fetchOrder();
  },

  computed: {
    sumTotal(){
      let total = 0;
      this.orders.forEach((item,i)=>{
        total += parseFloat(item.product.price) ;
      })
      return total;
    }
  },

  methods: {
    fetchOrder() {
      axios
        .get("/api/order/" + this.user_id)
        .then((response) => {
          this.orders = response.data.data;
        })
        .catch((error) => {
          console.log(error);
        });
    },

    deleteOrder($id) {
      if (confirm("are you sure?")) {
        axios
          .delete("/api/order/" + $id)
          .then((response) => {
            this.isLoading = true;
            setTimeout(() => {
              this.isLoading = false;
              this.fetchOrder();
            }, 1000);
          })
          .catch((error) => {
            console.log(error);
          });
      }
    },
  },
};
</script>

<style scoped>
.dash {
  margin-bottom: 150px;
}
.dash h5{
  color: #CACACA;
  font-weight: 600;
  margin-bottom: 0;
}
table tbody tr  {
  box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 10px;
}
table tbody tr td{
  vertical-align: inherit;
  color: #232628;
  font-size: 18px;
  font-weight: 600;
  letter-spacing: 2px;
}
table tbody tr td img{
  height: 150px;
  width: 150px;
  border-radius: 10px;
}
</style>

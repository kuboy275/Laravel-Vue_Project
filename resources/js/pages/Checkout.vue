<template>
  <div class="checkout">
    <banner v-bind:title="title" />
    <div class="container">
      <div class="row my-5">
        <div class="col-lg-4">
          <div class="item">
            <i class="fas fa-map-marker-alt"></i>
            <div class="text">
              <h2>Location</h2>
              <span>California</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item bg-border2">
            <i class="fas fa-map-marker-alt bg1"></i>
            <div class="text">
              <h2>Location</h2>
              <span>California</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item bg-border3">
            <i class="fas fa-map-marker-alt bg2"></i>
            <div class="text">
              <h2>Location</h2>
              <span>California</span>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5 justify-content-between align-items-start">
        <div class="col-12 title-all text-center mb-5">
          <h1>Checkout</h1>
        </div>
        <div class="col-lg-5 col-md-12 col-sm-12 col-12">
          <form>
            <div class="form-group">
              <label>Name</label>
              <input
                type="text"
                class="form-control"
                name="fullname"
                v-model="fullname"
              />
              <span v-if="err.fullname">
                {{ err.fullname[0] }} <i class="fas fa-exclamation-circle"></i>
              </span>
            </div>
            <div class="form-group">
              <label> Address </label>
              <input
                type="text"
                class="form-control"
                name="address"
                autocomplete="off"
                v-model="address"
              />
              <span v-if="err.address">
                {{ err.address[0] }} <i class="fas fa-exclamation-circle"></i
              ></span>
            </div>
            <div class="form-group">
              <label>Phone number</label>
              <input
                type="number"
                class="form-control"
                name="phone"
                v-model="phone"
                autocomplete="off"
              />
              <span v-if="err.phone">
                {{ err.phone[0] }} <i class="fas fa-exclamation-circle"></i
              ></span>
            </div>
            <div class="form-group">
              <label for="sel1">Phương thức thanh toán</label>
              <select class="form-control" id="sel1">
                <option>Giao hàng tận nhà</option>
              </select>
            </div>
            <div class="form-group">
              <label>Note:</label>
              <textarea
                class="form-control"
                rows="3"
                name="note"
                v-model="note"
              ></textarea>
            </div>
            <div class="form-group" v-if="!isLoggedIn">
              <h4>Please login or register to continue checkout!</h4>
              <router-link :to="{ name: 'login' }" class="btn btn-primary py-1 px-5 mr-4">
                Login
              </router-link>
              <router-link
                :to="{ name: 'register' }"
                class="btn bg1 py-1 px-5 text-white"
              >
                Register
              </router-link>
            </div>
            <div class="form-group" v-if="isLoggedIn">
              <button
                type="submit"
                @click="placeOrder"
                class="btn bg2 w-75 py-3 text-white"
              >
                Continue
              </button>
            </div>
          </form>
        </div>
        <div class="col-lg-6 col-12">
          <img v-lazy="product.feature_img_path" width="100%" :alt="product.name" />
          <h1>{{ product.name }}</h1>
          <h2>{{ product.price | formatNumber }} $</h2>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Banner from "@/components/Banner";
export default {
  components: {
    Banner,
  },
  props: {
    pid: "",
  },

  data() {
    return {
      address: "",
      quantity: 1,
      product: [],
      phone: "",
      fullname: "",
      note: "",
      title: "Checkout",
      err: "",
      isLoggedIn: this.$store.getters.IF_AUTH,
    };
  },

  beforeMount() {
    axios
      .get(`/api/products/index/${this.pid}`)
      .then((response) => (this.product = response.data.data));

    if (this.isLoggedIn != null) {
      this.user = this.$store.getters.GET_USER;
      axios.defaults.headers.common["Content-Type"] = "application/json";
      axios.defaults.headers.common["Authorization"] = "Bearer " + this.isLoggedIn;
    }
  },

  methods: {
    placeOrder(e) {
      e.preventDefault();

      const form = {
        fullname: this.fullname,
        note: this.note,
        address: this.address,
        product_id: this.product.id,
        phone: this.phone,
        quantity: this.quantity,
        user_id: this.$store.getters.GET_USER.id,
      };

      axios
        .post("/admin/order/", form)
        .then((response) => {
          this.$router.push("/confirm");
          console.log(response);
        })
        .catch((error) => {
          this.err = error.response.data.errors;
        });
    },
  },
};
</script>

<style scoped>
.checkout {
  margin: 100px 0;
}
.item {
  display: flex;
  align-items: center;
  justify-content: center;
  filter: drop-shadow(0px 16px 16px rgba(235, 235, 235, 0.85));
  background-color: white;
  height: 150px;
  border-top: 5px solid #0988ff;
}
.bg-border2 {
  border-top: 5px solid #ff9600;
}
.bg-border3 {
  border-top: 5px solid #ee2a7b;
}
.bg1 {
  background-color: #ff9600 !important;
}
.bg2 {
  background-color: #ee2a7b !important;
}
.item i {
  color: white;
  width: 60px;
  height: 60px;
  text-align: center;
  line-height: 60px;
  border-radius: 50%;
  background-color: #0988ff;
  margin-right: 20px;
}
.item i {
  font-size: 25px;
}
.info-item .text h2 {
  font-size: 24px;
  line-height: 35px;
  color: #232628;
  font-weight: 700;
}
.info-item .text span {
  font-size: 14px;
  line-height: 28px;
  color: #888888;
  font-weight: 400;
}
/* form */
form label {
  font-weight: 700;
}
form input,
form select {
  padding-left: 20px;
  font-weight: 600;
  background: #f5f6f7;
  border-radius: 10px;
  border: 1px solid #f5f6f7 !important;
  box-shadow: #f5f6f7 3px 3px 6px 0px inset, #f5f6f7 -3px -3px 6px 1px inset;
}
form input:focus,
form select:focus {
  border-color: #f5f6f7 !important;
  box-shadow: #f5f6f7 3px 3px 6px 0px inset, #f5f6f7 -3px -3px 6px 1px inset;
}
form h4 {
  font-size: 20px;
  font-weight: 500;
  color: #eb4d4b;
}
form a {
  font-weight: 500;
  font-size: 22px;
}
img {
  object-fit: cover;
  height: 450px;
}
form span {
  color: #eb4d4b;
  margin-top: 15px;
  font-weight: 500;
  font-size: 18px;
  display: block;
}
img {
  border-radius: 10px;
}
</style>

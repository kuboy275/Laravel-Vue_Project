<template>
  <div class="mini_cart">
    <div class="header">
      <b-button v-b-modal.modal-1>
        <font-awesome-icon :icon="['fas', 'cart-arrow-down']" class="icon_cart" />
        <span>{{ cartItemCount }}</span>
      </b-button>

      <b-modal id="modal-1" title="Cart Mini">
        <table class="table table-bordered">
          <thead class="text-center">
            <tr>
              <th>Name</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <tr v-for="item in cart" :key="item.product.id">
              <td>{{ item.product.name }}</td>
              <td>{{ item.product.price | formatNumber }} $</td>
              <td>
                {{ item.quantity }}
              </td>
              <td>
                <button @click.prevent="removeCart(item.product)">
                  <font-awesome-icon :icon="['fas', 'trash']" class="icon_nav_link" />
                </button>
              </td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>ToTal:</td>
              <td>{{ cartTotal | formatNumber }}$</td>
              <td><button @click.prevent="removetAll">Clear Cart</button></td>
              <td><a href="/MainContact"> Checkout </a></td>
            </tr>
          </tbody>
        </table>
      </b-modal>
    </div>
  </div>
</template>

<script>
export default {
  created() {},

  computed: {
    cart() {
      return this.$store.getters.cart;
    },
    cartItemCount() {
      return this.$store.getters.cartLength;
    },
    cartTotal() {
      return this.$store.getters.cartTotalPrice;
    },
  },

  methods: {
    removeCart(product) {
      this.$store.dispatch("removeProductFromCart", product);
    },
    removetAll() {
      this.$store.dispatch("removeAllCart");
    },

   
  },
};
</script>

<style>
.mini_cart {
  position: fixed;
  top: 30%;
  right: 30px;
  z-index: 99;
}
.mini_cart .header button {
  border-radius: 50%;
  width: 80px;
  height: 80px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  background-color: #0988ff;
  border-color: #0988ff;
  position: relative;
  animation: pulse 3s linear infinite;
}
@keyframes pulse {
  0% {
    box-shadow: 0 0 0 0 rgba(9, 136, 255, 0.8), 0 0 0 0 rgba(9, 136, 255, 0.8);
  }
  40% {
    box-shadow: 0 0 0 40px rgba(9, 136, 255, 0), 0 0 0 0 rgba(9, 136, 255, 0.8);
  }
  80% {
    box-shadow: 0 0 0 40px rgba(9, 136, 255, 0), 0 0 0 30px rgba(9, 136, 255, 0);
  }
  1000% {
    box-shadow: 0 0 0 0 rgba(9, 136, 255, 0), 0 0 0 30px rgba(9, 136, 255, 0);
  }
}
.mini_cart .header button .icon_cart {
  font-size: 30px;
}
.mini_cart .header button span {
  position: absolute;
  top: 10px;
  right: 10px;
  background: #fa8231;
  width: 30px;
  height: 30px;
  border-radius: 50%;
  line-height: 30px;
  font-weight: 700;
  border: 1px solid #fa8231;
}
@media (min-width: 576px) {
  .modal-dialog {
    max-width: 1000px !important;
    margin: 1.75rem auto;
  }
}
.modal-backdrop {
  background-color: rgba(0, 0, 0, 0.5) !important;
}
.modal-footer {
  display: none;
}
</style>

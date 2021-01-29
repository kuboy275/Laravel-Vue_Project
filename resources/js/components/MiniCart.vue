<template>
  <div class="mini_cart">
    <div class="header">
      <b-button v-b-modal.modal-1>
        <font-awesome-icon :icon="['fas', 'cart-arrow-down']" class="icon_nav_link" />
        <span> {{ cartItemCount }} ( Siêu xe ) </span>
      </b-button>

      <b-modal id="modal-1" title="Cart Mini">
        <table class="table table-bordered">
          <thead>
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
                <input type="number" :value="item.quantity" min="0" max="5" />
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
  created() {
   
  },

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

<template>
  <div class="confirm">
    <div class="success text-center">
      <img src="/images/gif-box.gif" width="100%" alt="" />
      <h2>Your order is complete!</h2>
      <p class="mb-2">You will be receving a confirmation email with order details.</p>
      <router-link :to="{ name: 'user-dash' }">See you orders</router-link>
    </div>
  </div>
</template>

<style scoped>
.confirm {
  background: #fff;
  height: 100vh;
  overflow: hidden;
  z-index: 3;
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  left: 0;
  width: 100%;
}
.success {
  -webkit-box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
  box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  padding: 50px 100px;
  padding-top: 0;
}
.success img {
  height: 300px;
  object-fit: cover;
}
.success h2 {
  color: #e94662;
  font-size: 40px;
}

.success p {
  color: #cacaca;
  font-weight: 500;
}

a {
  background-image: linear-gradient(to right, #eb3349 0%, #f45c43 51%, #eb3349 100%);
}
a {
  margin: 10px;
  padding: 15px 45px;
  text-align: center;
  text-transform: uppercase;
  transition: 0.5s;
  background-size: 200% auto;
  color: white;
  border-radius: 10px;
  display: block;
  font-weight: 600;
}

a:hover {
  background-position: right center; /* change the direction of the change here */
  color: #fff;
  text-decoration: none;
}
</style>

<template>
  <div class="confirm">
    <div class="success text-white text-center">
      <i class="fas fa-gift"></i>
      <h2>Your order is complete!</h2>
      <p class="mb-5">You will be receving a confirmation email with order details.</p>
      <a href="/"> See your orders </a>
    </div>
  </div>
</template>

<style scoped>
.confirm {
  background-image: linear-gradient(135deg, #5efce8 10%, #736efe 100%);
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
  box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px,
    rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  padding: 50px 100px;
  background-image: linear-gradient(135deg, #43cbff 10%, #9708cc 100%);
}

.success i {
  font-size: 100px;
  margin-bottom: 30px;
}
.success h2 {
  font-size: 40px;
  margin-bottom: 20px;
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

<template>
  <div class="over-sign">
    <div class="container my-5">
      <div class="row">
        <div class="form-wrap" id="form-wrap">
          <div class="form-container-sign sign-up-container">
            <Register />
          </div>
          <div class="form-container-sign sign-in-container">
            <Login />
          </div>

          <div class="overlay-container">
            <div class="overlay">
              <div class="overlay-panel overlay-left">
                <h1>Đăng nhập</h1>
                <p>Đăng nhập nếu đã có tài khoản</p>
                <button class="ghost acc-form-btn" type="submit" id="signIn">
                  đăng nhập
                </button>
              </div>
              <div class="overlay-panel overlay-right">
                <h1>Đăng ký</h1>
                <p>Đăng ký nếu chưa có tài khoản</p>
                <button class="ghost acc-form-btn" id="signUp">Đăng ký</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Login from "./login";
import Register from "./register";
export default {
  components: {
    Login,
    Register,
  },
};

window.addEventListener("load", function () {
  formAni();
  preventDf();
});

function preventDf() {
  let preventDf = document.querySelectorAll(".create_button1");
  preventDf.forEach((e) => {
    e.addEventListener("click", function (ev) {
      ev.preventDefault();
    });
  });
}
function formAni() {
  const signUpButton = document.getElementById("signUp");
  const signInButton = document.getElementById("signIn");
  const container = document.getElementById("form-wrap");

  signUpButton.addEventListener("click", () => {
    container.classList.add("right-panel-active");
  });

  signInButton.addEventListener("click", () => {
    container.classList.remove("right-panel-active");
  });
}
</script>

<style>

.over-sign{
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background-color:rgba(0, 0, 0,.5);
  z-index: 9999;
}
.over-sign::after{
  content: "";
  width: 100%;
  height: 100%;
  position: absolute;
  filter: blur(3px);
}
.acc-form-btn {
  border-radius: 20px;
  border: 1px solid #EE5A24;
  background-color: #EE5A24;
  color: #ffffff;
  font-size: 12px;
  font-weight: bold;
  padding: 12px 45px;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: transform 80ms ease-in;
}

button:active {
  transform: scale(0.95);
}

button.ghost {
  background-color: transparent;
  border-color: #ffffff;
  outline: none;
}

.form-acc {
  background-color: #ffffff;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 0 50px;
  height: 100%;
  text-align: center;
}

.input-acc {
  background-color: #eee;
  border: none;
  padding: 12px 15px;
  margin: 8px 0;
  width: 100%;
}

.form-wrap {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
  position: relative;
  overflow: hidden;
  width: 768px;
  max-width: 100%;
  min-height: 480px;
  margin: 0 auto;

}

.form-container-sign {
  position: absolute;
  top: 0;
  height: 100%;
  transition: all 0.6s ease-in-out;
}

.sign-in-container {
  left: 0;
  width: 50%;
  z-index: 2;
}

.form-wrap.right-panel-active .sign-in-container {
  transform: translateX(100%);
}

.sign-up-container {
  left: 0;
  width: 50%;
  opacity: 0;
  z-index: 1;
}

.form-wrap.right-panel-active .sign-up-container {
  transform: translateX(100%);
  opacity: 1;
  z-index: 5;
  animation: show 0.6s;
}

@keyframes show {
  0%,
  49.99% {
    opacity: 0;
    z-index: 1;
  }
  50%,
  100% {
    opacity: 1;
    z-index: 5;
  }
}

.overlay-container {
  position: absolute;
  top: 0;
  left: 50%;
  width: 50%;
  height: 100%;
  overflow: hidden;
  transition: transform 0.6s ease-in-out;
  z-index: 100;
}

.form-wrap.right-panel-active .overlay-container {
  transform: translateX(-100%);
}

.overlay {
  background: #EE5A24;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: 0 0;
  color: #ffffff;
  position: relative;
  left: -100%;
  height: 100%;
  width: 200%;
  transform: translateX(0);
  transition: transform 0.6s ease-in-out;
}

.form-wrap.right-panel-active .overlay {
  transform: translateX(50%);
}

.overlay-panel {
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 0 40px;
  text-align: center;
  top: 0;
  height: 100%;
  width: 50%;
  transform: translateX(0);
  transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay-left {
  transform: translateX(0);
}

.overlay-right {
  right: 0;
  transform: translateX(0);
}

.container.right-panel-active .overlay-right {
  transform: translateX(20%);
}

.term-service {
  display: flex;
  width: 100%;
  justify-content: space-between;
}

.term-service label {
  margin-left: 5px;
}
</style>

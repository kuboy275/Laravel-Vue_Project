<template>
  <div>
    <!-- START AREA MAIN HOME -->
    <div class="area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1>{{ title }}</h1>
          </div>
          <div class="col-lg-12">
            <h5>View || {{ title }}</h5>
          </div>
        </div>
      </div>
    </div>
    <!-- END AREA MAIN HOME -->
  </div>
</template>

<script>
export default {
  props: ["title"],
};
</script>

<style>
/* AREA */

.area {
  margin-top: 50px;
  background-position: center;
  background-image: url(/images/featured-title-bg.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  display: flex;
  align-items: center;
  height: 350px;
  text-align: center;
}
.area h1 {
  font-size: 90px;
  color: #ffffff;
  font-weight: 700;
  margin-bottom: 30px;
}
.area h5 {
  font-size: 22px;
  color: #ffffff;
  font-weight: 600;
}
@media (max-width: 767px) {
  .area h1 {
    font-size: 75px;
  }
}
/* ------------------------------------------ */
</style>

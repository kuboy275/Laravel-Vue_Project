<template>
  <div>
    <Header></Header>
    <transition name="fade">
      <router-view></router-view>
    </transition>
    <Footer></Footer>
  </div>
</template>
<script>
    import Header from './components/Header';
    import Footer from './components/Footer';
    export default{
        components: {
          Header,
          Footer
        },
    }
</script>

<style scope>


</style>
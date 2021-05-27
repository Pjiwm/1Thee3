<template>
  <div id="app">
    <!-- <img alt="Vue logo" src="./assets/logo.png"> -->
    <div>
      <Nav />
    </div>
    <Jumbotron />
    <router-view></router-view>
    <Footer />
  </div>
</template>

<script>
import Nav from "@/components/Nav.vue";
import Jumbotron from "@/components/Jumbotron.vue";
import Footer from "@/components/Footer.vue";

export default {
  name: "App",
  components: {
    Nav,
    Jumbotron,
    Footer,
  },
};
</script>


<template>
  <div id="app">
    <!-- <img alt="Vue logo" src="./assets/logo.png"> -->
    <div>
      <Nav />
    </div>
    <Jumbotron />
    <Index />
    <Footer />
  </div>
</template>

<script>
import Nav from "@/components/Nav.vue";
import Index from "@/components/Index.vue";
import Jumbotron from "@/components/Jumbotron.vue";
import Footer from "@/components/Footer.vue";

export default {
  name: "App",
  components: {
    Nav,
    Index,
    Jumbotron,
    Footer,
  },
};
</script>

<style>
/* #app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
} */
</style>

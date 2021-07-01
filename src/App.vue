<!-- The compartmentilisation of the website. The Navbar and footer are always loaded and other "pages" are loaded in between, replacing the router-view component -->
<template>
  <div id="app">
    <div>
      <Nav />
    </div>

    <router-view></router-view>
    <Footer />
  </div>
</template>


<script>
import Nav from "@/components/Nav.vue";
import Footer from "@/components/Footer.vue";

export default {
  name: "app",
  components: {
    Nav,
    Footer,
  },
};
</script>

<style>
/* Comfortaa is the main font on the website */
@import url("https://fonts.googleapis.com/css2?family=Comfortaa&display=swap");

body {
  overflow-x:hidden;
  font-family: "Comfortaa", Helvetica, sans-serif !important;
  text-shadow: 0px 0px 50px rgba(0,0,0, 0.7) !important;
}
</style>
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
/* these styles are global, please add at least as possible in here,
it effects the entirity of the site. */
@import url("https://fonts.googleapis.com/css2?family=Comfortaa&display=swap");

body {
  overflow-x:hidden;
  font-family: "Comfortaa", Helvetica, sans-serif !important;
  text-shadow: 0px 0px 50px rgba(0,0,0, 0.7) !important;
}


/* Extra small devices (portrait phones, less than 576px)
No media query for `xs` since this is the default in Bootstrap */

/* Small devices (landscape phones, 576px and up) */
@media (min-width: 576px) {
}

/* Medium devices (tablets, 768px and up) */
@media (min-width: 768px) {
}

/* Large devices (desktops, 992px and up) */
@media (min-width: 992px) {
}

/* Extra large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) {
}
</style>
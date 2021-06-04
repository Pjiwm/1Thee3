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
@import url("https://fonts.googleapis.com/css2?family=Comfortaa&display=swap");

body {
  overflow-x:hidden;
  font-family: "Comfortaa", Helvetica, sans-serif !important;
}

.btn-primary {
  background-color: #bfa253 !important;
  border-color: #bfa253 !important;
  font-weight: bold !important;
}

.btn {
  border-radius: 3px !important;
}

.btn-primary:hover {
  background-color: #998243 !important;
  border-color: #998243 !important;
  font-weight: bold !important;
}

.btn-primary:focus {
  box-shadow: none !important;
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
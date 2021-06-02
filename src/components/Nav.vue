<template>
  <b-navbar class="p-0" toggleable="lg" type="dark" variant="dark" fixed="top">
    <!-- TODO fix href to return to root route index -->
    <b-navbar-brand href="/" class="d-block d-lg-none">
       <img
            class="img-fluid mobile-logo"
            src="../assets/1thee3logo.png"
            alt="1T3 logo"
          />
    </b-navbar-brand>
    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
    <b-collapse
      id="nav-collapse"
      is-nav
      class="d-lg-flex justify-content-center"
    >
      <b-navbar-nav class="d-flex align-items-center">
        <b-nav-item href="/#impressie">Impressie</b-nav-item>
        <b-nav-item href="/#ons_doel">Ons doel</b-nav-item>
        <a class="navbar-brand d-none d-lg-block" href="#">
          <img
            class="img-fluid"
            src="../assets/1thee3logo.png"
            alt="1T3 logo"
          />
        </a>
        <b-nav-item href="/#mood-finder">Mood finder</b-nav-item>
        <b-nav-item href="#">Webshop</b-nav-item>
      </b-navbar-nav>
    </b-collapse>
  </b-navbar>
</template>

<script>
export default {
  name: "Nav",
  methods: {},
};
</script>

<style scoped>
.navbar-brand {
  width: 60px;
  margin: 0 10px;
}

.mobile-logo {
  width: 45px;
}

.nav-item {
  font-weight: bold;
  width: 120px;
  text-align: center;
}

#nav-collapse {
  padding: 10px 0;
}

nav.bg-dark {
  background-color: #262524 !important;
}

nav.navbar-dark .navbar-nav .nav-link {
  color: #fff;
}

nav.navbar-dark .navbar-nav .nav-link:hover {
  color: #bfa253;
}

nav.navbar-dark .navbar-toggler {
  border: none;
  margin-right: 5px;
}

nav.navbar-dark .navbar-toggler:focus {
  box-shadow: none;
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
  nav.bg-dark {
    background-color: transparent !important;
  }
  #nav-collapse {
    background-image: linear-gradient(to top, rgba(0, 0, 0, 0.1), rgb(0, 0, 0));
    padding-top: 10px;
  }
}

/* Extra large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) {
}
</style>


<template>
  <b-navbar class="p-0 shadow" toggleable="lg" type="dark" variant="dark" fixed="top">
  <!-- 1T3 logo, links to home. -->
    <b-navbar-brand
      href="/"
      class="d-block d-lg-none"
      aria-label="Navigeer naar de home"
    >
      <img
        class="img-fluid mobile-logo"
        src="../assets/1thee3logo.webp"
        alt="1Thee3.nl logo"
        height="100%"
        width="100%"
      />
    </b-navbar-brand>
    <!-- This part is put in a hamburger menu on smaller devices -->
    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
    <b-collapse
      id="nav-collapse"
      is-nav
      class="d-lg-flex justify-content-center"
    >
      <b-navbar-nav class="d-flex align-items-center">
        <b-nav-item href="/#over_ons">Over 1T3</b-nav-item>
        <b-nav-item href="/#onze_thee">Onze thee</b-nav-item>
        <a
          class="navbar-brand d-none d-lg-block"
          href="/#"
          aria-label="1Thee3.nl logo, klik om terug te keren naar home"
        >
          <img
            class="img-fluid"
            src="../assets/1thee3logo.webp"
            alt="1Thee3.nl logo"
            height="100%"
            width="100%"
          />
        </a>
        <b-nav-item href="/#mood-finder">Mood finder</b-nav-item>
        <b-nav-item href="/webshop">Webshop</b-nav-item>
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
  width: 90px;
  margin: 0 10px;
}

.mobile-logo {
  width: 60px;
}

.nav-item {
  font-weight: bold;
  width: 125px;
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
</style>


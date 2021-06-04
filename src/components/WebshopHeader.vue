<template>
  <header class="d-flex align-items-center py-md-5" id="header">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-8 text-center header-title m-auto">
          <div class="main-title">
            <h1>Webshop</h1>
            <p class="pb-3">
              Vind hier alle onze verschillende thee smaken en pakketten!
            </p>
          </div>
        </div>
      </div>
    </div>
  </header>
</template>

<script>
export default {
  name: "WebshopHeader",
};
</script>

<style scoped>
header {
  min-height: 60vh;
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  background-image: url("../assets/header-image.webp");
  position: relative;
  padding-top: 71px;
}

header:after {
  background-color: rgba(0, 0, 0, 0.5);
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  content: "";
  z-index: 2;
}

.header-title {
  z-index: 50;
  color: #fff;
}

h1 {
  font-weight: bold;
  font-size: 2.4rem;
}

header p {
  font-size: 1.2rem;
  width: 80%;
  margin: auto;
}



/* Extra small devices (portrait phones, less than 576px)
No media query for `xs` since this is the default in Bootstrap */

/* Small devices (landscape phones, 576px and up) */
@media (min-width: 576px) {
}

/* Medium devices (tablets, 768px and up) */
@media (min-width: 768px) {
  h1 {
    font-weight: bold;
    font-size: 4rem;
  }

  header p {
    font-size: 1.8rem;
    width: 80%;
    margin: auto;
  }
}

/* Large devices (desktops, 992px and up) */
@media (min-width: 992px) {
}

/* Extra large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) {
}
</style>

<template>
  <header class="d-flex align-items-center py-md-5" id="header">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-8 text-center header-title m-auto">
          <div class="main-title">
            <h1>Tea is like a hug in a mug</h1>
            <p class="pb-3">
              Wil jij weten welke thee bij jou past?<br />Doe dan snel de mood
              finder!
            </p>
          </div>
          <a href="/#mood-finder">
            <button type="button" class="btn btn-primary">
              Doe de mood finder
            </button>
          </a>
        </div>
      </div>
    </div>
    <!-- Font size 0 is to make the text readable for text-readers, but not for other users -->
    <a class="d-block" href="#impressie" style="font-size: 0px">
      Link naar impressie
      <div class="arrow bounce"></div>
    </a>
  </header>
</template>

<script>
export default {
  name: "Header",
};
</script>

<style scoped>
header {
  min-height: 100vh;
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
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

header button {
  font-size: 1.4rem;
}

header .arrow {
  transform: translateY(-100%);
  left: 50%;
  bottom: 0;
  margin-left: -20px;
  width: 40px;
  height: 40px;
  background-image: url("../assets/chevron_down.webp");
  background-repeat: no-repeat;
  background-size: contain;
  animation: arrow 3s infinite;
  position: absolute;
  z-index: 30;
}

@keyframes arrow {
  0% {
    transform: translateY(-100%);
  }
  50% {
    transform: translateY(-40%);
  }
  100% {
    transform: translateY(-100%);
  }
}

/* Extra small devices (portrait phones, less than 576px)
No media query for `xs` since this is the default in Bootstrap */

/* Small devices (landscape phones, 576px and up) */
@media (min-width: 576px) {
}

/* Medium devices (tablets, 768px and up) */
@media (min-width: 768px) {
  nav.bg-dark {
    background-color: transparent !important;
  }

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

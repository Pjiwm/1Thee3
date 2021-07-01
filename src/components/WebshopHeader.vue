<template>
  <header style="padding-top: 120px">
    <b-container class="text-center">
      <b-row align-v="center" id="header">
        <b-col cols="12">
          <h1>Webshop</h1>
        </b-col>
      </b-row>
    </b-container>
  </header>
</template>

<script>
export default {
  name: "WebshopHeader",
};
</script>

<style scoped>
/* CSS code to make header background parralex TODO: link to trick used. */
#header {
  background-image: url("../assets/webshop_header.jpg");
  min-height: 40vh;
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  position: relative;
  border-radius: 3px;
}

#header:after {
  background-color: rgba(0, 0, 0, 0.5);
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  content: "";
  z-index: 2;
  border-radius: 3px;
}

h1 {
  z-index: 50;
  position: relative;
}

h1 {
  font-weight: bold;
  font-size: 2.4rem;
}

/* Medium devices (tablets, 768px and up) */
@media (min-width: 768px) {
  h1 {
    font-weight: bold;
    font-size: 4rem;
  }
}
</style>

<template>
  <b-container class="content">
    <b-row>
      <b-col><Carousel /></b-col>
      <b-col><Carousel /></b-col>
      <b-col><Carousel /></b-col>
    </b-row>
    <b-row>
      <b-col><h1>Routing demonstration</h1></b-col>
    </b-row>
  </b-container>
</template>

<script>
import Carousel from "../Carousel";
export default {
  name: "Router",
  components: {
    Carousel
  },
};
</script>



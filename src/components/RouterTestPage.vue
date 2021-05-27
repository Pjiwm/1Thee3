<template>
  <b-container class="content">
    <b-row>
      <b-col><Carousel /></b-col>
      <b-col><Carousel /></b-col>
      <b-col><Carousel /></b-col>
    </b-row>
    <b-row>
      <b-col><h2>This isa page to demonstrate routing. </h2></b-col>
    </b-row>
  </b-container>
</template>

<script>
import Carousel from "../components/Carousel";
import Input from "../components/Input"
export default {
  name: "RouterTestPage",
  components: {
    Carousel,
    Input
  },
};
</script>



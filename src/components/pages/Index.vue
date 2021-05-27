<template>
  <b-container class="content">
    <b-row>
      <b-col><Carousel /></b-col>
      <b-col><Carousel /></b-col>
      <b-col><Carousel /></b-col>
    </b-row>
    <b-row>
      <b-col><Input /></b-col>
    </b-row>
  </b-container>
</template>

<script>
import Carousel from "..//Carousel";
import Input from "../Input"
export default {
  name: "Index",
  components: {
    Carousel,
    Input
  },
};
</script>



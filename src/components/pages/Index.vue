<template>
  <b-container class="content">
    <b-row>
      <b-col> <Header /></b-col>
      <b-col><Quiz /></b-col>
    </b-row>
  </b-container>
</template>

<script>
import Quiz from "../Quiz";
import Header from "@/components/Header.vue";
export default {
  name: "Index",
  components: {
    Quiz,
    Header,
  },
};
</script>



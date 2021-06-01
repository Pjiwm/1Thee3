<template>
  <b-container class="content">
    <b-row>
      <b-col><br /></b-col>
    </b-row>
    <b-row>
      <b-col><QuizResults /></b-col>
    </b-row>
  </b-container>
</template>

<script>
import QuizResults from "../QuizResult";
export default {
  name: "Results",
  components: {
    QuizResults,
  },
};
</script>



<template>
  <div class="dark-background p-0">
    <b-container class="content">
      <b-row>
        <b-col><br /></b-col>
      </b-row>
      <b-row>
        <b-col><br /></b-col>
      </b-row>
      <b-row>
        <b-col><QuizResults /></b-col>
      </b-row>
    </b-container>
  </div>
</template>

<script>
import QuizResults from "@/components/QuizResult.vue";
export default {
  name: "Results",
  components: {
    QuizResults,
  },
};
</script>

<style scoped>
.dark-background {
  color: #ffffff;
  background-color: #262524;
}
</style>



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
        <b-col alt="Quiz results niet gevonden"><QuizResults /></b-col>
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
  metaInfo: {
    title: "1T3",
    titleTemplate: "%s - Uw resultaat, bestel snel uw pakket!",
    link: [{ rel: "canonical", href="https://onet3.onrender.com/results" }],
    meta: [
      { name: "description", content: "Mood finder resultaat, bestel uw pakket" },
    ],
  },
  
};
</script>

<style scoped>
.dark-background {
  color: #ffffff;
  background-color: #262524;
}
</style>



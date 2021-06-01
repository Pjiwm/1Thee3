<template>
  <b-container class="p-4 text-center quiz-background">
    <component v-bind:is="component" ref="question" />
    <button v-on:click="toggle">Toggle</button>
    </b-container>
</template>
<script>
import question from "./Question";
import strawberry from "../assets/strawberry.png";
import banana from "../assets/banana.png";
export default {
  name: "app",
  components: {
    question,
  },
  data() {
    return {
      questionIndex: 0,
      answers: [],
      component: "question",
      strawberry: strawberry,
      banana: banana,
    };
  },
  methods: {
    toggle() {
      switch (this.questionIndex) {
        case 0:
          this.$refs.question.setText("banana", "banana", "banana", "banana");
          this.$refs.question.setImage(
            this.banana,
            this.banana,
            this.banana,
            this.banana
          );
          this.questionIndex++;
          break;
        case 1:
          this.$refs.question.setText(
            "strawberry",
            "strawberry",
            "strawberry",
            "strawberry"
          );
          this.$refs.question.setImage(
            this.strawberry,
            this.strawberry,
            this.strawberry,
            this.strawberry
          );
          this.questionIndex++;
          break;
      }
    },
  },
};
</script>

<style scoped>

.quiz-background {
  background-color: #403d3b;
}
</style>
<template>
<div class="quiz-background py-5" id="quiz">
  <b-container class="text-center">
    <component v-on:click="(...args)=>this.toggle(...args)" v-bind:is="component" ref="question" />
    </b-container>
    </div>
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
    toggle(...args) {
      let chosenIndex = args[0]
      let chosenName = args[1]
      this.questionIndex = chosenIndex;
      this.answers.push(chosenName);
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
  border-top: 2px solid #aaa199;
  border-bottom: 2px solid #aaa199;
}
</style>

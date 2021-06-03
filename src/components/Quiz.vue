<template>
  <div class="quiz-background py-5" id="mood-finder">
    <b-container class="text-center">
      <h1 class="text-white">Quiz</h1>
      <component
        v-on:click="(chosenName) => this.answerQuestion(chosenName)"
        v-bind:is="component"
        ref="question"
      />
      <b-row class="d-flex justify-content-center">
        <b-col class="col-3">
          <b-progress :value="progress" :max="maxProgress"></b-progress>
        </b-col>
      </b-row>
    </b-container>
  </div>
</template>
<script>
import question from "./Question";
import strawberry from "../assets/strawberry.png";
import banana from "../assets/banana.png";
import quizFinished from "./QuizFinished.vue";
export default {
  name: "app",
  components: {
    question,
    quizFinished,
  },
  data() {
    return {
      questionIndex: 0,
      answers: [],
      component: "question",
      strawberry: strawberry,
      banana: banana,
      progress: 0,
      maxProgress: 99,
    };
  },
  methods: {
    answerQuestion(chosenName) {
      this.answers.push(chosenName);
      this.switchQuestion();
    },
    /**
     * @description switches the questions when the user performs an action in the quiz
     * it swaps out the quiz images, text and quiz question for each question.
     * The quiz also saves each answer in the answers array.
     */
    switchQuestion() {
      /**
       * questionIndex stands for the question the user would like to go to.
       * So e.g questionIndex = 1 is going to the second question (counting from 0)
       */
      this.questionIndex++;
      switch (this.questionIndex) {
        //For question 1, see Question.Vue data field
        case 0:
          this.$refs.question.setQuestion("Question 1");
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
          this.progress = 0;
          break;
        case 1:
          this.$refs.question.setQuestion("Question 2");
          this.$refs.question.setText("banana", "banana", "banana", "banana");
          this.$refs.question.setImage(
            this.banana,
            this.banana,
            this.banana,
            this.banana
          );
          this.progress = 33;
          break;
        case 2:
          this.$refs.question.setQuestion("Question 3");
          this.$refs.question.setText(
            "strawberry",
            "strawberry",
            "strawberry",
            "banana"
          );
          this.$refs.question.setImage(
            this.strawberry,
            this.strawberry,
            this.strawberry,
            this.banana
          );
          this.progress = 66;
          break;
        case 3:
          this.component = quizFinished;
          this.progress = 99;
      }
    },
  },
};
</script>

<style scoped>
.quiz {
  background-color: #403d3b;
  border-top: 2px solid #aaa199;
}
</style>

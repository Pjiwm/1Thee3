<template>
  <div class="quiz-background py-5" id="mood-finder">
    <b-container class="text-center">
      <h1 class="">Mood finder</h1>
      <component
        v-on:click="(chosenName) => this._answerQuestion(chosenName)"
        v-bind:is="component"
        ref="question"
      />
      <b-row class="d-flex justify-content-center">
        <b-col cols="12" md="8" class="pt-3">
          <b-progress
            variant="primary"
            aria-label="Voortgang van de Moodfinder"
            :value="progress"
            :max="maxProgress"
          ></b-progress>
        </b-col>
      </b-row>
    </b-container>
  </div>
</template>
<script>
import quizStart from "./QuizStart.vue";
import question from "./Question";
import strawberry from "../assets/strawberry.webp";
import banana from "../assets/banana.webp";
import quizFinished from "./QuizFinished.vue";
export default {
  name: "app",
  components: {
    quizStart,
    question,
    quizFinished,
  },
  data() {
    return {
      questionIndex: 0,
      answers: [],
      component: "quizStart",
      strawberry: strawberry,
      banana: banana,
      progress: 0,
      maxProgress: 99,
    };
  },
  methods: {
    /**
     * @description
     * saved pressed answer text in answers array
     */
    _answerQuestion(chosenName) {
      this.answers.push(chosenName);
      this.switchQuestion();
    },
    /**
     * @description switches the questions when the user performs an action in the quiz
     * it swaps out the quiz images, text and quiz question for each question.
     */
    switchQuestion() {
      /**
       * questionIndex stands for the question the user would like to go to.
       * So e.g questionIndex = 1 is going to the second question (counting from 0)
       */
      this.questionIndex++;
      switch (this.questionIndex) {
        case 0:
          this.component = quizStart;
          break;
        //For question 1, see Question.Vue data field
        case 1:
          this.component = "question";
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
        case 2:
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
        case 3:
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
        case 4:
          this.component = quizFinished;
          this.progress = 99;
      }
    },
  },
};
</script>

<style scoped>
#mood-finder {
  background-color: #403d3b;
  border-top: 2px solid #aaa199;
  min-height: 450px;
}

.quiz-background {
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-image: url("https://hetherdertje.nl/phpthumbsup/w/2545/h/900/zc/1/fltr[]/clr%7C35%7C000000/src/uploads/assets/uploads/tea.jpg");
  position: relative;
}
</style>

<template>
  <div class="quiz-background py-5" id="mood-finder">
    <b-container class="text-center position-relative">
      <h1 class="">Mood finder</h1>
      <b-col class="min-height">
      <!-- This component is dynamic. The v-on:start recieves a signal from QuizStart.vue, v-on:click from Question.vue. The v-bind:answers is so that QuizFinished can read out
      the answers to send to QuizResult -->
        <component
          v-on:click="_answerQuestion($event)"
          v-on:start="this.startQuiz"
          v-bind:is="component"
          v-bind:answers="answers"
          ref="question"
        />
      </b-col>

      <b-row class="d-flex justify-content-center">
        <b-col cols="12" md="8" class="pt-3">
          <b-progress
            variant="primary"
            alt="Voortgangmeter"
            aria-label="Voortgang van de Moodfinder"
            :value="progress"
            :max="maxProgress"
            v-if="progressBar"
          ></b-progress>
        </b-col>
      </b-row>
    </b-container>
  </div>
</template>
<script>
import quizStart from "./QuizStart.vue";
import question from "./Question";
import quizFinished from "./QuizFinished.vue";

// Question 1 images:
import mountains from "../assets/quiz-images/question-one-quiz/mountains.webp";
import forest from "../assets/quiz-images/question-one-quiz/forest.webp";
import party from "../assets/quiz-images/question-one-quiz/party.webp";
import flowerField from "../assets/quiz-images/question-one-quiz/flower-field.webp";
// Question 2 images:
import pepper from "../assets/quiz-images/question-two-quiz/pepper.webp";
import strawberry from "../assets/quiz-images/question-two-quiz/strawberry.webp";
import apple from "../assets/quiz-images/question-two-quiz/apple.webp";
import berry from "../assets/quiz-images/question-two-quiz/berry.webp";
// Question 3 images:
import jus from "../assets/quiz-images/question-three-quiz/jus.webp";
import sangriaFruits from "../assets/quiz-images/question-three-quiz/sangria-met-fruit.webp";
import beer from "../assets/quiz-images/question-three-quiz/speciaal-bier.webp";
import wine from "../assets/quiz-images/question-three-quiz/wijn.webp";

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
      progress: 0,
      maxProgress: 100,
      component: "quizStart",
      progressBar: false,
      // Question 1 images:
      mountains,
      forest,
      party,
      flowerField,
      // Question 2 images:
      pepper,
      strawberry,
      apple,
      berry,
      // Question 3 images:
      jus,
      sangriaFruits,
      beer,
      wine,
    };
  },
  methods: {
    /**
     * @description Saves chosen answer text in answers array.
     */
    _answerQuestion(chosenItem) {
      this.answers.push(chosenItem);
      this.switchQuestion();
    },
    /** 
    * @description Starts the quiz. Is called from v-on:start in the component
    */
    startQuiz() {
      this.component = "question";
      this.progressBar = true;
    },
    /**
     * @description Switches the questions when the user ansers a question in the quiz. It swaps out the quiz images, text and quiz question for each question.
     */
    switchQuestion() {
      switch (this.answers.length) {
        case 0:
          break;
        //For question 1, see Question.Vue data field
        case 1:
          this.$refs.question.setItems(
            { name: "peper", variety: ["spicy"] },
            { name: "aardbei", variety: ["sweet"] },
            { name: "appel", variety: ["everyonesFriend"] },
            { name: "wilde bessen", variety: ["wild"] }
          );
          this.$refs.question.setImage(
            this.pepper,
            this.strawberry,
            this.apple,
            this.berry
          );
          this.progress = 33.3;
          break;
        case 2:
          this.$refs.question.setItems(
            {
              name: "speciaal bier",
              variety: ["wild", "everyonesFriend", "spicy"],
            },
            { name: "sangria met fruit", variety: ["sweet"] },
            { name: "wijn", variety: ["everyonesFriend"] },
            { name: "jus d'orange", variety: ["sweet"] }
          );
          this.$refs.question.setImage(
            this.beer,
            this.sangriaFruits,
            this.wine,
            this.jus
          );
          this.progress = 66.6;
          break;
        case 3:
          this.component = quizFinished;
          this.progress = 100;
      }
    },
  },
};
</script>

<style scoped>
.min-height {
  min-height: 15.5rem;
}

#mood-finder {
  background-color: #403d3b;
  border-top: 2px solid #aaa199;
  min-height: 450px;
}
/* By default, the background is the mobile version, see CSS below for tablet and up version. */
.quiz-background {
  background-image: url("../assets/tea_dark_mobile.jpg");
  background-position: center;
}
/* Medium devices (tablets, 768px and up) */
@media (min-width: 768px) {
  .quiz-background {
    background-image: url("../assets/tea_dark.jpg");
  }
}

.quiz-background:after {
  background-position: center;
  background-size: cover;
}

image {
  filter: brightness(50%);
}
</style>

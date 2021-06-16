<template>
  <div class="quiz-background py-5" id="mood-finder">
    <b-container class="text-center position-relative">
      <h1 class="">Mood finder</h1>
      <b-col class="min-height">
        <component
          v-on:click="_answerQuestion($event)"
          v-on:start="this.startQuiz"
          v-bind:is="component"
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
// import strawberry from "../assets/strawberry.webp";
// import banana from "../assets/banana.webp";
import quizFinished from "./QuizFinished.vue";

// Question 1:
import mountains from "../assets/quiz-images/question-one-quiz/mountains.webp";
import forest from "../assets/quiz-images/question-one-quiz/forest.webp";
import party from "../assets/quiz-images/question-one-quiz/party.webp";
import flowerField from "../assets/quiz-images/question-one-quiz/flower-field.webp";
// Question 2:
import pepper from "../assets/quiz-images/question-two-quiz/pepper.webp";
import strawberry from "../assets/quiz-images/question-two-quiz/strawberry.webp";
import apple from "../assets/quiz-images/question-two-quiz/apple.webp";
import berry from "../assets/quiz-images/question-two-quiz/berry.webp";
// Question 3:
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
      answers: [],
      progress: 0,
      maxProgress: 100,
      component: "quizStart",
      progressBar: false,
      // question 1
      mountains: mountains,
      forest: forest,
      party: party,
      flowerField: flowerField,
      // question 2
      pepper: pepper,
      strawberry: strawberry,
      apple: apple,
      berry: berry,
      // question 3:
      jus: jus,
      sangriaFruits: sangriaFruits,
      beer: beer,
      wine: wine,
    };
  },
  methods: {
    /**
     * @description
     * saved pressed answer text in answers array
     */
    _answerQuestion(chosenItem) {
      this.answers.push(chosenItem);
      this.switchQuestion();
    },
    startQuiz() {
      this.component = "question";
      this.progressBar = true;
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
      switch (this.answers.length) {
        case 0:
          break;
        //For question 1, see Question.Vue data field
        case 1:
          // this.$refs.question.setQuestion("Question 2");
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
          // this.$refs.question.setQuestion("Question 3");
          this.$refs.question.setItems(
            {
              name: "speciaal bier",
              variety: ["wild", "everyonesFriend", "spicy"],
            },
            { name: "sangria", variety: ["sweet"] },
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
          this.$router.push({
            name: "resultsRoute",
            params: {
              items: this.answers,
            },
          });
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
/* it's repeating itself now, but that's fine because its a temporary image anyways.
 this image was causing major lag issues to the webpage.*/
.quiz-background {
  background-image: url("../assets/tea_dark.webp");
}

.quiz-background:after {
  background-position: center;
  background-size: cover;

  /* background-attachment: fixed;
  position: relative; */
}

image {
  filter: brightness(50%);
}
</style>

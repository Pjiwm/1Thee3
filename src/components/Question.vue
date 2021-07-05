<!-- This component is loaded in Quiz.vue -->
<template>
  <b-row class="d-flex justify-content-center question-row">
    <b-row class="d-flex justify-content-center"
      ><b-col class="col-lg-8 col-10 question-background"
        ><b class="text-white">{{ question }}</b></b-col
      ></b-row
    >
    <!-- When a component is clicked, it emits a onClick event that is recieved in Quiz.vue. It sends the properties of item x -->
    <b-col v-on:click="$emit('click', items[0])" class="col-6 col-lg-2">
      <div class="card my-2 question-border" aria-label="Selecteer optie 1">
        <div class="image-box">
          <b-img
            fluid
            :src="images[0]"
            alt="Image 3"
            class="mx-auto d-block p-3"
          ></b-img>
        </div>
        <div class="text-background p-1">
          <p class="text-white">{{ items[0].name }}</p>
        </div>
      </div>
    </b-col>
    <b-col v-on:click="$emit('click', items[1])" class="col-6 col-lg-2">
      <div class="card my-2 question-border" aria-label="Selecteer optie 2">
        <div class="image-box">
          <b-img
            fluid
            :src="images[1]"
            alt="Image 3"
            class="mx-auto d-block p-3"
          ></b-img>
        </div>
        <div class="text-background p-1">
          <p class="text-white">{{ items[1].name }}</p>
        </div>
      </div>
    </b-col>
    <b-col v-on:click="$emit('click', items[2])" class="col-6 col-lg-2">
      <div class="card my-2 question-border" aria-label="Selecteer optie 3">
        <div class="image-box">
          <b-img
            fluid
            :src="images[2]"
            alt="Image 3"
            class="mx-auto d-block p-3"
          ></b-img>
        </div>
        <div class="text-background p-1">
          <p class="text-white">{{ items[2].name }}</p>
        </div>
      </div>
    </b-col>
    <b-col v-on:click="$emit('click', items[3])" class="col-6 col-lg-2">
      <div class="card my-2 question-border" aria-label="Selecteer optie 4">
        <div class="image-box">
          <b-img
            fluid
            :src="images[3]"
            alt="Image 3"
            class="mx-auto d-block p-3"
          ></b-img>
        </div>
        <div class="text-background p-1">
          <p class="text-white">{{ items[3].name }}</p>
        </div>
      </div>
    </b-col>
  </b-row>
</template>
<script>
// Question 0 is loaded when this component is loaded
import mountains from "../assets/quiz-images/question-one-quiz/mountains.webp";
import forest from "../assets/quiz-images/question-one-quiz/forest.webp";
import flowerField from "../assets/quiz-images/question-one-quiz/flower-field.webp";
import party from "../assets/quiz-images/question-one-quiz/party.webp";
export default {
  name: "question",
  data: function () {
    return {
      question: "Welke van de vier afbeeldingen spreekt jou het meest aan?",
      images: [mountains, forest, flowerField, party],
      items: [
        { name: "bergen", variety: ["wild", "spicy"] },
        { name: "bos", variety: ["wild", "everyonesFriend", "sweet"] },
        { name: "weiland", variety: ["everyonesFriend", "sweet"] },
        { name: "uitgaan", variety: ["spicy", "wild"] },
      ],
    };
  },
  methods: {
    /** @description Loads the items that are submitted. See Quiz.vue and the items variable above."
    * @param {...args} ...args - All items
    */
    setItems(...args) {
      for (let i = 0; i < args.length; i++) {
        this.items[i] = args[i];
      }
    },
    /**
     * @description Sets the image for each quiz answer. Keep in mind that imageOne is image[0].
     * @param {string} itemOne - Sets top-left image.
     * @param {string} itemTwo - Sets top-right image.
     * @param {string} itemThree - Sets bottom-left image.
     * @param {string} itemFour - Sets the bottom-right image.
     */
    setImage(imageOne, imageTwo, imageThree, imageFour) {
      this.images = [imageOne, imageTwo, imageThree, imageFour];
    },
  },
};
</script>

<style scoped>
.card {
  background-color: #262524;
  border: 1px solid;
  border-radius: 5px;
}
.image-box {
  height: 8rem;
}
.text-background {
  background-color: rgb(44, 43, 43);
}
img {
  height: 100%;
}
.text-vertical-align {
  display: flex;
  align-items: center;
}
.question-background {
  background-color: rgb(44, 43, 43);
  border: solid 3px #aaa199;
  border-radius: 10px;
  padding: 7px;
}
.question-border:hover {
  border: 2px solid;
  border-color: #bfa253;
  cursor: pointer;
}

.question-border {
  border: 2px solid;
  border-color: transparent;
  cursor: pointer;
}

.question-row {
  margin-bottom: 10px;
}
</style>

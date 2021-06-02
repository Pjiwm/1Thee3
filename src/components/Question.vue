<template>
    <b-row class="d-flex justify-content-center question-row">
      <p class="text-white">{{ question }}</p>
      <b-col v-on:click="$emit('click', itemNames[0])" class="col-6 col-lg-2">
        <div class="image-box my-2 question-border">
          <b-img :src="images[0]" alt="Image 1" class="mx-auto d-block"></b-img>
          <div class="text-background p-1">
            <p class="text-white">{{ itemNames[0] }}</p>
          </div>
        </div>
      </b-col>
      <b-col v-on:click="$emit('click', itemNames[1])" class="col-6 col-lg-2">
        <div class="image-box my-2 question-border">
          <b-img :src="images[1]" alt="Image 2" class="mx-auto d-block"></b-img>
          <div class="text-background p-1">
            <p class="text-white">{{ itemNames[1] }}</p>
          </div>
        </div>
      </b-col>
      <b-col v-on:click="$emit('click', itemNames[2])" class="col-6 col-lg-2">
        <div class="image-box my-2 question-border">
          <b-img :src="images[2]" alt="Image 3" class="mx-auto d-block"></b-img>
          <div class="text-background p-1">
            <p class="text-white">{{ itemNames[2] }}</p>
          </div>
        </div>
      </b-col>
      <b-col v-on:click="$emit('click', itemNames[3])" class="col-6 col-lg-2">
        <div class="image-box my-2 question-border">
          <b-img :src="images[3]" alt="Image 3" class="mx-auto d-block"></b-img>
          <div class="text-background p-1">
            <p class="text-white">{{ itemNames[3] }}</p>
          </div>
        </div>
      </b-col>
    </b-row>
</template>
<script>
import strawberry from "../assets/strawberry.png";
export default {
  name: "question",
  data: function() {
    return {
      question: "Question 1",
      images: [strawberry, strawberry, strawberry, strawberry],
      itemNames: ["strawberry", "strawberry", "strawberry", "strawberry"],
    };
  },
  methods: {
    setText(itemOne, itemTwo, itemThree, itemFour) {
      this.itemNames = [itemOne, itemTwo, itemThree, itemFour];
    },
    setImage(imageOne, imageTwo, imageThree, imageFour) {
      this.images = [imageOne, imageTwo, imageThree, imageFour];
    },
    setQuestion(text) {
      this.question = text;
    },
  },
};
</script>

<style scoped>
.image-box {
  background-color: #262524;
  border: 1px solid;
  border-radius: 5px;
}
.text-background {
  background-color: rgb(44, 43, 43);
}

.text-vertical-align {
  display: flex;
  align-items: center;
}

.question-border:hover{
  border: 2px solid;
  border-color: #bfa253;
  cursor: pointer;
}

.question-border{
  border: 2px solid;
  border-color: transparent;
  cursor: pointer;
}

.question-row{
  margin-bottom: 10px;
}
</style>

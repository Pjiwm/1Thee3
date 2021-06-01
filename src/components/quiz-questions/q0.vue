<template>
  <b-container class="p-4 quiz-background text-center">
    <b-row class="d-flex justify-content-center">
      <b-col class="col-6 col-lg-2">
        <div class="image-box my-2">
          <b-img
            :src="images[0]"
            alt="Image 1"
            class="mx-auto d-block"
          ></b-img>
          <div class="text-background p-1">
            <p class="text-white">{{itemNames[0]}}</p>
          </div>
        </div>
      </b-col>
      <b-col class="col-6 col-lg-2">
        <div class="image-box my-2">
          <b-img
            :src="images[1]"
            alt="Image 2"
            class="mx-auto d-block"
          ></b-img>
          <div class="text-background p-1">
            <p class="text-white">{{itemNames[1]}}</p>
          </div>
        </div>
      </b-col>
      <b-col class="col-6 col-lg-2">
        <div class="image-box my-2">
          <b-img
            :src="images[2]"
            alt="Image 3"
            class="mx-auto d-block"
          ></b-img>
          <div class="text-background p-1">
            <p class="text-white">{{itemNames[2]}}</p>
          </div>
        </div>
      </b-col>
      <b-col class="col-6 col-lg-2">
        <div class="image-box my-2">
          <b-img
            :src="images[3]"
            alt="Image 3"
            class="mx-auto d-block"
          ></b-img>
          <div class="text-background p-1">
            <p class="text-white">{{itemNames[3]}}</p>
          </div>
        </div>
      </b-col>
    </b-row>
  </b-container>
</template>
<script>
import strawberry from "../../assets/strawberry.png";
export default {
  name: "q0",
  data: function () {
    return {
      strawberry: strawberry,
      itemNames: ["strawberry", "strawberry", "strawberry", "strawberry"],
      images: [strawberry, strawberry, strawberry, strawberry],
    };
  },
  methods: {
    setText(itemOne, itemTwo, itemThree, itemFour) {
      this.itemNames = [itemOne, itemTwo, itemThree, itemFour];
    },
    setImage(imageOne, imageTwo, imageThree, imageFour) {
      this.images = [imageOne, imageTwo, imageThree, imageFour];
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

.quiz-background {
  background-color: #403d3b;
}
.text-vertical-align {
  display: flex;
  align-items: center;
}
</style>

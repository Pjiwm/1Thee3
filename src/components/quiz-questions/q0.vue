<template>
    <b-container class="p-4 quiz-background text-center">
      <b-row class="d-flex justify-content-center">
        <b-col class="col-6 col-md-2">
          <div class="image-box">
            <b-img
              :src="strawberry"
              alt="Image 1"
              class="mx-auto d-block"
            ></b-img>
            <div class="text-background">
            <p class="text-white">Aardbei</p>
            </div>
          </div>
        </b-col>
        <b-col class="col-6 col-md-2">
          <div class="image-box">
            <b-img
              :src="strawberry"
              alt="Image 2"
              class="mx-auto d-block"
            ></b-img>
            <div class="text-background">
            <p class="text-white">Aardbei</p>
            </div>
          </div>
        </b-col>
        <b-col class="col-6 col-md-2">
          <div class="image-box">
            <b-img
              :src="strawberry"
              alt="Image 3"
              class="mx-auto d-block"
            ></b-img>
            <div class="text-background">
            <p class="text-white">Aardbei</p>
            </div>
          </div>
        </b-col>
        <b-col class="col-6 col-md-2">
          <div class="image-box">
            <b-img
              :src="strawberry"
              alt="Image 3"
              class="mx-auto d-block"
            ></b-img>
            <div class="text-background">
            <p class="text-vertical-align">Aardbei</p>
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
    };
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
  vertical-align: bottom;
  background-color: rgb(44, 43, 43);
}

.quiz-background {
  background-color: #403d3b;
}
.text-vertical-align {
      display: flex;
    align-items:center;
}
</style>

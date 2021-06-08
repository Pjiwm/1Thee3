<template>
  <b-row class="d-flex justify-content-center py-3 quiz-start">
    <b-col class="col-10 col-lg-8">
      <b class="text-white">
        Niet zeker welke thee smaken bij jou passen of wil je simpelweg verrast
        worden? Doe hier de mood finder en wij kiezen een assortiment dat goed
        bij jou past
      </b> 
      <br> <br>
      <button class="btn btn-primary" v-on:click="$emit('click')" type="button">
        Start de moodfiner!
      </button>
    </b-col>
  </b-row>
</template>
<script>
export default {
  name: "quizStart",
};
</script>

<style scoped>
.text-background {
  background-color: rgb(44, 43, 43);
}

.text-vertical-align {
  display: flex;
  align-items: center;
}

.quiz-start{
  margin-top: 60px;
  margin-bottom: 60px;
}
</style>

<template>
  <b-row class="d-flex justify-content-center py-3">
    <b-col class="col-10 col-lg-8">
      <p class="text-white">
        Niet zeker welke thee smaken bij jou passen of wil je simpelweg verrast
        worden? Doe hier de mood finder en wij kiezen een assortiment dat goed
        bij jou past
      </p>
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
</style>

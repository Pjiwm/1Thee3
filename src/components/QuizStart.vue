<template>
<!-- Button and frame at the bottom of the page that let's you start moodfinder/quiz. -->
  <b-row class="d-flex justify-content-center pt-5">
    <b-col class="col-10 col-lg-8 text-background">
      <b class="text-white">
        Niet zeker welke theesmaken bij jou passen of wil je simpelweg verrast
        worden?<br />
        Doe de mood finder en wij kiezen een passende theeplank
        voor je uit!
      </b>
      <br/>
      <br/>
      <button
        class="btn btn-primary"
        v-on:click="$emit('start')"
        type="button"
        alt="Start de mood finder!"
        aria-label="Start mood finder"
      >
        Start de mood finder!
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
  border: solid 3px #aaa199;
  border-radius: 10px;
  padding: 15px;
}

.text-vertical-align {
  display: flex;
  align-items: center;
}
</style>

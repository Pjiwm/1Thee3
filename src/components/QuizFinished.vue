<template>
<!-- Button and frame for going to quiz results -->
  <b-row class="d-flex justify-content-center pt-5">
    <b-col class="col-8 col-lg-3 text-background">
      <b class="text-white">
        De mood finder is afgerond.<br />Jouw theeplank staat klaar!
      </b>
      <br /><br />
      <!-- Button calls the toResults method to go to the next page -->
      <button
        class="btn btn-primary"
        type="button"
        alt="Verder naar resultaat"
        aria-label="Navigeer naar resultaat"
        v-on:click="toResults()"
      >
        Verder naar theeplank
      </button>
    </b-col>
  </b-row>
</template>
<script>
export default {
  name: "quizFinished",
  props: ["answers"],
  methods: {
    /**
     * @description Goes to the result page and sends the quiz answers along with it.
     */
    toResults() {
      this.$router.push({
        name: "resultsRoute",
        params: {
          items: this.answers,
        },
      });
    },
  },
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

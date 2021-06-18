<template>
  <b-row class="d-flex justify-content-center pt-5">
    <b-col class="col-8 col-lg-3 text-background">
      <b class="text-white">
        De mood finder is afgerond.<br />Jouw theepakket staat klaar!
      </b>
      <br /><br />
      <button
        class="btn btn-primary"
        type="button"
        alt="Verder naar resultaat"
        aria-label="Navigeer naar resultaat"
        v-on:click="toResults()"
      >
        Verder naar theepakket
      </button>
    </b-col>
  </b-row>
</template>
<script>
export default {
  name: "quizFinished",
  props: ["answers"],
  methods: {
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

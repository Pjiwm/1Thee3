<template>
  <b-row class="d-flex justify-content-center pt-5">
    <b-col class="col-8 col-lg-3 text-background">
      <p class="text-white">
        De mood finder is afgerond.<br />Jouw theepakket staat klaar!
      </p>
      <router-link :to="{ path: '/results' }"
        ><button
          class="btn btn-primary"
          type="button"
          alt="Verder naar resultaat"
          aria-label="Navigeer naar resultaat"
        >
          Verder naar theepakket
        </button></router-link
      >
    </b-col>
  </b-row>
</template>
<script>
export default {
  name: "quizFinished",
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

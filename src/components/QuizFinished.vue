<template>
  <b-row class="d-flex justify-content-center py-3">
    <b-col class="col-6 col-lg-3">
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
}

.text-vertical-align {
  display: flex;
  align-items: center;
}
</style>

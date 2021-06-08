<template>
  <b-row class="d-flex justify-content-center py-3">
    <b-col class="col-6 col-lg-2">
      <p class="text-white">
        De Mood finder is gemaakt. Je resultaten staan klaar!
      </p>
      <router-link :to="{ path: '/results' }"
        ><button class="btn btn-primary" type="button">
          Verder naar resultaten
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

<template>
  <b-row class="d-flex justify-content-center py-3">
    <b-col class="col-6 col-lg-2">
      <p class="text-white">
        De Mood finder is gemaakt. Je resultaten staan klaar!
      </p>
      <router-link :to="{ path: '/results/', params: { answers: 'hello' } }"
        ><button class="btn btn-primary" type="button">
          Verder naar resultaten
        </button></router-link
      >
      <br />
      <router-link :to="{ name: 'results', params: { id: '123' } }"
        >Go to results</router-link
      >
    </b-col>
  </b-row>
</template>
<script>
export default {
  name: "quizFinished",
  // props:['answers']
  data() {
    return {
      answers: "test",
      props: {
        msg: String,
      },
    };
  },
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

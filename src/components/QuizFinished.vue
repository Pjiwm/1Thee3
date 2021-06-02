<template>
    <b-row class="d-flex justify-content-center py-3">
      <b-col class="col-6 col-lg-2">
          <p class="text-white">You finished the mood finder!</p>
          <router-link :to="{ path: '/results' }"><button class="btn btn-primary" v-on:click="dsf" type="button"> Verder naar resultaten</button></router-link>
      </b-col>
    </b-row>
</template>
<script>
export default {
  name: "quizFinished",
};
</script>

<style scoped>
.image-box {
  background-color: #262524;
  border: 1px solid;
  border-radius: 5px;
}
.text-background {
  background-color: rgb(44, 43, 43);
}

.text-vertical-align {
  display: flex;
  align-items: center;
}
</style>

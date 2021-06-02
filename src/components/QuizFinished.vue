<template>
    <b-row class="d-flex justify-content-center py-3">
      <b-col class="col-6 col-lg-2">
<<<<<<< HEAD
          <p class="text-white">You finished the mood finder!</p>
          <router-link :to="{ path: '/results' }"><button class="btn btn-primary" v-on:click="dsf" type="button"> Verder naar resultaten</button></router-link>
=======
          <p class="text-white">De quiz is gemaakt. Je resultaten staan klaar!</p>
          <router-link :to="{ path: '/results' }"><button class="btn btn-primary" type="button"> Verder naar resultaten</button></router-link>
>>>>>>> ade4f6f39bb0c0858354483e8483cb76ede98ab3
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

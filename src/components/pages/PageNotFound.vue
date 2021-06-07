<template>
  <div class="d-flex align-items-center vh-100">
    <b-container class="text-center">
      <b-row>
        <b-col cols="12">
          <h1>404</h1>
          <p>Page Not Found</p>
          <a href="/" class="btn btn-primary">Terug naar home</a>
        </b-col>
      </b-row>
    </b-container>
  </div>
</template>

<script>
export default {
  name: "PageNotFound",
  metaInfo: {
    title: "1T3",
    titleTemplate: "%s - 404",
  },
};
</script>

<style scoped>
h1 {
  font-size: 4rem;
  font-weight: bold;
}
div {
  background-color: #262524;
  color: #fff;
}
</style>



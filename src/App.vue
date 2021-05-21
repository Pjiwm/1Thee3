<template>
  <div>{{ name }}</div>
  <button v-on:click="reverseMessage">reverse</button>
</template>

<script>
export default {
  name: "App",
  data() {
    return {
      name: "1Thee3",
      reverseMessage: function () {
        this.name = this.name.split("").reverse().join("");
      },
    };
  },
};
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
// https://vuejs.org/v2/guide/#Declarative-Rendering
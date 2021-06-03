<template>
<div>

    <Header />
    <Main />
    <Quiz />
</div>
</template>

<script>
import Header from "@/components/Header.vue";
import Quiz from "../Quiz";
import Main from "@/components/HomeMain.vue";

export default {
  name: "Index",
  components: {
    Header,
    Main,
    Quiz,
  },
};
</script>



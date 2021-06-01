<template>
  <div>
    <component v-bind:is="component" />
    <button v-on:click="toggle">Toggle</button>
  </div>
</template>
<script>
import q0 from "./quiz-questions/q0";
import q1 from "./quiz-questions/q1";
export default {
  name: "app",
  components: {
    q0,
    q1,
  },
  data() {
    return {
      questionIndex: 0,
      answers: [],
      component: "q0",
    };
  },
  methods: {
    toggle() {
      switch (this.questionIndex) {
        case 0:
          // this.component = q1;
          alert("1")
          this.component.setText("1","1","1","1")
          this.questionIndex++;
          break;
        case 1:
          this.component = q0;
          this.questionIndex++;
          break;
      }
      
    },
  },
};
</script>
<template>
  <div>
    <WebshopHeader />

    <b-container class="py-5">
      <b-row>
        <b-col class="sidenav" cols="12" md="2">
          <ul
            id="webshoplink-list"
            class="list-unstyled text-center text-md-left"
          >
            <li class="py-2">
              <a class="d-block" v-on:click="switchItem('WebshopTea')"
                >Theesmaken</a
              >
            </li>
            <li class="py-2">
              <a class="d-block" v-on:click="switchItem('WebshopTeaPackage')"
                >Theeplanken</a
              >
            </li>
            <li class="py-2">
              <a
                class="d-block"
                v-on:click="switchItem('WebshopTeaAccessories')"
                >Toebehoren</a
              >
            </li>
          </ul>
        </b-col>
        <component v-bind:is="component" />
      </b-row>
    </b-container>
  </div>
</template>

<script>
import WebshopHeader from "@/components/WebshopHeader.vue";
import WebshopTea from "@/components/WebshopTea.vue";
import WebshopTeaPackage from "@/components/WebshopTeaPackage.vue";
import WebshopTeaAccessories from "@/components/WebshopTeaAccessories.vue";
export default {
  name: "webshop",
  components: {
    WebshopHeader,
    WebshopTea,
    WebshopTeaPackage,
    WebshopTeaAccessories,
  },
  data() {
    return {
      component: "WebshopTea",
    };
  },
  methods: {
    /**
     * @description
     * saved pressed answer text in answers array
     */
    switchItem(component) {
      this.component = component;
    },
  },
  metaInfo: {
    title: "1T3",
    titleTemplate: "%s - Bestel uw thee of theepakket in onze webshop",
    link: [{ rel: "canonical", href: "https://onet3.onrender.com/webshop" }],
    meta: [
      {
        name: "description",
        content: "Bestel uw thee of theepakket op 1Thee3.nl",
      },
    ],
  },
};
/*]]>*/
</script>

<style scoped>
.sidenav {
  border-right: 2px solid #aaa199;
}

#webshoplink-list a {
  text-decoration: none;
  color: #fff;
}

#webshoplink-list a:hover {
  cursor: pointer;
  color: #bfa253;
}

.webshop-main {
  min-height: 100vh;
}

h1 {
  font-size: 2.5rem;
  font-weight: bold;
}

div {
  background-color: #262524;
  color: #fff;
}

hr {
  background-color: #aaa199;
  opacity: 1;
  height: 2px !important;
  border-radius: 20px;
}
</style>



<template>
  <div>
    <WebshopHeader />

    <b-container class="py-5">
      <b-row class="d-flex justify-content-center">
        <b-col class="sidenav" cols="12" md="6" lg="2">
          <ul id="webshoplink-list" class="list-unstyled">
            <li class="py-2">
              <a class="d-block" v-on:click="switchItem('WebshopTea')"
                >Theesmaken <font-awesome-icon :icon="['fas', 'chevron-right']"
              /></a>
            </li>
            <li class="py-2">
              <a class="d-block" v-on:click="switchItem('WebshopTeaPackage')"
                >Theepakketten
                <font-awesome-icon :icon="['fas', 'chevron-right']"
              /></a>
            </li>
            <li class="py-2">
              <a
                class="d-block"
                v-on:click="switchItem('WebshopTeaAccessories')"
                >Toebehoren <font-awesome-icon :icon="['fas', 'chevron-right']"
              /></a>
            </li>
          </ul>
        </b-col>
        <hr class="col-10 d-block d-lg-none" />
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
#webshoplink-list a {
  text-decoration: none;
  color: #fff;
  text-align: center;
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

/* Extra small devices (portrait phones, less than 576px)
No media query for `xs` since this is the default in Bootstrap */

/* Small devices (landscape phones, 576px and up) */
@media (min-width: 576px) {
}

/* Medium devices (tablets, 768px and up) */
@media (min-width: 768px) {
  #webshoplink-list a {
    text-align: center;
  }
}

/* Large devices (desktops, 992px and up) */
@media (min-width: 992px) {
  .fa-chevron-right {
    float: right;
    margin-right: 0;
  }
  .sidenav {
    border-right: 2px solid #aaa199;
  }
  #webshoplink-list a {
    text-align: left;
  }
}

/* Extra large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) {
  .fa-chevron-right {
    margin-right: 30px;
  }
}
</style>



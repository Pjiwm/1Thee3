<template>
  <footer id="footer">
    <b-container>
    <b-row class="py-4">
      <b-col cols="6" md="8" lg="9">
        <div class="padding-left-3">
          <p>Kvk nummer | 17240186</p>
          <p>Email | info@1t3</p>
        </div>
      </b-col>
      <b-col
        class="d-flex align-items-center flex-column"
        cols="6"
        md="4"
        lg="3"
      >
        <div class="px-3">
          <a href="/">
          <img
            class="img-fluid"
            src="../../src/assets/1thee3logo.png"
            width="90rem"
          />
          </a>
          <div class="iconBox">
            <a href="facebook.com">
              <font-awesome-icon
                class="icon p-1"
                :icon="['fab', 'facebook-square']"
              />
            </a>
            <a href="instagram.com">
              <font-awesome-icon
                class="icon p-1"
                :icon="['fab', 'instagram']"
              />
            </a>
          </div>
        </div>
      </b-col>
    </b-row>
    <b-row>
      <b-col cols="12">
        <p class="text-center">© IT3.nl | 2021</p>
      </b-col>
    </b-row>
    </b-container>
  </footer>
</template>

<script>
export default {
  name: "Footer",
};
</script>

<style scoped>
footer {
  background-color: #262524;
  border-top: 2px solid #aaa199;
}

.padding-left-3 {
  padding-left: 1rem !important;
}

.iconBox {
  font-size: 3.1rem;
}
.icon {
  color: #aaa199;
}
.icon:hover {
  padding: 0px !important;
}
</style>

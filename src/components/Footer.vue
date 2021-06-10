<template>
  <footer id="footer">
    <b-container>
      <b-row class="py-4">
        <b-col cols="6" md="8" lg="9">
          <div class="padding-left-3">
            <p>Kvk nummer | 17240186</p>
            <p>Email | <a href="mailto:info@1t3.nl">info@1t3.nl</a></p>
          </div>
        </b-col>
        <b-col
          class="d-flex align-items-center flex-column"
          cols="6"
          md="4"
          lg="3"
        >
          <div class="px-3">
            <a
              href="/"
              aria-label="1Thee3.nl logo, klik om terug te keren naar home"
            >
              <img
                class="img-fluid"
                src="../../src/assets/1thee3logo.png"
                width="90rem"
                alt="1Thee3.nl logo"
              />
            </a>
            <div class="iconBox">
              <a href="facebook.com" aria-label="Ga naar ons facebook">
                <font-awesome-icon
                  class="icon p-1"
                  :icon="['fab', 'facebook-square']"
                  alt="Facebook"
                />
              </a>
              <a href="instagram.com" aria-label="Ga naar ons instagram">
                <font-awesome-icon
                  class="icon p-1"
                  :icon="['fab', 'instagram']"
                  alt="Instagram"
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
  transition: color 0.2s ease-in;
  color: #BFA253;
}
</style>

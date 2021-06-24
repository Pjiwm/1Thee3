<template>
  <footer id="footer">
    <b-container>
      <b-row class="py-4">
        <b-col cols="4">
          <div class="padding-left-3">
            <p>KVK-nummer | 17240186</p>
            <p>Email | <a href="mailto:info@1t3.nl">info@1t3.nl</a></p>
          </div>
        </b-col>
        <b-col cols="4" class="d-flex align-items-center flex-column">
          <div>
            <a id="installApp">
              <font-awesome-icon id="downloadBox"
                class="icon p-1"
                :icon="['fas', 'download']"
                alt="Download app"
              />
            </a>
          </div>
        </b-col>
        <b-col class="d-flex align-items-center flex-column" cols="4">
          <div class="px-3">
            <a
              href="/"
              aria-label="1T3.nl logo, klik om terug te keren naar home"
            >
              <img
                class="img-fluid"
                src="../../src/assets/1thee3logo.webp"
                width="90rem"
                height="90rem"
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
              <a href="instagram.com" aria-label="Ga naar onze instagram">
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
  mounted: () => {
    let deferredPrompt;
    window.addEventListener("beforeinstallprompt", (e) => {
      deferredPrompt = e;
      console.log("added before install listener");
      document.getElementById("downloadBox").style.display = 'inline';
    });

    const installApp = document.getElementById("installApp");
    installApp.addEventListener("click", async () => {
      console.log("added event listener");
      if (deferredPrompt !== null) {
        deferredPrompt.prompt();
        const { outcome } = await deferredPrompt.userChoice;
        if (outcome === "accepted") {
          deferredPrompt = null;
        }
      }
    });
  },
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
  font-size: 3.5rem;
}

#downloadBox {
  font-size: 5.1rem;
  display: none;
}

.icon {
  color: #aaa199;
}
.icon:hover {
  transition: color 0.2s ease-in;
  color: #bfa253;
}
</style>

<template>
  <!-- The footer of the website at the bottom of all pages. -->
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
          <!-- Download button that installs PWA app. -->
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
        <!-- Logo and social media icons. -->
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
            <!-- Social media buttons from @fortawesome/vue-fontawesome.-->
            <div class="iconBox">
              <a href="https://facebook.com" aria-label="Ga naar ons facebook">
                <font-awesome-icon
                  class="icon p-1"
                  :icon="['fab', 'facebook-square']"
                  alt="Facebook"
                />
              </a>
              <a href="https://www.instagram.com/job_cools/" aria-label="Ga naar onze instagram">
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
  //TODO https://stackoverflow.com/questions/50332119/is-it-possible-to-make-an-in-app-button-that-triggers-the-pwa-add-to-home-scree/64727286#64727286 is de goede link?
  // Mounted runs when page is loaded (https://v3.vuejs.org/guide/instance.html#lifecycle-diagram).
  mounted: () => {
    let deferredPrompt;
    /* Listens if the browser can install a PWA (Chrome on the desktop, Chrome and Firefox on Android, ?? on IOS)
    if not the button will not be displayed.*/
    window.addEventListener("beforeinstallprompt", (e) => {
      deferredPrompt = e;
      console.log("added before install listener");
      document.getElementById("downloadBox").style.display = 'inline';
    });
    /* Checks if the download button is pressed and opens an installation prompt.*/
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
  cursor:pointer;
}
</style>

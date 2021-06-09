<template>
  <div>
    <WebshopHeader />
    <div class="d-flex align-items-center">
      <b-container class="webshop-main py-5 text-center">
        <b-row class="d-flex justify-content-center py-4">
          <b-col cols="12" lg="8">
            <h1>Alle thee smaken</h1>
            <p class="under-title">
              Alle thee, behalve kruidenthee, wordt gemaakt van theeblaadjes die
              van de theestruik afkomstig zijn. De theestruik groeit in een
              tropisch of subtropisch klimaat. ... Ondanks dat er veel
              verschillende soorten thee bestaan zijn ze allemaal afkomstig van
              de bladeren van dezelfde theestruik: de Camellia Sinensis.
            </p>
          </b-col>
        </b-row>
        <hr />
        <div
          id="collection-component-1623232139238"
          alt="Theecollectie niet gevonden"
        ></div>
      </b-container>
    </div>
  </div>
</template>

<script>
import WebshopHeader from "@/components/WebshopHeader.vue";
export default {
  name: "webshop",
  components: {
    WebshopHeader,
  },
  metaInfo: {
    title: "1T3",
    titleTemplate: "%s - Bestel uw thee of theepakket",
  },

  meta: [
    {
      name: "description",
      content: "Bestel uw thee of theepakket op 1Thee3.nl",
    },
    //SOCIALE MEDIA TAGS
    // // OpenGraph data (Most widely used)
    // { property: "og:title", content: "My Page Title ← My Site" },
    // { property: "og:site_name", content: "My Site" },
    // // The list of types is available here: http://ogp.me/#types
    // { property: "og:type", content: "website" },
    // // Should the the same as your canonical link, see below.
    // { property: "og:url", content: "https://www.my-site.com/my-special-page" },
    // {
    //   property: "og:image",
    //   content: "https://www.my-site.com/my-special-image.jpg",
    // },
    // // Often the same as your meta description, but not always.
    // { property: "og:description", content: "I have things here on my site." },

    // // Twitter card
    // { name: "twitter:card", content: "summary" },
    // {
    //   name: "twitter:site",
    //   content: "https://www.my-site.com/my-special-page",
    // },
    // { name: "twitter:title", content: "My Page Title ← My Site" },
    // { name: "twitter:description", content: "I have things here on my site." },
    // // Your twitter handle, if you have one.
    // { name: "twitter:creator", content: "@alligatorio" },
    // {
    //   name: "twitter:image:src",
    //   content: "https://www.my-site.com/my-special-image.jpg",
    // },

    // // Google / Schema.org markup:
    // { itemprop: "name", content: "My Page Title ← My Site" },
    // { itemprop: "description", content: "I have things here on my site." },
    // {
    //   itemprop: "image",
    //   content: "https://www.my-site.com/my-special-image.jpg",
    // },
  ],
  // Canonical url uitgecomment, wanneer domein beschikbaar is comment weghalen
  // link: [{ rel: "canonical", href="https://1thee3.nl/webshop" }],

  created: function () {
    var scriptURL =
      "https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js";
    if (window.ShopifyBuy) {
      if (window.ShopifyBuy.UI) {
        ShopifyBuyInit();
      } else {
        loadScript();
      }
    } else {
      loadScript();
    }
    function loadScript() {
      var script = document.createElement("script");
      script.async = true;
      script.src = scriptURL;
      (
        document.getElementsByTagName("head")[0] ||
        document.getElementsByTagName("body")[0]
      ).appendChild(script);
      script.onload = ShopifyBuyInit;
    }
    function ShopifyBuyInit() {
      var client = window.ShopifyBuy.buildClient({
        domain: "1t3-nl.myshopify.com",
        storefrontAccessToken: "9bc45730908a4fbfe63a973eef74d5cc",
      });
      window.ShopifyBuy.UI.onReady(client).then(function (ui) {
        ui.createComponent("collection", {
          id: "266373529807",
          node: document.getElementById("collection-component-1623232139238"),
          moneyFormat: "%E2%82%AC%7B%7Bamount_with_comma_separator%7D%7D",
          options: {
            product: {
              styles: {
                product: {
                  "@media (min-width: 601px)": {
                    "max-width": "calc(25% - 20px)",
                    "margin-left": "20px",
                    "margin-bottom": "50px",
                    width: "calc(25% - 20px)",
                  },
                  img: {
                    height: "calc(100% - 15px)",
                    position: "absolute",
                    left: "0",
                    right: "0",
                    top: "0",
                  },
                  imgWrapper: {
                    "padding-top": "calc(75% + 15px)",
                    position: "relative",
                    height: "0",
                  },
                },
                title: {
                  color: "#ffffff",
                },
                button: {
                  ":hover": {
                    "background-color": "#ac924b",
                  },
                  "background-color": "#bfa253",
                  ":focus": {
                    "background-color": "#ac924b",
                  },
                  "padding-left": "41px",
                  "padding-right": "41px",
                },
                price: {
                  "font-size": "16px",
                  color: "#ffffff",
                },
                compareAt: {
                  "font-size": "13.6px",
                  color: "#ffffff",
                },
                unitPrice: {
                  "font-size": "13.6px",
                  color: "#ffffff",
                },
              },
              buttonDestination: "modal",
              contents: {
                options: false,
              },
              text: {
                button: "Bekijk product",
              },
            },
            productSet: {
              styles: {
                products: {
                  "@media (min-width: 601px)": {
                    "margin-left": "-20px",
                  },
                },
              },
            },
            modalProduct: {
              contents: {
                img: false,
                imgWithCarousel: true,
              },
              styles: {
                product: {
                  "@media (min-width: 601px)": {
                    "max-width": "100%",
                    "margin-left": "0px",
                    "margin-bottom": "0px",
                  },
                },
                button: {
                  ":hover": {
                    "background-color": "#ac924b",
                  },
                  "background-color": "#bfa253",
                  ":focus": {
                    "background-color": "#ac924b",
                  },
                  "padding-left": "41px",
                  "padding-right": "41px",
                },
                title: {
                  "font-family": "Helvetica Neue, sans-serif",
                  "font-weight": "bold",
                  "font-size": "26px",
                  color: "#ffffff",
                },
                price: {
                  "font-family": "Helvetica Neue, sans-serif",
                  "font-weight": "normal",
                  "font-size": "18px",
                  color: "#ffffff",
                },
                compareAt: {
                  "font-family": "Helvetica Neue, sans-serif",
                  "font-weight": "normal",
                  "font-size": "15.299999999999999px",
                  color: "#ffffff",
                },
                unitPrice: {
                  "font-family": "Helvetica Neue, sans-serif",
                  "font-weight": "normal",
                  "font-size": "15.299999999999999px",
                  color: "#ffffff",
                },
                description: {
                  color: "#ffffff",
                },
              },
              text: {
                button: "In winkelwagen",
              },
            },
            modal: {
              styles: {
                modal: {
                  "background-color": "#262524",
                },
              },
            },
            option: {},
            cart: {
              styles: {
                button: {
                  ":hover": {
                    "background-color": "#ac924b",
                  },
                  "background-color": "#bfa253",
                  ":focus": {
                    "background-color": "#ac924b",
                  },
                },
                title: {
                  color: "#ffffff",
                },
                header: {
                  color: "#ffffff",
                },
                lineItems: {
                  color: "#ffffff",
                },
                subtotalText: {
                  color: "#ffffff",
                },
                subtotal: {
                  color: "#ffffff",
                },
                notice: {
                  color: "#ffffff",
                },
                currency: {
                  color: "#ffffff",
                },
                close: {
                  color: "#ffffff",
                  ":hover": {
                    color: "#ffffff",
                  },
                },
                empty: {
                  color: "#ffffff",
                },
                noteDescription: {
                  color: "#ffffff",
                },
                discountText: {
                  color: "#ffffff",
                },
                discountIcon: {
                  fill: "#ffffff",
                },
                discountAmount: {
                  color: "#ffffff",
                },
                cart: {
                  "background-color": "#2d2828",
                },
                footer: {
                  "background-color": "#2d2828",
                },
              },
              text: {
                title: "Winkelwagen",
                total: "Subtotaal",
                empty: "Winkelwagen is leeg",
                notice:
                  "Verzend- en kortingscodes worden toegevoegd bij het afrekenen.",
                button: "Bestellen",
              },
              popup: false,
            },
            toggle: {
              styles: {
                toggle: {
                  "background-color": "#bfa253",
                  ":hover": {
                    "background-color": "#ac924b",
                  },
                  ":focus": {
                    "background-color": "#ac924b",
                  },
                },
              },
            },
            lineItem: {
              styles: {
                variantTitle: {
                  color: "#ffffff",
                },
                title: {
                  color: "#ffffff",
                },
                price: {
                  color: "#ffffff",
                },
                fullPrice: {
                  color: "#ffffff",
                },
                discount: {
                  color: "#ffffff",
                },
                discountIcon: {
                  fill: "#ffffff",
                },
                quantity: {
                  color: "#ffffff",
                },
                quantityIncrement: {
                  color: "#ffffff",
                  "border-color": "#ffffff",
                },
                quantityDecrement: {
                  color: "#ffffff",
                  "border-color": "#ffffff",
                },
                quantityInput: {
                  color: "#ffffff",
                  "border-color": "#ffffff",
                },
              },
            },
          },
        });
      });
    }
  },
};
/*]]>*/
</script>

<style scoped>
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



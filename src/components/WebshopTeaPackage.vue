<template>
  <b-col cols="12" lg="10">
    <div class="page-information text-center text-lg-left">
      <h1>Theeplanken</h1>
      <!-- Text at top of webshop page, unlike most elements on this page, this can't be changed in Shopify CMS. -->
      <p>
        Thee is een warme drank die wordt gemaakt door infusie van de gedroogde
        bladeren van de theeplant Camellia sinensis. Alle als thee verkochte
        producten die niet van deze plant afkomstig zijn (bijvoorbeeld
        kamillethee of rooibos), zijn dan ook geen echte thee maar kruidenthee.
      </p>
      <div
        class="pt-4"
        id="collection-component-1623403815868"
        alt="TheePakket collectie"
      ></div>
    </div>
  </b-col>
</template>

<script>
export default {
  name: "WebshopTeaPackage",
  /* webshop script reference: 
  https://1t3-nl.myshopify.com/admin/apps/buy_button/?host=MXQzLW5sLm15c2hvcGlmeS5jb20vYWRtaW4&locale=en&new_design_language=true&session=a40ac285eb8db56abcb711cbcd342bff6e7e20d7b819278bbcc281765bfe527b&shop=1t3-nl.myshopify.com&timestamp=1624637849 */
  //Shopify imported code is executed at the created lifecycle event (https://v3.vuejs.org/guide/instance.html#lifecycle-diagram).
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
          id: "266374611151",
          node: document.getElementById("collection-component-1623403815868"),
          moneyFormat: "%E2%82%AC%7B%7Bamount_with_comma_separator%7D%7D",
          options: {
            product: {
              styles: {
                product: {
                  "@media (min-width: 601px)": {
                    "max-width": "calc(33.33333% - 30px)",
                    "margin-left": "30px",
                    "margin-bottom": "50px",
                    width: "calc(33.33333% - 30px)",
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
                    "margin-left": "-30px",
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
</script>

<style scoped>

/* Medium devices (tablets, 768px and up) */
@media (min-width: 768px) {
  .page-information {
    margin-left: 3rem;
  }
}

/* Large devices (desktops, 992px and up) */
@media (min-width: 992px) {
  .text-lg-left {
    text-align: left !important;
  }
}
</style>

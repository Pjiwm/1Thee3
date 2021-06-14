<template>
  <main>
    <b-container>
      <b-row>
        <b-col cols="12" class="pb-5 text-center">
          <h1>Dit thee pakket past het best bij jou!</h1>
          <p class="m-auto">
            Onze experts hebben gecalculeerd dat deze thee helemaal bij jou
            past.
          </p>
        </b-col>
        <hr class="col-12" />
        <b-col cols="12" order="1" class="product-result my-5 pb-5" data-rank="#1">
          <div id="product-component-1"></div>
        </b-col>
        <b-col cols="12" order="2" class="product-result my-5 pb-5" data-rank="#2">
          <div id="product-component-2"></div>
        </b-col>
        <b-col cols="12" order="3" class="product-result my-5 pb-5" data-rank="#3">
          <div id="product-component-3"></div>
        </b-col>
        <b-col cols="12" order="4" class="product-result my-5 pb-5" data-rank="#4">
          <div id="product-component-4"></div>
        </b-col>
      </b-row>
    </b-container>
  </main>
</template>

<script>
export default {
  name: "QuizResult",
  /*<![CDATA[*/
  created: function () {
    // Shopfiy product id's
    // If you want to add more results you can add the id here
    let productIds = [
      6718558568655, 6710995452111, 6718558404815, 6711744037071,
    ];
    let i = 0;
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
        productIds.forEach((id) => {
          i++;
          ui.createComponent("product", {
            id: id,
            node: document.getElementById("product-component-" + i),
            moneyFormat: "%E2%82%AC%7B%7Bamount_with_comma_separator%7D%7D",
            options: {
              product: {
                styles: {
                  product: {
                    "@media (min-width: 601px)": {
                      "max-width": "100%",
                      "margin-left": "0",
                      "margin-bottom": "50px",
                    },
                    "text-align": "center",
                  },
                  title: {
                    "font-size": "26px",
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
                    "padding-left": "42px",
                    "padding-right": "42px",
                  },
                  price: {
                    "font-size": "18px",
                    color: "#ffffff",
                  },
                  compareAt: {
                    "font-size": "15.299999999999999px",
                    color: "#ffffff",
                  },
                  unitPrice: {
                    "font-size": "15.299999999999999px",
                    color: "#ffffff",
                  },
                  description: {
                    color: "#ffffff",
                  },
                },
                layout: "horizontal",
                contents: {
                  img: false,
                  imgWithCarousel: true,
                  description: true,
                },
                width: "100%",
                text: {
                  button: "In winkelwagen",
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
                    "padding-left": "42px",
                    "padding-right": "42px",
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
                    "font-family": "Helvetica Neue, sans-serif",
                    "font-weight": "normal",
                    "font-size": "14px",
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
      });
    }
  },
};
</script>

<style scoped>
h1 {
  font-weight: bold;
}

main {
  min-height: 100vh;
  padding-top: 120px;
}

.product-result {
  position: relative;
  border-bottom: 2px solid #aaa199;
}

.product-result:last-child {
  position: relative;
  border-bottom: 2px solid transparent;
}

.product-result:after {
  content: attr(data-rank);
  width: 50px;
  height: 70px;
  border-radius: 3px;
  background-color: #bfa253;
  position: absolute;
  top: 0;
  left: 0;
  line-height: 72px;
  text-align: center;
  font-weight: bold;
  font-size: 1.5rem;
}

.card {
  margin: 0;
  padding: 0;
  color: #ffffff;
  background-color: #262524;
}

.block {
  width: 100%;
}

hr {
  background-color: #aaa199;
  opacity: 1;
  height: 2px !important;
  border-radius: 20px;
}
h1 {
  margin-bottom: 15px;
}

p {
  font-size: 20px;
  width: 80%;
}

img {
  border: solid 3px #aaa199;
  border-radius: 4px;
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
}

/* Large devices (desktops, 992px and up) */
@media (min-width: 992px) {
}

/* Extra large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) {
  .product-result:after {
    left: 13rem;
    width: 60px;
    height: 80px;
    line-height: 82px;
  }
}
</style>
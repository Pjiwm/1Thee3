<template>
  <main class="container-fluid main-bg mt-5 pt-5 pb-3">
    <div class="offset-lg-2 offset-md-2 offset-sm-1">
      <div class="row">
        <card class="col-lg-2 col-md-2 col-sm-3">
          <img
            src="https://static-images.jumbo.com/product_images/090820180902_51014DS-242_360x360.png"
            alt=""
            style="width: 100%"
          />
          <p>thee smaak 1</p>
        </card>
        <card class="col-lg-2 col-md-2 col-sm-3">
          <img
            src="https://static-images.jumbo.com/product_images/090820180902_51014DS-242_360x360.png"
            alt=""
            style="width: 100%"
          />
          <p>thee smaak 2</p>
        </card>
        <card class="col-lg-2 col-md-2 col-sm-3">
          <img
            src="https://static-images.jumbo.com/product_images/090820180902_51014DS-242_360x360.png"
            alt=""
            style="width: 100%"
          />
          <p>thee smaak 3</p>
        </card>
        <div class="col-lg-4 col-md-4 col-sm-10">
          <h4><b>Theeplank optie 1</b></h4>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat
            explicabo unde sed ipsum reprehenderit vero quia perferendis
            blanditiis accusantium neque iure id corrupti aperiam rem tempora,
            quasi ipsa dolorum totam!
          </p>
          <div id="product-1"></div>
        </div>
      </div>

      <hr class="col-lg-10 col-md-10 col-sm-10 mt-4 mb-4" />

      <div class="row pb-3">
        <card class="col-lg-2 col-md-2 col-sm-3">
          <img
            src="https://static-images.jumbo.com/product_images/090820180902_51014DS-242_360x360.png"
            alt=""
            style="width: 100%"
          />
          <p>thee smaak 3</p>
        </card>
        <card class="col-lg-2 col-md-2 col-sm-3">
          <img
            src="https://static-images.jumbo.com/product_images/090820180902_51014DS-242_360x360.png"
            alt=""
            style="width: 100%"
          />
          <p>thee smaak 4</p>
        </card>
        <card class="col-lg-2 col-md-2 col-sm-3">
          <img
            src="https://static-images.jumbo.com/product_images/090820180902_51014DS-242_360x360.png"
            alt=""
            style="width: 100%"
          />
          <p>thee smaak 5</p>
        </card>
        <div class="col-lg-4 col-md-4 col-sm-10">
          <h4><b>Theeplank optie 2</b></h4>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat
            explicabo unde sed ipsum reprehenderit vero quia perferendis
            blanditiis accusantium neque iure id corrupti aperiam rem tempora,
            quasi ipsa dolorum totam!
            <br />
            test:
            <br />
            {{ this.$route.params.items }}
            <!-- {{ this.$route.attrs.items }} -->
          </p>

          <div id="product-2"></div>
        </div>
      </div>
    </div>
  </main>
</template>

<script>
export default {
  // this.$route.params.items
  name: "QuizResult",
  props: ["items"],
  data() {
    return {
      // thee_collection_1: {
      //   title: "title",
      //   description: "description",
      //   shopify_link: ""
      // },
    };
  },
  /*<![CDATA[*/
  created: function () {
    // console.log($attrs);
    let productIds = [6710995452111, 6711744037071];
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
            node: document.getElementById("product-" + i),
            moneyFormat: "%E2%82%AC%7B%7Bamount_with_comma_separator%7D%7D",
            options: {
              product: {
                styles: {
                  product: {
                    "@media (min-width: 601px)": {
                      "max-width": "calc(25% - 20px)",
                      "margin-left": "20px",
                      "margin-bottom": "50px",
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
                  },
                  price: {
                    color: "#ffffff",
                  },
                  compareAt: {
                    color: "#ffffff",
                  },
                  unitPrice: {
                    color: "#ffffff",
                  },
                },
                contents: {
                  img: false,
                  title: false,
                  price: false,
                },
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
                  button: false,
                  buttonWithQuantity: true,
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
                    "padding-left": "100px",
                    "padding-right": "100px",
                  },
                  title: {
                    "font-family": "Helvetica Neue, sans-serif",
                    "font-weight": "bold",
                    "font-size": "26px",
                    color: "#4c4c4c",
                  },
                  price: {
                    "font-family": "Helvetica Neue, sans-serif",
                    "font-weight": "normal",
                    "font-size": "18px",
                    color: "#4c4c4c",
                  },
                  compareAt: {
                    "font-family": "Helvetica Neue, sans-serif",
                    "font-weight": "normal",
                    "font-size": "15.299999999999999px",
                    color: "#4c4c4c",
                  },
                  unitPrice: {
                    "font-family": "Helvetica Neue, sans-serif",
                    "font-weight": "normal",
                    "font-size": "15.299999999999999px",
                    color: "#4c4c4c",
                  },
                },
                text: {
                  button: "Add to cart",
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
}

img {
  border: solid 3px #aaa199;
  border-radius: 4px;
}
</style>
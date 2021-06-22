<template>
  <main>
    <b-container>
      <b-row v-show="quiz_cookies_exist">
        <b-col cols="12" class="pb-5 text-center">
          <h1>Deze theeplanken passen het beste bij jou!</h1>
          <p class="m-auto">
            De theeplanken staan op volgorde, van de beste match naar de
            mindere match...<br />
          </p>
        </b-col>
        <!-- <hr class="col-12" /> -->
        <b-col
          cols="12"
          :order="everyonesFriend"
          class="product-result mt-3 mb-5 pt-5"
          :data-rank="everyonesFriendNr"
        >
          <div id="product-component-1"></div>
        </b-col>
        <b-col
          cols="12"
          :order="spicy"
          class="product-result mt-3 mb-5 pt-5"
          :data-rank="spicyNr"
        >
          <div id="product-component-2"></div>
        </b-col>
        <b-col
          cols="12"
          :order="wild"
          class="product-result mt-3 mb-5 pt-5"
          :data-rank="wildNr"
        >
          <div id="product-component-3"></div>
        </b-col>
        <b-col
          cols="12"
          :order="sweet"
          class="product-result mt-3 mb-5 pt-5"
          :data-rank="sweetNr"
        >
          <div id="product-component-4"></div>
        </b-col>
      </b-row>
      <b-row v-show="!quiz_cookies_exist">
        <b-col cols="12" class="my-5 p-5 text-center">
          <h1>De Mood finder is nog niet gemaakt.</h1>
          <p class="m-auto">Je wordt zo doorverwezen naar de Mood finder...</p>
        </b-col>
      </b-row>
    </b-container>
  </main>
</template>

<script>
export default {
  name: "QuizResult",
  data() {
    return {
      everyonesFriend: 1,
      spicy: 2,
      wild: 3,
      sweet: 4,
      everyonesFriendNr: "#1",
      spicyNr: "#2",
      wildNr: "#3",
      sweetNr: "#4",
      quiz_cookies_exist: true,
    };
  },
  /*<![CDATA[*/
  created: function () {
    const vm = this;
    const params = vm.$route.params.items;

    // Sets order of product with params
    if (typeof params !== "undefined") {
      console.log("Params:\n" + params);
      setProductOrder(params);
    } else {
      console.log("Page was refreshed or was visited directly");
      checkCookie();
    }

    // Gets the information out of the cookie and returns it
    function getCookie() {
      const name = "quiz_result=";
      const cookie_values = document.cookie.split("; ");
      console.log("cookie_values: " + cookie_values);
      for (let i = 0; i < cookie_values.length; i++) {
        let c = cookie_values[i];
        while (c.charAt(0) == " ") {
          c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
          console.log(
            "SUBSTRING IN GETCOOKIE: " + c.substring(name.length, c.length)
          );
          return c.substring(name.length, c.length);
        }
      }
      console.log("NO QUIZRESULT IN COOKIE");
      return "";
    }

    // Uses cookie data for result or will show message redirection to Mood finder
    function checkCookie() {
      console.log("CHECKCOOKIE CALLED");
      let quizResults = getCookie("quiz_result");
      if (quizResults != "") {
        console.log("QUIZRESULT EXISTS IN CHECKCOOKIE");
        quizResults = quizResults.split(",");
        console.log("QUIZRESULT: " + quizResults);

        vm.everyonesFriend = quizResults[0];
        vm.everyonesFriendNr = quizResults[1];
        vm.spicy = quizResults[2];
        vm.spicyNr = quizResults[3];
        vm.wild = quizResults[4];
        vm.wildNr = quizResults[5];
        vm.sweet = quizResults[6];
        vm.sweetNr = quizResults[7];

        console.log(
          "POSITIONS IN COOKIE:\neveryonesFriend: " +
            vm.everyonesFriend +
            " " +
            vm.everyonesFriendNr +
            "\nspicy: " +
            vm.spicy +
            " " +
            vm.spicyNr +
            "\nwild: " +
            vm.wild +
            " " +
            vm.wildNr +
            "\nsweet: " +
            vm.sweet +
            " " +
            vm.sweetNr
        );
      } else {
        console.log("ELSE TRIGGERED IN CHECKCOOKIE");
        vm.quiz_cookies_exist = false;
        setTimeout(function () {
          vm.$router.push("/#mood-finder");
        }, 5000);
      }
    }

    // Sets the product order for result, with the data passed from Mood finder
    function setProductOrder(answers) {
      let everyonesFriendCount = 0;
      let spicyCount = 0;
      let wildCount = 0;
      let sweetCount = 0;

      //Calculate points per variety
      for (let index1 = 0; index1 < 3; index1++) {
        for (
          let index2 = 0;
          index2 < answers[index1].variety.length;
          index2++
        ) {
          console.log("POINT ADDED TO: " + answers[index1].variety[index2]);
          if (answers[index1].variety[index2] == "everyonesFriend") {
            everyonesFriendCount++;
          } else if (answers[index1].variety[index2] == "spicy") {
            spicyCount++;
          } else if (answers[index1].variety[index2] == "wild") {
            wildCount++;
          } else if (answers[index1].variety[index2] == "sweet") {
            sweetCount++;
          }
        }
      }

      let counts = [];
      counts[0] = ["everyonesFriend", everyonesFriendCount];
      counts[1] = ["spicy", spicyCount];
      counts[2] = ["wild", wildCount];
      counts[3] = ["sweet", sweetCount];
      let temp;

      // Sorts counts from biggest to smallest
      for (let x = 0; x < counts.length; x++) {
        for (let y = x + 1; y < counts.length; y++) {
          if (counts[x][1] < counts[y][1]) {
            temp = counts[x];
            counts[x] = counts[y];
            counts[y] = temp;
          }
        }
      }

      console.log(
        "POINTS TOTAL (DESC):\n" +
          counts[0] +
          "\n" +
          counts[1] +
          "\n" +
          counts[2] +
          "\n" +
          counts[3]
      );

      // Assign new positions to products
      for (let z = 0; z < 4; z++) {
        if (counts[z][0] == "everyonesFriend") {
          vm.everyonesFriend = z + 1;
          vm.everyonesFriendNr = "#" + (z + 1);
        } else if (counts[z][0] == "spicy") {
          vm.spicy = z + 1;
          vm.spicyNr = "#" + (z + 1);
        } else if (counts[z][0] == "wild") {
          vm.wild = z + 1;
          vm.wildNr = "#" + (z + 1);
        } else if (counts[z][0] == "sweet") {
          vm.sweet = z + 1;
          vm.sweetNr = "#" + (z + 1);
        }
      }

      console.log(
        "NEW POSITIONS:\neveryonesFriend: " +
          vm.everyonesFriend +
          " " +
          vm.everyonesFriendNr +
          "\nspicy: " +
          vm.spicy +
          " " +
          vm.spicyNr +
          "\nwild: " +
          vm.wild +
          " " +
          vm.wildNr +
          "\nsweet: " +
          vm.sweet +
          " " +
          vm.sweetNr
      );

      //Sets cookie with the data from quiz
      let cookieData =
        vm.everyonesFriend +
        "," +
        vm.everyonesFriendNr +
        "," +
        vm.spicy +
        "," +
        vm.spicyNr +
        "," +
        vm.wild +
        "," +
        vm.wildNr +
        "," +
        vm.sweet +
        "," +
        vm.sweetNr;

      setCookie(cookieData, 24);
      // console.log("COOKIEDATA: " + cookieData);
      function setCookie(cvalues, exhours) {
        let expiresInHours = "max-age=" + 60 * 60 * exhours;
        document.cookie =
          "quiz_result=" +
          cvalues +
          "; " +
          expiresInHours +
          "; " +
          "SameSite=Lax;";
        console.log("COOKIE: " + document.cookie);
      }
    }

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
  border-top: 2px solid #aaa199;
}

.product-result:after {
  content: attr(data-rank);
  width: 50px;
  height: 70px;
  margin-top: 3rem;
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
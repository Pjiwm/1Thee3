<template>
  <main id="main" class="container-fluid main-bg py-4">
    <div class="row py-5">
      <div class="col-lg-5 offset-lg-2 mb-lg-0 col-10 offset-1 mb-5">
        <h1>Impressie</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum atque
          corrupti repellendus, eveniet non earum illum nisi aliquid, nam eum
          explicabo. Iusto porro, minus doloremque doloribus earum laboriosam
          repudiandae labore?
        </p>
      </div>
      <div class="col-lg-3 offset-lg-0 col-10 offset-1">
        <img src="../../non-code/thee1-home.jpg" width="100%" />
      </div>
    </div>
    <hr class="col-lg-8 offset-lg-2 col-10 offset-1" />
    <div class="row py-5">
      <div class="col-lg-3 offset-lg-2 mb-lg-0 col-10 offset-1 mb-5">
        <img src="../../non-code/thee2-home.jpg" width="100%" />
      </div>
      <div class="col-lg-5 offset-lg-0 col-10 offset-1">
        <h1>Ons doel</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores
          amet voluptas doloremque iste facere consectetur dolor a laborum
          necessitatibus quia et, alias maiores quibusdam ea sint nostrum quidem
          vel minima.
        </p>
      </div>
    </div>
    <div id='collection-component-1622545848186'></div>
  </main>
</template>

<script>
export default {
  name: "HomeMain",
};

/*<![CDATA[*/
(function () {
  var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
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
    var script = document.createElement('script');
    script.async = true;
    script.src = scriptURL;
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
    script.onload = ShopifyBuyInit;
  }
  function ShopifyBuyInit() {
    var client = ShopifyBuy.buildClient({
      domain: '3t1-nl.myshopify.com',
      storefrontAccessToken: 'e0523b853cc975a7aa4ea4a0c18393a4',
    });
    ShopifyBuy.UI.onReady(client).then(function (ui) {
      ui.createComponent('collection', {
        id: '270691401927',
        node: document.getElementById('collection-component-1622545848186'),
        moneyFormat: '%E2%82%AC%7B%7Bamount_with_comma_separator%7D%7D',
        options: {
  "product": {
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "calc(25% - 20px)",
          "margin-left": "20px",
          "margin-bottom": "50px",
          "width": "calc(25% - 20px)"
        },
        "img": {
          "height": "calc(100% - 15px)",
          "position": "absolute",
          "left": "0",
          "right": "0",
          "top": "0"
        },
        "imgWrapper": {
          "padding-top": "calc(75% + 15px)",
          "position": "relative",
          "height": "0"
        }
      },
      "title": {
        "font-family": "Calisto MT, serif",
        "font-weight": "normal"
      },
      "button": {
        "padding-left": "100px",
        "padding-right": "100px"
      }
    },
    "text": {
      "button": "Add to cart"
    }
  },
  "productSet": {
    "styles": {
      "products": {
        "@media (min-width: 601px)": {
          "margin-left": "-20px"
        }
      }
    }
  },
  "modalProduct": {
    "contents": {
      "img": false,
      "imgWithCarousel": true,
      "button": false,
      "buttonWithQuantity": true
    },
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "100%",
          "margin-left": "0px",
          "margin-bottom": "0px"
        }
      },
      "button": {
        "padding-left": "100px",
        "padding-right": "100px"
      },
      "title": {
        "font-family": "Helvetica Neue, sans-serif",
        "font-weight": "bold",
        "font-size": "26px",
        "color": "#4c4c4c"
      }
    },
    "text": {
      "button": "Add to cart"
    }
  },
  "option": {},
  "cart": {
    "text": {
      "total": "Subtotal",
      "button": "Checkout"
    }
  },
  "toggle": {}
},
      });
    });
  }
})();
/*]]>*/
</script>

<style scoped>
main {
  color: #ffffff;
  background-color: #262524;
}

h1 {
  margin-bottom: 15px;
}

hr {
  background-color: #aaa199;
  opacity: 1;
  height: 2px !important;
  border-radius: 20px;
}

p {
  font-size: 20px;
}

img {
  border: solid 3px #aaa199;
  border-radius: 4px;
}
</style>
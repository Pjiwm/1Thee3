<template>
  <div>
    <Header />
    <Main />
    <Quiz />
  </div>
</template>

<script>
import Header from "@/components/Header.vue";
import Quiz from "../Quiz";
import Main from "@/components/HomeMain.vue";

export default {
  name: "Index",
  components: {
    Header,
    Main,
    Quiz,
  },
  metaInfo: {
    title: "1T3",
    titleTemplate: "%s - De mannelijkste theeën van Nederland!",
    link: [{ rel: "canonical", href="https://onet3.onrender.com/" }],

    meta: [
      { name: "description", content: "1thee3.nl is een aanbieder van theeën met een mannelijke draai" }
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
    ]
  }
  
};
</script>



<template>
  <div class="dark-background p-0">
    <b-container class="content">
      <b-row>
        <b-col><br /></b-col>
      </b-row>
      <b-row>
        <b-col><br /></b-col>
      </b-row>
      <b-row>
        <b-col alt="Quiz results niet gevonden"><QuizResults /></b-col>
      </b-row>
    </b-container>
  </div>
</template>

<script>
import QuizResults from "@/components/QuizResult.vue";
export default {
  name: "Results",
  components: {
    QuizResults,
  },
  metaInfo: {
    title: "1T3",
    titleTemplate: "%s - Uw resultaat, bestel snel uw pakket!",
  },

  meta: [
    { name: "description", content: "Mood finder resultaat, bestel uw pakket" },
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
  // link: [{ rel: "canonical", href="https://1thee3.nl/results" }],
};
</script>

<style scoped>
.dark-background {
  color: #ffffff;
  background-color: #262524;
}
</style>



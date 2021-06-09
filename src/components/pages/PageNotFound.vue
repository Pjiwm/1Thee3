<template>
  <div class="d-flex align-items-center vh-100">
    <b-container class="text-center">
      <b-row>
        <b-col cols="12">
          <h1>404</h1>
          <p>Page Not Found</p>
          <a
            href="/"
            class="btn btn-primary"
            aria-label="Terug naar home"
            alt="Navigeer terug naar home"
            >Terug naar home</a
          >
        </b-col>
      </b-row>
    </b-container>
  </div>
</template>

<script>
export default {
  name: "PageNotFound",
  metaInfo: {
    title: "1T3",
    titleTemplate: "%s - 404 Pagina niet gevonden",
  },

  meta: [
    { name: "description", content: "Pagina is niet gevonden" },
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
  // link: [{ rel: "canonical", href="https://1thee3.nl/404" }],
};
</script>

<style scoped>
h1 {
  font-size: 4rem;
  font-weight: bold;
}
div {
  background-color: #262524;
  color: #fff;
}
</style>



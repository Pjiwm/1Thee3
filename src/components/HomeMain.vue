<template>
  <main id="over_ons" class="container-fluid main-bg py-4">
    <b-row class="row py-5">
      <b-col class="col-lg-5 offset-lg-2 mb-lg-0 col-10 offset-1 mb-3">
        <h1>Over 1T3</h1>
        <p>
        Bij 1T3 hebben wij de missie om het leven van mensen te verrijken met onze liefde voor thee. 
        We willen af van het suffe imago en maken theedrinken stoer en gepersonaliseerd. 
        Dit doen we door er met onze moodfinder achter te komen welke theeën het beste bij je passen. 
        Op basis van de uitkomsten stellen we een gepersonaliseerd theepakket voor je samen. 
        Iedere maand ontvang je ons theepakket met 4 verrassende en nieuwe smaken, afgestemd op jouw persoonlijke voorkeuren. 
        </p>
      </b-col>
      <b-col class="col-lg-3 offset-lg-0 col-10 offset-1">
        <img
          alt="Een open theefilter met losse thee erin op een tafel"
          src="../assets/thee1-home.webp"
          width="100%"
          height="100%"
        />
      </b-col>
    </b-row>
    <hr class="col-lg-8 offset-lg-2 col-10 offset-1" id="onze_thee" />
    <b-row class="row py-5">
      <b-col
        class="
          col-lg-3
          offset-lg-2
          mb-lg-0
          col-10
          offset-1
          order-last order-md-1
        "
      >
        <!-- <img
          alt="Thee wordt ingeschoken met een goudkleurige theepot in een Chinees kopje"
          src="../assets/thee2-home.jpg"
          width="100%"
          height="100%"
        /> -->
        <b-carousel :interval="4000" fade img-width="250" @sliding-start="onSlideStart" @sliding-end="onSlideEnd">
          <b-carousel-slide img-src="instaCarousel/0.jpg"></b-carousel-slide>
          <b-carousel-slide img-src="instaCarousel/1.jpg"></b-carousel-slide>
          <b-carousel-slide img-src="instaCarousel/2.jpg"></b-carousel-slide>
          <b-carousel-slide img-src="instaCarousel/3.jpg"></b-carousel-slide>
          <b-carousel-slide img-src="instaCarousel/4.jpg"></b-carousel-slide>
        </b-carousel>
      </b-col>
      <b-col
        class="col-lg-5 offset-lg-0 col-10 offset-1 order-first mb-3 order-md-2"
      >
        <h1>Onze thee </h1>
        <p>
        Een heerlijk kopje thee is altijd weer genieten, maar een beetje variatie is wel zo fijn. 
        Daarom bieden we een ruim assortiment aan verse losse theeën welke we zelf zorgvuldig proeven en selecteren. 
        Onze theeën zijn duurzaam en 100% natuurlijk!
        </p>
      </b-col>
    </b-row>
  </main>
</template>

<script>
export default {
  name: "HomeMain",
    data() {
      return {
        slide: 0,
        sliding: null
      }
    },
    methods: {
      onSlideStart() {
        this.sliding = true
      },
      onSlideEnd() {
        this.sliding = false
      }
    }
};
</script>

<style scoped>
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
<template>
  <!-- center part of the homepage with the most tags -->
  <main id="over_ons" class="container py-4">
    <b-row class="py-5 d-flex justify-content-center" id="Over_1T3">
      <b-col cols="12" md="10" lg="7" class="mb-3 text-center text-lg-left">
        <h1>Over 1T3</h1>
        <p>
          Bij 1T3 hebben wij de missie om het leven van mensen te verrijken met
          onze liefde voor thee. We willen af van het suffe imago en maken
          theedrinken stoer en gepersonaliseerd. Dit doen we door er met onze
          moodfinder achter te komen welke theeën het beste bij je passen. Op
          basis van de uitkomsten stellen we een gepersonaliseerd theepakket
          voor je samen. Iedere maand ontvang je ons theepakket met 4
          verrassende en nieuwe smaken, afgestemd op jouw persoonlijke
          voorkeuren.
        </p>
      </b-col>
      <b-col cols="12" md="8" lg="4" xl="3">
        <a class="d-block" href="https://www.instagram.com/job_cools/" rel="noopener" target="_blank">
         <!-- <b-carousel class="border-img" :interval="4000" fade img-width="250" @sliding-start="onSlideStart" @sliding-end="onSlideEnd">
          <b-carousel-slide src="../assets/0.jpg" alt="Eerste Instagram foto"></b-carousel-slide>
          <b-carousel-slide img-src="instaCarousel/1.jpg" alt="Tweede Instagram foto"></b-carousel-slide>
          <b-carousel-slide img-src="instaCarousel/2.jpg" alt="Derde Instagram foto"></b-carousel-slide>
          <b-carousel-slide img-src="instaCarousel/3.jpg" alt="Vierde Instagram foto"></b-carousel-slide>
          <b-carousel-slide img-src="instaCarousel/4.jpg" alt="Vijfde Instagram foto"></b-carousel-slide>
        </b-carousel> -->
        <img class="border-img" src="../assets/3.jpg"/>
        </a>
      </b-col>
    </b-row>
    <hr class="col-10 col-lg-10 offset-1" id="onze_thee" />
    <b-row class="py-5 d-flex justify-content-center">
      <b-col cols="12" md="8" lg="4" xl="3" order="2" order-lg="1">
        <img
          alt="Thee wordt ingeschoken met een goudkleurige theepot in een Chinees kopje"
          src="../assets/thee2-home.jpg"
          width="100%"
          height="100%"
          class="border-img"
        />
      </b-col>
      <b-col
        cols="12"
        md="10"
        lg="7"
        class="mb-3 text-center text-lg-left"
        order="1"
        order-lg="2"
      >
        <h1>Onze thee</h1>
        <p>
          Een heerlijk kopje thee is altijd weer genieten, maar een beetje
          variatie is wel zo fijn. Daarom bieden we een ruim assortiment aan
          verse losse theeën welke we zelf zorgvuldig proeven en selecteren.
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
      sliding: null,
    };
  },
  methods: {
    /**
     * @description sets slide state to true
     * @param {string} sliding - the slide state for the isntagram carsousel
     */
    onSlideStart() {
      this.sliding = true;
    },
    /**
     * @description sets slide state to false
     * @param {string} sliding - the slide state for the isntagram carsousel
     */
    onSlideEnd() {
      this.sliding = false;
    },
  },
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

.border-img {
  border: solid 3px #aaa199;
  border-radius: 3px;
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
  .text-lg-left {
    text-align: left !important;
  }
}

/* Extra large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) {
}
</style>
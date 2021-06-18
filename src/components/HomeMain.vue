<template>
  <main id="impressie" class="container-fluid main-bg py-4">
    <b-row class="row py-5">
      <b-col class="col-lg-5 offset-lg-2 mb-lg-0 col-10 offset-1 mb-3">
        <h1>Impressie</h1>
        <p>
          Dit is een deployment test 3 Lorem ipsum dolor sit amet consectetur
          adipisicing elit. Ipsum atque corrupti repellendus, eveniet non earum
          illum nisi aliquid, nam eum explicabo. Iusto porro, minus doloremque
          doloribus earum laboriosam repudiandae labore?
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
    <hr class="col-lg-8 offset-lg-2 col-10 offset-1" id="ons_doel" />
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
          src="../assets/thee2-home.webp"
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
        <h1>Ons doel</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores
          amet voluptas doloremque iste facere consectetur dolor a laborum
          necessitatibus quia et, alias maiores quibusdam ea sint nostrum quidem
          vel minima.
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
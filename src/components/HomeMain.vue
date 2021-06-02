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
  </main>
</template>

<script>
export default {
  name: "HomeMain",
};

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
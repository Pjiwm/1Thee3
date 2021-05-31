<template>
  <main class="container-fluid main-bg py-5">
    <div class="row py-5">
      <div class="col-xl-5 offset-xl-2 col-12">
        <h1>Impressie</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum atque
          corrupti repellendus, eveniet non earum illum nisi aliquid, nam eum
          explicabo. Iusto porro, minus doloremque doloribus earum laboriosam
          repudiandae labore?
        </p>
      </div>
      <div class="col-xl-3 col-12">
        <img src="../../non-code/thee1-home.jpg" width="100%" />
      </div>
    </div>
    <hr class="solid col-xl-8 offset-xl-2 col-12" />
    <div class="row py-5">
      <div class="col-xl-3 offset-xl-2 col-12">
        <img src="../../non-code/thee2-home.jpg" width="100%" />
      </div>
      <div class="col-xl-5 col-12">
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
  margin-bottom: 5;
}

hr {
  background-color: #aaa199;
  opacity: 1;
  height: 2px !important;
  border: 0px;
}

p {
  font-size: 20px;
}
</style>
<template>
  <main class="container-fluid main-bg">
    <div class="offset-lg-2 offset-md-2 offset-sm-1">
      <div class="row">
        <card class="col-lg-2 col-md-2 col-sm-3">
          <img
            src="https://static-images.jumbo.com/product_images/090820180902_51014DS-242_360x360.png"
            alt=""
            style="width: 100%"
          />
          <p>thee smaak 1</p>
        </card>
        <card class="col-lg-2 col-md-2 col-sm-3">
          <img
            src="https://static-images.jumbo.com/product_images/090820180902_51014DS-242_360x360.png"
            alt=""
            style="width: 100%"
          />
          <p>thee smaak 2</p>
        </card>
        <card class="col-lg-2 col-md-2 col-sm-3">
          <img
            src="https://static-images.jumbo.com/product_images/090820180902_51014DS-242_360x360.png"
            alt=""
            style="width: 100%"
          />
          <p>thee smaak 3</p>
        </card>
        <div class="col-lg-4 col-md-4 col-sm-10">
          <h4><b>Theeplank optie 1</b></h4>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat
            explicabo unde sed ipsum reprehenderit vero quia perferendis
            blanditiis accusantium neque iure id corrupti aperiam rem tempora,
            quasi ipsa dolorum totam!
          </p>
          <button type="button" class="btn btn-primary block">kies deze</button>
        </div>
      </div>

      <hr class="col-lg-10 col-md-10 col-sm-10 mt-4 mb-4" />

      <div class="row pb-3">
        <card class="col-lg-2 col-md-2 col-sm-3">
          <img
            src="https://static-images.jumbo.com/product_images/090820180902_51014DS-242_360x360.png"
            alt=""
            style="width: 100%"
          />
          <p>thee smaak 3</p>
        </card>
        <card class="col-lg-2 col-md-2 col-sm-3">
          <img
            src="https://static-images.jumbo.com/product_images/090820180902_51014DS-242_360x360.png"
            alt=""
            style="width: 100%"
          />
          <p>thee smaak 4</p>
        </card>
        <card class="col-lg-2 col-md-2 col-sm-3">
          <img
            src="https://static-images.jumbo.com/product_images/090820180902_51014DS-242_360x360.png"
            alt=""
            style="width: 100%"
          />
          <p>thee smaak 5</p>
        </card>
        <div class="col-lg-4 col-md-4 col-sm-10">
          <h4><b>Theeplank optie 2</b></h4>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat
            explicabo unde sed ipsum reprehenderit vero quia perferendis
            blanditiis accusantium neque iure id corrupti aperiam rem tempora,
            quasi ipsa dolorum totam!
          </p>
          <button type="button" class="btn btn-primary block">kies deze</button>
        </div>
      </div>
    </div>
  </main>
</template>

<script>
export default {
  name: "QuizResult",
};
</script>

<style scoped>
main {
  color: #ffffff;
  background-color: #262524;
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
  /* border-bottom: solid 1px #000000; */
  border-radius: 20px;
}
/* 
.btn {
  border: 2px solid white;
  background-color: black;
  color: white;
  padding: 14px 28px;
}

.whitebtn:hover {
  border: 2px solid black;
  background-color: white;
  color: black;
}
*/
h1 {
  margin-bottom: 15px;
}

p {
  font-size: 20px;
  text-align: justify;
}

img {
  border: solid 3px #aaa199;
  border-radius: 4px;
}
</style>
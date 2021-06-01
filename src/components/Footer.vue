<template>
  <footer id="footer">
    <b-container class="bv-example-row pt-4">
      <b-row>
        <b-col cols="6">
          <p class="footer-text-left">Kvk nummer | 17240186</p>
          <p class="footer-text-left">Email | info@1t3</p></b-col
        >
        <b-col cols="6"
          ><p class="footer-text-right">
            <img class="d-block"  src="../../src/assets/1thee3logo.png" width="30px" />
            
            <img src="../../src/assets/twitter.png" width="15px" />
            <img src="../../src/assets/email.png" width="15px" /></p
        ></b-col>
        <b-col class="pt-1" cols="12"> <p class="footer-text-bottom m-0">© IT3.nl | 2021</p></b-col>
      </b-row>
    </b-container>
  </footer>
</template>

<script>
export default {
  name: "Footer",
};
</script>

<style scoped>
footer {
  text-align: left;
  bottom: 0;
  left: 0;
  padding: 3px;
  background-color: rgb(59, 59, 59);
  color: white;
}
.footer-text-left {
  font-size: 11px;
  text-align: left;
}
.footer-text-right {
  font-size: 11px;
  
  float: right;
}
.footer-text-bottom {
  font-size: 11px;
  text-align: center;

}
</style>

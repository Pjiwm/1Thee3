<template>
  <footer id="footer">
    <p class="footer-text-left">
      Kvk nummer | 17240186 <br />
      Email | info@1t3 <br />
    </p>
    <p class="footer-text-right">
      <img
        src="./../assets/1thee3logo.png"
        width="30px"
      />
      <br />
      <!-- <img src="../../non-code/twitter.png" width="15px" />
      <img src="../../non-code/email.png" width="15px" /> -->
    </p>
    <p class="footer-text-bottom">© IT3.nl | 2021</p>
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
  width: 100%;
  padding: 3px;
  height: 90px;
  background-color: rgb(59, 59, 59);
  color: white;
}
.footer-text-left {
  font-size: 11px;
  padding: 20px;
  float: left;
}
.footer-text-right {
  font-size: 11px;
  width: 10%;
  padding-right: 40px;
  margin-top: 20px;
  float: right;
}
.footer-text-bottom {
  font-size: 11px;
  padding-bottom: 20px;
  text-align:center;
  height: 50px;
}
</style>

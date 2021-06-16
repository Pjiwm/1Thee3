<template>
  <main id="FBembed">
    <div class="container-fluid p-4">
      <!-- <div class="row"> -->
        <!-- <div
          class="
            offset-lg-2 offset-sm-1
            col-lg-4 col-md-5 col-sm-12
            instagram
            pb-4
          "
        >
          <iframe
            class="instaFrame"
            src="https://www.instagram.com/p/CQEm7iqjzip/embed/"
            frameborder="0"
            scrolling="no"
            allowtransparency="true"
          ></iframe>
        </div> -->
        <!-- SnapWidget -->
        <!-- <script async src="https://snapwidget.com/js/snapwidget.js"></script> -->

        
                <!-- <div class="offset-sm-1 offset-md-0 col-lg-4 col-md-5 col-sm-10 facebook pb-4">
          <iframe
            class="facebookFrame"
            src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fkonami&tabs=timeline&width=300&height=550&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId"
            style="border: none; overflow: hidden"
            data-height="100%"
            data-width="100%"
            scrolling="no"
            frameborder="0"
            allowfullscreen="true"
            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
          ></iframe>
        </div> -->

        <div
          class="
            offset-sm-1 offset-md-3 offset-lg-4
            col-lg-4 col-md-6 col-sm-10
            instagram
          "
        >
          <iframe
            src="https://snapwidget.com/embed/943543"
            class="snapwidget-widget instaFrame"
            allowtransparency="true"
            frameborder="0"
            scrolling="no"
            style="border: none; overflow: hidden; width: 100%;"
          ></iframe>
 
 
      <!-- </div> -->
    </div>
  </main>
</template>

<script>
export default {
  name: "SocialMedia",
};
</script>

<style scoped>
.instaFrame {
  border: 0;
  min-height: 300;
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
}

.instagram {
  overflow: hidden;
  min-height: 500;
  padding-top: 50%;
  position: relative;
}
</style>



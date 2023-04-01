<?php

/*************** IMAGE SIZES ***************/
if ( function_exists( 'add_image_size' ) ) {
  add_image_size('slider_img', 1920, 966, true);
  add_image_size('team-member', 332, 498, true);
  add_image_size('qr-code', 150, 150, true);
  add_image_size('blog-thumb', 640, 430, true);
  
  // add_image_size('more_about_img', 989, 399, true);
}

?>
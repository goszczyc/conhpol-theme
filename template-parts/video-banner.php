<?php
$video = get_field('video');
?>
<section class="video-banner">
  <video src="<?= esc_url($video); ?>" autoplay muted loop playsinline>
    <source src="<?= esc_url($video); ?>" type="video/mp4">
  </video>
</section>
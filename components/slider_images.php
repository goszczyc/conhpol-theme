<?php
$component = isset($args['component']) ? $args['component'] : false;
if ($images = get_sub_field($component)) :
  $smaller_slider = get_sub_field('smaller_slider');
?>
  <section class="slider-container <?php if($smaller_slider) echo 'slider-container--secondary'; ?>">
    <button class="slider__arrow slider__arrow--prev"><img src="<?= get_template_directory_uri(); ?>/dist/images/arrow-prev.svg" alt=""></button>
    <div class="slider">
      <?php foreach ($images as $image) : ?>
        <div class="slider__image">
          <?= wp_get_attachment_image($image, 'full'); ?>
        </div>
      <?php endforeach; ?>
    </div>
    <button class="slider__arrow slider__arrow--next"><img src="<?= get_template_directory_uri(); ?>/dist/images/arrow-next.svg" alt=""></button>
  </section>
<?php endif; ?>
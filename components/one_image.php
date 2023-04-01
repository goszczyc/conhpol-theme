<?php $component = isset($args['component']) ? $args['component'] : false;
if ($image = get_sub_field($component)) : ?>

  <div class="one-image container">
    <div class="row justify-content-center">
      <?= wp_get_attachment_image($image, 'full'); ?>
    </div>
  </div>

<?php endif; ?>
<?php $component = isset($args['component']) ? $args['component'] : false;
if ($video = get_sub_field($component)) : ?>

  <div class="video container">
    <?= $video; ?>
  </div>

<?php endif; ?>
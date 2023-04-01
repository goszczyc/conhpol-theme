<?php $component = isset($args['component']) ? $args['component'] : false;
if ($images = get_sub_field($component)) :
  $i = 0; ?>

  <div class="images container">
    <div class="row justify-content-center">

      <?php foreach ($images as $image) :
        $col = ($i == 2) ? '12' : '6';
      ?>
        <div class="images__image col-10 col-xs-<?= $col; ?> col-lg-4">

          <?= wp_get_attachment_image($image, 'full'); ?>

        </div>
      <?php $i++; endforeach; ?>

    </div>
  </div>

<?php endif; ?>
<?php $component = isset($args['component']) ? $args['component'] : false;
if ($certyficates = get_sub_field($component)) :
  $title = $certyficates['title'];
  $logos = $certyficates['logos'];
?>

  <div class="certyficates container">
    <div class="row">
      <h2 class="certyficates__title col-12 col-sm-6 col-md-4 col-lg-3">
        <?= $title; ?>
      </h2>
      <div class="certyficates__logos col-12 col-sm-6 col-md-8 col-lg-9">

        <?php foreach ($logos as $logo) : ?>
          <div class="certyficates__logo">
            <?= wp_get_attachment_image($logo, 'full'); ?>
          </div>
        <?php endforeach; ?>

      </div>
    </div>
  </div>

<?php endif; ?>
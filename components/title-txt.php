<?php
$repeater_name = isset($args['component']) ? $args['component'] : false;
if (have_rows($repeater_name)) :
?>

  <section class="section-tt container">
    <div class="row">
      <?php while (have_rows($repeater_name)) :
        the_row();
        $title = get_sub_field('title');
        $text = get_sub_field('text');
      ?>
        <div class="section-tt__title col-12 col-xs-5 col-md-6">
          <?php if ($title) : ?>

            <?= $title; ?>

          <?php endif; ?>
        </div>

        <div class="section-tt__text col-12 col-xs-7 col-md-6">
          <?php if ($text) : ?>
            <?= $text; ?>
          <?php endif; ?>
        </div>

      <?php endwhile; ?>
    </div>
  </section>

<?php endif; ?>
<?php
$repeater_name = isset($args['component']) ? $args['component'] : false;
if (have_rows($repeater_name)) :
?>

  <section class="text-center container">
    <div class="row justify-content-center">
      <?php while (have_rows($repeater_name)) :
        the_row();
        $text = get_sub_field('text');
      ?>
        <div class="col-12">
          <?= $text; ?>
        </div>
      <?php endwhile; ?>
    </div>
  </section>

<?php endif; ?>
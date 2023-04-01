<?php
$component = isset($args['component']) ? $args['component'] : false;
if (have_rows($component)) :
?>

  <div class="container">
    <div class="technology">

      <?php while (have_rows($component)) : the_row(); ?>
        <?php
        $wide = get_sub_field('wide');
        $big = get_sub_field('big');
        $text = get_sub_field('text');
        $image = get_sub_field('image');

        $class_wide = ($wide) ? 'technology__box--wide' : '';
        $class_big = ($big) ? 'technology__box--big' : '';
        ?>

        <div class="technology__box <?= $class_big; ?> <?= $class_wide ?>">

          <?php if ($text) : ?>
            <div class="technology__box-text">
              <?= $text; ?>
              <?php
              if ($article = get_sub_field('article')) : ?>

                <a href="<?= esc_url(get_permalink($article)); ?>" class="materials__btn btn btn--primary">
                  <?php _e('More', 'conhpol'); ?>
                </a>

                <!-- <div class="materials__opportunities">
                  <?php
                  while (have_rows('technology_layouts')) {
                    the_row();
                    if (get_row_layout() == 'materials-title-text') {
                      $element = 'title-txt';
                    } elseif (get_row_layout() == 'materials-slider') {
                      $element = 'slider_images';
                    }
                    get_template_part('/components/' . $element, '', ['component' => $element]);
                  } ?>
                  <button class="materials__opportunities-exit"></button>
                </div> -->

              <?php endif; ?>

            </div>
          <?php endif; ?>

          <div class="technology__box-image">
            <?= wp_get_attachment_image($image, 'full'); ?>
          </div>

        </div>


      <?php endwhile; ?>

    </div>
  </div>

<?php endif; ?>
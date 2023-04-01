<?php $component = isset($args['component']) ? $args['component'] : false;
if (have_rows($component)) :  $i = 1; ?>
  <?php while (have_rows($component)) : the_row(); ?>
    <?php
    $revClass = 'materials--reverse';
    ?>

    <div class="materials grid-container <?php if ($i < 0) echo $revClass; ?>">

      <?php if ($image = get_sub_field('image')) : ?>

        <div class="materials__image">
          <?= wp_get_attachment_image($image, 'full'); ?>
        </div>

      <?php endif; ?>

      <?php if ($description = get_sub_field('description')) : ?>
        <div class="materials__text">
          <?= $description; ?>


          <?php
          if ($article = get_sub_field('article')) : ?>

            <a href="<?= esc_url(get_permalink($article)); ?>" class="materials__btn btn btn--primary">
              <?php _e('Discover opportunities', 'conhpol'); ?>
            </a>

            <!-- <div class="materials__opportunities">
              <?php
              while (have_rows('materials_layouts')) {
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

    </div>

  <?php $i = $i * (-1);
  endwhile; ?>

<?php endif; ?>
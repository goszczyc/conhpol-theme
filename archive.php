<?php
get_header('sub');
?>

<main class="main">

  <section class="blog container container--full-hd">
    <div class="row">

      <?php if (have_posts()) : ?>
        <?php while (have_posts()) :
          the_post();
          $title_secondary = get_field('title_secondary');
          $location = get_field('location');
          $custom_excerpt = get_field('short_description');
          $thumbnail = get_the_post_thumbnail('', 'blog-thumb');
          $date = get_the_date('d.m.Y');
        ?>

          <a href="<?= esc_url(get_permalink()); ?>" class="col-12 col-xs-6 col-md-4 col-lg-3 blog__card">
            <div class="blog__card-top">

              <?php if ($thumbnail) : ?>
                <div class="blog__card-thumbnail">
                  <?= $thumbnail; ?>
                </div>
              <?php endif; ?>

              <div class="blog__card-title">

                <?php if (!$title_secondary) : ?>

                  <h2><?= get_the_title(); ?></h2>

                <?php else : ?>
                  <?= $title_secondary; ?>
                <?php endif; ?>

              </div>
            </div>
            <div class="blog__card-content">

              <?php if (!$location) : ?>
                <h3 class="blog__card-date">
                  <?= $date; ?>
                </h3>
              <?php else : ?>
                <h3> <?= $location; ?></h3>
              <?php endif; ?>

              <?php if ($custom_excerpt) : ?>
                <?= $custom_excerpt; ?>
              <?php endif; ?>

            </div>
            <p class="blog__card-read-more"><?php _e('read more', 'conhpol'); ?>...</p>
          </a>
        <?php endwhile; ?>
      <?php endif; ?>

    </div>
  </section>
</main>

<?php get_footer(); ?>
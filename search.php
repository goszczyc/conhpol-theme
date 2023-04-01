<?php

get_header('sub');

// the query
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$s = get_search_query();
$args = array(
  's' => $s,
  'post_type' => array('post', 'shops'),
  'paged' => false,
  'posts_per_page' => -1
);
$search = new WP_Query($args); ?>
<main class="main">
  <section class="search-result container">

    <?php if ($search->have_posts()) : ?>

      <h2 class="search-result__response">
        <?php _e('Found posts and shops:', 'conhpol'); ?>
      </h2>

      <ul class="search-result__list">

        <?php while ($search->have_posts()) : $search->the_post(); ?>



          <li class="search-result__list-item">
            <?php if (get_post_type() == 'shops') : ?>
              <?= get_the_title(); ?> | <a href="<?= esc_url(get_field('g_map_link')); ?>"><?php _e('See in Google Maps', 'conhpol'); ?></a>
            <?php else : ?>
              <a href="<?= esc_url(get_permalink()) ?>" class="search-result__list-link">
                <?= get_the_title(); ?>
              </a>
            <?php endif; ?>
          </li>

        <?php endwhile; ?>

      </ul>

    <?php else : ?>

      <h2 class="search-result__response">
        <?php _e('Sorry, nothing found', 'conhpol'); ?>
      </h2>

    <?php endif; ?>

  </section>

</main>
<?php get_footer(); ?>
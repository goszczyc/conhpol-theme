<?php

/* Template Name: Cites */

get_header('sub');
?>
<section class="cites" style="background-image: url('<?= get_field('background'); ?>');">

  <div class="cites__content">
    <div class="cites__headings">
      <?php if ($heading = get_field('heading')) : ?>
        <h1 class="cites__heading">
          <?= $heading; ?>
        </h1>
      <?php endif; ?>

      <?php if ($subheading = get_field('subheading')) : ?>
        <p class="cites__subheading">
          <?= $subheading; ?>
        </p>
      <?php endif; ?>
    </div>



    <form class="cites__form">
      <div class="cites__form-group">
        <input id="input" type="text" class="cites__form-input cites__form-input--main">
        <button id="submit-cites" type="submit" class="cites__form-input cites__form-input--submit"><?php _e('search', 'conhpol'); ?></button>
      </div>
    </form>

    <div class="cites__message-container"></div>
  </div>


</section>

<?php get_footer(); ?>
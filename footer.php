<footer id="contact" class="footer">
  <div class="container">
    <div class="footer__top row justify-content-center">

      <?php if (have_rows('social_media', 'options')) : ?>

        <div class="col-12 col-sm-12 col-md-3 col-lg-2-5 footer__social footer__text">

          <?php if ($social_heading = get_field('social_heading', 'options')) : ?>
            <p style="text-transform:uppercase;"><?= $social_heading; ?></p>
          <?php endif; ?>

          <div class="footer__social-links">
            <?php while (have_rows('social_media', 'options')) : the_row(); ?>

              <?php if (($icon = get_sub_field('icon')) && ($link = get_sub_field('link'))) : ?>
                <a href="<?= esc_url($link); ?>" class="footer__social-link"><?= wp_get_attachment_image($icon, 'full'); ?></a>
              <?php endif; ?>

            <?php endwhile; ?>
          </div>
        </div>

      <?php endif; ?>


      <?php wp_nav_menu($args = array(
        'menu' => 8,
        'container' => false,
        'menu_class' => 'col-6 col-xs-4 col-md-3 col-xl-2-5 footer__menu footer__text'
      )); ?>

      <div class="col-6 col-xs-4 col-md-3 col-lg-2-5 footer__privacy-menu footer__text">

        <?php if ($policy_heading = get_field('policy_heading', 'options')) : ?>
          <p style="text-transform:uppercase;"><?= $policy_heading; ?></p>
        <?php endif; ?>

        <?php if ($privacy_link = get_field('privacy_link', 'options')) : ?>
          <a href="<?= esc_url($privacy_link['url']); ?>" class="footer__link">
            <?= $privacy_link['title']; ?>
          </a>
        <?php endif; ?>

        <?php if ($cookies_link = get_field('cookies_link', 'options')) : ?>
          <a href="<?= esc_url($cookies_link['url']); ?>" class="footer__link">
            <?= $cookies_link['title'] ?>
          </a>
        <?php endif; ?>
      </div>

      <?php if ($contact_info = get_field('contact_info', 'options')) : ?>
        <div class="col-12 col-xs-4 col-sm-4 col-md-3 col-xl-2-5 footer__contact footer__text">
          <p style="text-transform:uppercase;"><?= $contact_info['heading']; ?></p>
          <div class="footer__contact-address">
            <?= $contact_info['address']; ?>
          </div>
          <a href="tel: <?= $contact_info['phone']; ?>" class="footer__link"><?= $contact_info['phone']; ?></a>
          <a href="mailto: <?= $contact_info['email']; ?>" class="footer__link"><?= $contact_info['email']; ?></a>
        </div>
      <?php endif; ?>



    </div>

    <?php if ($footer_heading = get_field('footer_main_heading', 'options')) : ?>
      <div class="footer__heading row justify-content-center alin-items-center">
        <?= $footer_heading; ?>
      </div>
    <?php endif; ?>

  </div>
  <div class="footer__bottom">
    <div class="container">
      <?php if ($newsletter_text = get_field('newsletter_text', 'options')) : ?>
        <div class="footer__apply">
          <p><?= $newsletter_text; ?></p>
        </div>
      <?php endif; ?>

      <div class="footer__newsletter">
        <?= do_shortcode('[contact-form-7 id="392" title="Newsletter"]'); ?>
      </div>
    </div>
  </div>
  <div class="container footer__copyrights">
    Copyright &copy; <?= date('Y'); ?> Conhpol. All rights reserved.
  </div>

</footer>

<?php wp_footer(); ?>

<!-- Cookies -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/cookies/divante.cookies.min.js">
</script>
<script>
  window.jQuery.cookie || document.write(
    '<script src="<?php echo get_template_directory_uri(); ?>/cookies/jquery.cookie.min.js"><\/script>')
</script>
<script>
  jQuery(function($) {
    $.divanteCookies.render({
      privacyPolicy: true,
    });
  });
</script>

</body>

</html>
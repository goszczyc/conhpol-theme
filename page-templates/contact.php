<?php
/* Template Name: Kontakt */
get_header('sub');

?>
<main class="main">
  <section class="contact container">
    <?php if ($contact_heading = get_field('contact_heading')) : ?>
      <div class="row">
        <h1 class="contact__heading col-12">
          <?= $contact_heading; ?>
        </h1>
      </div>
    <?php endif; ?>
    <div class="row justify-content-center">
      <div class="contact__form col-12 col-xs-10 col-sm-9 col-md-8 col-lg-6">
        <?= do_shortcode('[contact-form-7 id="2460" title="Formularz kontaktowy"]'); ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
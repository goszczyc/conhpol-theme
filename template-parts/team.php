<section class="team container">
  <?php if ($team_heading = get_field('team_heading')) : ?>
    <h1 class="team__heading"><?= $team_heading; ?></h1>
  <?php endif; ?>
  <div class="row no-gutters">

    <?php if ($team_founder = get_field('team_founder')) : ?>
      <div class="team__member team__member--founder col-12 col-xs-4 col-sm-4 col-md-3 col-lg-2-4">
        <?= wp_get_attachment_image($team_founder['image'], 'team-member', '', ['class' => 'team__member-photo']); ?>
        <div class="team__member-name"><?= $team_founder['name']; ?></div>
        <div class="team__member-position"><?= $team_founder['position']; ?></div>
      </div>
    <?php endif; ?>

    <?php if ($team_subheading = get_field('team_subheading')) : ?>
      <div class="team__subheading col-12 col-xs-8 offset-sm-2 col-sm-6 offset-md-3 offset-lg-3-6">
        <?= $team_subheading; ?>
      </div>
    <?php endif; ?>

  </div>

  <?php if (have_rows('team')) :
    while (have_rows('team')) : the_row(); ?>

      <?php if ($team_department = get_sub_field('team_department')) : ?>
        <h2 class="team__heading"><?= $team_department; ?></h2>
      <?php endif; ?>

      <?php if ('team_members') : ?>
        <div class="row no-gutters">

          <?php while (have_rows('team_members')) : the_row(); ?>
            <div class="team__member col-12 col-xs-6 col-sm-4 col-md-3 col-lg-2-4">

              <?php if ($member_photo = get_sub_field('member_photo')) : ?>
                <div class="team__member-photo-container">

                  <?= wp_get_attachment_image($member_photo, 'team-member', '', ['class' => 'team__member-photo']); ?>

                  <div class="team__member-overlay">
                    <?php if ($member_qr = get_sub_field('member_qr')) : ?>

                      <?= wp_get_attachment_image($member_qr, 'qr-code', '', ['class' => 'team__member-qr']); ?>
                    <?php endif; ?>

                    <div class="team__member-contact">

                      <div class="team__member-contact-links">
                        <?php if (have_rows('member_languages')) :  $i = 0; ?>

                          <div class="team__member-contact-lang">

                            <?php while (have_rows('member_languages')) : the_row(); ?>
                              <?php if ($lang = get_sub_field('lang')) : ?>
                                <?php if ($i > 0) echo ' | '; ?><?= $lang; ?>
                              <?php endif; ?>
                            <?php $i++;
                            endwhile; ?>

                          </div>

                        <?php endif; ?>

                        <?php if ($member_phone = get_sub_field('member_phone')) : ?>
                          <a href="tel: <?= $member_phone; ?>" class="team__member-contact-link">mobile <?= $member_phone; ?></a>
                        <?php endif; ?>

                        <?php if ($member_email = get_sub_field('member_email')) : ?>
                          <a href="mailto: <?= $member_email; ?>" class="team__member-contact-link"><?= $member_email; ?></a>
                        <?php endif; ?>
                      </div>

                      <?php if ($member_linkedin = get_sub_field('member_linkedin')) : ?>
                        <a href="<?= esc_url($member_linkedin); ?>" class="team__member-contact-linked"><img src="<?= get_template_directory_uri(); ?>/dist/images/linkedin.svg" alt="linked-in-logo" class="team__member-contact-linked-logo"></a>
                      <?php endif; ?>

                    </div>
                  </div>

                </div>
              <?php endif; ?>

              <div class="container">
                <?php if ($member_name = get_sub_field('member_name')) : ?>
                  <div class="team__member-name"><?= $member_name; ?></div>
                <?php endif; ?>

                <?php if ($member_position = get_sub_field('member_position')) : ?>
                  <div class="team__member-position"><?= $member_position; ?></div>
                <?php endif; ?>

                <?php if ($member_speciality = get_sub_field('member_speciality')) : ?>
                  <div class="team__member-speciality"><?= $member_speciality; ?></div>
                <?php endif; ?>
              </div>

            </div>
          <?php endwhile; ?>

        </div>
      <?php endif; ?>

  <?php endwhile;
  endif; ?>

  <?php if ($team_text = get_field('team_text')) : ?>
    <div class="team__text">
      <?= $team_text; ?>
    </div>
  <?php endif; ?>
  
</section>
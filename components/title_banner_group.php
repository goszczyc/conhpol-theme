<?php
$component = isset($args['component']) ? $args['component'] : false;
if ($title_banner = get_sub_field($component)) :
  $background = $title_banner['background'];
  $title = $title_banner['title'];
  $heading = ($title_banner['main']) ? 'h1' : 'h2';
  $dark_text = $title_banner['dark_text'];
  $dark_class = 'title-banner__heading--dark';
  $dark_class = 'title-banner__heading--dark';
  $add_id = $title_banner['add_id'];
  $add_scroll = $title_banner['add_scroll'];
?>
  <div id="<?= $add_id; ?>" class="title-banner <?php if ($add_scroll) echo 'title-banner--scroll'; ?> <?php if($title) echo 'title-banner--secondary' ?>" <?php if ($background) : ?>style="background-image: url('<?= esc_url($background); ?>');" <?php endif; ?>>

    <<?= $heading; ?> class="title-banner__heading <?php if ($dark_text) echo $dark_class; ?>">
      <?= $title; ?>
    </<?= $heading; ?>>

    <?php if ($add_scroll) : ?>
      <button class="title-banner__scroll">
        <?php _e('Scroll down', 'conhpol'); ?> <img src="<?= get_template_directory_uri(); ?>/dist/images/scroll.svg" alt="">
      </button>
    <?php endif; ?>

  </div>

<?php endif; ?>
<form action="<?= get_home_url(); ?>/" method="get" class="header__searchbar">
  <img src="<?= get_template_directory_uri(); ?>/dist/images/m-glass.svg" alt="search" class="header__searchbar-icon header-icon">
  <input class="header__searchbar-input" type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="<?= translate('Search', 'conhpol'); ?>" />
</form>
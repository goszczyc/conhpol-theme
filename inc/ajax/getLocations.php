<?php
function getLocations()
{

  $geoTags = [];

  $regions = json_decode(stripslashes($_POST['regions']));
  $filters = json_decode(stripslashes($_POST['filters']));

  $regions_tax = '';
  $filters_tax = '';

  $i = 1;
  $taxQuery[0] = array(
    'relation' => 'AND'
  );

  if ($filters[0] != 'all') {
    foreach ($filters as $filter) {
      $taxQuery[$i] = array(
        'taxonomy' => 'filters',
        'field' => 'name',
        'terms' => $filter
      );
      $i++;
    }
  }

  $args = array(
    'post_type' => 'shops',
    'numberposts' => -1,
    'tax_query' => $taxQuery
  );

  $shops = get_posts($args);

  $shops = new WP_Query($args);

  if ($shops->have_posts()) {
    while ($shops->have_posts()) {
      $shops->the_post();
      $name = get_the_title();
      $thumbnail = get_the_post_thumbnail_url();
      $type = get_field('type');
      $info = get_field('info');
      $models = get_the_terms('' ,'filters');
      $icon = get_field('icon');
      $gLink = get_field('g_map_link');

      $data = array(
        'address' => $info['address'],
        'phone' => '<a class="map__search-shop-text" href="tel: ' . $info["phone"] . '">' . translate('phone', 'conhpol') . ': ' . $info["phone"] . '</a>',
        'email' => '<a class="map__search-shop-text" href="mailto: ' . $info["email"] . '">' . translate('e-mail', 'conhpol') . ': ' . $info["email"] . '</a>',
        'openHours' => $info['open-hours'],
      );
      $avModels = translate('available only: ', 'conhpol') . join(', ', wp_list_pluck($models, 'name'));
      $coordinates = array(
        'longitude' => get_field('longitude'),
        'lattitude' => get_field('lattitude')
      );

      $gMapLink = '<a class="map__search-shop-text map__popup-text--gm" href="' . $gLink . '">' . translate('See in Google Maps ', 'conhpol') . '</a>';

      $addressString = strtolower(strip_tags($info['address']));
      $addressArray = explode(' ', preg_replace('~[\r\n,]+~', '', $addressString));

      if ($regions[0] != 'all') {
        if (array_intersect($regions, $addressArray) === $regions) {
          $tag = array(
            'name' => $name,
            'type' => $type,
            'thumbnail' => $thumbnail,
            'coordinates' => $coordinates,
            'data' => $data,
            'avModels' => $avModels,
            'icon' => $icon,
            'gMapLink' => $gMapLink
          );

          array_push($geoTags, $tag);
        }
      } else {
        $tag = array(
          'name' => $name,
          'type' => $type,
          'thumbnail' => $thumbnail,
          'coordinates' => $coordinates,
          'data' => $data,
          'avModels' => $avModels,
          'icon' => $icon,
          'gMapLink' => $gMapLink
        );

        array_push($geoTags, $tag);
      }
    }
  }

  echo json_encode($geoTags);

  wp_die();
}



add_action('wp_ajax_getLocations', 'getLocations');
add_action('wp_ajax_nopriv_getLocations', 'getLocations');

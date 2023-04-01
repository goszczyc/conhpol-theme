<?php
$parent_tax_id = 9;
$filters = get_terms($args = array(
  'taxonomy' => 'filters',
  'hide_empty' => false,
  'parent' => 9
)); ?>



<section class="map container container--full-hd">

  <div class="row">
    <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3 map__sidebar">
      <div class="map__search">
        <button class="map__search-show-btn"></button>
        <form class="map__search-form">
          <label for="region" class="map__search-label"><?php _e('country/region or city', 'conhpol'); ?></label>
          <input id="region" name="region" type="text" class="map__search-input">
          <input type="submit" value="<?php _e('Search', 'conhpol'); ?>" class="map__search-submit">
          <button id="filters-btn" class="map__search-btn"><?php _e('filter by', 'conhpol'); ?> <span class="map__search-btn-arrow"></span></button>
          <fieldset class="map__search-filters">

            <?php foreach ($filters as $filter) :
              $option = $filter->name; ?>

              <div class="map__search-filter-group col-6">
                <input class="map__search-filter-input" type="checkbox" name="filter" id="<?= $option; ?>" value="<?= $option; ?>">
                <label class="map__search-filter-label" for="<?= $option; ?>"><?= $option; ?></label>
              </div>

            <?php endforeach; ?>

          </fieldset>
        </form>

        <div class="map__search-results">
          <h3 class="map__search-results-heading"><span id="num-of-results"></span><?php _e(' results found', 'conhpol'); ?></h3>
          <div class="map__search-shops">

          </div>
        </div>
      </div>
    </div>
    <div id="map-container" class="col-12 col-sm-6 col-md-7 col-lg-8 col-xl-9 map__container">
      <div id="map" style="height: 100%;"></div>
    </div>
  </div>

</section>
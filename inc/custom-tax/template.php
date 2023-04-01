<?php 

/****************** CUSTOM TAXONOMY ******************/

function wpdocs_create_filter_taxonomies() {
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
      'name'              => _x( 'Filtry Sklepów', 'taxonomy general name', 'textdomain' ),
      'singular_name'     => _x( 'Filtr Sklepu', 'taxonomy singular name', 'textdomain' ),
      'search_items'      => __( 'Szukaj Filtrów', 'textdomain' ),
      'all_items'         => __( 'Wszystkie Filtry Sklepów', 'textdomain' ),
      'parent_item'       => __( 'Rodzic Filtru', 'textdomain' ),
      'parent_item_colon' => __( 'Rodzice Filtru', 'textdomain' ),
      'edit_item'         => __( 'Edytuj Filtry Sklepów', 'textdomain' ),
      'update_item'       => __( 'Zaaktualizuj Filtr Sklepu', 'textdomain' ),
      'add_new_item'      => __( 'Dodaj nowy Filtr Sklepu', 'textdomain' ),
      'new_item_name'     => __( 'Dodaj nową nazwę Filtra ', 'textdomain' ),
      'menu_name'         => __( 'Filtry Sklepów', 'textdomain' ),
  );

  $args = array(
      'hierarchical'      => true,
      'labels'            => $labels,
      'show_ui'           => true,
      'show_admin_column' => true,
      'query_var'         => true,
      'rewrite'           => array( 'slug' => 'filter' ),
      'show_in_rest' => true
  );

  register_taxonomy( 'filters', 'shops' , $args );
}

add_action( 'init', 'wpdocs_create_filter_taxonomies', 0 );

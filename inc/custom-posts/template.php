<?php
function register_cites_post_type(){

  $labels = array(
    'name'                  => _x( 'Certyfikaty Cites', 'Post type general name', 'textdomain' ),
    'singular_name'         => _x( 'Certyfikat Cites', 'Post type singular name', 'textdomain' ),
    'menu_name'             => _x( 'Certyfikaty Cites', 'Admin Menu text', 'textdomain' ),
    'name_admin_bar'        => _x( 'Certyfikaty Cites', 'Add New on Toolbar', 'textdomain' ),
    'add_new_item'          => __( 'Dodaj nowy Certyfikat Cites', 'textdomain' ),
    'new_item'              => __( 'Nowy Certyfikat Cites', 'textdomain' ),
    'edit_item'             => __( 'Edytuj Certyfikat Cites', 'textdomain' ),
    'view_item'             => __( 'Zobacz Certyfikat Cites', 'textdomain' ),
    'all_items'             => __( 'Wszystkie Certyfikaty Cites', 'textdomain' ),
    'search_items'          => __( 'Szukaj Certyfikatów Cites', 'textdomain' ),
    'parent_item_colon'     => __( 'Rodzic Certyfikatów Cites:', 'textdomain' ),
    'not_found'             => __( 'Certyfikaty Cites nie znalezione.', 'textdomain' ),
    'not_found_in_trash'    => __( 'Nie ma żadnych Certyfikatów Cites w koszu.', 'textdomain' ),
    'featured_image'        => _x( 'Okładka Certyfikatów Cites', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
    'set_featured_image'    => _x( 'Ustaw okładkę Certyfikatów Cites', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
    'remove_featured_image' => _x( 'Usuń okładkę Certyfikatów Cites', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
    'archives'              => _x( 'Archiwum Certyfikatów Cites', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
    'insert_into_item'      => _x( 'Wprowadź do Certyfikatów Cites', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
    'uploaded_to_this_item' => _x( 'Uaktualnij Certyfikat Cites', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
    'filter_items_list'     => _x( 'Filtruj listę Certyfikatów Cites', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
    'items_list_navigation' => _x( 'Menu Listy Certyfikatów Cites', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
    'items_list'            => _x( 'Lista Certyfikatów Cites', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'cites' ),
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => null,
    'show_in_menu'        => TRUE,
    'show_in_nav_menus'   => TRUE,
    'show_in_rest' => true,
    'supports'           => array( 'title', 'editor', 'author', 'thumbnail','excerpt'),
    'menu_icon'          => 'dashicons-clipboard',
  );

  register_post_type( 'cites', $args );
}

add_action('init', 'register_cites_post_type');

?>


<?php
function register_shops_post_type(){

  $labels = array(
    'name'                  => _x( 'Sklepy', 'Post type general name', 'textdomain' ),
    'singular_name'         => _x( 'Sklep', 'Post type singular name', 'textdomain' ),
    'menu_name'             => _x( 'Sklepy', 'Admin Menu text', 'textdomain' ),
    'name_admin_bar'        => _x( 'Sklepy', 'Add New on Toolbar', 'textdomain' ),
    'add_new_item'          => __( 'Dodaj nowy Sklep', 'textdomain' ),
    'new_item'              => __( 'Nowy Sklep', 'textdomain' ),
    'edit_item'             => __( 'Edytuj Sklep', 'textdomain' ),
    'view_item'             => __( 'Zobacz Sklep', 'textdomain' ),
    'all_items'             => __( 'Wszystkie Sklepy', 'textdomain' ),
    'search_items'          => __( 'Szukaj Sklepu', 'textdomain' ),
    'parent_item_colon'     => __( 'Rodzic Sklepu:', 'textdomain' ),
    'not_found'             => __( 'Sklepy nie znalezione.', 'textdomain' ),
    'not_found_in_trash'    => __( 'Nie ma żadnych Sklepów w koszu.', 'textdomain' ),
    'featured_image'        => _x( 'Okładka Sklepów', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
    'set_featured_image'    => _x( 'Ustaw okładkę Sklepów', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
    'remove_featured_image' => _x( 'Usuń okładkę Sklepów', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
    'archives'              => _x( 'Archiwum Sklepów', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
    'insert_into_item'      => _x( 'Wprowadź do Sklepu', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
    'uploaded_to_this_item' => _x( 'Uaktualnij Sklep', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
    'filter_items_list'     => _x( 'Filtruj listę Sklepów', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
    'items_list_navigation' => _x( 'Menu Listy Sklepów', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
    'items_list'            => _x( 'Lista Sklepów', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'shops' ),
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => null,
    'show_in_menu'        => TRUE,
    'show_in_nav_menus'   => TRUE,
    'show_in_rest' => true,
    'supports'           => array( 'title', 'editor', 'author', 'thumbnail','excerpt'),
    'menu_icon'          => 'dashicons-location',
  );

  register_post_type( 'shops', $args );
}

add_action('init', 'register_shops_post_type');

?>
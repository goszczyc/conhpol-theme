<?php

function export_variables_to_js()
{
  wp_localize_script('main', 'admin_url', array(
    'ajaxurl' => admin_url() . 'admin-ajax.php',
    'templateDirectory' => get_template_directory_uri()
  ));
  wp_enqueue_script('main');
}
add_action('wp_enqueue_scripts', 'export_variables_to_js');



?>
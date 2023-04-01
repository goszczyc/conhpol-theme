<?php
$component_name = '';

if (have_rows('layouts')) {
  while (have_rows('layouts')) {
    the_row();
    if (get_row_layout() == 'title-text') {
      $component_name = 'title-txt';
    } elseif(get_row_layout() == 'slider') {
      $component_name = 'slider_images';
    } elseif(get_row_layout() == 'title_banner') {
      $component_name = 'title_banner_group';
    } elseif(get_row_layout() == 'video_layout') {
      $component_name = 'video';
    } elseif(get_row_layout() == 'photos') {
      $component_name = 'photos';
    } elseif(get_row_layout() == 'certyficates') {
      $component_name = 'certyficates';
    } elseif(get_row_layout() == 'materials') {
      $component_name = 'materials';
    } elseif(get_row_layout() == 'technology') {
      $component_name = 'technology';
    } elseif(get_row_layout() == 'collections') {
      $component_name = 'collections';
    } elseif(get_row_layout() == 'one_image') {
      $component_name = 'one_image';
    } elseif(get_row_layout() == 'text_center') {
      $component_name = 'text-center';
    } 
    
    get_template_part('/components/' . $component_name, '', ['component' => $component_name]);
  }
} ?>
<?php
// ==================================================================
// Post type - Slider
// ==================================================================
function post_type_slider() {
register_post_type( 'sliders', 
  array(
  'label'               => __( 'Slider','ace' ),
  'singular'            => __( 'Slider','ace' ),
  'description'         => __( 'Slider content','ace' ),
  'public'              => true,
  'capability_type'     => 'page',
  'exclude_from_search' => true,
  'hierarchical'        => true,
  'query_var'           => true,
  'menu_icon'           => 'dashicons-slides',
  'menu_position'       => 5,
  'supports'            => array(
    'title',
    'thumbnail',
    'page-attributes',
  ),
  'filter_items_list'     => __( 'Filter slider list', 'ace' ),
  'items_list_navigation' => __( 'Slider list navigation', 'ace' ),
  'items_list'            => __( 'Slider list', 'ace' ),
  'rewrite'             => true,
  ));
}

add_action( 'init', 'post_type_slider' );
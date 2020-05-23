<?php

// Add CSS File

function mfc_resources() {
  wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'mfc_resources');

// Get Top Ancestor

function get_top_ancestor_id() {
  global $post;
  if ($post->post_parent) {
    $ancestors = array_reverse(get_post_ancestors($post->ID));
    return $ancestors[0];
  }
  return $post->ID;
}

// Check if Page Has Children

 function has_children() {
  // make the post var accesiible within this function
  global $post;
  // get_pages (WP)
  // get any pages that are a child of the current page
  $pages = get_pages('child_of=' . $post->ID);
  return count($pages);
}

// Customize Excerpt Word Count Length

function custom_excerpt_length() {
  return 25;
}

add_filter('excerpt_length', 'custom_excerpt_length');

// Theme Setup

function mfc_setup() {
  
  // Navigation Menus
  register_nav_menus(array(
    'header' => __('Header Menu'),
    'footer' => __('Footer Menu')
  ));

  // Add Featured Image Support
  add_theme_support('post-thumbnails');
  // (name, px width, px height, whether or not to use soft or hard cropping -> hard crop is true)
  add_image_size('small-thumbnail', 180, 120, true);
  add_image_size('banner-image', 920, 210, true);
}

add_action('after_setup_theme', 'mfc_setup');
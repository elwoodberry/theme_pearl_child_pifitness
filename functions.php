<?php

// suffix: fitness_

// Plugin API/Action Reference/wp enqueue scripts
// https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
function fitness_enqueue_styles() {

    $parent_style = 'twentyseventeen-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );

}

add_action( 'wp_enqueue_scripts', 'fitness_enqueue_styles' );


// -------------------------------
// CUSTOM POST TYPE: RECIPES recipes
// -------------------------------
function recipe_custom_post_type() {

  // VARIABLE: LABELS = ARRAY
  $recipe_labels = array(
    'name' => 'Recipes',
    'singular_name' => 'Recipe',
    'add_new' => 'Add Recipe',
    'all_items' => 'All Recipes',
    'add_new_item' => 'Add Recipe',
    'edit_item' => 'Edit Recipe',
    'new_item' => 'New Recipe',
    'view_item' => 'View Recipe',
    'search_item' => 'Search Recipes',
    'not_found' => 'No Recipes Found',
    'not_found_in_trash' => 'No Recipes Found In Trash',
    'parent_item_colon' => 'Primary Recipe',
    'menu_name' => 'Recipes'
  );

  // VARIABLE: ARGS = ARRAY
  $recipe_args = array(
    'labels' => $recipe_labels,
    'public' => true,
    'has_archive' => true,
    'publicly_queryable' => true,

    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_rest' => true, // Add a route in the 'wp/v2' namespace.

    'query_var' => true,
    'rewrite' => array( 'slug', 'Recipe' ),
    'capability_type' => 'post',
    'hierarchical' => false,
    'supports' => array(
      'title',
      'author',
      'editor',
      'excerpt',
      'thumbnail',
      'revisions',
      'commonts'
    ),
    'taxonomies' => array('category', 'post_tag'),
    'menu_position' => 5,
    'exclude_from_search' => false
  );

  // HOOK
  register_post_type( 'Recipes', $recipe_args );

  // FLUSH REWRITE.
  flush_rewrite_rules();

}

// ACTION.
add_action( 'init', 'recipe_custom_post_type' );





// -------------------------------
// CUSTOM POST TYPE: Challenge
// -------------------------------
function Challenge_custom_post_type() {

  // VARIABLE: LABELS = ARRAY
  $challenge_labels = array(
    'name' => 'Challenges',
    'singular_name' => 'Challenge',
    'add_new' => 'Add Challenge',
    'all_items' => 'All Challenges',
    'add_new_item' => 'Add Challenge',
    'edit_item' => 'Edit Challenge',
    'new_item' => 'New Challenge',
    'view_item' => 'View Challenge',
    'search_item' => 'Search Challenges',
    'not_found' => 'No Challenges Found',
    'not_found_in_trash' => 'No Challenges Found In Trash',
    'parent_item_colon' => 'Primary Challenge',
    'menu_name' => 'Challenges'
  );

  // VARIABLE: ARGS = ARRAY
  $challenge_args = array(
    'labels' => $challenge_labels,
    'public' => true,
    'has_archive' => true,
    'publicly_queryable' => true,

    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_rest' => true, // Add a route in the 'wp/v2' namespace.

    'query_var' => true,
    'rewrite' => array( 'slug', 'Challenge' ),
    'capability_type' => 'post',
    'hierarchical' => false,
    'supports' => array(
      'title',
      'author',
      'editor',
      'excerpt',
      'thumbnail',
      'revisions',
      'commonts'
    ),
    'taxonomies' => array('category', 'post_tag'),
    'menu_position' => 5,
    'exclude_from_search' => false
  );

  // HOOK
  register_post_type( 'Challenges', $challenge_args );

  // FLUSH REWRITE.
  flush_rewrite_rules();

}

// ACTION.
add_action( 'init', 'challenge_custom_post_type' );

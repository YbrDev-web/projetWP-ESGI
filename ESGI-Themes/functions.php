<?php
function parcourstech_enqueue_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'parcourstech_enqueue_styles');

function theme_asset($path) {
    return get_template_directory_uri() . '/images/' . ltrim($path, '/');
}

function esgi_enqueue_styles() {
    wp_enqueue_style(
      'esgi-style', // nom interne du style
      get_stylesheet_uri(), // charge style.css à la racine du thème
      array(), // dépendances
      '1.0', // version
      'all' // media
    );
  }
  add_action('wp_enqueue_scripts', 'esgi_enqueue_styles');
  

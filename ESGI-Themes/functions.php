<?php
function parcourstech_enqueue_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'parcourstech_enqueue_styles');

function theme_asset($path) {
    return get_template_directory_uri() . '/images/' . ltrim($path, '/');
}

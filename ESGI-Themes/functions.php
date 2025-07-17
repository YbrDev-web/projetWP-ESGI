<?php
// Chargement du style principal du thème
function esgi_enqueue_styles() {
    wp_enqueue_style(
        'esgi-style', // Nom interne du style
        get_stylesheet_uri(), // Chemin vers style.css à la racine du thème
        array(), // Dépendances
        '1.0', // Version
        'all' // Media
    );
}
add_action('wp_enqueue_scripts', 'esgi_enqueue_styles');

// Fonction utilitaire pour accéder aux images du thème
function theme_asset($path) {
    return get_template_directory_uri() . '/images/' . ltrim($path, '/');
}

// Récupère l'URL d'une page par son titre (version à jour avec WP_Query)
function get_page_url_by_title($title) {
    $query = new WP_Query(array(
        'post_type' => 'page',
        'title' => $title,
        'posts_per_page' => 1
    ));

    if ($query->have_posts()) {
        $query->the_post();
        $url = get_permalink();
        wp_reset_postdata();
        return $url;
    }

    return '#'; // Lien par défaut si la page n'existe pas
}

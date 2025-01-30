<?php

/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @link https://github.com/timber/starter-theme
 */

namespace App;

use Timber\Timber;

// Load Composer dependencies.
require_once __DIR__ . '/vendor/autoload.php';

Timber::init();

new StarterSite();

// Ajout d'une route du CSS minifier
function theme_enqueue_styles() {
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/main.min.css');
}

// Ajouter le namespace à la fonction pour WordPress
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\theme_enqueue_styles');


// Autoriser l'upload des fichiers SVG
function allow_svg_upload($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', __NAMESPACE__ . '\\allow_svg_upload');

// Possibilité d'ajouter un logo
function theme_setup() {
    add_theme_support('custom-logo', [
        'height'      => 100,  // Hauteur recommandée
        'width'       => 300,  // Largeur recommandée
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => ['site-title', 'site-description'], // Optionnel : cacher le texte du site
    ]);
}
add_action('after_setup_theme', __NAMESPACE__ . '\\theme_setup');
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

// ----------------------------------------------------------------------------------------------------- //
//                                  CUSTOM POST TYPE GENERATOR
// ----------------------------------------------------------------------------------------------------- //

function register_custom_post_type($slug, $singular, $plural, $args = []) {
    $labels = [
        'name'               => $plural,
        'singular_name'      => $singular,
        'menu_name'          => $plural,
        'name_admin_bar'     => $singular,
        'add_new'            => 'Ajouter',
        'add_new_item'       => "Ajouter un(e) $singular",
        'new_item'           => "Nouveau/Nouvelle $singular",
        'edit_item'          => "Modifier $singular",
        'view_item'          => "Voir $singular",
        'all_items'          => "Tous les $plural",
        'search_items'       => "Rechercher $plural",
        'parent_item_colon'  => "Parent $plural:",
        'not_found'          => "Aucun(e) $singular trouvé(e)",
        'not_found_in_trash' => "Aucun(e) $singular trouvé(e) dans la corbeille"
    ];

    $defaults = [
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'show_in_menu'       => true,
        'show_ui'            => true,
        'query_var'          => true,
        'rewrite'            => ['slug' => $slug],
        'capability_type'    => 'post',
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
        'show_in_rest'       => true, // Activer l'éditeur Gutenberg
    ];

    $args = array_merge($defaults, $args);

    register_post_type($slug, $args);
}

function customtheme_enqueue_scripts() {
    $theme_version = wp_get_theme()->get('Version');

    // Bootstrap CSS
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css', array(), $theme_version);
    wp_enqueue_script('custom-scripts', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), $theme_version, true);
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\customtheme_enqueue_scripts');

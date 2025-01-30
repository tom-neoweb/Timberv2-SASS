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

function theme_enqueue_styles() {
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/main.min.css');
}

// Ajouter le namespace à la fonction pour WordPress
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\theme_enqueue_styles');

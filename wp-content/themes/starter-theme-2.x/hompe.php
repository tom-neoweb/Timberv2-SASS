<?php
/*
Template Name: Homepage
*/

namespace App;

use Timber\Timber;

$context = Timber::context();

// Récupérer les posts du CPT 'cp_annonces'
$args = [
    'post_type' => 'cp_annonces',
    'posts_per_page' => -1,       
    'orderby' => 'date',          
    'order' => 'DESC',            
];

$context['annonces'] = Timber::get_posts($args);

$context['categories'] = Timber::get_terms([
    'taxonomy'   => 'annonce_type',
    'hide_empty' => false,
]);

$timber_post = Timber::get_posts();
$context['post'] = $timber_post;

Timber::render( 'templates/home.twig', $context );

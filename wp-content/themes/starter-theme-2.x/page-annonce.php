<?php
/*
Template Name: Formulaire Annonce
*/
namespace App;

use Timber\Timber;

$context = Timber::context();

// Créer le shortcode pour le formulaire Contact Form 7
$form_shortcode = do_shortcode('[cf7form cf7key="formulaire-annonce"]');

// Passer le formulaire au contexte Timber
$context['form_annonce'] = $form_shortcode;

// Afficher le template avec le contexte
Timber::render('templates/annonces/form-annonce.twig', $context);
?>

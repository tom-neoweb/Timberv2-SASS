<?php
/*
Template Name: Formulaire Annonce
*/
namespace App;

use Timber\Timber;

$context = Timber::context();

// Récupérer les catégories disponibles pour les annonces
$context['categories'] = Timber::get_terms([
    'taxonomy'   => 'annonce_type',  // Vérifie bien le nom de ta taxonomie
    'hide_empty' => false,
]);

$context['success'] = false;

// Vérifier si le formulaire est soumis et si l'action est correcte
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'submit_annonce') {
    $title = sanitize_text_field($_POST['title']);
    $content = sanitize_textarea_field($_POST['content']);
    $category_id = intval($_POST['category']);

    // Créer un post en brouillon
    $post_id = wp_insert_post([
        'post_title'   => $title,
        'post_content' => $content,
        'post_type'    => 'cp_annonces',
        'post_status'  => 'draft', // Brouillon pour modération
        'post_author'  => get_current_user_id(),
    ]);

    // Vérifier si le post a été créé
    if ($post_id) {
        // Ajouter la catégorie sélectionnée au post
        wp_set_post_terms($post_id, [$category_id], 'annonce_type');

        // Vérifier si une image a été téléchargée
        if (!empty($_FILES['image']['name'])) {
            require_once ABSPATH . 'wp-admin/includes/file.php';
            require_once ABSPATH . 'wp-admin/includes/media.php';
            require_once ABSPATH . 'wp-admin/includes/image.php';

            // Traitement du fichier image
            $attachment_id = media_handle_upload('image', $post_id);
            if (!is_wp_error($attachment_id)) {
                // Définir l'image à la une pour le post
                set_post_thumbnail($post_id, $attachment_id);
            }
        }

        // Redirection vers une page de remerciement
        wp_redirect(home_url('/merci/'));
        exit;
    } else {
        // En cas d'erreur, ajouter un message
        $context['success'] = false;
    }
}

// Afficher le template avec le contexte
Timber::render('templates/annonces/form-annonce.twig', $context);
?>

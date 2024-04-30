<?php
/*
Template Name: Achat
*/

get_header();
?>

<div class="br1"></div>
<h1>Achat de la commande</h1>

<!-- Contenu de la page d'achat -->
<div class="woocommerce">
    <?php
    // Vérifier si l'utilisateur est connecté
    if (is_user_logged_in()) {
        // Si l'utilisateur est connecté, afficher le contenu de l'achat
        echo do_shortcode('[woocommerce_checkout]');
    } else {
        // Si l'utilisateur n'est pas connecté, rediriger vers la page de connexion
        wp_redirect(wp_login_url());
        exit;
    }
    ?>
</div>

<div class="br1"></div>

<?php get_footer(); ?>

<style>
    .br1 {
        height: 120px;
    }

    body {
        margin: 0;
        padding: 0;
        background-color: #FCDEDC;
    }
</style>

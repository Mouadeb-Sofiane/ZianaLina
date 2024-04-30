<?php
/*
Template Name: Downloads
*/

get_header();
?>

<div class="br1"></div>
<h1>Téléchargements</h1>

<div class="woocommerce">
    <div class="woocommerce-notices-wrapper"></div>
    <div class="woocommerce-downloads">
        <!-- Affichage des téléchargements disponibles pour l'utilisateur -->
        <?php echo do_shortcode('[woocommerce_my_account_downloads]'); ?>
    </div>
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

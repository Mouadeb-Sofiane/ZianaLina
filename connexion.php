<?php
/*
Template Name: Connexion
*/

get_header();
?>

<div class="br1"></div>
<h1>Connexion / Inscription</h1>

<div class="woocommerce">
    <div class="woocommerce-notices-wrapper"></div>
    <div class="woocommerce-login-form">
        <!-- Affichage du formulaire de connexion -->
        <?php echo do_shortcode('[woocommerce_my_account]'); ?>
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

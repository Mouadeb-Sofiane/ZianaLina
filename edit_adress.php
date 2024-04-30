<?php
/*
Template Name: Edit Address
*/

get_header();
?>

<div class="br1"></div>
<h1>Édition de l'adresse</h1>

<div class="woocommerce">
    <div class="woocommerce-notices-wrapper"></div>
    <div class="woocommerce-address-edit">
        <!-- Affichage du formulaire d'édition de l'adresse -->
        <?php echo do_shortcode('[woocommerce_edit_address]'); ?>
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

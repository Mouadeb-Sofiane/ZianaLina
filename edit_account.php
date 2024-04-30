<?php
/*
Template Name: Edit Account
*/

get_header();
?>

<div class="br1"></div>
<h1>Édition du compte</h1>

<div class="woocommerce">
    <div class="woocommerce-notices-wrapper"></div>
    <div class="woocommerce-account-edit">
        <!-- Affichage du formulaire d'édition du compte -->
        <?php echo do_shortcode('[woocommerce_edit_account]'); ?>
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

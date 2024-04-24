<?php
/* template name: panier */

get_header();
?>

<div class="br1"></div>
<h1>Panier</h1>

<!-- Affichage du panier WooCommerce -->
<div class="woocommerce">
    <?php woocommerce_mini_cart(); ?>
</div>

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
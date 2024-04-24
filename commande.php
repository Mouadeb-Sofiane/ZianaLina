<?php
/* template name: commande */

get_header();
?>

<div class="br1"></div>
<h1>Récapitulatif de la commande</h1>

<!-- Affichage du récapitulatif de la commande WooCommerce -->
<div class="woocommerce">
    <?php woocommerce_checkout(); ?>
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
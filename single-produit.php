<?php
/*
Template Name: Single Produit
*/

get_header();
?>

<div class="br1"></div>

<?php
// Vérifier si un produit est présent dans l'URL
if (isset($_GET['product_id'])) {
    $product_id = intval($_GET['product_id']);

    // Récupérer le produit WooCommerce
    $product = wc_get_product($product_id);

    // Vérifier si le produit existe
    if ($product) {
        ?>
        <div class="product-details">
            <h1><?php echo $product->get_name(); ?></h1>
            <div class="product-image">
                <?php echo $product->get_image(); ?>
            </div>
            <div class="product-meta">
                <p>Description : <?php echo $product->get_description(); ?></p>
                <p>Prix : <?php echo $product->get_price_html(); ?></p>
                <p>Status : <?php echo $product->get_stock_status(); ?></p>
                <!-- Ajoutez d'autres détails du produit selon vos besoins -->
            </div>
        </div>
        <?php
    } else {
        echo '<p>Produit non trouvé.</p>';
    }
} else {
    echo '<p>Aucun ID de produit spécifié.</p>';
}
?>

<?php get_footer(); ?>

<style>
    .br1 {
        height: 120px;
    }

    body {
        margin: 0;
        padding: 0;
        background-color: #FCDEDC;
        font-family: Arial, sans-serif;
    }

    .product-details {
        max-width: 800px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
    }

    .product-details h1 {
        font-size: 24px;
        color: #333;
        margin-bottom: 10px;
    }

    .product-image {
        text-align: center;
        margin-bottom: 20px;
    }

    .product-image img {
        max-width: 100%;
        height: auto;
    }

    .product-meta p {
        font-size: 16px;
        color: #666;
        margin-bottom: 10px;
    }
</style>

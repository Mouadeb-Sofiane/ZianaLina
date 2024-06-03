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
            <div class="product-price">
                <?php echo $product->get_price_html(); ?>
            </div>
            <div class="product-description">
                <?php echo $product->get_description(); ?>
            </div>
            <div class="product-button">
                <button class="add-to-cart-btn" onclick="addToCart(<?php echo $product_id; ?>)">Ajouter au panier</button>
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

<script>
function addToCart(productId) {
    // Ajoutez votre logique pour ajouter le produit au panier
    alert('Produit ' + productId + ' ajouté au panier!');
}
</script>

<style>
    .wc-block-cart-item__remove-link {
    display: none;
}

    h1, h2 {
        font-family: 'Lora', serif;
        font-weight: 700;
        }

    p {
        font-family: 'Poppins', sans-serif;
        font-weight: 400;
        font-style: normal;
        }

     span {
        font-family: 'Poppins', sans-serif;
        font-weight: 400;
        font-style: normal;}   
    a {
        font-family: 'Poppins', sans-serif;
        font-weight: 400;
        font-style: normal;
        }

        button {
        font-family: 'Poppins', sans-serif;
        font-weight: 400;
        font-style: normal;
        }
    /* Style pour la br1 (à ajuster selon vos besoins) */
    .br1 {
        height: 700px;
        background-color: #f4f4f4; /* Exemple de fond */
    }

    /* Style pour la page produit */
    .product-details {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .product-details h1 {
        font-size: 2em;
        margin-bottom: 20px;
    }

    .product-image {
        text-align: center;
        margin-bottom: 20px;
    }

    .product-price {
        font-size: 1.5em;
        color: #333;
        margin-bottom: 20px;
    }

    .product-description {
        font-size: 1em;
        line-height: 1.6;
        color: #666;
    }

    .product-button {
        text-align: center;
        margin-top: 20px;
    }

    .add-to-cart-btn {
        background-color: #007BFF;
        color: white;
        border: none;
        padding: 15px 30px;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .add-to-cart-btn:hover {
        background-color: #0056b3;
        transform: translateY(-2px);
    }

    .add-to-cart-btn:active {
        background-color: #004494;
        transform: translateY(0);
    }

    /* Responsive styles */
    @media screen and (max-width: 768px) {
        .product-details {
            padding: 10px;
        }

        .product-details h1 {
            font-size: 1.5em;
        }

        .product-price {
            font-size: 1.2em;
        }
    }
</style>

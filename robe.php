<?php
/* template name: robe */

get_header();
?>
<body>
    <div class="br1"></div>
    <h1>Robe</h1>
    <p>test de la page robe</p>
    <div class="products-container">
        <?php
        // Afficher toutes les cartes des produits de la catégorie "Robe"
        echo do_shortcode('[product_category category="robe"]');
        ?>
    </div>
</body>
<?php
get_footer();
?>
<style>
    .br1 {
        height: 140px;
    }
    body {
        margin: 0;
        padding: 0;
        background-color: #FCDEDC;
    }
    .products-container {
        display: flex;
        flex-wrap: wrap;
        gap: 30px; /* Augmenté l'espacement entre les cartes */
        justify-content: center;
        padding: 20px;
    }
    .product {
        border: 1px solid #ccc;
        border-radius: 8px;
        overflow: hidden;
        background-color: #fff;
        text-align: center;
        padding: 20px; /* Augmenté le padding */
        width: 300px; /* Augmenté la largeur des cartes */
    }
    .product img {
        border: 2px solid #FFF;
        width: 100%;
        height: auto;
    }
    .product h2 {
        font-size: 1.5em; /* Augmenté la taille de la police */
        margin: 15px 0; /* Augmenté l'espacement vertical */
    }
    .product p {
        font-size: 1.2em; /* Augmenté la taille de la police */
        color: #333;
        margin: 10px 0; /* Augmenté l'espacement vertical */
    }
    .product .price {
        font-size: 1.4em; /* Augmenté la taille de la police */
        font-weight: bold;
        margin: 10px 0; /* Augmenté l'espacement vertical */
    }
    .product button {
        margin-top: 15px;
        padding: 15px 30px; /* Augmenté la taille du bouton */
        background-color: #ff6f61;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 1.2em; /* Augmenté la taille de la police */
    }
    .product button:hover {
        background-color: #e55b4f;
    }
</style>

<?php
/* template name: bijoux */

get_header();
?>
<body>
    <div class="br1"></div>
    <h1>Bijoux</h1>
    <p>test de la page bijoux</p>
    <div class="products-container">
        <?php
        // Afficher toutes les cartes des produits de la catégorie "Bijoux"
        echo do_shortcode('[product_category category="bijoux"]');
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
        gap: 20px;
        justify-content: center;
        padding: 20px;
    }
    .product {
        border: 1px solid #ccc;
        border-radius: 8px;
        overflow: hidden;
        background-color: #fff;
        text-align: center;
        padding: 10px;
        width: 200px;
    }
    .product img {
        border: 2px solid #FFF;
        width: 100%;
        height: auto;
    }
    .product h2 {
        font-size: 1.2em;
        margin: 10px 0;
    }
    .product p {
        font-size: 1em;
        color: #333;
        margin: 5px 0;
    }
    .product .price {
        font-size: 1.1em;
        font-weight: bold;
        margin: 5px 0;
    }
    .product button {
        margin-top: 10px;
        padding: 10px 20px;
        background-color: #ff6f61;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 1em;
    }
    .product button:hover {
        background-color: #e55b4f;
    }
</style>

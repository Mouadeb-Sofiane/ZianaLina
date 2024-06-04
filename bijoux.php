<?php
/* template name: bijoux */

    get_header();
?>
<body>
    <div class="br1"></div>
    <div class="img-container">
        <div class="image-container1">
            <img class="img_boussole" src="<?php echo get_template_directory_uri() . '/img/banniere_bijoux.svg'; ?>" alt="Image qui montre que l'on est dans la section abaya" />
        </div>
    </div>
    <div class="sort-options">
        <label for="sort-by">Trier par :</label>
        <select id="sort-by">
            <option value="menu_order" selected="selected">Par défaut</option>
            <option value="price">Prix (du moins cher au plus cher)</option>
            <option value="price-desc">Prix (du plus cher au moins cher)</option>
            <option value="popularity">Meilleures ventes</option>
            <option value="date">Nouveautés</option>
        </select>
    </div>

    <div class="products">
        <?php
        // Récupérer les produits de la catégorie "bijoux"
        $args = array(
            'post_type'      => 'product',
            'posts_per_page' => -1, // Afficher tous les produits
            'product_cat'    => 'bijoux', // Catégorie de produits
            'orderby'        => isset($_GET['orderby']) ? $_GET['orderby'] : 'menu_order', // Utiliser le tri spécifié dans l'URL, sinon tri par défaut
            'order'          => 'ASC', // Ordre croissant par défaut, vous pouvez changer selon vos besoins
        );

        if (isset($_GET['orderby']) && $_GET['orderby'] === 'price') {
            $args['meta_key'] = '_price';
            $args['orderby'] = 'meta_value_num';
        }

        $products = new WP_Query($args);

        // Afficher les cartes des produits avec des liens vers les détails des produits
        if ($products->have_posts()) :
            while ($products->have_posts()) : $products->the_post();
                // Récupérer l'ID du produit
                $product_id = get_the_ID();
                // Récupérer l'URL de la page de détails du produit
                $product_details_url = get_permalink($product_id);
        ?>
                <div class="product-card">
                    <a href="<?php echo $product_details_url; ?>">
                        <div class="product-image">
                            <?php the_post_thumbnail('large'); // Taille d'image 'large' pour des images plus grandes ?>
                        </div>
                        <div class="product-info">
                            <h2><?php the_title(); ?></h2>
                            <p><?php echo wc_price(get_post_meta($product_id, '_price', true)); ?></p>
                        </div>
                    </a>
                    <?php woocommerce_template_loop_add_to_cart(); ?>
                </div>
        <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>Aucun produit trouvé dans cette catégorie.</p>';
        endif;
        ?>
    </div>
</body>

<?php
get_footer();
?>

<style>
    .img_boussole {
        /* Your existing styles for the image */
        width: 100%;
        height: 10% ;
    }
    .img-container {
        position: relative;
    }
    h1 {
            font-family: 'Lora', serif; /* Utilisation de la police Lora pour l'élément h1 */
            font-weight: 700; /* Application du gras à la police Lora */
            text-align: center; /* Centrer le texte */
        }

    .sort-options {
            font-family: 'Poppins', sans-serif; /* Utilisation de la police Poppins pour le contenu des options de tri */
        }
        
    .sort-options select {
        font-family: 'Poppins', sans-serif; /* Utilisation de la police Poppins pour les éléments select */
        }

    .sort-options option {
        font-family: 'Poppins', sans-serif; /* Utilisation de la police Poppins pour les éléments option */
    }

.br1 {
    height: 75px;
}

body {
    margin: 0;
    padding: 0;
    background-color: #FCDEDC;
}

.sort-options {
    margin: 20px;
}

.products {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin: 20px;
}

.product-card {
    width: calc(25% - 20px); /* 4 cartes par ligne avec un espacement de 20px entre elles */
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    transition: transform 0.2s ease-in-out;
}

.product-card:hover {
    transform: scale(1.05); /* Effet d'agrandissement au survol */
}

.product-card a {
    text-decoration: none;
    color: #000;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
}

.product-card .product-image {
    width: 100%;
    height: 350px; /* Augmenter la hauteur de l'image */
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 10px;
}

.product-card img {
    max-width: 100%;
    max-height: 100%;
    object-fit: cover; /* S'assurer que l'image couvre tout l'espace disponible */
}

.product-card .product-info {
    padding: 10px;
    width: 100%;
}

.product-card h2 {
    margin: 0;
    margin-bottom: 5px;
    font-size: 18px;
    font-weight: bold;
}

.product-card p {
    margin: 0;
    color: #e6007e; /* Couleur du prix pour plus de visibilité */
    font-size: 16px;
    font-weight: bold;
}

@media (max-width: 1200px) {
    .product-card {
        width: calc(33.3333% - 20px); /* 3 cartes par ligne avec un espacement de 20px entre elles */
    }
}

@media (max-width: 992px) {
    .product-card {
        width: calc(50% - 20px); /* 2 cartes par ligne avec un espacement de 20px entre elles */
    }
}

@media (max-width: 768px) {
    .product-card {
        width: 100%; /* 1 carte par ligne pour les écrans plus petits */
        margin-bottom: 20px;
    }
}

/* Supprimer le style au survol pour le bouton "Ajouter au panier" */
.product-card .button.add_to_cart_button {
    background-color: #5D5953;
    color: #fff;
    border: none;
    padding: 10px 5px;
    border-radius: 5px;
}

/* Pour les écrans de tablette et de téléphone */
@media (max-width: 992px) {
    .product-card {
        flex-direction: column;
        text-align: center;
    }

    .product-card .product-info {
        order: 2;
        margin-bottom: 10px; /* Ajouter un espace entre le prix et le bouton */
    }

    .product-card .button.add_to_cart_button {
        padding: 10px 20px;
    }
}

/* Pour les écrans de téléphone */
@media (max-width: 768px) {
    .sort-options {
        text-align: center; /* Centrer le texte des options de tri */
        margin-bottom: 20px; /* Ajouter un espace en bas */
    }

    .sort-options select {
        width: 100%; /* Prendre toute la largeur disponible */
        max-width: 200px; /* Limiter la largeur pour éviter que les options ne soient trop larges */
        margin: 0 auto; /* Centrer horizontalement */
    }
}

</style>


<script>
    document.getElementById('sort-by').onchange = function() {
        var url = window.location.href.split('?')[0];
        var sort_by = this.value;
        window.location.href = url + '?orderby=' + sort_by;
    };
</script>


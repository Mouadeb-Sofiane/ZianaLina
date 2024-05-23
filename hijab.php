<?php 
/* template name: hijab */
get_header();
?>

<body>
    <div class="br1"></div>
    <h1>
        Hijab
    </h1>
    <p>
        Test de la page hijab
    </p>
    <div class="sort-options">
        <label for="sort-by">Trier par :</label>
        <select id="sort-by">
            <option value="menu_order" selected="selected">Défaut</option>
            <option value="price">Prix (du moins cher au plus cher)</option>
            <option value="price-desc">Prix (du plus cher au moins cher)</option>
            <option value="popularity">Meilleures ventes</option>
            <option value="date">Nouveautés</option>
        </select>
    </div>

    <div class="products">
        <div class="product-container">
            <?php
            // Récupérer les produits de la catégorie "Hijab"
            $args = array(
                'post_type'      => 'product',
                'posts_per_page' => -1, // Afficher tous les produits
                'product_cat'    => 'hijab', // Catégorie de produits
                'orderby'        => isset($_GET['orderby']) ? $_GET['orderby'] : 'menu_order', // Utiliser le tri spécifié dans l'URL, sinon tri par défaut
                'order'          => 'ASC', // Ordre croissant par défaut, vous pouvez changer selon vos besoins
            );

            if (isset($_GET['orderby']) && $_GET['orderby'] === 'price') {
                $args['meta_key'] = '_price';
                $args['orderby'] = 'meta_value_num';
            }

            $products = new WP_Query($args);

            // Compteur pour afficher quatre cartes par ligne
            $counter = 0;

            // Afficher les cartes des produits avec des liens vers les détails des produits
            if ($products->have_posts()) :
                while ($products->have_posts()) : $products->the_post();
                    // Récupérer l'ID du produit
                    $product_id = get_the_ID();
                    // Récupérer l'URL de la page de détails du produit
                    $product_details_url = get_permalink($product_id);

                    // Incrémenter le compteur
                    $counter++;

                    // Si c'est la quatrième carte, réinitialiser le compteur et fermer la ligne
                    if ($counter == 5) {
                        echo '</div><div class="product-container">';
                        $counter = 1; // Réinitialiser le compteur à 1 pour la nouvelle ligne
                    }
            ?>
                    <div class="product-card">
                        <a href="<?php echo $product_details_url; ?>">
                            <div class="product-image">
                                <?php the_post_thumbnail('medium_large'); // Taille d'image 'medium_large' pour des images plus grandes ?>
                            </div>
                            <div class="product-info">
                                <h2><?php the_title(); ?></h2>
                                <p><?php echo wc_price(get_post_meta($product_id, '_price', true)); ?></p>
                            </div>
                        </a>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>Aucun produit trouvé dans cette catégorie.</p>';
            endif;
            ?>
        </div>
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

    .sort-options {
        margin: 20px;
    }

    .products {
        margin: 20px;
    }

    .product-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .product-card {
        width: calc(23% - 20px); /* 4 cartes par ligne avec un espacement de 20px entre elles */
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
        height: 250px; /* Augmenter la hauteur de l'image */
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
</style>

<script>
    document.getElementById('sort-by').onchange = function() {
        var url = window.location.href.split('?')[0];
        var sort_by = this.value;
        window.location.href = url + '?orderby=' + sort_by;
    };
</script>

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
        test de la page hijab
    </p>
    <div class="products">
        <?php
        // Récupérer les produits de la catégorie "Hijab"
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => -1, // Afficher tous les produits
            'product_cat' => 'hijab', // Catégorie de produits
        );
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
                        <h2><?php the_title(); ?></h2>
                        <?php the_post_thumbnail(); ?>
                        <p><?php echo wc_price(get_post_meta($product_id, '_price', true)); ?></p>
                    </a>
                </div>
            <?php endwhile;
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
    .br1 {
        height: 120px;
    }

    body {
        margin: 0;
        padding: 0;
        background-color: #FCDEDC;
    }

    .product-card {
        border: 1px solid #ccc;
        padding: 10px;
        margin: 10px;
        text-align: center;
        background-color: #fff;
        border-radius: 5px;
    }

    .product-card a {
        text-decoration: none;
        color: #000;
    }

    .product-card h2 {
        margin-top: 0;
    }

    .product-card img {
        max-width: 100%;
        height: auto;
    }
</style>

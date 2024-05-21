<?php
/*
Template Name: Archive Produit
*/

get_header();
?>

<div class="br1"></div>
<h1>Nos Produits</h1>

<div class="products">
    <?php
    // Afficher tous les produits WooCommerce
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => -1,
    );

    $loop = new WP_Query($args);

    while ($loop->have_posts()) : $loop->the_post();
        global $product;
    ?>
        <div class="product-item">
            <a href="<?php echo get_permalink($product->get_id()); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                <?php echo $product->get_image(); ?>
                <h2 class="woocommerce-loop-product__title"><?php the_title(); ?></h2>
                <span class="price"><?php echo $product->get_price_html(); ?></span>
            </a>
        </div>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
</div>

<?php get_footer(); ?>
<style>
    .br1 {
        height: 140px;
    }

    body {
        margin: 0;
        padding: 0;
        background-color: #FCDEDC;
    }
</style>

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
    // Afficher toutes les cartes des produits de la catégorie "Hijab"
    echo do_shortcode('[product_category category="hijab"]');
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
</style>
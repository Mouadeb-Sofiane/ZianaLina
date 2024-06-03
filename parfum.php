<?php
/* template name: parfum */

    get_header();
?>
<body>
    <div class="br1"></div>
    <h1>
        Parfum
    </h1>
    <p>
        test de la page parfum
    </p>
    <?php
    // Afficher toutes les cartes des produits de la catégorie "Parfum"
    echo do_shortcode('[product_category category="parfum"]');
    ?>
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
</style>
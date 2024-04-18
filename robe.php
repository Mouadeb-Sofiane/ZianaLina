<?php
/* template name: robe */

    get_header();
?>
<body>
    <div class="br1"></div>
    <h1>
        Robe
    </h1>
    <p>
        test de la page robe
    </p>
    <?php
    // Afficher toutes les cartes des produits de la catégorie "Robe"
    echo do_shortcode('[product_category category="robe"]');
    ?>
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
<?php
/* template name: ensemble */

    get_header();
?>
<body>
    <div class="br1"></div>
    <h1>
        Ensemble
    </h1>
    <p>
        test de la page ensemble
    </p>
    <?php
    // Afficher toutes les cartes des produits de la catégorie "Ensemble"
    echo do_shortcode('[product_category category="enssemble"]');
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
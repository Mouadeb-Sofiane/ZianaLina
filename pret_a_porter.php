<?php
/* template name: pret_a_porter */

    get_header();
?>
<body>
    <div class="br1"></div>
    <h1>
        Prêt à porter 
    </h1>
    <p>
        test de la page prêt à porter
    </p>
    <?php
    // Afficher toutes les cartes des produits de la catégorie "Prêt à porter"
    echo do_shortcode('[product_category category="pret_a_porter"]');
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
<?php
/* template name: chaussure */

    get_header();
?>
<body>
    <div class="br1"></div>
    <h1>
        Chaussure
    </h1>
    <p>
        test de la page chaussure
    </p>
    <?php
    // Afficher toutes les cartes des produits de la catégorie "Chaussure"
    echo do_shortcode('[product_category category="chaussure"]');
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
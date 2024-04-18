<?php
/* template name: caftan */

    get_header();
?>
<body>
    <div class="br1"></div>
    <h1>
        Caftan
    </h1>
    <p>
        test de la page caftan
    </p>
    <?php
    // Afficher toutes les cartes des produits de la catégorie "Caftan"
    echo do_shortcode('[product_category category="caftan"]');
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
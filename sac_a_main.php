<?php
/* template name: sac_a_main */

    get_header();
?>
<body>
    <div class="br1"></div>
    <h1>
        Sac à main
    </h1>
    <p>
        test de la page de sac à main
    </p>
    <?php
    // Afficher toutes les cartes des produits de la catégorie "Sac à main"
    echo do_shortcode('[product_category category="sac_a_main"]');
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
<?php
/* template name: abaya */

    get_header();
?>
<body>
    <div class="br1"></div>
    <h1>
        Abaya
    </h1>
    <p>
        test de la page abaya
    </p>
    <?php
    // Afficher toutes les cartes des produits de la catégorie "Abaya"
    echo do_shortcode('[product_category category="abaya"]');
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
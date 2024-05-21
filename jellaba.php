<?php
/* template name: jellaba */

    get_header();
?>
<body>
<div class="br1"></div>
<h1>Jellaba</h1>
<p>Test de la page jellaba</p>

<div class="products">
    <?php
    // Afficher toutes les cartes des produits de la catégorie "Jellaba"
    echo do_shortcode('[product_category category="jellaba"]');
    ?>
</div>

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
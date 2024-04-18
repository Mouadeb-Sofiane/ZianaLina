<?php
/* template name: bijoux */

    get_header();
?>
<body>
    <div class="br1"></div>
    <h1>
        Bijoux
    </h1>
    <p>
        test de la page bijoux
    </p>
    <?php
    // Afficher toutes les cartes des produits de la catégorie "Bijoux"
    echo do_shortcode('[product_category category="bijoux"]');
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
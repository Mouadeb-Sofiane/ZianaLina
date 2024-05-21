<?php
/* template name: bijoux_traditionnels */

    get_header();
?>
<body>
    <div class="br1"></div>
    <h1>
        Bijoux traditionnels
    </h1>
    <p>
        test de la page bijoux traditionnels
    </p>
    <?php
    // Afficher toutes les cartes des produits de la catégorie "Bijoux traditionnels"
    echo do_shortcode('[product_category category="bijoux_traditionnels"]');
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
<?php

function add_meta_description()
{
    ?>
    <meta name="description" content="Découvrez notre boutique en ligne ainsi que notre boutique physique. Chaque page vous offre une multitude de vetements, caftans, djellaba, hijab, bijoux, parfums et d'autres accesoires. Vous avez aussi la possibilité de passer vos commandes directements sur le site.">
<?php
}

add_action('wp_head', 'add_meta_description');


get_header();
?>


<?php get_footer(); ?>




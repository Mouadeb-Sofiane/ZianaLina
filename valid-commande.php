<?php
/* template name: valid-commande */
    get_header();
?>

<body>
    <div class="br1"></div>
    <h1>
        Validation de la comande
    </h1>
    <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post(); 
                the_content();
                //
                // Post Content here
                //
            } // end while
        } // end if
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
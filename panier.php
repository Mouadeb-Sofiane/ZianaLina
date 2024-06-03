<?php
/* template name: panier */
    get_header();
?>

<body>
    <div class="br1"></div>
    <h1>
        Panier
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
    h1 {
        font-family: 'Lora', serif;
        font-weight: 700;
        font-size: 2.5em;
        }
    .br1 {
        height: 140px;
    }
    body {
    margin: 0;
    padding: 0;
    background-color: #FCDEDC;
  }
</style>
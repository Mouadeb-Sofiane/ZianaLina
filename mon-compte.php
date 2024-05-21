<?php
/* template name: mon-compte */
    get_header();
?>

<body>
    <div class="br1"></div>
    <h1>
        Mon compte
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
<div class="br1"></div>

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
<?php
/* template name: negafa */

    get_header();
?>
<body>
    <div class="br1"></div>
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
    <div class="br2"></div>

</body>
<?php
    get_footer();
?>
<style>
    .br2 {
        padding-bottom: 3%;
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
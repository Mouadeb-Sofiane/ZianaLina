<?php
/* template name: negafa */

    get_header();
?>
<body>
    <div class="br1"></div>
    <div class="img-container">
        <div class="image-container1">
            <img class="img_boussole" src="<?php echo get_template_directory_uri() . '/img/banniere_negafa.svg'; ?>" alt="Image qui montre que l'on est dans la section abaya" />
        </div>
    </div>
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
    .img_boussole {
        /* Your existing styles for the image */
        width: 100%;
        height: 10% ;
    }
    .img-container {
        position: relative;
    }
    h1 {
        font-family: 'Lora', serif;
        font-weight: 700;
        font-size: 2.5em;
        }
    h2 {
        font-family: 'Lora', serif;
        font-weight: 700;
        }

    p {
        font-family: 'Poppins', sans-serif;
        font-weight: 400;
        font-style: normal;
        }
    a {
        font-family: 'Poppins', sans-serif;
        font-weight: 400;
        font-style: normal;
        }

        button {
        font-family: 'Poppins', sans-serif;
        font-weight: 400;
        font-style: normal;
        }
    .br2 {
        padding-bottom: 3%;
    }
    .br1 {
        height: 70px;
    }
    body {
    margin: 0;
    padding: 0;
    background-color: #FCDEDC;
  }
</style>
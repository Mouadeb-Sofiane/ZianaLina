<?php
/* template name: mentions_legales */
    get_header();
?>

<body>
    <p class="br1"></p>
    <h1 class="center">Mentions légales</h1>
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
    <p class="br2"></p>
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
    .center {
        text-align: center;
    }
    .br1 {
        height: 140px;
    }
    body {
    margin: 0;
    padding: 0;
    background-color: #FCDEDC;
  }


.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

h1 {
    font-size: 24px;
    margin-top: 0;
}

h2 {
    font-size: 20px;
    margin-top: 25px;
    margin-bottom: 15px;
}

.br2 {
        padding-bottom: 3%;
    }

p {
    margin-bottom: 20px;
}

/* Additional styles for specific elements */
.br1 {
    height: 120px;
}

/* Custom styles for mentions légales template */
.mentions-legales-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.mentions-legales-container h1 {
    font-size: 32px;
    text-align: center;
    color: #333;
    margin-bottom: 10px;
}

.mentions-legales-container h2 {
    font-size: 24px;
    color: #666;
    margin-bottom: 10px;
}

.mentions-legales-container p {
    font-size: 16px;
    color: #444;
    line-height: 1.5;
}

/* Responsive styles */
@media screen and (max-width: 600px) {
    .container {
        padding: 10px;
    }

    .mentions-legales-container {
        padding: 15px;
    }

    .mentions-legales-container h1 {
        font-size: 24px;
    }

    .mentions-legales-container h2 {
        font-size: 20px;
    }

    .mentions-legales-container p {
        font-size: 14px;
    }
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
</style>
<?php
/* Template Name: mes_infos */
get_header();
?>

<body>
    <div class="br1"></div>
    <h1>Modifier les informations du compte</h1>

    <?php if ( is_user_logged_in() ) : ?>
        <p>Vous pouvez modifier les informations de votre compte ci-dessous :</p>

        <!-- Affichage du formulaire de modification des informations du compte -->
        <?php echo do_shortcode('[woocommerce_edit_account]'); ?>

        <p><a href="<?php echo wc_get_page_permalink( 'myaccount' ); ?>">Retour à mon compte</a></p>
    <?php else : ?>
        <p>Vous devez être connecté pour accéder à cette page.</p>
        <p>Vous pouvez vous <a href="<?php echo wp_login_url( get_permalink() ); ?>">connecter</a> ou <a href="<?php echo wp_registration_url(); ?>">créer un compte</a>.</p>
    <?php endif; ?>

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
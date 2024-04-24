<?php
/* Template Name: mes_commandes */
get_header();
?>

<body>
    <div class="br1"></div>
    <h1>Mes commandes</h1>

    <?php if ( is_user_logged_in() ) : ?>
        <!-- Affichage des commandes de l'utilisateur -->
        <?php echo do_shortcode('[woocommerce_my_account]'); ?>

        <p><a href="<?php echo wc_get_page_permalink( 'myaccount' ); ?>">Retour à mon compte</a></p>
    <?php else : ?>
        <p>Vous devez être connecté pour accéder à cette page.</p>
        <p>Vous pouvez vous <a href="<?php echo wp_login_url( get_permalink() ); ?>">connecter</a> ou <a href="<?php echo wp_registration_url(); ?>">créer un compte</a>.</p>
    <?php endif; ?>

</body>
<?php
get_footer();
?>

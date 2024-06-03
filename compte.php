<?php
/* template name: compte */
get_header();
?>

<body>
    <div class="br1"></div>
    <h1>Mon Compte</h1>

    <?php if ( is_user_logged_in() ) : ?>
        <p>Bienvenue, <?php echo wp_get_current_user()->display_name; ?> !</p>
        <p>Voici les détails de votre compte :</p>

        <!-- Affichage des détails du compte utilisateur -->
        <ul>
            <li><strong>Nom d'utilisateur :</strong> <?php echo wp_get_current_user()->user_login; ?></li>
            <li><strong>Email :</strong> <?php echo wp_get_current_user()->user_email; ?></li>
            <!-- Ajoutez d'autres détails du compte utilisateur selon vos besoins -->
        </ul>

        <!-- Liens pour la gestion du compte utilisateur -->
        <p>Que souhaitez-vous faire ?</p>
        <ul>
            <li><a href="<?php echo wc_customer_edit_account_url(); ?>">Modifier les informations du compte</a></li>
            <li><a href="<?php echo wc_get_endpoint_url( 'orders' ); ?>">Voir mes commandes</a></li>
            <li><a href="<?php echo wc_logout_url(); ?>">Déconnexion</a></li>
        </ul>
    <?php else : ?>
        <p>Vous devez être connecté pour accéder à cette page.</p>
        <p>Vous pouvez vous <a href="<?php echo wp_login_url( get_permalink() ); ?>">connecter</a> ou <a href="<?php echo wp_registration_url(); ?>">créer un compte</a>.</p>
    <?php endif; ?>

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

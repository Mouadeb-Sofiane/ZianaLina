<div class="ligne-grise"></div>
<footer>
    <div class="footeur">
        <div class="footer-container">
            <div class="footer-section">
                <a href="http://localhost/zianalina/accueil"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-zianalina-tel.svg" alt="Logo Ziana Lina" ></a>
            </div>

            <div class="footer-section">
                <h3>Votre compte</h3>
                <div class="br3"></div>
                <div>
                    <p class="br-sect"><a href="#">Adresse</a></p>
                    <p><a href="#">Commandes</a></p>
                    <p><a href="#">Détails du compte</a></p>
                </div>
            </div>

            <div class="footer-section">
                <h3>Informations</h3>
                <div class="br3"></div>
                <div>
                    <p><a href="mailto:lina-linoush@hotmail.fr">Me contacter</a></p>
                    <p><a href="#">Mentions légales</a></p>
                    <p><a href="#">Politique de confidentialité</a></p>
                </div>
            </div>

            <div class="footer-section">
                <h3>Boutique</h3>
                <div class="br3"></div>
                <div>
                    <a href="https://www.google.com/maps/search/?api=1&query=33+rue+du+Breuil,+70000+Vesoul" target="_blank">
                        <p>
                            33 rue du Breuil, 70000 Vesoul
                        </p>
                    </a>
                </div>
            </div>

            <div class="footer-section">
                <h3>A propos de Ziana Lina</h3>
                <div class="br2"></div>
                <p>
                    Venez nous suivre sur nos différents réseaux sociaux.
                </p>
                <div class="br2"></div>

                <div class="social-media-icons">
                    <a href="https://www.facebook.com/ziana.lina.3/?locale=fr"><img src="<?php echo get_template_directory_uri(); ?>/icon/facebook.svg" alt="facebook" class="logo-link"></a>
                    <a href="https://www.instagram.com/ziana_lina/"><img src="<?php echo get_template_directory_uri(); ?>/icon/instagram.svg" alt="instagram" class="logo-link"></a>
                    <a href="https://www.tiktok.com/@ziana.lina?lang=fr"><img src="<?php echo get_template_directory_uri(); ?>/icon/tiktok.svg" alt="tiktok" class="logo-link"></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<style>
    /* Ajoutez vos styles ici */
    /* Les styles existants sont inclus ci-dessous pour référence */

    .br-sect {}

    .br3 {
        height: 25px;
    }

    .br2 {
        height: 15px;
    }

    .ligne-grise {
        border: 1px solid rgba(0, 0, 0, 0.5);
        /* Couleur grise avec transparence */
        width: 99.9%;
        /* Largeur de la ligne */
        margin: 0;
        /* Marge autour de la ligne */
        /* Autres styles personnalisables */
    }

    footer {
        background-color: #fff;
        padding: 20px;
    }

    .footeur {
        display: flex;
        justify-content: center;
    }

    .footer-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
    }

    .footer-section {
        flex: 1 1 200px;
        color: black;
    }

    .social-media-icons img {
        width: 30px;
        height: 30px;
        margin: 5px;
    }

    .contact-emails p {
        margin: 5px;
        text-transform: lowercase;
        padding-top: 10px;
    }

    .logo-link {
        width: 30px;
        height: 30px;
        transition: 0.3s;
        animation: ease-in 0.5s ease-in-out;
    }

    .logo-link:hover {
        transform: scale(1.2);
    }

    a {
        text-decoration: none;
        color: black;
    }

    a:hover {
        color: #737373;
    }

    .partners-section {
        display: flex;
        justify-content: center;
    }

    .partners {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
    }

    .title-partner {
        margin: 10px;
        font-size: 18px;
    }

    .partner-logo {
        width: 120px;
        height: auto;
    }

    .footer-credits {
        text-align: center;
        margin-top: 20px;
        font-size: 14px;
    }

    @media screen and (max-width: 768px) {
        .footer-section {
            flex: 1 1 100%;
            margin-bottom: 20px;
        }
    }
</style>

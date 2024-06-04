<footer class="ligne-grise">
    <div class="footeur">
        <div class="footer-container">
            <div class="footer-section">
                <a href="https://zianalina.mouadeb.fr/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-zianalina-tel.svg" alt="Logo Ziana Lina" ></a>
            </div>

            <div class="footer-section">
                <h3>Votre compte</h3>
                <div class="br3"></div>
                <div>
                    <p class="br-sect"><a href="https://zianalina.mouadeb.fr/mon-compte/edit-address/">Adresses</a></p>
                    <p><a href="https://zianalina.mouadeb.fr/mon-compte/orders/">Commandes</a></p>
                    <p><a href="https://zianalina.mouadeb.fr/mon-compte/edit-account/">Détails du compte</a></p>
                </div>
            </div>

            <div class="footer-section">
                <h3>Informations</h3>
                <div class="br3"></div>
                <div>
                    <p><a href="mailto:lina-linoush@hotmail.fr">Me contacter</a></p>
                    <p><a href="https://zianalina.mouadeb.fr/mentions-legales/">Mentions légales</a></p>
                    <p><a href="https://zianalina.mouadeb.fr/politique-de-confidentialite">Politique de confidentialité</a></p>
                    <p><a href="https://zianalina.mouadeb.fr/negefa">Contrat de Negafa</a></p>
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
                    
                <div class="br2"></div>

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
    .br-sect {}

.br3 {
    height: 25px;
}

.br2 {
    height: 15px;
}

.ligne-grise {
    border: 1px solid rgba(0, 0, 0, 0.5);
    width: 97.2%; /* Ajustez la largeur si nécessaire */
    margin-top: auto; /* Colle en bas du contenu */
}

footer {
    background-color: #fff;
    padding: 20px;
}

.footeur {
    display: flex;
    justify-content: center;
    font-family: 'Inter', sans-serif;
}

.footer-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
}

.footer-section {
    flex: 1 1 100px;
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
p {
    font-family: 'Inter', sans-serif;
    font-weight: 400;
    font-style: normal;
}

a {
    font-family: 'Inter', sans-serif;
    font-weight: 400;
    font-style: normal;
}

@media screen and (max-width: 768px) {
    .footer-section {
        flex: 1 1 100%;
        margin-bottom: 20px;
    }
}
</style>

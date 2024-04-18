<?php
/* template name: home */
get_header();
?>

<body>
    <div class="br1"></div>
    <h1 class="title_1">NEGAFA ZIANA LINA</h1>

    <div class="carousel-container">
        <div class="carousel">
            <?php
            // Tableau d'images
            $images = array(
                "https://world-schools.com/fr/wp-content/uploads/sites/13/2023/05/IMG-Academy-cover-WS.webp",
                "https://www.tallahassee.com/gcdn/presto/2018/08/14/PTAL/6e4fff76-595d-4069-9112-cfe15dbfaa43-IMG_Stadium.jpeg?width=660&height=319&fit=crop&format=pjpg&auto=webp",
                "https://www.hollywoodreporter.com/wp-content/uploads/2023/04/IMG-Academy-Stadium.jpg?w=1296",
                // Ajoutez autant d'images que nécessaire
            );

            // Affichage de chaque image
            foreach ($images as $index => $image) {
                echo "<img src='$image' data-index='$index'>";
            }
            ?>
        </div>
        <div class="carousel-navigation">
            <button id="prevBtn">&#10094;</button>
            <button id="nextBtn">&#10095;</button>
        </div>
        <div class="carousel-indicators">
            <?php
            // Affichage des indicateurs
            foreach ($images as $index => $image) {
                echo "<span class='indicator' data-index='$index'></span>";
            }
            ?>
        </div>
    </div>
    <p>test de la page accueil</p>
        <h2>Nos produits les plus vendus</h2>
        <?php echo do_shortcode('[products limit="7" columns="3" best_selling="true"]'); ?>

        <h2>Les nouveautés</h2>
        <?php echo do_shortcode('[products limit="7" columns="3" orderby="id" order="DESC" visibility="visible"]'); ?>

        <h2>Nos différentes catégories</h2>
        <h2>En immersion dans notre boutique</h2>

</body>

<?php
get_footer();
?>

<style>
   .carousel-container {
    position: relative;
    max-width: 100%; /* Largeur maximale du conteneur */
}

.carousel {
    display: flex; /* Affichage en ligne */
    width: 100%; /* Utiliser toute la largeur du conteneur */
    max-width: 920px; /* Largeur maximale du carrousel */
    margin: 0 auto;
    overflow: hidden;
    position: relative;
}

.carousel img {
    width: 100%; /* Utiliser toute la largeur du carrousel */
    height: auto; /* Hauteur automatique pour maintenir le ratio */
    object-fit: cover; /* Redimensionner l'image pour remplir l'espace tout en préservant son ratio */
    display: none; /* Cacher toutes les images par défaut */
}

.carousel img.active {
    display: block; /* Afficher l'image active */
}

/* Style pour les boutons de navigation */
.carousel-navigation {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 80%;
    left: 10%;
    display: flex;
    justify-content: space-between;
}

.carousel-navigation button {
    border: none;
    color: black;
    font-size: 18px;
    cursor: pointer;
    background-color: #fff;
    padding: 6px 14px;
    border-radius: 50%; /* Pour créer des cercles */
    background-color: #f1f1f1; /* Couleur de fond des cercles */
}

/* Style pour les indicateurs */
.carousel-indicators {
    text-align: center;
    margin-top: 10px;
}

.indicator {
    display: inline-block;
    width: 10px;
    height: 10px;
    background-color: #ccc;
    border-radius: 50%;
    margin: 0 5px;
    cursor: pointer;
}

.indicator.active {
    background-color: #555;
}

.title_1 {
    font-family: "Tenor Sans", sans-serif;
    font-weight: 400;
    font-style: normal;
    text-align: center;
    /* Ajoutez une ombre portée au texte */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); /* x-offset y-offset blur-radius color */
}


.br1 {
    height: 120px;
}

body {
    margin: 0;
    padding: 0;
    background-color: #FCDEDC;
}
.tenor-sans-regular {
  font-family: "Tenor Sans", sans-serif;
  font-weight: 400;
  font-style: normal;
}

</style>

<script>
    // JavaScript pour le carrousel automatique et la navigation manuelle
    var currentIndex = 0;
    var images = document.querySelectorAll('.carousel img');
    var indicators = document.querySelectorAll('.indicator');
    var totalImages = images.length;

    function showImage(index) {
        // Masquer toutes les images
        images.forEach(img => img.classList.remove('active'));
        // Afficher l'image correspondante
        images[index].classList.add('active');

        // Mettre à jour l'indicateur actif
        indicators.forEach(indicator => indicator.classList.remove('active'));
        indicators[index].classList.add('active');
    }

    // Afficher la première image
    showImage(currentIndex);

    // Fonction pour afficher l'image précédente
    function prevImage() {
        currentIndex = (currentIndex - 1 + totalImages) % totalImages;
        showImage(currentIndex);
    }

    // Fonction pour afficher l'image suivante
    function nextImage() {
        currentIndex = (currentIndex + 1) % totalImages;
        showImage(currentIndex);
    }

    // Déclencheurs pour les boutons de navigation
    document.getElementById('prevBtn').addEventListener('click', prevImage);
    document.getElementById('nextBtn').addEventListener('click', nextImage);

    // Déclencheurs pour les indicateurs
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            showImage(index);
            currentIndex = index;
        });
    });

    // Carrousel automatique
    var interval = setInterval(nextImage, 4000);
</script>

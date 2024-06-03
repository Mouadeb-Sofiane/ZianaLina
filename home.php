<?php
/* template name: home */
get_header();
?>

<body>
    <div class="full-width-image-container">
        <?php
        // URL de l'image à afficher en plein écran
        $image_url = "https://world-schools.com/fr/wp-content/uploads/sites/13/2023/05/IMG-Academy-cover-WS.webp";
        echo "<img src='$image_url' alt='Negafa Ziana Lina'>";
        ?>
        <div class="title-overlay">
            <h1 class="title_1">NEGAFA ZIANA LINA</h1>
        </div>
    </div>
    
    <p>test de la page accueil</p>

    <h2>Nos produits les plus vendus</h2>
    <div>
        <?php echo do_shortcode('[products limit="3" columns="3" best_selling="true"]'); ?>
    </div>

    <h2>Les nouveautés</h2>
    <div>
        <?php echo do_shortcode('[products limit="3" columns="3" orderby="id" order="DESC" visibility="visible"]'); ?>
    </div>

    <h2>Nos différentes catégories</h2>
    <!-- Affichage de toutes les catégories WooCommerce -->
    <?php
    $categories = get_categories(array(
        'taxonomy'     => 'product_cat',
        'orderby'      => 'name',
        'parent'       => 0,
        'hide_empty'   => false, // Afficher également les catégories vides
    ));

    // Tableau associant chaque catégorie à une URL d'image de fond
    $category_images = array(
        'Hijab' => get_template_directory_uri() . '/img/hijab.png',
        'Robe' => get_template_directory_uri() . '/img/robe.png',
        'Sac à main' => get_template_directory_uri() . '/img/sacmain.png',
        'Bijoux Traditionnels' => get_template_directory_uri() . '/img/bijouxtrad.png',
        'Bijoux' => get_template_directory_uri() . '/img/bijoux.png',
        'Parfums' => get_template_directory_uri() . '/img/parfums.png',
        'Chaussures' => get_template_directory_uri() . '/img/chaussures.png',
        'Caftan' => get_template_directory_uri() . '/img/caftan.png',
        'Abaya' => get_template_directory_uri() . '/img/abaya.png',
        'Ensemble' => get_template_directory_uri() . '/img/ensemble.png',
        'Prêt à porter' => get_template_directory_uri() . '/img/pretaporter.png',
        'Djellaba' => get_template_directory_uri() . '/img/djellaba.png',
        // Ajoutez autant de catégories et d'images que nécessaire
    );

    if ($categories) {
        echo '<ul class="categories-grid">';
        foreach ($categories as $category) {
            // Récupérer l'URL sans le préfixe "categorie-produit"
            $category_link = get_term_link($category, 'product_cat');
            // Supprimer le préfixe "categorie-produit" de l'URL
            $category_link = str_replace('categorie-produit/', '', $category_link);
            // Récupérer l'image de fond associée à la catégorie
            $image_url = isset($category_images[$category->name]) ? $category_images[$category->name] : get_template_directory_uri() . '/img/default_image.png';
            
            // Afficher la catégorie avec l'image de fond
            echo '<li class="category-item">
                    <a href="' . $category_link . '">
                        <div class="category-image" style="background-image: url(' . $image_url . ');"></div>
                        <div class="category-name">' . $category->name . '</div>
                    </a>
                  </li>';
        }
        echo '</ul>';
    } else {
        echo '<p>Aucune catégorie trouvée.</p>';
    }
    ?>

    <h2>En immersion dans notre boutique</h2>
</body>

<?php
get_footer();
?>

<style>
    
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
    /* Style pour les conteneurs de produits */
.products {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-top: 20px;
    gap: 10px;
}

/* Style pour les produits individuels */
.product {
    flex-basis: calc(28% - 20px);
    margin-bottom: 20px;
    background-color: #ffffff;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    align-items: center; /* Centrer les éléments horizontalement */
    position: relative; /* Permet de positionner le prix par rapport à la carte */
}

/* Style pour les images de produits */
.product img {
    width: 70%; /* Ajuster la largeur de l'image */
    height: auto;
    margin-top: 10px;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
}

/* Style pour les titres de produits */
.product h3 {
    font-size: 16px; /* Ajuster la taille du titre */
    margin: 10px;
    text-align: center; /* Centrer le texte */
}

/* Style pour les prix de produits */
.product p {
    position: absolute;
    bottom: 10px;
    left: 10px;
    margin: 0;
    font-size: 14px; /* Ajuster la taille du prix */
    color: #333333;
}

.full-width-image-container {
    position: relative;
    width: 100%;
    overflow: hidden;
    margin-bottom: 20px;
}

.full-width-image-container img {
    width: 100%;
    height: auto;
    display: block;
}

.title-overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: white;
    background-color: rgba(0, 0, 0, 0.5);
    padding: 10px;
    border-radius: 10px;
}

.title_1 {
    font-family: "Tenor Sans", sans-serif;
    font-weight: 400;
    font-style: normal;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    margin: 0;
}

.br1 {
    height: 140px;
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

ul {
    list-style: none;
    padding: 0;
}

.categories-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    justify-content: center;
}

.category-item {
    width: 250px;
    background-color: #FFF;
    border-radius: 10px;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    
}

.category-item a {
    color: white;
    text-decoration: none;
    font-weight: bold;
    display: block;
    width: 100%;
    height: 100%;
    color: inherit;
}

.category-image {
    width: 100%;
    height: 250px;
    background-size: cover;
    background-position: center;
    border-bottom: 1px solid #ddd;
}

.category-name {
    padding: 10px;
    background-color: #000;
    color: #fff;
    width: 100%;
    box-sizing: border-box;
}

.category-name:hover {
    text-decoration: underline;
}

/* Responsive styles */
@media (max-width: 1200px) {
    .category-item {
        width: 220px;
    }
}

@media (max-width: 992px) {
    .category-item {
        width: 200px;
    }
}

@media (max-width: 768px) {
    .category-item {
        width: 180px;
    }
}


/* Ajout d'un espacement en haut et en bas en mode responsive */
@media (max-width: 576px) {
    .full-width-image-container,
    h2,
    .category-item {
        margin-top: 10px;
        margin-bottom: 10px;
    }
}

/* Style pour les conteneurs de produits */
.products {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-top: 20px;
    gap: 10px;
}

/* Style pour les produits individuels */
.product {
    flex-basis: calc(28% - 20px);
    margin-bottom: 20px;
    background-color: #ffffff;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    align-items: center; /* Centrer les éléments horizontalement */
    position: relative; /* Permet de positionner le prix par rapport à la carte */
}

/* Style pour les images de produits */
.product img {
    width: 70%; /* Ajuster la largeur de l'image */
    height: auto;
    margin-top: 10px;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
}

/* Style pour les titres de produits */
.product h3 {
    font-size: 16px; /* Ajuster la taille du titre */
    margin: 10px;
    text-align: center; /* Centrer le texte */
}

/* Style pour les prix de produits */
.product p {
    position: absolute;
    bottom: 10px;
    left: 10px;
    margin: 0;
    font-size: 14px; /* Ajuster la taille du prix */
    color: #333333;
}

/* Responsive styles */
@media (max-width: 992px) {
    .product {
        flex-basis: calc(50% - 20px); /* Deux produits par ligne sur des écrans plus petits */
    }
}

@media (max-width: 576px) {
    .product {
        flex-basis: 100%; /* Un produit par ligne sur des écrans très petits */
    }
}

</style>

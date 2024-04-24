<?php 
// Ajouter un support de fonctionnalités de thème
add_action('after_setup_theme', 'theme_setup');
function theme_setup()
{
    add_theme_support('woocommerce');
}

// Personnaliser la page d'archive des produits
add_filter('template_include', 'custom_archive_product_template');
function custom_archive_product_template($template)
{
    if (is_post_type_archive('product')) {
        $new_template = locate_template(array('archive-produit.php'));
        if ('' != $new_template) {
            return $new_template;
        }
    }
    return $template;
}

// Personnaliser la page individuelle des produits
add_filter('template_include', 'custom_single_product_template');
function custom_single_product_template($template)
{
    if (is_singular('product')) {
        $new_template = locate_template(array('single-produit.php'));
        if ('' != $new_template) {
            return $new_template;
        }
    }
    return $template;
}

  function thememonsite_setup() {
    // Ajout du support pour les images mises en avant
    add_theme_support( 'post-thumbnails' );
    // Ajout du support pour le titre du site
    add_theme_support( 'title-tag' );
    // Ajout du support pour rendre le code valide en HTML 5
    add_theme_support( 
      'html5', 
      array( 
        'comment-list', 
        'comment-form', 
        'search-form', 
        'gallery', 
        'caption',
        'style',
        'script'
      ) );

      // Ajout du support pour les menus
    register_nav_menus( 
        array(
          'main' => 'Menu Principal',
          'footer' => 'Menu footer',
         

        )
      );

  }



//   function process_contact_form() {
//     // Vérifie si le formulaire a été soumis
//     if ( isset($_POST['action']) && $_POST['action'] == 'process_contact_form' ) {
//         // Récupère les données du formulaire
//         $name = sanitize_text_field( $_POST['name'] );
//         $email = sanitize_email( $_POST['email'] );
//         $subject = sanitize_text_field( $_POST['subject'] );
//         $message = sanitize_textarea_field( $_POST['message'] );

//         // Construit le contenu de l'e-mail
//         $to = 'enestavukcu2525@gmail.com'; // Remplacez par votre adresse e-mail
//         $subject = 'Nouveau message de ' . $name . ' via le formulaire de contact';
//         $body = 'Nom: ' . $name . "\n\n";
//         $body .= 'Email: ' . $email . "\n\n";
//         $body .= 'Sujet: ' . $subject . "\n\n";
//         $body .= 'Message: ' . $message;

//         // Envoie l'e-mail
//         $result = wp_mail( $to, $subject, $body );

//         // Redirige l'utilisateur en fonction du résultat de l'envoi de l'e-mail
//         if ( $result ) {
//             // Succès : Redirige vers une page de confirmation
//             wp_redirect( home_url( '/contact' ) );
//             exit;
//         } else {
//             // Erreur : Redirige vers une page d'erreur
//             wp_redirect( home_url( '/erreur-denvoi' ) );
//             exit;
//         }
//     }
// }
// add_action( 'admin_post_process_contact_form', 'process_contact_form' );
// add_action( 'admin_post_nopriv_process_contact_form', 'process_contact_form' );









  
  add_action( 'after_setup_theme', 'thememonsite_setup' );



    function thememonsite_script() {


      // Ajout du fichier style.css
      wp_enqueue_style( 'style', get_stylesheet_uri());
      // Ajout du fichier main.js
     // wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
    }
    add_action( 'wp_enqueue_scripts', 'thememonsite_script' );

    
    function groupe_champs_projet($nomGroupe, $projet) {
      echo '<fieldset>';
      echo '<legend>' . $projet . '</legend>';
      //
      // Ajoutez d'autres champs spécifiques à votre formulaire ici
      
      echo '</fieldset>';
    }
  
  




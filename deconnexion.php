<?php
/* Template Name: Déconnexion */
  get_header();  
?>
<div class="br1"></div>
<h1>Déconnexion</h1>
<?php
wp_logout();
wp_redirect(home_url());
exit;
?>
<?php get_footer(); ?>
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
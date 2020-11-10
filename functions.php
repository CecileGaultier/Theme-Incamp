<?php 


//Ajoute le nom de l'article ou de la page de manière dynamique
function montheme_supports () {
    add_theme_support('title-tag'); 
}

//Déclare des importations
function montheme_registers_assets() {
    wp_register_style('bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    //Lie la bibliothèque Bootstrap à Popper, Jquery -> ne peuvent pas être importé avant Bootstrap
    wp_register_script('bootstrap','https://code.jquery.com/jquery-3.3.1.slim.min.js', ['popper','jquery'], [], false, true);
    wp_register_script('popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', [], false, true);
    wp_register_script('jquery','https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

//Lance les importations
add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts','montheme_registers_assets');


?>

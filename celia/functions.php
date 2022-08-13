<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');

// Définir la taille des images mises en avant
set_post_thumbnail_size(2000, 400, true);

// Définir d'autres tailles d'images
add_image_size('products', 800, 600, false);
add_image_size('square', 256, 256, false);
// pour appeler l'image a la bonne taille => the_post_thumbnail('square');

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');

// Configuration du thème
require_once get_template_directory() . '/inc/config.php';

// Types de publication et taxonomies
require_once get_template_directory() . '/inc/post-types.php';

// Fonctionnalités
require_once get_template_directory() . '/inc/features.php';


// handle = nom fichier
// adresse du fichier avec get_template_directoru_uri
// dependance dans un tableau array avec le handle des scripts/styles qui devront être chargé avant
// numéro de version
// boolen si true script chargé en bas de page, si false chargé en haut
function celia_register_assets()
{
 // Déclarer jQuery
 wp_enqueue_script('jquery');

 // Déclarer le JS
 wp_enqueue_script(
  'celia_js_global',
  get_template_directory_uri() . '/assets/js/global.js',
  array('jquery'),
  '1.0',
  true
 );

 wp_enqueue_script(
  'celia_js_index',
  get_template_directory_uri() . '/assets/js/index.js',
  array('jquery'),
  '1.0',
  true
 );

 // Seulement sur la page d'accueil
 // if (is_front_page()) {
 //  wp_enqueue_script(
 //   'diaporama',
 //   get_template_directory_uri() . '/js/diaporama.js',
 //   array('jquery'),
 //   '1.0',
 //   true
 //  );
 // }

 // Déclarer le CSS
 wp_enqueue_style(
  'celia_global',
  get_template_directory_uri() . '/assets/css/global.css',
  array(),
  '1.0'
 );

 wp_enqueue_style(
  'celia_index',
  get_template_directory_uri() . '/assets/css/index.css',
  array(),
  '1.0'
 );

 wp_enqueue_style(
  'celia_main',
  get_template_directory_uri() . '/assets/css/main.css',
  array(),
  '1.0'
 );
}
add_action('wp_enqueue_scripts', 'celia_register_assets');

// Déclaration pour emplacement de menu
register_nav_menus(array(
 'nav_left' => 'Menu à gauche',
 'nav_right' => 'Menu à droite',
 'footer' => 'Bas de page',
));

// Rajouter des classes sur les a du header
function add_additional_class_on_a($classes, $item, $args)
{
 if (isset($args->add_a_class)) {
  $classes['class'] = $args->add_a_class;
 }
 return $classes;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

// Déclarer une sidebar
register_sidebar(array(
 'id' => 'blog-sidebar',
 'name' => 'Blog',
 'before_widget'  => '<div class="site__sidebar__widget %2$s">',
 'after_widget'  => '</div>',
 'before_title' => '<p class="site__sidebar__widget__title">',
 'after_title' => '</p>',
));


function celia_register_post_types()
{
 // CPT Livres
 $labels = array( // defini les phrases dans l'admin WP
  'name' => 'Livres',
  'all_items' => 'Tous les livres',  // affiché dans le sous menu
  'singular_name' => 'Livre',
  'add_new_item' => 'Ajouter un livre',
  'edit_item' => 'Modifier le livre',
 );

 $args = array(
  'labels' => $labels,
  'public' => true,
  'show_in_rest' => true,
  'has_archive' => true,
  'supports' => array('title', 'editor', 'thumbnail'),
  'menu_position' => 5,
  'menu_icon' => 'dashicons-book',
 );

 register_post_type('livres', $args);

 // Déclaration de la Taxonomie
 $labels = array(
  'name' => 'Catégories',
  'new_item_name' => 'Nouvelle catégorie',
 );

 $args = array(
  'labels' => $labels,
  'public' => true,
  'show_in_rest' => true,
  // 'hierarchical' => true,
 );

 register_taxonomy('categorie', 'livres', $args);
}
add_action('init', 'celia_register_post_types');

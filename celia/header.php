<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
 <meta charset="<?php bloginfo('charset'); ?>">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
 <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

 <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

 <?php wp_body_open(); ?>

 <header>
  <section class="global_header">
   <section class="global_navbar">
    <nav id="navbar_left">
     <?php wp_nav_menu(array(
      'theme_location'  => 'nav_left',
      'container' => 'ul',
      'menu_class' => 'navbar_ul',
      'add_a_class' => 'navlink',
     )); ?>
    </nav>
    <div id="navbar_logo"><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Logo" alt="Logo Célia"></a></div>
    <nav id="navbar_right">
     <?php wp_nav_menu(array(
      'theme_location'  => 'nav_right',
      'container' => 'ul',
      'menu_class' => 'navbar_ul',
      'add_a_class' => 'navlink',
     )); ?>
    </nav>
   </section>
  </section>
 </header>
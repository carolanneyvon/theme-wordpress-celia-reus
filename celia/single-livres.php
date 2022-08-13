<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <?php if (have_rows('livre')) : while (have_rows('livre')) : the_row() ?>
    <div class="home_titre_container">
     <h1 class="home_titre_h1"><?php the_sub_field('titre_livre') ?></h1>
    </div>
    <div class="home_up_livre">
     <img class="" src="<?php the_sub_field('image') ?>" alt="">
    </div>

    <div class="home_up_livre_text">
     <div class="home_up_livre_text_container">
      <div class="home_up_livre_surtitre"><?php the_sub_field('tagline') ?></div>
      <div class="home_up_livre_titre"><?php the_sub_field('titre_section') ?></div>
      <div class="home_up_livre_desc"><?php the_sub_field('resume') ?></div>
     </div>
    </div>

  <?php endwhile;
  endif ?>


<?php endwhile;
endif; ?>

<?php
$posts = get_field('meme_saga'); // Slug du champ relationnel
if ($posts) :
?>
 <h2>Vous aimerez aussi</h2>
 <ul class="meme_saga">
  <?php
  foreach ($posts as $post) : // Le nom $post est IMPORTANT
   setup_postdata($post); // Initialiser les données (comme la boucle WP)
  ?>
   <li class="meme_saga__post">
    <a href="<?php the_permalink(); ?>">
     <?php the_post_thumbnail('thumbnail'); ?>
     <h3><?php the_title(); ?></h3>
    </a>
   </li>
  <?php
  endforeach;
  wp_reset_postdata(); // IMPORTANT – réinitialise $post
  ?>
 </ul>
<?php endif; ?>

<?php
$posts = get_field('meme_univers'); // Slug du champ relationnel
if ($posts) :
?>
 <h2>Vous aimerez</h2>
 <ul class="meme_univers">
  <?php
  foreach ($posts as $post) : // Le nom $post est IMPORTANT
   setup_postdata($post); // Initialiser les données (comme la boucle WP)
  ?>
   <li class="meme_univers__post">
    <a href="<?php the_permalink(); ?>">
     <?php the_post_thumbnail('thumbnail'); ?>
     <h3><?php the_title(); ?></h3>
    </a>
   </li>
  <?php
  endforeach;
  wp_reset_postdata(); // IMPORTANT – réinitialise $post
  ?>
 </ul>
<?php endif; ?>
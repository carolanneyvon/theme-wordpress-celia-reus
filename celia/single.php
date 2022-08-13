<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article class="post">

      <h1><?php the_title(); ?></h1>

      <?php if (has_post_thumbnail()) : ?>
        <div class="post__thumbnail">
          <?php the_post_thumbnail(); ?>
        </div>
      <?php endif; ?>

      <div class="post__meta">
        <?php echo get_avatar(get_the_author_meta('ID'), 40); ?>
        <p>
          Publié le <?php the_date(); ?>
          par <?php the_author(); ?>
          Dans la catégorie <?php the_category(); ?>
          Avec les étiquettes <?php the_tags(); ?>
        </p>
      </div>

      <div class="post__content">
        <?php the_content(); ?>
      </div>
    </article>

<?php endwhile;
endif; ?>

<?php if (has_category('jeu-video')) : ?>

  <div class="review">
    <div class="review__score">Note : <?php the_field('note'); ?> / 10</div>

    <div class="review__cols">
      <div class="review__pros">Les plus : <?php the_field('les_plus'); ?></div>
      <div class="review__cons">Les moins : <?php the_field('les_moins'); ?></div>
    </div>

    <div class="review__date">Sortie le <?php the_field('date_de_sortie'); ?></div>
    <div class="review__prix">Prix : <?php the_field('prix'); ?> €</div>

    <?php

    $image_id = get_field('pochette');
    if ($image_id) {
      echo wp_get_attachment_image($image_id, 'thumbnail');
    }
    ?>

  </div>

<?php endif; ?>


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
          <p>Préparation : <?php the_field('duration'); ?></p>
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
          <p>Préparation : <?php the_field('duration'); ?></p>
        </a>
      </li>
    <?php
    endforeach;
    wp_reset_postdata(); // IMPORTANT – réinitialise $post
    ?>
  </ul>
<?php endif; ?>

<!-- pagination entre articles -->
<div class="site__navigation">
  <div class="site__navigation__prev">
    <?php previous_post_link('Article Précédent<br>%link'); ?>
  </div>
  <div class="site__navigation__next">
    <?php next_post_link('Article Suivant<br>%link'); ?>
  </div>
</div>

<?php get_template_part('parts/newsletter'); ?>
<?php get_footer(); ?>
<?php get_header(); ?>
<?php
// conditional tags 
if (is_category()) {
  $title = "Catégorie : " . single_tag_title('', false);
} elseif (is_tag()) {
  $title = "Étiquette : " . single_tag_title('', false);
} elseif (is_search()) {
  $title = "Vous avez recherché : " . get_search_query();
} else {
  $title = 'Le Blog';
}
?>
<h1><?php echo $title; ?></h1>


<div class="site__blog">
  <main class="site__content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article class="post">
          <h2><?php the_title(); ?></h2>

          <?php the_post_thumbnail(); ?>

          <p class="post__meta">
            Publié le <?php the_time(get_option('date_format')); ?>
            par <?php the_author(); ?> • <?php comments_number(); ?>
          </p>

          <?php the_excerpt(); ?>

          <p>
            <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
          </p>
        </article>
    <?php endwhile;
    endif; ?>

    <!-- pour la pagination -->
    <div class="site__navigation">
      <div class="site__navigation__prev">
        <?php previous_posts_link('Page Précédente'); ?>
      </div>
      <div class="site__navigation__next">
        <!-- pour enlever les " on remplace: next_posts_link(); par -->
        <?php next_posts_link('Page Suivante'); ?>
      </div>
    </div>

    <!-- navigation paginée: the_posts_pagination(); -->
  </main>

  <aside class="site__sidebar">
    <?php dynamic_sidebar('blog-sidebar'); ?>
  </aside>
</div>

<?php get_footer(); ?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <main>
      <section class="global_main">
        <section class="home_titre">
          <?php if (have_rows('accueil')) : while (have_rows('accueil')) : the_row() ?>
              <div class="home_titre_container">
                <h1 class="home_titre_h1"><?php the_sub_field('titre_accueil') ?></h1>
              </div>
              <div class="home_titre_texte">
                <p>
                  <span><?php the_sub_field('texte_accueil') ?></span>
                </p>
              </div>
          <?php endwhile;
          endif ?>
          <div class="home_titre_bouton">
            <a class="home_titre_btn" href="<?php echo home_url('/livres'); ?>">
              <span>Découvrir</span>
            </a>
          </div>
        </section>


        <section class="home_prochainement">
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <?php if (have_rows('carrousel_1')) : while (have_rows('carrousel_1')) : the_row() ?>
                  <div class="swiper-slide">
                    <div class="home_up_container">
                      <div class="home_up_livre">
                        <img class="home_up_livre_img" src="<?php the_sub_field('livre') ?>" alt="">
                      </div>
                      <div class="home_up_livre_text">
                        <div class="home_up_livre_text_container">
                          <div class="home_up_livre_surtitre"><?php the_sub_field('titre') ?></div>
                          <div class="home_up_livre_titre"><?php the_sub_field('titre_saga') ?> <br> <?php the_sub_field('titre_livre') ?></div>
                          <div class="home_up_livre_subtitre"><?php the_sub_field('genre') ?></div>
                          <div class="home_up_livre_desc"><?php the_sub_field('resume') ?></div>
                          <div class="home_up_livre_date"><?php the_sub_field('date_de_sortie') ?></div>
                          <div class="home_up_livre_type"><?php the_sub_field('formats') ?></div>
                        </div>
                      </div>
                    </div>
                  </div>
              <?php endwhile;
              endif ?>
              <?php if (have_rows('carrousel_2')) : while (have_rows('carrousel_2')) : the_row() ?>
                  <div class="swiper-slide">
                    <div class="home_up_container">
                      <div class="home_up_livre">
                        <img class="home_up_livre_img" src="<?php the_sub_field('livre') ?>" alt="">
                      </div>
                      <div class="home_up_livre_text">
                        <div class="home_up_livre_text_container">
                          <div class="home_up_livre_surtitre"><?php the_sub_field('titre') ?></div>
                          <div class="home_up_livre_titre"><?php the_sub_field('titre_saga') ?> <br> <?php the_sub_field('titre_livre') ?> </div>
                          <div class="home_up_livre_subtitre"><?php the_sub_field('genre') ?></div>
                          <div class="home_up_livre_desc"><?php the_sub_field('resume') ?></div>
                          <div class="home_up_livre_date"><?php the_sub_field('date_de_sortie') ?></div>
                          <div class="home_up_livre_type"><?php the_sub_field('formats') ?></div>
                        </div>
                      </div>
                    </div>
                  </div>
              <?php endwhile;
              endif ?>
            </div>
            <div class="swiper-boutton-next"></div>
            <div class="swiper-boutton-prev"></div>
          </div>
        </section>

        <section class="home_parution">
          <?php if (have_rows('dernieres_parutions')) : while (have_rows('dernieres_parutions')) : the_row() ?>
              <div class="home_par_container">
                <div class="home_par_row">
                  <div class="home_par_titre">
                    <h3><?php the_sub_field('titre') ?></h3>
                  </div>
                  <div class="home_par_books_panel">
                    <div class="home_par_books_panel_container">
                      <div class="home_par_panel_item">
                        <a href="#" class="home_par_panel_item_wrap is_book_panel_trigger  selected" data-panel_show="001">
                          <div class="home_par_panel_item_img_wrap book_tips">
                            <img width="267" height="400" class="home_par_panel_item_thumb_book" src="<?php the_sub_field('image_1') ?>" alt="">
                          </div>
                          <h2 class="home_par_panel_item_thumb_titre"><?php the_sub_field('titre_1') ?></h2>
                        </a>
                      </div>
                      <div class="home_par_panel_item">
                        <a href="#" class="home_par_panel_item_wrap is_book_panel_trigger" data-panel_show="002">
                          <div class="home_par_panel_item_img_wrap book_tips">
                            <img width="267" height="400" class="home_par_panel_item_thumb_book" src="<?php the_sub_field('image_2') ?>" alt="">
                          </div>
                          <h2 class="home_par_panel_item_thumb_titre"><?php the_sub_field('titre_2') ?></h2>
                        </a>
                      </div>
                      <div class="home_par_panel_item">
                        <a href="#" class="home_par_panel_item_wrap is_book_panel_trigger" data-panel_show="003">
                          <div class="home_par_panel_item_img_wrap book_tips">
                            <img width="267" height="400" class="home_par_panel_item_thumb_book" src="<?php the_sub_field('image_3') ?>" alt="">
                          </div>
                          <h2 class="home_par_panel_item_thumb_titre"><?php the_sub_field('titre_3') ?></h2>
                        </a>
                      </div>
                      <div class="home_par_panel_item">
                        <a href="#" class="home_par_panel_item_wrap is_book_panel_trigger" data-panel_show="004">
                          <div class="home_par_panel_item_img_wrap book_tips">
                            <img width="267" height="400" class="home_par_panel_item_thumb_book" src="<?php the_sub_field('image_4') ?>" alt="">
                          </div>
                          <h2 class="home_par_panel_item_thumb_titre"><?php the_sub_field('titre_4') ?></h2>
                        </a>
                      </div>
                      <div class="home_par_panel_item">
                        <a href="#" class="home_par_panel_item_wrap is_book_panel_trigger" data-panel_show="005">
                          <div class="home_par_panel_item_img_wrap book_tips">
                            <img width="267" height="400" class="home_par_panel_item_thumb_book" src="<?php the_sub_field('image_5') ?>" alt="">
                          </div>
                          <h2 class="home_par_panel_item_thumb_titre"><?php the_sub_field('titre_5') ?></h2>
                        </a>
                      </div>
                      <div class="home_par_panel_item">
                        <a href="#" class="home_par_panel_item_wrap is_book_panel_trigger" data-panel_show="006">
                          <div class="home_par_panel_item_img_wrap book_tips">
                            <img width="267" height="400" class="home_par_panel_item_thumb_book" src="<?php the_sub_field('image_6') ?>" alt="">
                          </div>
                          <h2 class="home_par_panel_item_thumb_titre"><?php the_sub_field('titre_6') ?></h2>
                        </a>
                      </div>
                    </div>
                    <div class="home_par_books_panel_info">
                      <div class="home_par_books_panel_info_inner show visible" data-panel_id="001">
                        <a class="home_par_books_panel_info_inner_titre_link" href="#">
                          <h2 class="home_par_books_panel_info_inner_titre"><?php the_sub_field('titre_1') ?></h2>
                        </a>
                        <div class="home_par_books_panel_info_inner_category">
                          <span class="home_par_books_panel_info_inner_category_dash"></span>
                          <div class="home_par_books_panel_info_inner_category_link">
                            <a href="#"><?php the_sub_field('genre_1') ?></a>
                          </div>
                        </div>
                        <div class="home_par_books_panel_info_inner_description">
                          <p><?php the_sub_field('resume_1') ?></p>
                          <p class="home_par_books_panel_info_inner_description_btn">
                            <?php if ($action = get_sub_field('bouton_voir_livre_1')) : ?>
                              <a class="btn_voir_livre" href="<?= $action['url'] ?>">
                                <?= $action['title']; ?>
                              </a>
                            <?php endif ?>
                            <?php if ($action = get_sub_field('bouton_voir_saga_1')) : ?>
                              <a class="btn_voir_saga" href="<?= $action['url'] ?>">
                                <?= $action['title']; ?>
                              </a>
                            <?php endif ?>
                          </p>
                        </div>
                      </div>
                      <div class="home_par_books_panel_info_inner " data-panel_id="002">
                        <a class="home_par_books_panel_info_inner_titre_link" href="#">
                          <h2 class="home_par_books_panel_info_inner_titre"><?php the_sub_field('titre_2') ?></h2>
                        </a>
                        <div class="home_par_books_panel_info_inner_category">
                          <span class="home_par_books_panel_info_inner_category_dash"></span>
                          <div class="home_par_books_panel_info_inner_category_link">
                            <a href="#"><?php the_sub_field('genre_2') ?></a>
                          </div>
                        </div>
                        <div class="home_par_books_panel_info_inner_description">
                          <p><?php the_sub_field('resume_2') ?></p>
                          <p class="home_par_books_panel_info_inner_description_btn">
                            <?php if ($action = get_sub_field('bouton_voir_livre_2')) : ?>
                              <a class="btn_voir_livre" href="<?= $action['url'] ?>">
                                <?= $action['title']; ?>
                              </a>
                            <?php endif ?>
                            <?php if ($action = get_sub_field('bouton_voir_saga_2')) : ?>
                              <a class="btn_voir_saga" href="<?= $action['url'] ?>">
                                <?= $action['title']; ?>
                              </a>
                            <?php endif ?>
                          </p>
                        </div>
                      </div>
                      <div class="home_par_books_panel_info_inner " data-panel_id="003">
                        <a class="home_par_books_panel_info_inner_titre_link" href="#">
                          <h2 class="home_par_books_panel_info_inner_titre"><?php the_sub_field('titre_3') ?></h2>
                        </a>
                        <div class="home_par_books_panel_info_inner_category">
                          <span class="home_par_books_panel_info_inner_category_dash"></span>
                          <div class="home_par_books_panel_info_inner_category_link">
                            <a href="#"><?php the_sub_field('genre_3') ?></a>
                          </div>
                        </div>
                        <div class="home_par_books_panel_info_inner_description">
                          <p><?php the_sub_field('resume_3') ?></p>
                          <p class="home_par_books_panel_info_inner_description_btn">
                            <?php if ($action = get_sub_field('bouton_voir_livre_3')) : ?>
                              <a class="btn_voir_livre" href="<?= $action['url'] ?>">
                                <?= $action['title']; ?>
                              </a>
                            <?php endif ?>
                            <?php if ($action = get_sub_field('bouton_voir_saga_3')) : ?>
                              <a class="btn_voir_saga" href="<?= $action['url'] ?>">
                                <?= $action['title']; ?>
                              </a>
                            <?php endif ?>
                          </p>
                        </div>
                      </div>
                      <div class="home_par_books_panel_info_inner " data-panel_id="004">
                        <a class="home_par_books_panel_info_inner_titre_link" href="#">
                          <h2 class="home_par_books_panel_info_inner_titre"><?php the_sub_field('titre_4') ?></h2>
                        </a>
                        <div class="home_par_books_panel_info_inner_category">
                          <span class="home_par_books_panel_info_inner_category_dash"></span>
                          <div class="home_par_books_panel_info_inner_category_link">
                            <a href="#"><?php the_sub_field('genre_4') ?></a>
                          </div>
                        </div>
                        <div class="home_par_books_panel_info_inner_description">
                          <p><?php the_sub_field('resume_4') ?></p>
                          <p class="home_par_books_panel_info_inner_description_btn">
                            <?php if ($action = get_sub_field('bouton_voir_livre_4')) : ?>
                              <a class="btn_voir_livre" href="<?= $action['url'] ?>">
                                <?= $action['title']; ?>
                              </a>
                            <?php endif ?>
                            <?php if ($action = get_sub_field('bouton_voir_saga_4')) : ?>
                              <a class="btn_voir_saga" href="<?= $action['url'] ?>">
                                <?= $action['title']; ?>
                              </a>
                            <?php endif ?>
                          </p>
                        </div>
                      </div>
                      <div class="home_par_books_panel_info_inner " data-panel_id="005">
                        <a class="home_par_books_panel_info_inner_titre_link" href="#">
                          <h2 class="home_par_books_panel_info_inner_titre"><?php the_sub_field('titre_5') ?></h2>
                        </a>
                        <div class="home_par_books_panel_info_inner_category">
                          <span class="home_par_books_panel_info_inner_category_dash"></span>
                          <div class="home_par_books_panel_info_inner_category_link">
                            <a href="#"><?php the_sub_field('genre_5') ?></a>
                          </div>
                        </div>
                        <div class="home_par_books_panel_info_inner_description">
                          <p><?php the_sub_field('resume_5') ?></p>
                          <p class="home_par_books_panel_info_inner_description_btn">
                            <?php if ($action = get_sub_field('bouton_voir_livre_5')) : ?>
                              <a class="btn_voir_livre" href="<?= $action['url'] ?>">
                                <?= $action['title']; ?>
                              </a>
                            <?php endif ?>
                            <?php if ($action = get_sub_field('bouton_voir_saga_5')) : ?>
                              <a class="btn_voir_saga" href="<?= $action['url'] ?>">
                                <?= $action['title']; ?>
                              </a>
                            <?php endif ?>
                          </p>
                        </div>
                      </div>
                      <div class="home_par_books_panel_info_inner " data-panel_id="006">
                        <a class="home_par_books_panel_info_inner_titre_link" href="#">
                          <h2 class="home_par_books_panel_info_inner_titre"><?php the_sub_field('titre_6') ?></h2>
                        </a>
                        <div class="home_par_books_panel_info_inner_category">
                          <span class="home_par_books_panel_info_inner_category_dash"></span>
                          <div class="home_par_books_panel_info_inner_category_link">
                            <a href="#"><?php the_sub_field('genre_6') ?></a>
                          </div>
                        </div>
                        <div class="home_par_books_panel_info_inner_description">
                          <p><?php the_sub_field('resume_6') ?></p>
                          <p class="home_par_books_panel_info_inner_description_btn">
                            <?php if ($action = get_sub_field('bouton_voir_livre_6')) : ?>
                              <a class="btn_voir_livre" href="<?= $action['url'] ?>">
                                <?= $action['title']; ?>
                              </a>
                            <?php endif ?>
                            <?php if ($action = get_sub_field('bouton_voir_saga_6')) : ?>
                              <a class="btn_voir_saga" href="<?= $action['url'] ?>">
                                <?= $action['title']; ?>
                              </a>
                            <?php endif ?>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          <?php endwhile;
          endif ?>
        </section>
        <section class="home_rencontre">
          <?php if (have_rows('prochaines_rencontres')) : while (have_rows('prochaines_rencontres')) : the_row() ?>
              <div class="home_ren_container">
                <div class="home_ren_titre">
                  <h3><?php the_sub_field('titre') ?></h3>
                </div>
                <div class="home_ren_panel_container">
                  <div class="home_ren_panel_date">
                    <div class="home_ren_panel_date_time"><?php the_sub_field('date') ?></div>
                    <div class="home_ren_panel_date_map"><?php the_sub_field('lieu') ?></div>
                    <div class="home_ren_panel_date_city"><?php the_sub_field('ville') ?></div>
                  </div>
                  <div class="home_ren_panel_author">
                    <img class="home_ren_panel_author_img" src="<?php the_sub_field('photo') ?>" alt="">
                  </div>
                </div>
                <div class="home_ren_btn">
                  <a class="btn_rencontre" href="<?php echo home_url('/rencontres'); ?>">
                    <span>Rencontres</span>
                  </a>
                </div>
              </div>
          <?php endwhile;
          endif ?>
        </section>
      </section>
    </main>

<?php endwhile;
endif; ?>


<?php get_footer(); ?>
<footer>
    <section class="global_footer">
        <div class="footer">
            <div class="footer_commande">
                <p> Tous les livres & carnets de Célia Réus sont disponibles en commande dans les librairies de France, ainsi
                    que
                    sur Internet (Amazon, Cultura, Fnac, Décitre, Chapitre...).<br>N’hésitez pas à demander à votre libraire
                    préféré de
                    le commander : les livres ont le même prix partout !</p>
            </div>

            <div class="footer_center">
                <div class="footer_left">
                    <div class="footer_newsletter">
                        <h3>Newsletter</h3>
                        <p>Fais le plein de bonus & profite d’infos en avant-première !<br> Les abonnés de la newsletter ont aussi
                            accès
                            aux trois premiers chapitres de tous les romans, à une nouvelle entièrement gratuite & à des
                            bibliothèques de
                            bonus (lecteurs) et de ressources (auteurs).</p>
                    </div>
                    <form action="#" class="footer_form">
                        <div class="footer_prenom">
                            <input type="text" placeholder="Prénom" required>
                        </div>
                        <div class="footer_email">
                            <input type="email" placeholder="Adresse Email" required>
                        </div>
                        <div class="footer_btn_container">
                            <a class="footer_btn" href="#">
                                <span> S'inscrire </span>
                            </a>
                        </div>
                    </form>
                </div>

                <div class="footer_middle">
                    <div class="footer_saga_carnet">
                        <div class="footer_saga">
                            <h3><a href="<?php echo home_url('/'); ?>">Sagas</a></h3>
                            <div class="footer_liste">
                                <a href="<?php echo home_url('/saga-selena'); ?>">Séléna</a>
                                <a href="<?php echo home_url('/saga-nostri'); ?>">Nostri</a>
                            </div>
                        </div>

                        <div class="footer_carnet">
                            <h3><a href="<?php echo home_url('/carnets'); ?>">Carnets</a></h3>
                            <div class="footer_liste">
                                <a href="<?php echo home_url('/'); ?>">Lecteurs</a>
                                <a href="<?php echo home_url('/'); ?>">Auteurs</a>
                            </div>
                        </div>
                    </div>

                    <div class="footer_renc_paru">
                        <div class="footer_all_books">
                            <h3><a href="<?php echo home_url('/livres'); ?>">Tous les livres</a></h3>
                        </div>
                        <div class="footer_rencontre">
                            <h3><a href="<?php echo home_url('/rencontres'); ?>">Prochaines rencontres</a></h3>
                        </div>
                        <div class="footer_parution">
                            <h3><a href="<?php echo home_url('/parutions'); ?>">Prochaines parutions</a></h3>
                        </div>
                    </div>
                </div>

                <div class="footer_right">
                    <div class="footer_reseaux">
                        <h3>Retrouve moi sur ...</h3>
                        <div class="footer_reseau_img">
                            <a href="<?php echo home_url('/'); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.png" alt="logo instagram"></a>
                            <a href="<?php echo home_url('/'); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/amazon.png" alt="logo amazon"></a>
                            <a href="<?php echo home_url('/'); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/booknode.png" alt="logo booknode"></a>
                            <a href="<?php echo home_url('/'); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/goodreads.png" alt="logo goodreads"></a>
                        </div>
                    </div>

                    <div class="footer_logo">
                        <a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="logo Célia Réus"></a>
                    </div>
                </div>
            </div>

            <div class="footer_legal">
                <a href="<?php echo home_url('/'); ?>">Politique de confidentialité</a>
                <span>© Copyright 2022 - Tous droits réservés</span>
                <a href="<?php echo home_url('/'); ?>">Conditions générales de vente</a>
            </div>
        </div>
    </section>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.hoverintent/1.10.2/jquery.hoverIntent.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<?php wp_footer(); ?>

</body>

</html>
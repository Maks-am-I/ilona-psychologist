            <section id="callback" class="callback container">
            <h2>Richiedi appuntamento</h2>
            <!-- <p>
                Would you like to discuss your project or get 
                a consultation? Fill out the form, and our team 
                will get back to you as soon as possible
            </p> -->
            <div class="callback__form form">
                <?php echo do_shortcode('[wpforms id="166" title="false"]'); ?>
                <!-- <div class="callback__name">
                    <label for="name" title="Nome, Cognome">Nome, Cognome</label>
                    <input type="text" name="name" id="name" required>
                </div>
                
                <div class="callback__email">
                    <label for="email" title="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>
                
                <div class="callback__phone">
                    <label for="phone" title="telefono">Telefono</label>
                    <input type="tel" name="phone" id="phone" required>
                </div>
                
                <div class="form__radio">
                    <span>Tipologia di consulenza:</span>
                    
                    <label class="custom-radio">
                        <input type="radio" name="type-consulting" id="in-studio" value="in studio">
                        <span class="radio-icon"></span>
                        <span class="radio-text">In Studio</span>
                    </label>

                    <label class="custom-radio">
                        <input type="radio" name="type-consulting" id="online" value="online">
                        <span class="radio-icon"></span>
                        <span class="radio-text">Consulenza online</span>
                    </label>
                </div>
                
                <textarea class="callback__textarea" placeholder="Messaggio" name="message" id="message"></textarea>

                <button class="callback__submit" type="submit">Invia</button>

                <div class="form__permission">
                    <label class="custom-radio">
                        <input type="checkbox" name="permission" id="permission" required>
                        <span class="radio-icon"></span>
                        <span lass="radio-text">Accetto. Do il consenso ai sensi dell' 
                        art. 13 Dlgs 196/2003 in materia di protezione dei dati 
                        personali</span>
                    </label>
                </div> -->
                
            </div>
        </section>
        <section class="contacts container" id="contact">
            <h2>Contatti</h2>
            
            <a class="contacts__phone" href="tel:<?php echo the_field('phone'); ?>">Cell. <span><?php the_field('phone'); ?></span></a>
            <a class="contacts__mail" href="mailto:<?php echo the_field('email')?>"><?php the_field('email'); ?></a>
            
            <address>
                <?php 
                    $link = get_field('address');
                    if( $link ) {
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                ?>
                    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="_blank"><?php echo $link_title ; ?></a>
                <?php } ?>
            </address>
            <p>
                Prego di non contattarmi a fini commerciali e/o pubblicitari. <br>
                NON svolgo consulenze psicologiche telefoniche o via mail
            </p>
            <div class="contacts__messangers">
                <?php 
                    $linkTelegram = get_field('telegram');
                    $linkInstagram = get_field('instagram');
                    $linkFacebook = get_field('facebook');
                    $linkYoutube = get_field('youtube');
                    $linkTiktok = get_field('tiktok');
                    $linkLinkedin = get_field('linkedin');
                    $linkWhatsapp = get_field('whatsapp');
                    if( $link ): ?>
                        <a href="<?php echo esc_url( $linkTelegram ); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/assets/icons/telegram.svg" alt="tg">
                        </a>
                <?php endif; ?>
                <?php if ( $linkInstagram ): ?>
                    <a href="<?php echo esc_url( $linkInstagram ); ?>">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icons/instagram.svg" alt="inst">
                    </a>
                <?php endif; ?>
                <?php if ( $linkFacebook ): ?>
                    <a href="<?php echo esc_url( $linkFacebook ); ?>">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icons/facebook.svg" alt="inst">
                    </a>
                <?php endif; ?>
                <?php if ( $linkYoutube ): ?>
                    <a href="<?php echo esc_url( $linkYoutube ); ?>">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icons/youtube.svg" alt="inst">
                    </a>
                <?php endif; ?>
                <?php if ( $linkTiktok ): ?>
                    <a href="<?php echo esc_url( $linkTiktok ); ?>">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icons/tiktok.svg" alt="inst">
                    </a>
                <?php endif; ?>
                <?php if ( $linkLinkedin ): ?>
                    <a href="<?php echo esc_url( $linkLinkedin ); ?>">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icons/linkedin.svg" alt="inst">
                    </a>
                <?php endif; ?>
                <?php if ( $linkWhatsapp ): ?>
                    <a href="<?php echo esc_url( $linkWhatsapp ); ?>">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icons/whatsapp.svg" alt="inst">
                    </a>
                <?php endif; ?>
            </div>
            <div class="contacts__map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2835.47456303386!2d10.605774711721585!3d44.70992538332763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47801c7484985111%3A0xf36d9e471253d90e!2zVmlhIEJyaWdhdGEgUmVnZ2lvLCAzMCwgNDIxMjQgUmVnZ2lvIEVtaWxpYSBSRSwg0JjRgtCw0LvQuNGP!5e0!3m2!1sit!2sit!4v1754209360007!5m2!1sit!2sit&hl=it&region=IT" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </main>
    <footer class="footer container container-not-padding-x">
        <div class="footer__title hero__title container">
            <h3>Dr.ssa</h3>
            <h2>Ilona<br>Vlassova</h2>
            <span>psicoterapeuta</span>
            <span>ipnoterapeuta</span>
            <span>sessuologo</span>
        </div>
        <nav class="footer__menu container">
            <?php 
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer-menu-1', // Название из register_nav_menus()
                        'menu_class'     => 'main-menu',   // CSS-класс для стилизации
                    )
                );
            ?>
            <?php 
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer-menu-2', // Название из register_nav_menus()
                        'menu_class'     => 'main-menu',   // CSS-класс для стилизации
                    )
                );
            ?> 
        </nav>
        <div class="footer__politica container">
            <a href="#">Politica sulla riservatezza</a>
            <p>© 2025  Tutti i diritti riservati. La copia e qualsiasi altro utilizzo dei materiali presenti sul sito senza l'autorizzazione del titolare del copyright è vietato e comporta la responsabilità ai sensi della normativa vigente.</p>
        </div>
    </footer>
    
    <?php wp_footer(); ?>
</body>
</html>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr.ssa ILONA VLASOVA</title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="header container">
        <div class="header__links links">
            <?php 
                    $linkTelegram = get_field('telegram');
                    $linkInstagram = get_field('instagram');
                    $linkFacebook = get_field('facebook');
                    $linkYoutube = get_field('youtube');
                    $linkTiktok = get_field('tiktok');
                    $linkLinkedin = get_field('linkedin');
                    $linkWhatsapp = get_field('whatsapp');
                    if( $linkTelegram ): ?>
                        <a href="<?php echo esc_url( $linkTelegram ); ?>" target="_blank">
                            <img src="<?php bloginfo('template_url'); ?>/assets/icons/telegram.svg" alt="tg">
                        </a>
                <?php endif; ?>
                <?php if ( $linkInstagram ): ?>
                    <a href="<?php echo esc_url( $linkInstagram ); ?>" target="_blank">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icons/instagram.svg" alt="inst">
                    </a>
                <?php endif; ?>
                <?php if ( $linkFacebook ): ?>
                    <a href="<?php echo esc_url( $linkFacebook ); ?>" target="_blank">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icons/facebook.svg" alt="inst">
                    </a>
                <?php endif; ?>
                <?php if ( $linkYoutube ): ?>
                    <a href="<?php echo esc_url( $linkYoutube ); ?>" target="_blank">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icons/youtube.svg" alt="inst">
                    </a>
                <?php endif; ?>
                <?php if ( $linkTiktok ): ?>
                    <a href="<?php echo esc_url( $linkTiktok ); ?>" target="_blank">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icons/tiktok.svg" alt="inst">
                    </a>
                <?php endif; ?>
                <?php if ( $linkLinkedin ): ?>
                    <a href="<?php echo esc_url( $linkLinkedin ); ?>" target="_blank">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icons/linkedin.svg" alt="inst">
                    </a>
                <?php endif; ?>
                <?php if ( $linkWhatsapp ): ?>
                    <a href="<?php echo esc_url( $linkWhatsapp ); ?>" target="_blank">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icons/whatsapp.svg" alt="inst">
                    </a>
                <?php endif; ?>
        </div>
        <nav class="nav-menu header__nav-menu" id="nav-menu">
            <?php 
                wp_nav_menu(
                    array(
                        'theme_location' => 'header-menu', // Название из register_nav_menus()
                        'menu_class'     => 'main-menu',   // CSS-класс для стилизации
                    )
                );
            ?>
        </nav>
        <button class="button-burger" id="button-burger" type="button">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <a href="#callback" class="header__button-to-form button-to-form" type="button">chiedi info</a>
        <a href="#" class="button-up" id="button-up"></a>
    </header>
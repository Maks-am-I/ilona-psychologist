<?php 

    add_action( 'wp_enqueue_scripts', function() {
    	wp_enqueue_style( 'style', get_template_directory_uri() . '/styles/css/style.css' );
    	
    	wp_enqueue_script( 'buttonBurger', get_template_directory_uri() . '/scripts/button-burger.js', array(), 'null', true );
    	wp_enqueue_script( 'buttonUp', get_template_directory_uri() . '/scripts/button-up.js', array(), 'null', true );
    	wp_enqueue_script( 'accordeon', get_template_directory_uri() . '/scripts/accordeon.js', array(), 'null', true );
    	wp_enqueue_script( 'counter', get_template_directory_uri() . '/scripts/counter.js', array(), 'null', true );
    	wp_enqueue_script( 'writer', get_template_directory_uri() . '/scripts/writer.js', array(), 'null', true );
    	wp_enqueue_script( 'pop-up', get_template_directory_uri() . '/scripts/pop-up.js', array(), 'null', true );
    });

    add_filter('acf/load_value/name=phone', 'set_default_acf_value', 10, 3);
    add_filter('acf/load_value/name=address', 'set_default_acf_value', 10, 3);
    add_filter('acf/load_value/name=email', 'set_default_acf_value', 10, 3);
    function set_default_acf_value($value, $post_id, $field) {
        if (empty($value) && isset($field['default_value'])) {
            return $field['default_value'];
        }
            return $value;
    }

    function my_theme_register_menus() {
        register_nav_menus(
            array(
                'header-menu' => 'Меню в шапке',
                'footer-menu-1' => 'Меню в подвале#1',
                'footer-menu-2' => 'Меню в подвале#2',
            )
        );
    }
    add_action('init', 'my_theme_register_menus');
    add_theme_support( 'post_thumbnail' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-log' );
    add_theme_support('menus');



<?php

    /**
     * Functions
     *
     * @package om
     */

    /**
     * Add Theme Support
     */
    function o_add_theme_support()
    {
        load_theme_textdomain('om');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        /*
         * Enable support for Post Formats on posts
         *
         */
        add_theme_support('post-formats',
            array(
                'audio',
                'gallery',
                'video',
                'quote',
                'link'
            )
        );

        add_theme_support('html5',
            array(
                'comment-list',
                'search-form',
                'comment-form',
                'gallery',
                'caption',
            )
        );
    }

    add_action('after_setup_theme', 'o_add_theme_support');

    /**
     * Include Customizer
     */

//    include(get_template_directory_uri() . '/app/customizer/customizer.php');

    /**
     * Enqueue Google Fonts
     */
    function o_enqueue_fonts()
    {

    }

    /**
     * Enqueue All Scripts & Styles
     */
    function o_enqueue_scripts()
    {
        wp_enqueue_style('om-style', get_stylesheet_uri());

        wp_enqueue_script('om-scripts', get_theme_file_uri('js/scripts.js'), array(), '1.0', true);
    }

    add_action('wp_enqueue_script', 'o_enqueue_scripts');

    /**
     * Register New Sidebars
     */
    function o_register_sidebars()
    {
        register_sidebar(array(
            'name'          => esc_html__('Main Sidebar', 'om'),
            'id'            => 'main_sidebar',
            'description'   => esc_html__('Main Sidebar used in Content area by all pages', 'om'),
            'before_widget' => '<div class="row"><div id="%1$s" class="widget %2$s c-column"><div class="widget__inner %2$s__inner">',
            'after_widget'  => '</div></div></div>',
            'before_title'  => '<div class="widget-title"><h4 class="o-heading">',
            'after_title'   => '</h4></div>',
        ));
        register_sidebar(array(
            'name'          => esc_html__('Footer Sidebar', 'om'),
            'id'            => 'footer_sidebar',
            'description'   => esc_html__('Footer Sidebar used in Footer area by all pages', 'om'),
            'before_widget' => '<div class="row"><div id="%1$s" class="widget %2$s c-column"><div class="widget__inner %2$s__inner">',
            'after_widget'  => '</div></div></div>',
            'before_title'  => '<div class="widget-title"><h4 class="o-heading">',
            'after_title'   => '</h4></div>',
        ));
    }

    add_action('widgets_init', 'o_register_sidebars');

    /**
     * Register New Navigation Menus
     */
    function o_register_nav_menus()
    {
        register_nav_menus(array(
            'top_menu'        => __('Top Menu', 'om'),
            'main_menu'       => __('Main Menu', 'om'),
            'off_canvas_menu' => __('Off Canvas Menu', 'om'),
            'footer_menu'     => __('Footer Menu', 'om')
        ));
    }

    function o_register_custom_widgets()
    {

    }
    add_action('widgets_init', 'o_register_custom_widgets');




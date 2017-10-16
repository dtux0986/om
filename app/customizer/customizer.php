<?php

    class Customizer
    {

        public function __construct()
        {
            add_action('customize_register', array('Customizer', 'o_register_header_panel'));

            add_action('customize_register', array('Customizer', 'o_register_footer_panel'));

            add_action('wp_head', array('Customizer', 'o_generate_css'));

            add_action('customize_preview_init', array('Customizer', 'o_live_preview'));
        }

        public static function o_register_header_panel($wp_customize)
        {
            $wp_customize->add_panel('header', array(
                'title'       => __('Header', 'om'),
                'priority'    => 30,
                'capability'  => 'edit_theme_options',
                'description' => __('Allows you to customize some example settings for MyTheme.', 'om')
            ));

            $wp_customize->add_section('header_colors', array(
                'title'       => __('Colors', 'om'),
                'priority'    => 40,
                'capability'  => 'edit_theme_options',
                'description' => __('Allows you to customize some example settings for MyTheme.', 'om'),
                'panel'       => 'header',
            ));

            $wp_customize->add_setting('header_background_color', array(
                'default'   => '#000',
                'transport' => 'refresh'
            ));

            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'header_background_color', array(
                'label'    => __('Header Background Color', 'om'),
                'section'  => 'header_colors',
                'settings' => 'header_background_color'
            )));
        }

        public static function o_register_footer_panel($wp_customize)
        {

            $wp_customize->add_panel('footer', array(
                'title'       => __('Footer', 'om'),
                'priority'    => 30,
                'capability'  => 'edit_theme_options',
                'description' => __('Allows you to customize some example settings for MyTheme.', 'om')
            ));

            $wp_customize->add_section('footer_colors', array(
                'title'       => __('Colors', 'om'),
                'priority'    => 40,
                'capability'  => 'edit_theme_options',
                'description' => __('Allows you to customize some example settings for MyTheme.', 'om'),
                'panel'       => 'footer',
            ));

            $wp_customize->add_setting('footer_background_color', array(
                'default'   => '#000',
                'transport' => 'refresh'
            ));

            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer_background_color', array(
                'label'    => __('Footer Background Color', 'om'),
                'section'  => 'footer_colors',
                'settings' => 'header_background_color'
            )));

            $wp_customize->get_setting('header_background_color')->transport = 'postMessage';

            $wp_customize->get_setting('footer_background_color')->transport = 'postMessage';

        }

        public static function o_generate_css()
        {
            ?>

            <?php
        }

        public static function o_live_preview()
        {
            wp_enqueue_script('om-customizer', get_template_directory_uri() . '/app/customizer/js/om-customizer.js', array('jquery', 'customize-preview'), '', true);
        }
    }

    $customizer = new Customizer();
<?php

    class Customizer
    {

        public static function o_register($wp_customize)
        {
            $wp_customize->add_panel('Header', array(
                'title'       => __('Header Options', 'om'),
                'priority'    => 35,
                'capability'  => 'edit_theme_options',
                'description' => __('Allows you to customize some example settings for MyTheme.', 'om')
            ));

            $wp_customize->add_section('Header', array(
                'title'       => __('Header Options', 'om'),
                'priority'    => 35,
                'capability'  => 'edit_theme_options',
                'description' => __('Allows you to customize some example settings for MyTheme.', 'om')
            ));

        }

        public static function o_generate_css()
        {

        }

        public static function o_live_preview()
        {

        }
    }

    add_action('customize_register', array('Customizer', 'o_register'));

    add_action('wp_head', array('Customizer', 'o_generate_css'));

    add_action('customize_preview_init', array('Customizer', 'o_live_preview'));
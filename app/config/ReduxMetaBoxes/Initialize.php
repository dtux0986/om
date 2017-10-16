<?php

    /**
     * Redux Construct
     *
     * @package om
     */

    namespace App\Config\ReduxThemeOptions;

    class Initialize
    {
        public function __construct()
        {
            add_action('add_meta_boxes', array(&$this, 'register_meta_box'));
        }

        public function register_meta_box()
        {

        }
    }

    new Initialize();
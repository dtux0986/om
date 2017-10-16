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

        }

        public static function data()
        {
            global $redux_demo;

            return $redux = $redux_demo;
        }
    }
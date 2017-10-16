<?php
    /**
     * Autoload Class
     *
     * @since  cactus alpha 1.0
     * @package om
     */

    require_once "ClassLoader/Psr4ClassLoader.php";

    use Symfony\Component\ClassLoader\Psr4ClassLoader;

    $loader = new Psr4ClassLoader();

    $loader->addPrefix('App', get_template_directory() . '/app');

    /**
     * Models
     */
    $loader->addPrefix('App\\Models', get_template_directory() . '/app/models');
    $loader->addPrefix('App\\Models\\Entity', get_template_directory() . '/app/models/entity');

    /**
     * Configs
     */
	$loader->addPrefix('App\\Config', get_template_directory() . '/app/config');
    $loader->addPrefix('App\\Config\\ReduxThemeOptions', get_template_directory() . '/app/config/ReduxThemeOptions');
    $loader->addPrefix('App\\Config\\ReduxMetaBoxes', get_template_directory() . '/app/config/ReduxMetaBoxes');

    /**
     * Plugins
     */
    $loader->addPrefix('App\\Plugins', get_template_directory() . '/app/plugins');
    $loader->addPrefix('App\\Plugins\\Widgets', get_template_directory() . '/app/plugins/om-widgets/om-contacts');
    $loader->addPrefix('App\\Plugins\\Widgets', get_template_directory() . '/app/plugins/om-widgets/om-users');

    /**
     * Helpers
     */
    $loader->addPrefix('App\\Helpers', get_template_directory() . '/app/helpers');

    /**
     * Lib
     */
    $loader->addPrefix('App\\Lib', get_template_directory() . '/app/lib');
    $loader->addPrefix('App\\Lib\\CustomWalkerNavMenu', get_template_directory() . '/app/lib/CustomWalkerNavMenu');
    /**
     * Views
     */
    $loader->addPrefix('App\\Views', get_template_directory() . '/app/views');

    /**
     * Register
     */
    $loader->register();
	
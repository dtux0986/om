<?php

    /**
     * OM Framework Metaboxes Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists('Redux')) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "redux_demo";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    /*
     *
     * ---> START SECTIONS
     *
     */

    // -> START Basic Fields
    Redux::setSection($opt_name, array(
        'title'  => __('Basic Field', 'redux-framework-demo'),
        'id'     => 'basic',
        'desc'   => __('Basic field with no subsections.', 'redux-framework-demo'),
        'icon'   => 'el el-home',
        'fields' => array(
            array(
                'id'       => 'opt-text',
                'type'     => 'text',
                'title'    => __('Example Text', 'redux-framework-demo'),
                'desc'     => __('Example description.', 'redux-framework-demo'),
                'subtitle' => __('Example subtitle.', 'redux-framework-demo'),
                'hint'     => array(
                    'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
                )
            )
        )
    ));
    Redux::setSection($opt_name, array(
        'title' => __('Basic Fields', 'redux-framework-demo'),
        'id'    => 'basic',
        'desc'  => __('Basic fields as subsections.', 'redux-framework-demo'),
        'icon'  => 'el el-home'
    ));

    /*
     * <--- END SECTIONS
     */

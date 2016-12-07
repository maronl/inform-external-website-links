<?php
/*
Plugin Name: Inform External Website Links
Plugin URI:  https://github.com/maronl/inform-external-website-links
Description: Wordpress plugin to intercept all the links to external websites
Version:     1.0
Author:      Luca Maroni
Author URI:  http://maronl.it
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: info-ext-web-links
*/


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


function iewl_load_plugin_textdomain()
{
    load_plugin_textdomain('info-ext-web-links', false, basename(dirname(__FILE__)) . '/languages');
}

add_action('init', 'iewl_load_plugin_textdomain');


function iewl_load_js_scripts()
{
    // Register the script like this for a plugin:
    wp_register_script('iewl-main', plugins_url('assets/js/main1.0.js', __FILE__));

    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script('iewl-main', '', array('jquery'));
}
add_action('wp_enqueue_scripts', 'iewl_load_js_scripts');


function iewl_html_content()
{
    $customTemplate = get_template_directory() . '/iewl_template.php';
    if (file_exists($customTemplate)) {
        include_once $customTemplate;
    } else {
        include_once dirname(__FILE__) . '/inc/modal-template-bootstrap.php';
    }
}
add_action( 'wp_footer', 'iewl_html_content' );

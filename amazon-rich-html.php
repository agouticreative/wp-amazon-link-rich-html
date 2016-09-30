<?php

/**
 * @package Amazon Link Rich HTML Extension
 * @version 0.1
 */
/*
Plugin Name: Amazon Link Rich HTML Extension
Plugin URI:  https://developer.wordpress.org/plugins/the-basics/
Description: This turns the Amazon Link shortcode into an closed tag so you can pass rich HTML into the %TEXT% macro
Version:     0.1
Author:      Travis Morrison
Author URI:  https://travismorrisonwp.wordpress.org/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wporg
Domain Path: /languages
*/


function amazon_rich_html_func($atts, $content)
{

    $atts['text'] = $content;
    $atts = urldecode(http_build_query($atts));
    $shortcode = "[amazon {$atts}]";
    return do_shortcode($shortcode);
}

add_shortcode('amazon-rich-html', 'amazon_rich_html_func');

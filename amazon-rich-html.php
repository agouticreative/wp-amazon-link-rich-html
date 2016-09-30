<?php

/**
 * @package Amazon Link Rich HTML Extension
 * @version 0.1
 */
/*
Plugin Name: Amazon Link Rich HTML Extension
Plugin URI:  https://developer.wordpress.org/plugins/the-basics/
Description: An enclosing shortcode that will execute an Amazon Link shortcode. It will pass its enclosed content as the TEXT argument of the original shortcode.
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

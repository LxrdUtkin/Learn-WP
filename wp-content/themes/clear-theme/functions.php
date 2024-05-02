<?php
include_once 'inc/backend/Defines.php';
include_once 'inc/backend/Assets.php';
include_once 'inc/backend/AssetsConnect.php';

/**
* Add theme support
*/
add_theme_support('automatic-feed-links');
add_theme_support('menus');

/**
* Remove unnecessary scripts
*/

//Remove WP Emoji from header
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Remove WP-JSON from header
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);

// Remove wlwmanifest from header
remove_action('wp_head', 'wlwmanifest_link');

// Remove WP version from header
remove_action('wp_head', 'wp_generator');

// Remove Weblog Client Link (RSD) from header
remove_action('wp_head', 'rsd_link');

// Remove feed links from header
remove_action('wp_head', 'feed_links', 2);
add_filter('feed_links_show_comments_feed', '__return_false');
add_theme_support('post-thumbnails');

/**
* Disable auto updates
*/
add_filter('automatic_updater_disabled', '__return_true');

//Svg support
function cc_mime_types($mimes)
{
$mimes['svg'] = 'image/svg+xml';
return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');

// Include styles and scripts
//function jQueryReady() {
//wp_enqueue_script('jquery',LIB_PATH . '/jquery.js');
//}
//
//add_action('wp_head', 'jQueryReady');
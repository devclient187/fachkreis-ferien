<?php
/**
 * Onlineformulare
 *
 * @package           Onlineformulare
 * @author            Philipp Löwen
 * @copyright         2021 Your Name or Company Name
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Onlineformulare
 * Plugin URI:        https://example.com/plugin-name
 * Description:       Description of the plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Your Name
 * Author URI:        https://example.com
 * Text Domain:       plugin-slug
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

add_action( 'admin_menu', 'wporg_options_page' );
function wporg_options_page() {
    add_menu_page(
        'Onlineformulare',
        'Onlineformulare',
        'manage_options',
        plugin_dir_path(__FILE__) . 'index.html',
        null,
        plugin_dir_url(__FILE__) . 'favicon.ico',
        20
    );
}
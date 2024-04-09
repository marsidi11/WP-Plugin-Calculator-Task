<?php
/**
 * Plugin Name: Another Calculator Plugin
 * Plugin URI: https://anothercalculatorplugin.com/
 * Description: Another WordPress Calculator.
 * Version: 1.0.0
 * Author: Marsid Zyberi
 */

// Call AdminPanel.php to register add a menu item in the admin panel
 require_once plugin_dir_path(__FILE__) . 'inc/AdminPanel.php';

// Call Shortcode.php to register the shortcode
require_once plugin_dir_path(__FILE__) . 'inc/Shortcode.php';

// Call Enqueue.php to enqueue scripts
require_once plugin_dir_path(__FILE__) . 'inc/Enqueue.php';

// Update the click count using AJAX request 
add_action('wp_ajax_update_click_count', 'update_click_count');
add_action('wp_ajax_nopriv_update_click_count', 'update_click_count');

function update_click_count() 
{
    if (isset($_POST['click_count'])) {
        $new_clicks = intval($_POST['click_count']);
        $current_click_count = get_option('click_count', 0);
        $total_click_count = $current_click_count + $new_clicks;
        update_option('click_count', $total_click_count);
        wp_send_json_success('Click count updated successfully.');
    } else {
        wp_send_json_error('Invalid request.');
    }
    wp_die();
}
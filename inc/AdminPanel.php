<?php
/**
 * Add the plugin in Admin Side Panel
 */

function add_plugin_to_menu() 
{
    add_menu_page(
        'Calculator', 
        'Calculator', 
        'manage_options', 
        'calculator-plugin',
        'calculator_page',
        'dashicons-calculator',
        1,
    );
}

function calculator_page() 
{
    $template_path = plugin_dir_path(__FILE__) . '../templates/AdminSite.php';
    
    if (file_exists($template_path)) 
    {
        include $template_path;
    } else 
    {
        echo 'File not found';
    }
}

add_action('admin_menu', 'add_plugin_to_menu');
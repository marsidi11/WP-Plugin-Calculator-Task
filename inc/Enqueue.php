<?php

function enqueue_frontend() 
{
    wp_enqueue_script(
        'my_frontend_script',
        plugin_dir_url(__FILE__) . '../assets/frontend/script.js', 
        array('jquery'),
    );

    wp_localize_script(
        'my_frontend_script', 
        'my_script_vars', 
        array('ajaxurl' => admin_url('admin-ajax.php'))
    );

    wp_enqueue_style(
        'my_frontend_style',
        plugin_dir_url(__FILE__) . '../assets/frontend/style.css'
    );
}

add_action('wp_enqueue_scripts', 'enqueue_frontend');
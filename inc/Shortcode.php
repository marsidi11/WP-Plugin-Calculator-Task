<?php

function calculator() {
    ob_start();

    include plugin_dir_path(__FILE__) . '../templates/ClientSite.php';

    $output = ob_get_clean();

    return $output;
}

add_shortcode('calculator_shortcode', 'calculator');
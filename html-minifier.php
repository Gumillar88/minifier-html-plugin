<?php
/*
Plugin Name: HTML Minifier
Plugin URI: https://gumilarlw.blogspot.com/
Description: Plugin to optimize or minify all HTML output in the browser.
Version: 1.0
Author: Gumilar L Wijayadi
Author URI: https://www.linkedin.com/in/gumilar-l-wijayadi-9b39b188/
License: GPLv2 or later
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

// Function to minify HTML
function html_minifier($buffer) {
    // Debug: Write buffer before minification to log file
    write_log("Before Minify: " . htmlspecialchars($buffer));

    // Remove HTML comments
    $buffer = preg_replace('/<!--.*?-->/', '', $buffer);

    // Remove excessive whitespace within HTML tags
    $buffer = preg_replace('/\s+(?=\S)/', ' ', $buffer);
    
    // Remove whitespace outside tags
    $buffer = preg_replace('/>\s+</', '><', $buffer);

    // Remove new lines and extra spaces between tags
    $buffer = preg_replace('/[\r\n]+/', '', $buffer);
    $buffer = preg_replace('/\s{2,}/', ' ', $buffer);

    // Debug: Write buffer after minification to log file
    write_log("After Minify: " . htmlspecialchars($buffer));

    return $buffer;
}

// Function to write debug log to file
function write_log($log) {
    if (defined('WP_DEBUG') && WP_DEBUG) {
        if (is_array($log) || is_object($log)) {
            error_log(print_r($log, true));
        } else {
            error_log($log);
        }
    }
}

// Hook to minify HTML only if using page-home.php template
function start_html_minify() {
    ob_start('html_minifier');
}
add_action('template_redirect', 'start_html_minify');

// Handle output buffer on shutdown
function end_html_minify() {
    if (ob_get_length()) {
        ob_end_flush();
    }
}
add_action('shutdown', 'end_html_minify');
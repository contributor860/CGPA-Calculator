<?php
/*
 * Plugin Name: CGPA Calculator
 * Description: A simple CGPA calculator to convert SGPA to CGPA.
 * Version: 1.0.0
 * Author: Mohammad Nassif Hamid
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: cgpa-calculator
 */

if (!defined('ABSPATH')) exit;

// Plugin version for enqueues - prefixed to comply with WordPress standards
define('CGPA_CALCULATOR_VERSION', '1.2');

// Enqueue styles and scripts
add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('cgpa-style', plugin_dir_url(__FILE__) . 'styles.css', [], CGPA_CALCULATOR_VERSION);
    wp_enqueue_script('cgpa-js', plugin_dir_url(__FILE__) . 'script.js', ['jquery'], CGPA_CALCULATOR_VERSION, true);
    wp_localize_script('cgpa-js', 'cgpaData', [
        'url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('cgpa')
    ]);
});

// Shortcode to display CGPA calculator
add_shortcode('cgpa_calculator', function() {
    return '<div class="mycgpa-wrapper">
        <form id="cgpaForm" class="mycgpa-form">
            <div class="mycgpa-field"><label>Sum of SGPA</label><input name="Sum" type="number" step="0.01" min="0" required></div>
            <div class="mycgpa-field"><label>Semesters</label><input name="Sem" type="number" min="1" max="8" required></div>
            <div class="mycgpa-field"><button type="submit" class="mycgpa-submit">Calculate</button></div>
        </form>
        <div id="cgpaResult" style="display:none;"></div>
    </div>';
});

// AJAX handlers
add_action('wp_ajax_cgpa', 'cgpa_fn');
add_action('wp_ajax_nopriv_cgpa', 'cgpa_fn');

function cgpa_fn() {
    check_ajax_referer('cgpa', 'nonce');

    $s = floatval($_POST['Sum'] ?? 0);
    $n = intval($_POST['Sem'] ?? 0);

    if ($s < 0) wp_send_json_error('Sum cannot be negative');
    elseif ($n <= 0 || $n > 8) wp_send_json_error('Semesters must be 1–8');
    else wp_send_json_success('Your CGPA: ' . number_format($s / $n, 2));
}
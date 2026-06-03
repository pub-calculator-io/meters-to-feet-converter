<?php
/*
Plugin Name: Meters to Feet Converter by Calculator.iO
Plugin URI: https://www.calculator.io/meters-to-feet-converter/
Description: Convert meters to feet (m to ft) instantly with our easy-to-use calculator. Get precise results in decimals or fractions of an inch for any measurement.
Version: 1.0.0
Author: www.calculator.io / Meters to Feet Converter
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: calcio_meters_to_feet_converter
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Meters to Feet Converter by www.calculator.io";

function calcio_meters_to_feet_converter_shortcode(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Meters to Feet Converter</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="calcio_meters_to_feet_converter_iframe"></iframe></div>';
}


add_shortcode( 'calcio_meters_to_feet_converter', 'calcio_meters_to_feet_converter_shortcode' );
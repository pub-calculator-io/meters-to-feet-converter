<?php
/*
Plugin Name: CI Meters to feet converter
Plugin URI: https://www.calculator.io/meters-to-feet-converter/
Description: Convert meters to feet & inches using a meters to feet calculator. Choose decimal places or fractions of an inch for rounding and calculation.
Version: 1.0.0
Author: Meters to Feet Converter / www.calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_meters_to_feet_converter
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Meters to Feet Converter by www.calculator.io";

function display_calcio_ci_meters_to_feet_converter(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Meters to Feet Converter</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_meters_to_feet_converter_iframe"></iframe></div>';
}


add_shortcode( 'ci_meters_to_feet_converter', 'display_calcio_ci_meters_to_feet_converter' );
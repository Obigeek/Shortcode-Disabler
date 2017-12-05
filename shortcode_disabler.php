<?php
/*
Plugin Name: Shortcode Disabler
Author: Joe Izzard
Author URI: https://joe.izzard.me
Version: 1.0.0
Tags: shortcode, disable
Description: This plugin disables shortcodes placed within it's shortcode.
*/

// Main Function
function obishort_disableShortcode($atts, $content = null) {
  return $content;
}

// Register Shortcodes
function obishort_disableShrotcode_register() {
  add_shortcode('dis_short', 'obishort_disableShortcode');
  add_shortcode('disable_shortcode', 'obishort_disableShortcode');
}
add_action('init', 'obishort_disableShrotcode_register');

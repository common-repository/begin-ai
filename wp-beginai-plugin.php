<?php
/**
 * Plugin Name: Begin AI
 * Description: A library to interact with Begin AI platform in order to build personalisation algorithms.
 * Version: 1.2.0
 * Author: Begin AI Research & Engineering engineering@begin.ai
 *
 * @package wp-beginai-plugin
 */


add_action( 'wp_enqueue_scripts', 'wp_beginai_plugin_load' );
function wp_beginai_plugin_load(){
  wp_enqueue_script( 'beginai-index-client', plugin_dir_url( __FILE__ ) . '/index-client.js', [] );
}
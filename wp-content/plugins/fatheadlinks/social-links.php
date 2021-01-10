<?php
/**
 * Plugin Name: FatHead Links
 * Description: Adds social icons as a widget
 * Version 1.0
 * Author: FatHeadSolutions
 *  
 */

 if(!defined('ABSPATH')){
     exit;
 }

 //Load Scripts
 require_once(plugin_dir_path(__FILE__) . '/includes/social-links-scripts.php');

 //Load Class
 require_once(plugin_dir_path(__FILE__) . '/includes/social-links-class.php');

  //Load New Widget
  function register_social_links(){
      register_widget('Social_Links_Widget');
  }

  add_action('widgets_init', 'register_social_links');

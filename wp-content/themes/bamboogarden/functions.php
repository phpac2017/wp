<?php

/**
 * Load Styles
 */

 function load_css() {
     wp_register_style('bootstrap', get_template_directory_uri(). '/css/bootstrap.min.css', array(), false, 'all');
     wp_enqueue_style('bootstrap');

     wp_register_style('main', get_template_directory_uri(). '/css/main.css', array(), false, 'all');
     wp_enqueue_style('main');
 }
 add_action('wp_enqueue_scripts', 'load_css');

 /**
  * Load jQuery
  */
 function load_js() {
     wp_enqueue_script('jquery');
     wp_register_script('bootstrap', get_template_directory_uri(). '/js/bootstrap.min.js', 'jquery', false, true);
     wp_enqueue_script('bootstrap');
 }
 add_action('wp_enqueue_scripts', 'load_js');


 /**
  * Menu Support
  */

  add_theme_support('menus');

  /**
   * Register Menus
   */

   register_nav_menus(
       array(
           'top-menu' => 'Top Menu Location',
           'mobile-menu' => 'Mobile Menu Location'
       )
    );


// returns the content of $GLOBALS['post']
// if the page is called 'debug'
function my_the_content_filter($content) {
    // assuming you have created a page/post entitled 'debug'
    if ($GLOBALS['post']->post_name == 'home') {
    return var_export($GLOBALS['post'], TRUE );
    }
    // otherwise returns the database content
    return $content;
    }
    
    add_filter( 'the_content', 'my_the_content_filter' );


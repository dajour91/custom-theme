<?php
function my_styles_and_scripts(){
//bootstrapstylesandscripts
  wp_enqueue_style('bootstrap-styles', get_stylesheet_directory_uri() . '/css/bootstrap.css');
  wp_enqueue_script('bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js', array(), '1.0', false);

  //customstylesheet
  wp_enqueue_style('my-styles', get_stylesheet_directory_uri() . '/css/master.css');
}
add_action('wp_enqueue_scripts', 'my_styles_and_scripts');




 ?>

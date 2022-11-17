<?php
    add_action('wp_enqueue_scripts', 'lynx_styles');
    function lynx_styles(){
        wp_enqueue_style('lynx-style', get_stylesheet_uri());
        wp_enqueue_script('lynx-jq', get_template_directory_uri() . '/assets/script/jquery.js', array(), null, true);
        wp_enqueue_script('lynx-slick', get_template_directory_uri() . '/assets/script/slick.min.js', array(), null, true);
        wp_enqueue_script('lynx-js', get_template_directory_uri() . '/assets/script/script.js', array(), null, true);
   }

?>
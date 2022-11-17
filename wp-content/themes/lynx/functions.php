<?php

add_action('wp_enqueue_scripts', 'lynx_scripts');
function lynx_scripts(){
    wp_enqueue_style('lynx_style', get_stylesheet_uri());
}

?>

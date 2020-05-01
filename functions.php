<?php

//add_action(): takes two argumnets. We use this wp function to tell our wp app to do something. first argumnet is wp_enqueue_scripts: this tells wp what we want it to do. this line says I want to load and display js crpits and style. Second argument is a function we create that handles what we want to display
// our function: to get the style sheet we have we use wp_enqueue_style() which takes two arguments.First, what we want to name the style sheet, and second the location of the style sheet

function rad_files(){
//we can load as many css and js files as we want here.

wp_enqueue_style('RAD_main_styles', get_stylesheet_uri());

};

add_action('wp_enqueue_scripts', 'rad_files');

?>

<?php
/**
 * Function file.
 *
 * @package Aquila
 */


function aquila_enque_scripts(){
	wp_enqueue_style('stylesheet', get_stylesheet_uri(), [], filemtime(get_template_directry() . '/style.css'));

}
add_action('wp_enque_scripts', 'aquila_enque_scripts');

?>


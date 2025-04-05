<?php
function prueba_asdrubal_enqueue_scripts() {
    wp_enqueue_script('prueba-asdrubal-script', get_template_directory_uri() . '/scripts/script.js', array(), null, true);
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@400;500&display=swap', false);
    wp_enqueue_style('theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'prueba_asdrubal_enqueue_scripts');
?>
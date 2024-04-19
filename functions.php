<?php  //don´t close

function portfolio_load_resources()
{
    wp_enqueue_style('style', get_template_directory_uri() . "/style.css");
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css");    
    wp_enqueue_style('icons', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
    wp_enqueue_script('JS', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js');
    

}
add_action('wp_enqueue_scripts', 'portfolio_load_resources');

function portfolio_remove_gutenberg() {
    remove_post_type_support("post", "editor");
    remove_post_type_support("page", "editor");
}
add_action('init', 'portfolio_remove_gutenberg');
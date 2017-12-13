<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */

automatic_feed_links();

function my_scripts_method() {
    wp_enqueue_script(
        'jquery191',
        'http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js',
        null,
        null,
        true
    );
    wp_enqueue_script(
        'validate',
        get_template_directory_uri() . '/js/validate.js',
        'jquery191',
        null,
        true
    );
    wp_enqueue_script(
        'scripts',
        get_template_directory_uri() . '/js/scripts.js',
        'jquery191',
        null,
        true
    );
}    
add_action('wp_enqueue_scripts', 'my_scripts_method');

if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Barra Lateral',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="titulo-widget">',
        'after_title' => '</h3>',
    ));
}

add_theme_support('post-thumbnails');

add_image_size('post', 180, 120, true);

add_theme_support('menus');

register_nav_menu('topo', __('Topo','Menu'));

//Paginação
function paginacao() {
    global $wp_query;
    $total = $wp_query->max_num_pages;
                       
    if ( $total > 1 )  {
        if (!$current_page = get_query_var('paged'))
            $current_page = 1;

        $big = 999999999;

        $permalink_structure = get_option('permalink_structure');
        $format = empty($permalink_structure) ? '&page=%#%' : 'page/%#%/';
        echo paginate_links(array(
            'base' => str_replace($big, '%#%', get_pagenum_link($big)),
            'format' => $format,
            'current' => $current_page,
            'total' => $total,
            'mid_size' => 4,
            'prev_text' => '← Anterior',
            'next_text' => 'Próxima →',
            'type' => 'plain'
        ));
    }
}
//Fim da Paginação

?>
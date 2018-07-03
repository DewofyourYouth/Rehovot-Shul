<?php

// loads custom stysheets
function enqueue_rehovot_styles() {

    wp_enqueue_script( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js', array('jquery') );
    wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css' );
    wp_enqueue_style( 'font-awespme', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'customtheme', get_stylesheet_uri() );

}

add_action( 'wp_enqueue_scripts', 'enqueue_rehovot_styles' );

function rehovot_setup() {
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'rehovot' )
        ));

        add_theme_support('title-tag');
}

add_action( 'after_setup_theme', 'rehovot_setup' );


function rehovot_widgets() {
    register_sidebar( array(
        'name'          => __('Sidebar', 'Rehovot'),
        'id'            => 'sidebar-1',
        'description'   => __('add widgets here to appear in the sidebar', 'Rehovot Shul'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="widget-title">',
        'after-title'   => '</h5>' 
        ) );
}

add_action( 'widgets_init', 'rehovot_widgets' );

if ( ! function_exists('custom_shortcode') ) :
    function custom_shortcode($atts, $content=null) {
        return '<div class="col-sm-6">'.$content.'</div>';
}
endif;

add_shortcode('one_half', 'custom_shortcode');
?>
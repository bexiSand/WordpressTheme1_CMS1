<!--Läser in style- och scriptfiler -->


<?php
	function get_my_scripts(){
        wp_enqueue_style("bootstrap", get_stylesheet_directory_uri() . "/css/bootstrap.css");
        wp_enqueue_style("font-awesome", get_stylesheet_directory_uri() . "/css/font-awesome.css");
        wp_enqueue_style("style", get_stylesheet_directory_uri() . "/style.css");
        wp_enqueue_script("script", get_template_directory_uri(). "/js/script.js",
		array("jquery"),
		false,
		true
		);
	}
add_action( 'wp_enqueue_scripts', 'get_my_scripts' );



/* registrerar menyer */
function register_all_my_menus(){
	register_nav_menus([
		"primary-menu" => "Primary Menu",
		"footer-menu" => "Footer Menu"
	]);
}
add_action("init","register_all_my_menus");


/* för att kunna lägga till bilder i temat */
add_theme_support("post-thumbnails");


/* registrerar sidebar- och footer-widgetar*/
function register_my_sidebar(){
	register_sidebar( array(
		"name" => "Sidebar widget",
        "id" => "sidebar1",   
    ));

    register_sidebar( array(
        'name' => 'Footer Area 1',
        'id' => 'footer1',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));

    register_sidebar( array(
        'name' => 'Footer Area 2',
        'id' => 'footer2',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));

    register_sidebar( array(
        'name' => 'Footer Area 3',
        'id' => 'footer3',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));

    register_sidebar( array(
        'name' => 'Footer Area 4',
        'id' => 'footer4',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',

    ));
}
add_action("widgets_init","register_my_sidebar");


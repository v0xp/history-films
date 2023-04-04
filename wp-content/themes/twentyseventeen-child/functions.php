<?php
/*This file is part of twentyseventeen-child, twentyseventeen child theme.

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/

if ( ! function_exists( 'suffice_child_enqueue_child_styles' ) ) {
	function twentyseventeen_child_enqueue_child_styles() {
	    // loading parent style
	    wp_register_style(
	      'parente2-style',
	      get_template_directory_uri() . '/style.css'
	    );

	    wp_enqueue_style( 'parente2-style' );
	    // loading child style
	    wp_register_style(
	      'childe2-style',
	      get_stylesheet_directory_uri() . '/style.css'
	    );
	    wp_enqueue_style( 'childe2-style');
	 }
}
add_action( 'wp_enqueue_scripts', 'twentyseventeen_child_enqueue_child_styles' );

/*Write here your own functions */
register_nav_menus(array(
	'top'    => 'Menu 1',    //Название месторасположения меню в шаблоне
	'bottom' => 'Menu 3'      //Название другого месторасположения меню в шаблоне
));

add_filter( 'wpseo_breadcrumb_single_link', function ( $link_output ) { //скрывает последнюю хлебную крошку
    if ( strpos( $link_output, 'breadcrumb_last' ) !== false ) {
        $link_output = '';
    }
    return $link_output;
});

// добавление класса в ссылки меню

function register_my_menu() {
register_nav_menu('bottom',__( 'menu2' ));
}
add_action( 'init', 'register_my_menu' );

// let's add "*active*" as a class to the li

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
if( in_array('current-menu-item', $classes) ){
$classes[] = 'active ';
}
return $classes;
}

// let's add our custom class to the actual link tag

function atg_menu_classes($classes, $item, $args) {
if($args->theme_location == 'bottom') {
$classes[] = 'menu-link-1';
}
return $classes;
}
add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);

function add_menuclass($ulclass) {
return preg_replace('/<a /', '<a class="menu-link-1"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');
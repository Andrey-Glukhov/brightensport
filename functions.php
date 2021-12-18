<?php
function brs_script_enqueue(){
// bootstrap stzle
wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css',
    array(), false, 'all');
wp_enqueue_style('bootstrap');


//css
	wp_enqueue_style( 'brs-stylesheet', get_template_directory_uri() . '/css/brs.css', array(), '1.0.0', 'all' );
//js
  wp_enqueue_script('jquery');
// bootstrap script
  wp_register_script( 'Bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', null, null, true );
wp_enqueue_script('Bootstrap');

  
//   wp_enqueue_script( 'scrollmagic', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js', array('jquery'), '1.0.0', true );
//   wp_enqueue_script( 'scrollindicator', 'https:////cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js', array('jquery'), '1.0.0', true );
//   wp_enqueue_script( 'scrollanimation', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js', array('jquery'), '1.0.0', true );
//   wp_enqueue_script( 'svg_js',  get_template_directory_uri() . '/js/svg.js', array('jquery'), '1.0.0', true );
//   wp_enqueue_script( 'svg_path_js',  get_template_directory_uri() . '/js/svg.path.js', array('jquery'), '1.0.0', true );

  wp_enqueue_script( 'brs-js', get_template_directory_uri() . '/js/brs.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'brs_script_enqueue' );

function brs_theme_setup(){
	add_theme_support('menus');
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Header Buttons Navigation');
	register_nav_menu('footermenu_left', 'Footer Navigation Left');
	register_nav_menu('footermenu_right', 'Footer Navigation Right');
}
add_action('init', 'brs_theme_setup');


/*
	==========================================
	 Theme support function
	==========================================
*/


add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-formats', array('aside', 'chat', 'gallery','link','image','quote','status','video'));
add_theme_support('post-thumbnails');

//add_theme_support('widgets');

// add_filter( 'wp_nav_menu_items', 'brs_menu_items', 10, 2);

// function brs_menu_items($items, $args) {
//     // get array of '<li> ... </li>' strings
// 	$items_array = [];
// 	error_log('--->0' . print_r($args->menu->slug ,true));
// 	if ($args->menu->slug == 'footer-menu') {
// 		preg_match_all('/<\s*?li\b[^>]*>(.*?)<\/li\b[^>]*>/s', $items, $items_array );
// 	}
//     //preg_match_all('/<\s*?li\b[^>]*>(.*?)<\/li\b[^>]*>/s', $items, $items_array );
//     error_log('--->1' . print_r($items,true));
//     error_log('--->3' . print_r($items_array ,true));
//     // $position = floor(count($items_array[0])/2);
//     // $homestring = array('<li class="menu-item menu-item-type-post_type menu-item-object-page menu_homelink">' . child_theme_menu_logo() . '</li>');
//     // $result = array_merge(array_slice($items_array[0], 0, $position), $homestring, array_slice($items_array[0], $position));
//     // //error_log('--->3' . print_r($result,true));
//     // $items = implode('', $result);
//     return $items;
// }

//Add  sidebar
function brs_register_wp_sidebars() {
 
	/* Footer sidebar */
	register_sidebar(
		array(
			'id' => 'true_foot',
			'name' => 'Footer',
			'description' => 'Drag widgets here to add them to footer',
			'before_widget' => '<div id="%1$s" class="foot widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
}
 
add_action( 'widgets_init', 'brs_register_wp_sidebars' );

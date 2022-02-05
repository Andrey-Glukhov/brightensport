<?php
function brs_script_enqueue(){
// bootstrap stzle
wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css',
    array(), false, 'all');
wp_enqueue_style('bootstrap');


//css
	wp_enqueue_style( 'brs-stylesheet', get_template_directory_uri() . '/css/brs.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'owl-stylesheet', get_template_directory_uri() . '/js/owl/assets/owl.carousel.min.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'owl-theme-style', get_template_directory_uri() . '/js/owl/assets/owl.theme.default.min.css', array(), '1.0.0', 'all' );
//js
  wp_enqueue_script('jquery');
// bootstrap script
  wp_register_script( 'Bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', null, null, true );
wp_enqueue_script('Bootstrap');
wp_enqueue_script( 'owl-js',  get_template_directory_uri() . '/js/owl/owl.carousel.min.js', array('jquery'), '1.0.0', true );
  
   wp_enqueue_script( 'scrollmagic', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js', array('jquery'), '1.0.0', true );
   wp_enqueue_script( 'scrollindicator', 'https:////cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js', array('jquery'), '1.0.0', true );
   wp_enqueue_script( 'scrollanimation', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js', array('jquery'), '1.0.0', true );
   wp_enqueue_script( 'gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js', array('jquery'), '1.0.0', true );
//   wp_enqueue_script( 'svg_js',  get_template_directory_uri() . '/js/svg.js', array('jquery'), '1.0.0', true );

   //   wp_enqueue_script( 'svg_path_js',  get_template_directory_uri() . '/js/svg.path.js', array('jquery'), '1.0.0', true );

  wp_enqueue_script( 'brs-js', get_template_directory_uri() . '/js/brs.js', array('jquery', 'Bootstrap', 'owl-js', 'scrollmagic', 'scrollanimation', 'gsap-js'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'brs_script_enqueue' );

function brs_theme_setup(){
	add_theme_support('menus');
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Header Buttons Navigation');
	register_nav_menu('footermenu_left', 'Footer Navigation Left');
	register_nav_menu('footermenu_right', 'Footer Navigation Right');
	register_nav_menu('header_add', 'Header Additional Navigation');

/*
	==========================================
	 Theme support function
	==========================================
*/

	add_theme_support('custom-background');
	add_theme_support('custom-header');
	add_theme_support('post-formats', array('aside', 'chat', 'gallery','link','image','quote','status','video'));
	add_theme_support('post-thumbnails');
	add_theme_support('navigation-widgets');

	add_theme_support('widgets');
	
}
add_action('init', 'brs_theme_setup');


add_filter( 'wp_nav_menu_items', 'brs_menu_items', 10, 2);

 function brs_menu_items($items, $args) {
	//error_log('---arG---' . print_r('========',true));
	if (is_front_page()) {
		if($args->theme_location == 'secondary') {
			$str_button = '<li id="menu-item-999" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-999"><button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
			aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button><li>';
			$items = $items . $str_button;
		}
	}
     return $items;
 }

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


function addpagecontent_function() {
	ob_start();
	get_template_part('template-parts/faq');
	$result = ob_get_clean();
	return $result;
}
add_shortcode('addpagecontent', 'addpagecontent_function');


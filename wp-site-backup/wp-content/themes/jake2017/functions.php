<?php
/**
 * McGowan functions and definitions
 *
 *
 */

/* REGISTER MENUS */
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'filter-menu' => __( 'Filter Menu' ),
      'groups-menu' => __( 'Groups Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

/* GIVE ACTIVE CLASS TO CURRENT PAGE */
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}

// REGISTER WIDGET SIDEBARS 
register_sidebar( array(
	'name'          => __( 'Music Type Filter', 'theme_text_domain' ),
	'id'            => 'music_type_filter',
	'description'   => 'Music Type Filter',
        'class'         => 'filter',
	'before_widget' => '<li id="" class="">',
	'after_widget'  => '</li>',
	'before_title'  => '<h3 class="widgettitle">',
	'after_title'   => '</h3>' 
) );

register_sidebar( array(
  'name'          => __( 'Groups Sidebar', 'theme_text_domain' ),
  'id'            => 'groups_sidebar',
  'description'   => 'Groups Sidebar',
        'class'         => 'filter',
  'before_widget' => '<li id="" class="">',
  'after_widget'  => '</li>',
  'before_title'  => '<h3 class="widgettitle">',
  'after_title'   => '</h3>' 
) );

register_sidebar( array(
  'name'          => __( 'Schedule Sidebar', 'theme_text_domain' ),
  'id'            => 'schedule_sidebar',
  'description'   => 'Schedule Sidebar',
        'class'         => 'filter',
  'before_widget' => '<li id="" class="">',
  'after_widget'  => '</li>',
  'before_title'  => '<h3 class="widgettitle">',
  'after_title'   => '</h3>' 
) );

/* ADD FEATURED IMAGES TO PAGES */
add_theme_support( 'post-thumbnails' ); 

add_theme_support( 'custom-header' );

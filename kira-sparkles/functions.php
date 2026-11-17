<?php
/**
 * Kira Sparkles theme functions.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* ---------- Theme setup ---------- */
function kira_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	register_nav_menus( array( 'primary' => 'Primary menu' ) );
}
add_action( 'after_setup_theme', 'kira_setup' );

/* ---------- Styles and scripts ---------- */
function kira_assets() {
	wp_enqueue_style(
		'kira-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Manrope:wght@600;700;800&display=swap',
		array(),
		null
	);

	// Your original site styles (copy css/styles.css into the theme's css folder).
	wp_enqueue_style( 'kira-main', get_theme_file_uri( 'css/styles.css' ), array( 'kira-fonts' ), '1.0' );

	// Small extras that were inside the individual pages.
	wp_enqueue_style( 'kira-extras', get_theme_file_uri( 'css/page-extras.css' ), array( 'kira-main' ), '1.0' );

	// Your original script (copy js/script.js into the theme's js folder).
	wp_enqueue_script( 'kira-main', get_theme_file_uri( 'js/script.js' ), array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'kira_assets' );

/* ---------- Page links that work with any permalink setting ---------- */
function kira_page_url( $slug ) {
	if ( 'home' === $slug ) {
		return home_url( '/' );
	}
	$page = get_page_by_path( $slug );
	if ( $page ) {
		return get_permalink( $page );
	}
	return home_url( '/' . $slug . '/' );
}

/* ---------- Menu: mark the current page with the "current" class ---------- */
function kira_menu_link_class( $atts, $item ) {
	if ( ! empty( $item->current ) ) {
		$atts['class'] = 'current';
	}
	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'kira_menu_link_class', 10, 2 );

/* Shown if the menu has not been created yet. */
function kira_fallback_menu() {
	$items = array(
		'home'     => 'Home',
		'about'    => 'About Us',
		'services' => 'Services',
		'gallery'  => 'Gallery',
		'contact'  => 'Contact Us',
	);
	echo '<ul>';
	foreach ( $items as $slug => $label ) {
		$url     = kira_page_url( $slug );
		$current = ( 'home' === $slug ) ? is_front_page() : is_page( $slug );
		printf(
			'<li><a%s href="%s">%s</a></li>',
			$current ? ' class="current"' : '',
			esc_url( $url ),
			esc_html( $label )
		);
	}
	echo '</ul>';
}

/* ---------- Short description for search engines ---------- */
function kira_meta_description() {
	echo '<meta name="description" content="Kira Sparkles brings corporate cleaning, washing bay, home cleaning, laundry and carpet cleaning to you across Kawuku and the Entebbe Road corridor.">' . "\n";
}
add_action( 'wp_head', 'kira_meta_description', 1 );

/* ---------- When the theme is activated: create the pages, menu and home page ---------- */
function kira_activate_site() {
	$pages = array(
		'home'     => 'Home',
		'about'    => 'About Us',
		'services' => 'Services',
		'gallery'  => 'Gallery',
		'contact'  => 'Contact Us',
	);

	$ids = array();
	foreach ( $pages as $slug => $title ) {
		$existing = get_page_by_path( $slug );
		if ( $existing ) {
			$ids[ $slug ] = $existing->ID;
			continue;
		}
		$id = wp_insert_post(
			array(
				'post_type'    => 'page',
				'post_status'  => 'publish',
				'post_title'   => $title,
				'post_name'    => $slug,
				'post_content' => '',
			)
		);
		if ( ! is_wp_error( $id ) ) {
			$ids[ $slug ] = $id;
		}
	}

	if ( ! empty( $ids['home'] ) ) {
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $ids['home'] );
	}

	update_option( 'blogname', 'Kira Sparkles Cleaning Services' );
	update_option( 'blogdescription', 'We come to you: cleaning, laundry and washing bay, Entebbe Road, Kawuku' );

	// Main menu
	$menu_name = 'Main menu';
	$menu      = wp_get_nav_menu_object( $menu_name );
	if ( ! $menu ) {
		$menu_id = wp_create_nav_menu( $menu_name );
		if ( ! is_wp_error( $menu_id ) ) {
			foreach ( $pages as $slug => $title ) {
				if ( empty( $ids[ $slug ] ) ) {
					continue;
				}
				wp_update_nav_menu_item(
					$menu_id,
					0,
					array(
						'menu-item-title'     => $title,
						'menu-item-object'    => 'page',
						'menu-item-object-id' => $ids[ $slug ],
						'menu-item-type'      => 'post_type',
						'menu-item-status'    => 'publish',
					)
				);
			}
			$locations            = get_theme_mod( 'nav_menu_locations', array() );
			$locations['primary'] = $menu_id;
			set_theme_mod( 'nav_menu_locations', $locations );
		}
	}
}
add_action( 'after_switch_theme', 'kira_activate_site' );

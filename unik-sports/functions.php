<?php
/**
 * UniK Sports theme functions.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* ---------- Theme setup ---------- */
function unik_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
}
add_action( 'after_setup_theme', 'unik_setup' );

function unik_scripts() {
	wp_enqueue_style( 'unik-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'unik_scripts' );

/* ---------- Helpers used by the templates ---------- */
function unik_img( $file ) {
	return get_theme_file_uri( 'images/' . $file );
}

function unik_url( $slug ) {
	if ( 'home' === $slug ) {
		return home_url( '/' );
	}
	$page = get_page_by_path( $slug );
	return $page ? get_permalink( $page ) : home_url( '/' . $slug . '/' );
}

function unik_active( $slug ) {
	$on = ( 'home' === $slug ) ? is_front_page() : is_page( $slug );
	return $on ? ' class="active"' : '';
}

/* ---------- On activation: create the pages and set the home page ---------- */
function unik_activate() {
	$pages = array(
		'home'    => 'Home',
		'about'   => 'About',
		'news'    => 'News and Events',
		'results' => 'Results and Fixtures',
		'gallery' => 'Gallery',
		'contact' => 'Contact and Register',
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
				'post_title'   => $title,
				'post_name'    => $slug,
				'post_status'  => 'publish',
				'post_type'    => 'page',
				'post_content' => '',
			)
		);
		if ( ! is_wp_error( $id ) && $id ) {
			$ids[ $slug ] = $id;
		}
	}
	if ( ! empty( $ids['home'] ) ) {
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $ids['home'] );
	}
	flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'unik_activate' );

/* ---------- Team registrations are saved in the dashboard ---------- */
function unik_register_cpt() {
	register_post_type(
		'unik_registration',
		array(
			'labels'          => array(
				'name'          => 'Team Registrations',
				'singular_name' => 'Team Registration',
			),
			'public'          => false,
			'show_ui'         => true,
			'menu_icon'       => 'dashicons-groups',
			'supports'        => array( 'title', 'editor' ),
			'capability_type' => 'post',
			'map_meta_cap'    => true,
		)
	);
}
add_action( 'init', 'unik_register_cpt' );

function unik_handle_registration() {
	if ( ! isset( $_POST['unik_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['unik_nonce'] ) ), 'unik_register' ) ) {
		wp_die( 'Security check failed. Please go back and try again.' );
	}

	$get = function ( $key ) {
		return isset( $_POST[ $key ] ) ? sanitize_text_field( wp_unslash( $_POST[ $key ] ) ) : '';
	};

	$team     = $get( 'team' );
	$person   = $get( 'person' );
	$email    = sanitize_email( $get( 'email' ) );
	$phone    = $get( 'phone' );
	$sport    = $get( 'sport' );
	$players  = absint( $get( 'players' ) );
	$comments = isset( $_POST['comments'] ) ? sanitize_textarea_field( wp_unslash( $_POST['comments'] ) ) : '';

	if ( '' === $team || '' === $person || ! is_email( $email ) || '' === $sport ) {
		wp_safe_redirect( add_query_arg( 'registered', '0', unik_url( 'contact' ) ) );
		exit;
	}

	$body = "Team: $team\nContact person: $person\nEmail: $email\nPhone: $phone\nSport: $sport\nPlayers: $players\n\nComments:\n$comments";

	wp_insert_post(
		array(
			'post_type'    => 'unik_registration',
			'post_status'  => 'publish',
			'post_title'   => $team . ' - ' . $sport,
			'post_content' => $body,
		)
	);

	// Also try to email the site admin (this may not work on a local XAMPP server).
	wp_mail(
		get_option( 'admin_email' ),
		'New UniK Sports team registration: ' . $team,
		$body,
		array( 'Reply-To: ' . $email )
	);

	wp_safe_redirect( add_query_arg( 'registered', '1', unik_url( 'contact' ) ) );
	exit;
}
add_action( 'admin_post_nopriv_unik_register', 'unik_handle_registration' );
add_action( 'admin_post_unik_register', 'unik_handle_registration' );

<?php

/* Define Theme Vars */
define( 'VLOG_THEME_VERSION', '1.5' );

/* Define content width */
if ( !isset( $content_width ) ) {
	$content_width = 1104;
}

/* Localization */
load_theme_textdomain( 'vlog', get_template_directory()  . '/languages' );

/* After theme setup main hook */
add_action( 'after_setup_theme', 'vlog_theme_setup' );

/**
 * After Theme Setup
 *
 * Callback for after_theme_setup hook
 *
 * @return void
 * @since  1.0
 */

function vlog_theme_setup() {

	/* Add thumbnails support */
	add_theme_support( 'post-thumbnails' );

	/* Add theme support for title tag (since wp 4.1) */
	add_theme_support( 'title-tag' );


	/* Add image sizes */
	$image_sizes = vlog_get_image_sizes();

	if ( !empty( $image_sizes ) ) {
		foreach ( $image_sizes as $id => $size ) {
			add_image_size( $id, $size['args']['w'], $size['args']['h'], $size['args']['crop'] );
		}
	}

	/* Add post formats support */
	add_theme_support( 'post-formats', array(
			'audio', 'gallery', 'image', 'video'
		) );

	/* Support for HTML5 */
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

	/* Automatic Feed Links */
	add_theme_support( 'automatic-feed-links' );

	/* Declare WooCpommerce support */
	add_theme_support( 'woocommerce' );

}

/* Helpers and utility functions */
include_once ( get_template_directory() . '/core/helpers.php' );

/* Load frontend scripts */
include_once ( get_template_directory() . '/core/enqueue.php' );

// /* Module-specific functions */
include_once ( get_template_directory() . '/core/modules.php' );

/* Template functions */
include_once ( get_template_directory() . '/core/template-functions.php' );

/* Menus */
include_once ( get_template_directory() . '/core/menus.php' );

/* Sidebars */
include_once ( get_template_directory() . '/core/sidebars.php' );

/* Widgets */
include_once ( get_template_directory() . '/core/widgets.php' );

/* Extensions (hooks and filters to add/modify specific features ) */
include_once ( get_template_directory() . '/core/extensions.php' );

/* Add support for our mega menu */
include_once ( get_template_directory() . '/core/mega-menu.php' );

if ( is_admin() ) {

/* Admin helpers and utility functions  */
include_once ( get_template_directory() . '/core/admin/helpers.php' );

/* Load admin scripts */
include_once ( get_template_directory() . '/core/admin/enqueue.php' );

/* Theme Options */
include_once ( get_template_directory() . '/core/admin/options.php' );

/* Demo importer panel */
include_once ( get_template_directory() . '/core/admin/demo-importer.php' );

/* Include plugins - TGM Init */
include_once ( get_template_directory() . '/core/admin/plugins.php' );

/* Include AJAX action handlers */
include_once ( get_template_directory() . '/core/admin/ajax.php' );

/* Extensions ( hooks and filters to add/modify specific features ) */
include_once ( get_template_directory() . '/core/admin/extensions.php' );

/* Custom metaboxes */
include_once ( get_template_directory() . '/core/admin/metaboxes.php' );

}


?>
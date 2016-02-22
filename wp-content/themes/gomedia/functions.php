<?php
/**
 * Theme functions file
 *
 * Contains all of the Theme's setup functions, custom functions,
 * custom hooks and Theme settings.
 * 
 * @package    GoMedia
 * @author     Theme Junkie
 * @copyright  Copyright (c) 2014, Theme Junkie
 * @license    http://www.gnu.org/licenses/gpl-2.0.html
 * @since      1.0.0
 */

// Do theme setup on the 'after_setup_theme' hook.
add_action( 'after_setup_theme', 'gomedia_theme_setup' );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @since  1.0.0
 */
 /* TinyMCE */
function ilc_mce_buttons($buttons){
  array_push($buttons,
     "backcolor",
     "anchor",
     "hr",
     "sub",
     "sup",
     "fontselect",
     "fontsizeselect",
     "styleselect",
     "cleanup"
);
  return $buttons;
}
add_filter("mce_buttons_2", "ilc_mce_buttons");

 /* Tao Breadcrumbs */
 
 function the_breadcrumb() {
                echo '<ul id="crumbs">';
        if (!is_home()) {
                echo '<span><a href="';
                echo get_option('home');
                echo '">';
                echo 'Home';
                echo "</a>   »  </span>";
                if (is_category() || is_single()) {
                        echo '<span>';
                        the_category('</span><span> <a href="');
                        if (is_single()) {
                                echo ' » </span><span>';
                                the_title();
                                echo '</span>';
                        }
                } elseif (is_page()) {
                        echo '<span>';
                        echo the_title();
                        echo '</span>';
                }
        }
        elseif (is_tag()) {single_tag_title();}
        elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
        elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
        elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
        elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
        elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
        elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
        echo '</ul>';
}
/* End Breadcrumbs */
function gomedia_theme_setup() {

	// Set the content width based on the theme's design and stylesheet.
	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 825; /* pixels */
	}

	// Make the theme available for translation.
	load_theme_textdomain( 'gomedia', trailingslashit( get_template_directory() ) . 'languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Enable support for Post Thumbnails.
	add_theme_support( 'post-thumbnails' );

	// Register custom navigation menu.
	register_nav_menus(
		array(
			'primary'    => __( 'Primary Menu', 'gomedia' ),
			'secondary'  => __( 'Secondary Menu', 'gomedia' ),
			'subsidiary' => __( 'Footer Menu', 'gomedia' ),
		)
	);

	// Add custom stylesheet file to the TinyMCE visual editor.
	add_editor_style( trailingslashit( get_template_directory_uri() ) . 'assets/css/editor-style.css' );

	// Setup the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters( 'gomedia_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) )
	);

	// Enable support for HTML5 markup.
	add_theme_support(
		'html5',
		array( 'comment-list', 'search-form', 'comment-form', 'gallery', 'caption' )
	);

	// Enable support for Post Formats.
	add_theme_support(
		'post-formats',
		array( 'image', 'gallery', 'video' )
	);

	// This theme uses its own gallery styles.
	add_filter( 'use_default_gallery_style', '__return_false' );

}

/**
 * Sets up custom filters and actions for the theme.
 */
require trailingslashit( get_template_directory() ) . 'inc/functions.php';

/**
 * Custom template tags for this theme.
 */
require trailingslashit( get_template_directory() ) . 'inc/template-tags.php';

/**
 * Enqueue scripts and styles.
 */
require trailingslashit( get_template_directory() ) . 'inc/scripts.php';

/**
 * Require and recommended plugins list.
 */
require trailingslashit( get_template_directory() ) . 'inc/plugins.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require trailingslashit( get_template_directory() ) . 'inc/extras.php';

/**
 * Customizer additions.
 */
require trailingslashit( get_template_directory() ) . 'inc/customizer.php';

/**
 * We use some part of Hybrid Core to extends our themes.
 */
require trailingslashit( get_template_directory() ) . 'inc/hybrid.php';

/**
 * Load Options Framework core.
 */
define( 'OPTIONS_FRAMEWORK_DIRECTORY', trailingslashit( get_template_directory_uri() ) . 'admin/' );
require trailingslashit( get_template_directory() ) . 'admin/options-framework.php';
require trailingslashit( get_template_directory() ) . 'admin/options.php';

/**
 * Custom Widgets
 */
require trailingslashit( get_template_directory() ) . 'inc/classes/widget-ads.php';
require trailingslashit( get_template_directory() ) . 'inc/classes/widget-feedburner.php';
require trailingslashit( get_template_directory() ) . 'inc/classes/widget-video.php';
require trailingslashit( get_template_directory() ) . 'inc/classes/widget-social.php';
require trailingslashit( get_template_directory() ) . 'inc/classes/widget-recent.php';
require trailingslashit( get_template_directory() ) . 'inc/classes/widget-tabs.php';
<?php
/**
* FREEDiVE functions and definitions
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package WordPress
* @subpackage REEDiVE functions
* @since 1.0.0
*/

/**
* Table of Contents:
* Theme Support
* Required Files
* Register Styles
* Register Scripts
* Register Menus
* Custom Logo
* WP Body Open
* Register Sidebars
* Enqueue Block Editor Assets
* Enqueue Classic Editor Styles
* Block Editor Settings
*/

/**
* Sets up theme defaults and registers support for various WordPress features.
*
* Note that this function is hooked into the after_setup_theme hook, which
* runs before the init hook. The init hook is too late for some features, such
* as indicating support for post thumbnails.
*/

function remove_dns_prefetch($hints, $relation_type) {
  if ('dns-prefetch' === $relation_type) {
    return array_diff(wp_dependencies_unique_hosts(), $hints);
  }
  return $hints;
}

function remove_emoji() {
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_filter('the_content_feed', 'wp_staticize_emoji');
  remove_filter('comment_text_rss', 'wp_staticize_emoji');
  remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}

function dequeue_plugins_style() {
  wp_dequeue_style('wp-block-library');
}

function post_is_in_descendant_category( $cats, $_post = null ) {
  foreach ( (array) $cats as $cat ) {
    $descendants = get_term_children( (int) $cat, 'category' );
    if ( $descendants && in_category( $descendants, $_post ) ) {
      return true;
    }
  }
  return false;
}


function my_category_template($template) {
	$category = get_queried_object();
	if($category -> parent != 0 &&
  ($template == "" || strpos($template, "category.php") !== false)) {
		$templates = array();
		while($category -> parent) {
			$category = get_category($category -> parent);
			if (!isset($category -> slug)) break;
			$templates[] = "category-{$category->slug}.php";
			$templates[] = "category-{$category->term_id}.php";
		}
		$templates[] = "category.php";
		$template = locate_template($templates);
	}
	return $template;
}

add_filter('wpcf7_form_elements', function($content) {
  $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
  return $content;
});

function add_style() {
  wp_enqueue_style('css-reset', get_template_directory_uri() . '/assets/css/reset.css');

  if(is_home()) {
    wp_enqueue_style('css-style', get_template_directory_uri() . '/assets/css/top.css');
  }

  if(is_page('about')) {
    wp_enqueue_style('css-style', get_template_directory_uri() . '/assets/css/about.css');
  }

  if(is_page('contact')) {
    wp_enqueue_style('css-style', get_template_directory_uri() . '/assets/css/contact.css');
  }

  if(post_is_in_descendant_category(2)) {
    wp_enqueue_style('css-style', get_template_directory_uri() . '/assets/css/course.css');
  }

  if(is_404()) {
    wp_enqueue_style('css-style', get_template_directory_uri() . '/assets/css/404.css');
  }

  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.2.1.min.js', array(), false, true);
  wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), false, true);
}

add_filter('wp_resource_hints', 'remove_dns_prefetch', 10, 2);
add_filter('category_template', 'my_category_template');

add_action('init', 'remove_emoji');
add_action('wp_enqueue_scripts', 'dequeue_plugins_style');

remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');

remove_filter('the_title', 'wpautop');
remove_filter('the_content', 'wpautop');
remove_filter('comment_text', 'wpautop');
remove_filter('the_excerpt', 'wpautop');

add_action('wp_enqueue_scripts', 'add_style');
add_theme_support('post-thumbnails');

?>

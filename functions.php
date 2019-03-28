<?php

//======================================================================
// THEME SETUP
//======================================================================

// Basic Theme Support
if ( ! function_exists( 'uglyduck_setup' ) ) :
	function uglyduck_setup() {
		load_theme_textdomain( 'uglyduck', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
		) );
		add_theme_support( 'woocommerce' );
	}
endif;
add_action( 'after_setup_theme', 'uglyduck_setup' );

// Create Navigation Locations
register_nav_menus(
	array(
		'primary' => esc_html__( 'Primary Menu', 'uglyduck' ),
		'mobile' => esc_html__( 'Mobile Menu', 'uglyduck' ),
	)
);

// Open Graph Functionality
add_filter('language_attributes', 'add_og_xml_ns');
function add_og_xml_ns($content) {
  return ' xmlns:og="http://ogp.me/ns#" ' . $content;
}
add_filter('language_attributes', 'add_fb_xml_ns');
function add_fb_xml_ns($content) {
  return ' xmlns:fb="https://www.facebook.com/2008/fbml" ' . $content;
}

// Disable Wordpress Auto Emails
function wpb_stop_update_emails( $send, $type, $core_update, $result ) {
if ( ! empty( $type ) && $type == 'success' ) {
	return false;
}
	return true;
}
add_filter( 'auto_core_update_send_email', 'wpb_stop_auto_update_emails', 10, 4 );

// Allow SVG Uploads
function cc_mime_types($mimes) {
 $mimes['svg'] = 'image/svg+xml';
 return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

//======================================================================
// OPTIONS PAGE
//======================================================================

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Base Settings',
		'menu_title'	=> 'Base Options',
		'menu_slug' 	=> 'udm-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Company Information',
		'menu_title'	=> 'Company Info',
		'parent_slug'	=> 'udm-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Social Options',
		'menu_title'	=> 'Social Options',
		'parent_slug'	=> 'udm-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Header Options',
		'menu_title'	=> 'Header Options',
		'parent_slug'	=> 'udm-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer Options',
		'menu_title'	=> 'Footer Options',
		'parent_slug'	=> 'udm-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer CTA Options',
		'menu_title'	=> 'Footer CTA Options',
		'parent_slug'	=> 'udm-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Hero Options',
		'menu_title'	=> 'Hero Options',
		'parent_slug'	=> 'udm-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Mobile Options',
		'menu_title'	=> 'Mobile Options',
		'parent_slug'	=> 'udm-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Blog Options',
		'menu_title'	=> 'Blog Options',
		'parent_slug'	=> 'udm-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Additional Options',
		'menu_title'	=> 'Additional Options',
		'parent_slug'	=> 'udm-general-settings',
	));
}

// Hide ACF
// add_filter('acf/settings/show_admin', '__return_false');

// Add Header Code Field To <head> Tag
function header_code() {
the_field('header_code','options'); ?>
<style type="text/css">
:root {
	--primary: <?php echo the_field('primary_color', 'options'); ?>;
	--secondary: <?php echo the_field('secondary_color', 'options'); ?>;
}
</style>
<?php }
add_action( 'wp_head', 'header_code' );


//======================================================================
// WIDGETS
//======================================================================

// Widget Structure
function create_widget( $name, $id, $description ) {
	$args = array(
	'name'          => __($name ),
	'id'            => $id,
	'description'   => $description,
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h5 class="widget__title">',
	'after_title'   => '</h5>'
	);
	register_sidebar( $args );
}
create_widget( 'Empty Sidebar', 'empty_sidebar', 'This will hold the default WP widgets' );
create_widget( 'Footer Section One', 'footer_one', 'Displays in the first section of the footer' );
create_widget( 'Footer Section Two', 'footer_two', 'Displays in the second section of the footer' );
create_widget( 'Footer Section Three', 'footer_three', 'Displays in the third section of the footer' );
create_widget( 'Footer Section Four', 'footer_four', 'Displays in the fourth section of the footer' );
create_widget( 'Footer Section Five', 'footer_five', 'Displays in the fifth section of the footer' );
create_widget( 'Footer Section Six', 'footer_six', 'Displays in the sixth section of the footer' );
create_widget( 'Sidebar', 'sidebar', 'Displays in sidebar of internal pages' );

// Enable Shortcodes In Widgets
add_filter( 'widget_text', 'do_shortcode' );

// Add PHP Functionality To Widgets
function php_execute($html){
	if(strpos($html,"<"."?php")!==false) {
		ob_start();
		eval("?".">".$html);
		$html = ob_get_contents();
		ob_end_clean();
	}
	return $html;
}
add_filter('widget_text','php_execute',100);

// Remove Comments
function remove_comments() {
	remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'remove_comments' );

//======================================================================
// CREATE SHORTCODES FROM ALL COMPANY FIELDS
//======================================================================

function company_name(){
	return get_field('company_name', 'options');
}
add_shortcode( 'company_name', 'company_name' );

function license_number(){
	return get_field('license_number', 'options');
}
add_shortcode( 'license_number', 'license_number' );

function phone_number(){
	return get_field('phone_number', 'options');
}
add_shortcode( 'phone_number', 'phone_number' );

function email_address(){
	return get_field('email_address', 'options');
}
add_shortcode( 'email_address', 'email_address' );

//======================================================================
// ENQUEUE SCRIPTS & STYLES
//======================================================================

// Enqueue Theme Files
function udm_enqueue() {

	// CSS
	wp_enqueue_style( 'bootstrap-css','//stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"' );
	wp_enqueue_style( 'icons-css','//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"' );
	wp_enqueue_style( 'base-css', get_stylesheet_uri() );

	// JAVASCRIPT
	wp_enqueue_script( 'uglyduck-js', get_template_directory_uri() . '/js/app.js', array('jquery'), false, true );
	wp_enqueue_script( 'uglyduck-scrollreveal', 'https://cdn.jsdelivr.net/npm/scrollreveal@4.0.5/dist/scrollreveal.min.js', array('jquery'), false, true );
}
add_action( 'wp_enqueue_scripts', 'udm_enqueue' );

//======================================================================
// VISUAL COMPOSER TEST
//======================================================================

if(defined( 'WPB_VC_VERSION' )) {
	vc_map( array(
	   "name" => __("Content Box"),
	   "base" => "content_box",
	   "category" => __('UDM'),
		 "class" => 'contentbox',
		 "show_settings_on_create" => false,
		 "params" => array(
			 array(
	 			 "type" => "textfield",
	 			 "class" => "",
	 			 "heading" => __("Title"),
	 			 "param_name" => "content_box_title",
	 			 "value" => __(""),
	 		 ),
			 array(
					"type" => "textarea_html",
					"class" => "",
					"heading" => __("Description"),
					"param_name" => "content",
					"value" => __(""),
				),
			 array(
					 "type" => "colorpicker",
					 "class" => "",
					 "heading" => __( "Background Color" ),
					 "param_name" => "content_box_color",
					 "value" => __(""),
			 ),
			 array(
					"type" => "vc_link",
					"class" => "",
					"heading" => __("Link"),
					"param_name" => "content_box_link",
					"value" => __(""),
			 ),
			 array(
					"type" => "colorpicker",
					"class" => "",
					"heading" => __("Button Background Color"),
					"param_name" => "content_box_button_color",
					"value" => __(""),
			 ),
			 array(
					 "type" => "textfield",
					 "class" => "",
					 "heading" => __("Button Text"),
					 "param_name" => "content_box_button_title",
					 "value" => __(""),
				 ),
	   )
	) );

	function content_box( $atts, $content = null ) {
	 extract( shortcode_atts( array(
	  'content_box_title' => '',
		'content_box_image' => '',
		'content_box_color' => '',
		'content_box_button_color' => '',
		'content_box_button_title' => '',
		'content_box_link' => '',
	 ), $atts ) );
		 $content = wpb_js_remove_wpautop($content, true);
		 return "<div class='padded-vc' style='background-color: {$content_box_color}'><h3>{$content_box_title}</h3>{$content}<a style='border-radius: 2em; background: {$content_box_button_color} !important;' href='{$content_box_link}' class='btn'>{$content_box_button_title}</a></div>";
	}

	add_shortcode( 'content_box', 'content_box' );
}

//======================================================================
// LOAD FILES
//======================================================================

require_once(dirname(__FILE__) . '/post-types.php'); // Post Types

require_once(dirname(__FILE__) . '/field-groups.php'); // Field Groups

if(!get_field('realtor_widgets', 'options')) :
	function remove_realtor_widgets() {
	  remove_menu_page( 'edit.php?post_type=agent' );
		remove_menu_page( 'edit.php?post_type=listing' );
	}
	add_action( 'admin_menu', 'remove_realtor_widgets' );
endif;

if(!get_field('testimonials_widgets', 'options')) :
	function remove_testimonial_widgets() {
	  remove_menu_page( 'edit.php?post_type=testimonials' );
	}
	add_action( 'admin_menu', 'remove_testimonial_widgets' );
endif;

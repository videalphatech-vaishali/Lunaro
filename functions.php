<?php

/**
 * Twenty Twenty functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
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
 *
 * @since Twenty Twenty 1.0
 */
function twentytwenty_theme_support()
{

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	// Custom background color.
	add_theme_support(
		'custom-background',
		array(
			'default-color' => 'f5efe0',
		)
	);

	// Set content-width.
	global $content_width;
	if (!isset($content_width)) {
		$content_width = 580;
	}

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support('post-thumbnails');

	// Set post thumbnail size.
	set_post_thumbnail_size(1200, 9999);

	// Add custom image size used in Cover Template.
	add_image_size('twentytwenty-fullscreen', 1980, 9999);

	// Custom logo.
	$logo_width = 120;
	$logo_height = 90;

	// If the retina setting is active, double the recommended width and height.
	if (get_theme_mod('retina_logo', false)) {
		$logo_width = floor($logo_width * 2);
		$logo_height = floor($logo_height * 2);
	}

	add_theme_support(
		'custom-logo',
		array(
			'height' => $logo_height,
			'width' => $logo_width,
			'flex-height' => true,
			'flex-width' => true,
		)
	);

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
			'navigation-widgets',
		)
	);

	// Add support for full and wide align images.
	add_theme_support('align-wide');

	// Add support for responsive embeds.
	add_theme_support('responsive-embeds');

	/*
	 * Adds starter content to highlight the theme on fresh sites.
	 * This is done conditionally to avoid loading the starter content on every
	 * page load, as it is a one-off operation only needed once in the customizer.
	 */
	if (is_customize_preview()) {
		require get_template_directory() . '/inc/starter-content.php';
		add_theme_support('starter-content', twentytwenty_get_starter_content());
	}

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/*
	 * Adds `async` and `defer` support for scripts registered or enqueued
	 * by the theme.
	 */
	$loader = new TwentyTwenty_Script_Loader();
	if (version_compare($GLOBALS['wp_version'], '6.3', '<')) {
		add_filter('script_loader_tag', array($loader, 'filter_script_loader_tag'), 10, 2);
	} else {
		add_filter('print_scripts_array', array($loader, 'migrate_legacy_strategy_script_data'), 100);
	}
}

add_action('after_setup_theme', 'twentytwenty_theme_support');

/**
 * REQUIRED FILES
 * Include required files.
 */
require get_template_directory() . '/inc/template-tags.php';

// Handle SVG icons.
require get_template_directory() . '/classes/class-twentytwenty-svg-icons.php';
require get_template_directory() . '/inc/svg-icons.php';

// Handle Customizer settings.
require get_template_directory() . '/classes/class-twentytwenty-customize.php';

// Require Separator Control class.
require get_template_directory() . '/classes/class-twentytwenty-separator-control.php';

// Custom comment walker.
require get_template_directory() . '/classes/class-twentytwenty-walker-comment.php';

// Custom page walker.
require get_template_directory() . '/classes/class-twentytwenty-walker-page.php';

// Custom script loader class.
require get_template_directory() . '/classes/class-twentytwenty-script-loader.php';

// Non-latin language handling.
require get_template_directory() . '/classes/class-twentytwenty-non-latin-languages.php';

// Custom CSS.
require get_template_directory() . '/inc/custom-css.php';

/**
 * Register block patterns and pattern categories.
 *
 * @since Twenty Twenty 2.8
 */
function twentytwenty_register_block_patterns()
{
	require get_template_directory() . '/inc/block-patterns.php';
}

add_action('init', 'twentytwenty_register_block_patterns');

/**
 * Register and Enqueue Styles.
 *
 * @since Twenty Twenty 1.0
 * @since Twenty Twenty 2.6 Enqueue the CSS file for the variable font.
 */
function twentytwenty_register_styles()
{

	$theme_version = wp_get_theme()->get('Version');

	wp_enqueue_style('twentytwenty-style', get_stylesheet_uri(), array(), $theme_version);
	wp_style_add_data('twentytwenty-style', 'rtl', 'replace');

	// Enqueue the CSS file for the variable font, Inter.
	wp_enqueue_style('twentytwenty-fonts', get_theme_file_uri('/assets/css/font-inter.css'), array(), $theme_version, 'all');

	// Add output of Customizer settings as inline style.
	$customizer_css = twentytwenty_get_customizer_css('front-end');
	if ($customizer_css) {
		wp_add_inline_style('twentytwenty-style', $customizer_css);
	}

	// Add print CSS.
	wp_enqueue_style('twentytwenty-print-style', get_template_directory_uri() . '/print.css', null, $theme_version, 'print');
}

add_action('wp_enqueue_scripts', 'twentytwenty_register_styles');

/**
 * Register and Enqueue Scripts.
 *
 * @since Twenty Twenty 1.0
 */
function twentytwenty_register_scripts()
{

	$theme_version = wp_get_theme()->get('Version');

	if ((!is_admin()) && is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}

	/*
	 * This script is intentionally printed in the head because it involves the page header. The `defer` script loading
	 * strategy ensures that it does not block rendering; being in the head it will start loading earlier so that it
	 * will execute sooner once the DOM has loaded. The $args array is not used here to avoid unintentional footer
	 * placement in WP<6.3; the wp_script_add_data() call is used instead.
	 */
	wp_enqueue_script('twentytwenty-js', get_template_directory_uri() . '/assets/js/index.js', array(), $theme_version);
	wp_script_add_data('twentytwenty-js', 'strategy', 'defer');
}

add_action('wp_enqueue_scripts', 'twentytwenty_register_scripts');

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @since Twenty Twenty 1.0
 * @deprecated Twenty Twenty 2.3 Removed from wp_print_footer_scripts action.
 *
 * @link https://git.io/vWdr2
 */
function twentytwenty_skip_link_focus_fix()
{
	// The following is minified via `terser --compress --mangle -- assets/js/skip-link-focus-fix.js`.
	?>
	<script>
		/(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window.addEventListener("hashchange", function () {
			var t, e = location.hash.substring(1);
			/^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i.test(t.tagName) || (t.tabIndex = -1), t.focus())
		}, !1);
	</script>
	<?php
}

/**
 * Enqueue non-latin language styles.
 *
 * @since Twenty Twenty 1.0
 *
 * @return void
 */
function twentytwenty_non_latin_languages()
{
	$custom_css = TwentyTwenty_Non_Latin_Languages::get_non_latin_css('front-end');

	if ($custom_css) {
		wp_add_inline_style('twentytwenty-style', $custom_css);
	}
}

add_action('wp_enqueue_scripts', 'twentytwenty_non_latin_languages');

/**
 * Register navigation menus uses wp_nav_menu in five places.
 *
 * @since Twenty Twenty 1.0
 */
function twentytwenty_menus()
{

	$locations = array(
		'primary' => __('Desktop Horizontal Menu', 'twentytwenty'),
		'expanded' => __('Desktop Expanded Menu', 'twentytwenty'),
		'mobile' => __('Mobile Menu', 'twentytwenty'),
		'footer' => __('Footer Menu', 'twentytwenty'),
		'social' => __('Social Menu', 'twentytwenty'),
	);

	register_nav_menus($locations);
}

add_action('init', 'twentytwenty_menus');

/**
 * Get the information about the logo.
 *
 * @since Twenty Twenty 1.0
 *
 * @param string $html The HTML output from get_custom_logo (core function).
 * @return string
 */
function twentytwenty_get_custom_logo($html)
{

	$logo_id = get_theme_mod('custom_logo');

	if (!$logo_id) {
		return $html;
	}

	$logo = wp_get_attachment_image_src($logo_id, 'full');

	if ($logo) {
		// For clarity.
		$logo_width = esc_attr($logo[1]);
		$logo_height = esc_attr($logo[2]);

		// If the retina logo setting is active, reduce the width/height by half.
		if (get_theme_mod('retina_logo', false)) {
			$logo_width = floor($logo_width / 2);
			$logo_height = floor($logo_height / 2);

			$search = array(
				'/width=\"\d+\"/iU',
				'/height=\"\d+\"/iU',
			);

			$replace = array(
				"width=\"{$logo_width}\"",
				"height=\"{$logo_height}\"",
			);

			// Add a style attribute with the height, or append the height to the style attribute if the style attribute already exists.
			if (false === strpos($html, ' style=')) {
				$search[] = '/(src=)/';
				$replace[] = "style=\"height: {$logo_height}px;\" src=";
			} else {
				$search[] = '/(style="[^"]*)/';
				$replace[] = "$1 height: {$logo_height}px;";
			}

			$html = preg_replace($search, $replace, $html);
		}
	}

	return $html;
}

add_filter('get_custom_logo', 'twentytwenty_get_custom_logo');

if (!function_exists('wp_body_open')) {

	/**
	 * Shim for wp_body_open, ensuring backward compatibility with versions of WordPress older than 5.2.
	 *
	 * @since Twenty Twenty 1.0
	 */
	function wp_body_open()
	{
		/** This action is documented in wp-includes/general-template.php */
		do_action('wp_body_open');
	}
}

/**
 * Include a skip to content link at the top of the page so that users can bypass the menu.
 *
 * @since Twenty Twenty 1.0
 */
function twentytwenty_skip_link()
{
	echo '<a class="skip-link screen-reader-text" href="#site-content">' .
		/* translators: Hidden accessibility text. */
		__('Skip to the content', 'twentytwenty') .
		'</a>';
}

add_action('wp_body_open', 'twentytwenty_skip_link', 5);

/**
 * Register widget areas.
 *
 * @since Twenty Twenty 1.0
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function twentytwenty_sidebar_registration()
{

	// Arguments used in all register_sidebar() calls.
	$shared_args = array(
		'before_title' => '<h2 class="widget-title subheading heading-size-3">',
		'after_title' => '</h2>',
		'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
		'after_widget' => '</div></div>',
	);

	// Footer #1.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name' => __('Footer #1', 'twentytwenty'),
				'id' => 'sidebar-1',
				'description' => __('Widgets in this area will be displayed in the first column in the footer.', 'twentytwenty'),
			)
		)
	);

	// Footer #2.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name' => __('Footer #2', 'twentytwenty'),
				'id' => 'sidebar-2',
				'description' => __('Widgets in this area will be displayed in the second column in the footer.', 'twentytwenty'),
			)
		)
	);
}

add_action('widgets_init', 'twentytwenty_sidebar_registration');

/**
 * Enqueue supplemental block editor styles.
 *
 * @since Twenty Twenty 1.0
 * @since Twenty Twenty 2.4 Removed a script related to the obsolete Squared style of Button blocks.
 * @since Twenty Twenty 2.6 Enqueue the CSS file for the variable font.
 */
function twentytwenty_block_editor_styles()
{

	$theme_version = wp_get_theme()->get('Version');

	// Enqueue the editor styles.
	wp_enqueue_style('twentytwenty-block-editor-styles', get_theme_file_uri('/assets/css/editor-style-block.css'), array(), $theme_version, 'all');
	wp_style_add_data('twentytwenty-block-editor-styles', 'rtl', 'replace');

	// Add inline style from the Customizer.
	$customizer_css = twentytwenty_get_customizer_css('block-editor');
	if ($customizer_css) {
		wp_add_inline_style('twentytwenty-block-editor-styles', $customizer_css);
	}

	// Enqueue the CSS file for the variable font, Inter.
	wp_enqueue_style('twentytwenty-fonts', get_theme_file_uri('/assets/css/font-inter.css'), array(), $theme_version, 'all');

	// Add inline style for non-latin fonts.
	$custom_css = TwentyTwenty_Non_Latin_Languages::get_non_latin_css('block-editor');
	if ($custom_css) {
		wp_add_inline_style('twentytwenty-block-editor-styles', $custom_css);
	}
}

if (is_admin() && version_compare($GLOBALS['wp_version'], '6.3', '>=')) {
	add_action('enqueue_block_assets', 'twentytwenty_block_editor_styles', 1, 1);
} else {
	add_action('enqueue_block_editor_assets', 'twentytwenty_block_editor_styles', 1, 1);
}

/**
 * Enqueue classic editor styles.
 *
 * @since Twenty Twenty 1.0
 * @since Twenty Twenty 2.6 Enqueue the CSS file for the variable font.
 */
function twentytwenty_classic_editor_styles()
{

	$classic_editor_styles = array(
		'/assets/css/editor-style-classic.css',
		'/assets/css/font-inter.css',
	);

	add_editor_style($classic_editor_styles);
}

add_action('init', 'twentytwenty_classic_editor_styles');

/**
 * Output Customizer settings in the classic editor.
 * Adds styles to the head of the TinyMCE iframe. Kudos to @Otto42 for the original solution.
 *
 * @since Twenty Twenty 1.0
 *
 * @param array $mce_init TinyMCE styles.
 * @return array TinyMCE styles.
 */
function twentytwenty_add_classic_editor_customizer_styles($mce_init)
{

	$styles = twentytwenty_get_customizer_css('classic-editor');

	if (!$styles) {
		return $mce_init;
	}

	if (!isset($mce_init['content_style'])) {
		$mce_init['content_style'] = $styles . ' ';
	} else {
		$mce_init['content_style'] .= ' ' . $styles . ' ';
	}

	return $mce_init;
}

add_filter('tiny_mce_before_init', 'twentytwenty_add_classic_editor_customizer_styles');

/**
 * Output non-latin font styles in the classic editor.
 * Adds styles to the head of the TinyMCE iframe. Kudos to @Otto42 for the original solution.
 *
 * @param array $mce_init TinyMCE styles.
 * @return array TinyMCE styles.
 */
function twentytwenty_add_classic_editor_non_latin_styles($mce_init)
{

	$styles = TwentyTwenty_Non_Latin_Languages::get_non_latin_css('classic-editor');

	// Return if there are no styles to add.
	if (!$styles) {
		return $mce_init;
	}

	if (!isset($mce_init['content_style'])) {
		$mce_init['content_style'] = $styles . ' ';
	} else {
		$mce_init['content_style'] .= ' ' . $styles . ' ';
	}

	return $mce_init;
}

add_filter('tiny_mce_before_init', 'twentytwenty_add_classic_editor_non_latin_styles');

/**
 * Block Editor Settings.
 * Add custom colors and font sizes to the block editor.
 *
 * @since Twenty Twenty 1.0
 */
function twentytwenty_block_editor_settings()
{

	// Block Editor Palette.
	$editor_color_palette = array(
		array(
			'name' => __('Accent Color', 'twentytwenty'),
			'slug' => 'accent',
			'color' => twentytwenty_get_color_for_area('content', 'accent'),
		),
		array(
			'name' => _x('Primary', 'color', 'twentytwenty'),
			'slug' => 'primary',
			'color' => twentytwenty_get_color_for_area('content', 'text'),
		),
		array(
			'name' => _x('Secondary', 'color', 'twentytwenty'),
			'slug' => 'secondary',
			'color' => twentytwenty_get_color_for_area('content', 'secondary'),
		),
		array(
			'name' => __('Subtle Background', 'twentytwenty'),
			'slug' => 'subtle-background',
			'color' => twentytwenty_get_color_for_area('content', 'borders'),
		),
	);

	// Add the background option.
	$background_color = get_theme_mod('background_color');
	if (!$background_color) {
		$background_color_arr = get_theme_support('custom-background');
		$background_color = $background_color_arr[0]['default-color'];
	}
	$editor_color_palette[] = array(
		'name' => __('Background Color', 'twentytwenty'),
		'slug' => 'background',
		'color' => '#' . $background_color,
	);

	// If we have accent colors, add them to the block editor palette.
	if ($editor_color_palette) {
		add_theme_support('editor-color-palette', $editor_color_palette);
	}

	// Block Editor Font Sizes.
	add_theme_support(
		'editor-font-sizes',
		array(
			array(
				'name' => _x('Small', 'Name of the small font size in the block editor', 'twentytwenty'),
				'shortName' => _x('S', 'Short name of the small font size in the block editor.', 'twentytwenty'),
				'size' => 18,
				'slug' => 'small',
			),
			array(
				'name' => _x('Regular', 'Name of the regular font size in the block editor', 'twentytwenty'),
				'shortName' => _x('M', 'Short name of the regular font size in the block editor.', 'twentytwenty'),
				'size' => 21,
				'slug' => 'normal',
			),
			array(
				'name' => _x('Large', 'Name of the large font size in the block editor', 'twentytwenty'),
				'shortName' => _x('L', 'Short name of the large font size in the block editor.', 'twentytwenty'),
				'size' => 26.25,
				'slug' => 'large',
			),
			array(
				'name' => _x('Larger', 'Name of the larger font size in the block editor', 'twentytwenty'),
				'shortName' => _x('XL', 'Short name of the larger font size in the block editor.', 'twentytwenty'),
				'size' => 32,
				'slug' => 'larger',
			),
		)
	);

	add_theme_support('editor-styles');

	// If we have a dark background color then add support for dark editor style.
	// We can determine if the background color is dark by checking if the text-color is white.
	if ('#ffffff' === strtolower(twentytwenty_get_color_for_area('content', 'text'))) {
		add_theme_support('dark-editor-style');
	}
}

add_action('after_setup_theme', 'twentytwenty_block_editor_settings');

/**
 * Overwrite default more tag with styling and screen reader markup.
 *
 * @param string $html The default output HTML for the more tag.
 * @return string
 */
function twentytwenty_read_more_tag($html)
{
	return preg_replace('/<a(.*)>(.*)<\/a>/iU', sprintf('<div class="read-more-button-wrap"><a$1><span class="faux-button">$2</span> <span class="screen-reader-text">"%1$s"</span></a></div>', get_the_title(get_the_ID())), $html);
}

add_filter('the_content_more_link', 'twentytwenty_read_more_tag');

/**
 * Enqueues scripts for customizer controls & settings.
 *
 * @since Twenty Twenty 1.0
 *
 * @return void
 */
function twentytwenty_customize_controls_enqueue_scripts()
{
	$theme_version = wp_get_theme()->get('Version');

	// Add main customizer js file.
	wp_enqueue_script('twentytwenty-customize', get_template_directory_uri() . '/assets/js/customize.js', array('jquery'), $theme_version);

	// Add script for color calculations.
	wp_enqueue_script('twentytwenty-color-calculations', get_template_directory_uri() . '/assets/js/color-calculations.js', array('wp-color-picker'), $theme_version);

	// Add script for controls.
	wp_enqueue_script('twentytwenty-customize-controls', get_template_directory_uri() . '/assets/js/customize-controls.js', array('twentytwenty-color-calculations', 'customize-controls', 'underscore', 'jquery'), $theme_version);
	wp_localize_script('twentytwenty-customize-controls', 'twentyTwentyBgColors', twentytwenty_get_customizer_color_vars());
}

add_action('customize_controls_enqueue_scripts', 'twentytwenty_customize_controls_enqueue_scripts');

/**
 * Enqueue scripts for the customizer preview.
 *
 * @since Twenty Twenty 1.0
 *
 * @return void
 */
function twentytwenty_customize_preview_init()
{
	$theme_version = wp_get_theme()->get('Version');

	wp_enqueue_script('twentytwenty-customize-preview', get_theme_file_uri('/assets/js/customize-preview.js'), array('customize-preview', 'customize-selective-refresh', 'jquery'), $theme_version, array('in_footer' => true));
	wp_localize_script('twentytwenty-customize-preview', 'twentyTwentyBgColors', twentytwenty_get_customizer_color_vars());
	wp_localize_script('twentytwenty-customize-preview', 'twentyTwentyPreviewEls', twentytwenty_get_elements_array());

	wp_add_inline_script(
		'twentytwenty-customize-preview',
		sprintf(
			'wp.customize.selectiveRefresh.partialConstructor[ %1$s ].prototype.attrs = %2$s;',
			wp_json_encode('cover_opacity'),
			wp_json_encode(twentytwenty_customize_opacity_range())
		)
	);
}

add_action('customize_preview_init', 'twentytwenty_customize_preview_init');

/**
 * Get accessible color for an area.
 *
 * @since Twenty Twenty 1.0
 *
 * @param string $area    The area we want to get the colors for.
 * @param string $context Can be 'text' or 'accent'.
 * @return string Returns a HEX color.
 */
function twentytwenty_get_color_for_area($area = 'content', $context = 'text')
{

	// Get the value from the theme-mod.
	$settings = get_theme_mod(
		'accent_accessible_colors',
		array(
			'content' => array(
				'text' => '#000000',
				'accent' => '#cd2653',
				'secondary' => '#6d6d6d',
				'borders' => '#dcd7ca',
			),
			'header-footer' => array(
				'text' => '#000000',
				'accent' => '#cd2653',
				'secondary' => '#6d6d6d',
				'borders' => '#dcd7ca',
			),
		)
	);

	// If we have a value return it.
	if (isset($settings[$area]) && isset($settings[$area][$context])) {
		return $settings[$area][$context];
	}

	// Return false if the option doesn't exist.
	return false;
}

/**
 * Returns an array of variables for the customizer preview.
 *
 * @since Twenty Twenty 1.0
 *
 * @return array
 */
function twentytwenty_get_customizer_color_vars()
{
	$colors = array(
		'content' => array(
			'setting' => 'background_color',
		),
		'header-footer' => array(
			'setting' => 'header_footer_background_color',
		),
	);
	return $colors;
}

/**
 * Get an array of elements.
 *
 * @since Twenty Twenty 1.0
 *
 * @return array
 */
function twentytwenty_get_elements_array()
{

	// The array is formatted like this:
	// [key-in-saved-setting][sub-key-in-setting][css-property] = [elements].
	$elements = array(
		'content' => array(
			'accent' => array(
				'color' => array('.color-accent', '.color-accent-hover:hover', '.color-accent-hover:focus', ':root .has-accent-color', '.has-drop-cap:not(:focus):first-letter', '.wp-block-button.is-style-outline', 'a'),
				'border-color' => array('blockquote', '.border-color-accent', '.border-color-accent-hover:hover', '.border-color-accent-hover:focus'),
				'background-color' => array('button', '.button', '.faux-button', '.wp-block-button__link', '.wp-block-file .wp-block-file__button', 'input[type="button"]', 'input[type="reset"]', 'input[type="submit"]', '.bg-accent', '.bg-accent-hover:hover', '.bg-accent-hover:focus', ':root .has-accent-background-color', '.comment-reply-link'),
				'fill' => array('.fill-children-accent', '.fill-children-accent *'),
			),
			'background' => array(
				'color' => array(':root .has-background-color', 'button', '.button', '.faux-button', '.wp-block-button__link', '.wp-block-file__button', 'input[type="button"]', 'input[type="reset"]', 'input[type="submit"]', '.wp-block-button', '.comment-reply-link', '.has-background.has-primary-background-color:not(.has-text-color)', '.has-background.has-primary-background-color *:not(.has-text-color)', '.has-background.has-accent-background-color:not(.has-text-color)', '.has-background.has-accent-background-color *:not(.has-text-color)'),
				'background-color' => array(':root .has-background-background-color'),
			),
			'text' => array(
				'color' => array('body', '.entry-title a', ':root .has-primary-color'),
				'background-color' => array(':root .has-primary-background-color'),
			),
			'secondary' => array(
				'color' => array('cite', 'figcaption', '.wp-caption-text', '.post-meta', '.entry-content .wp-block-archives li', '.entry-content .wp-block-categories li', '.entry-content .wp-block-latest-posts li', '.wp-block-latest-comments__comment-date', '.wp-block-latest-posts__post-date', '.wp-block-embed figcaption', '.wp-block-image figcaption', '.wp-block-pullquote cite', '.comment-metadata', '.comment-respond .comment-notes', '.comment-respond .logged-in-as', '.pagination .dots', '.entry-content hr:not(.has-background)', 'hr.styled-separator', ':root .has-secondary-color'),
				'background-color' => array(':root .has-secondary-background-color'),
			),
			'borders' => array(
				'border-color' => array('pre', 'fieldset', 'input', 'textarea', 'table', 'table *', 'hr'),
				'background-color' => array('caption', 'code', 'code', 'kbd', 'samp', '.wp-block-table.is-style-stripes tbody tr:nth-child(odd)', ':root .has-subtle-background-background-color'),
				'border-bottom-color' => array('.wp-block-table.is-style-stripes'),
				'border-top-color' => array('.wp-block-latest-posts.is-grid li'),
				'color' => array(':root .has-subtle-background-color'),
			),
		),
		'header-footer' => array(
			'accent' => array(
				'color' => array('body:not(.overlay-header) .primary-menu > li > a', 'body:not(.overlay-header) .primary-menu > li > .icon', '.modal-menu a', '.footer-menu a, .footer-widgets a:where(:not(.wp-block-button__link))', '#site-footer .wp-block-button.is-style-outline', '.wp-block-pullquote:before', '.singular:not(.overlay-header) .entry-header a', '.archive-header a', '.header-footer-group .color-accent', '.header-footer-group .color-accent-hover:hover'),
				'background-color' => array('.social-icons a', '#site-footer button:not(.toggle)', '#site-footer .button', '#site-footer .faux-button', '#site-footer .wp-block-button__link', '#site-footer .wp-block-file__button', '#site-footer input[type="button"]', '#site-footer input[type="reset"]', '#site-footer input[type="submit"]'),
			),
			'background' => array(
				'color' => array('.social-icons a', 'body:not(.overlay-header) .primary-menu ul', '.header-footer-group button', '.header-footer-group .button', '.header-footer-group .faux-button', '.header-footer-group .wp-block-button:not(.is-style-outline) .wp-block-button__link', '.header-footer-group .wp-block-file__button', '.header-footer-group input[type="button"]', '.header-footer-group input[type="reset"]', '.header-footer-group input[type="submit"]'),
				'background-color' => array('#site-header', '.footer-nav-widgets-wrapper', '#site-footer', '.menu-modal', '.menu-modal-inner', '.search-modal-inner', '.archive-header', '.singular .entry-header', '.singular .featured-media:before', '.wp-block-pullquote:before'),
			),
			'text' => array(
				'color' => array('.header-footer-group', 'body:not(.overlay-header) #site-header .toggle', '.menu-modal .toggle'),
				'background-color' => array('body:not(.overlay-header) .primary-menu ul'),
				'border-bottom-color' => array('body:not(.overlay-header) .primary-menu > li > ul:after'),
				'border-left-color' => array('body:not(.overlay-header) .primary-menu ul ul:after'),
			),
			'secondary' => array(
				'color' => array('.site-description', 'body:not(.overlay-header) .toggle-inner .toggle-text', '.widget .post-date', '.widget .rss-date', '.widget_archive li', '.widget_categories li', '.widget cite', '.widget_pages li', '.widget_meta li', '.widget_nav_menu li', '.powered-by-wordpress', '.footer-credits .privacy-policy', '.to-the-top', '.singular .entry-header .post-meta', '.singular:not(.overlay-header) .entry-header .post-meta a'),
			),
			'borders' => array(
				'border-color' => array('.header-footer-group pre', '.header-footer-group fieldset', '.header-footer-group input', '.header-footer-group textarea', '.header-footer-group table', '.header-footer-group table *', '.footer-nav-widgets-wrapper', '#site-footer', '.menu-modal nav *', '.footer-widgets-outer-wrapper', '.footer-top'),
				'background-color' => array('.header-footer-group table caption', 'body:not(.overlay-header) .header-inner .toggle-wrapper::before'),
			),
		),
	);

	/**
	 * Filters Twenty Twenty theme elements.
	 *
	 * @since Twenty Twenty 1.0
	 *
	 * @param array Array of elements.
	 */
	return apply_filters('twentytwenty_get_elements_array', $elements);
}




function register_market_custom_block()
{
	wp_register_script(
		'market-block',
		get_template_directory_uri() . '/blocks/market-widget/index.js',
		array('wp-blocks', 'wp-element'),
		null,
		true
	);

	register_block_type('custom/market-block', array(
		'editor_script' => 'market-block',
		'render_callback' => 'render_market_block',
	));
}
add_action('init', 'register_market_custom_block');

function render_market_block($attributes, $content)
{
	ob_start();
	include get_template_directory() . '/template-parts/home-widgets/market-widget.php';
	print (get_template_directory() . '/template-parts/home-widgets/market-widget.php');

	return ob_get_clean();
}

function register_company_overview_block()
{
	// Register the block editor script
	wp_register_script(
		'company-overview-block-editor',
		get_template_directory_uri() . '/blocks/company-overview-info/index.js',
		['wp-blocks', 'wp-element'],
		null,
		true
	);

	// Register the block
	register_block_type('custom/company-overview-info', [
		'editor_script' => 'company-overview-block-editor',
		'render_callback' => 'render_company_overview_block',
	]);
}
add_action('init', 'register_company_overview_block');

// Render callback
function render_company_overview_block($attributes, $content)
{
	ob_start();
	include get_template_directory() . '/template-parts/about-widgets/company-overview-info.php';
	return ob_get_clean();
}


function register_custom_block_patterns()
{
	register_block_pattern(
		'apmwptheme/hero-section',
		array(
			'title' => __('Hero Section', 'apmwptheme'),
			'description' => __('A simple hero section with heading and button.', 'apmwptheme'),
			'content' => '
                <!-- wp:cover {"url":"https://example.com/image.jpg","dimRatio":50} -->
                <div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="https://example.com/image.jpg"/>
                <div class="wp-block-cover__inner-container">
                <!-- wp:heading {"textAlign":"center"} -->
                <h2 class="has-text-align-center">Welcome to Our UAE Site</h2>
                <!-- /wp:heading -->
                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons"><div class="wp-block-button"><a class="wp-block-button__link">Learn More</a></div></div>
                <!-- /wp:buttons -->
                </div></div>
                <!-- /wp:cover -->
            ',
		)
	);
}
add_action('init', 'register_custom_block_patterns');

////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////

require get_template_directory() . '/inc/patterns/index.php';

////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////


function enqueue_three_col_block_css()
{
	wp_enqueue_style(
		'three-col-block',
		get_template_directory_uri() . '/inc/patterns/three-col-block.css',
		array(),
		wp_get_theme()->get('Version')
	);
}
// add_action('wp_enqueue_scripts', 'enqueue_three_col_block_css'); // ✅ Frontend
// add_action('enqueue_block_editor_assets', 'enqueue_three_col_block_css'); // ✅ Editor
add_action('after_setup_theme', function () {
	add_editor_style('inc/patterns/three-col-block.css');
});


////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////

function my_theme_scripts()
{
	wp_enqueue_script('my-nav-js', get_template_directory_uri() . '/js/nav.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');


////////////////////////////////////////////////////////////////////////////////////////
// this is to load css in wp-editor///////////////////////////////////
function twentytwenty_add_editor_styles()
{
	add_editor_style('style.css');
}
add_action('admin_init', 'twentytwenty_add_editor_styles');
// this is to load css in front-end///////////////////////////////////
function twentytwenty_enqueue_styles()
{
	wp_enqueue_style('twentytwenty-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'twentytwenty_enqueue_styles');
////////////////////////////////////////////////////////////////////////////////////////

function render_charges_faq_shortcode()
{
	ob_start();

	$faq_posts = get_posts([
		'post_type' => 'ufaq',
		'posts_per_page' => -1,
		'tax_query' => [
			[
				'taxonomy' => 'ufaq-category',
				'field' => 'slug',
				'terms' => 'breakdown-of-charges',
			],
		],
	]);

	echo '<div class="charges-faqs">';
	foreach ($faq_posts as $faq) {
		$faq_id = $faq->ID;
		$question = esc_html(get_the_title($faq_id));
		$answer = apply_filters('the_content', $faq->post_content);

		echo '
        <div class="faq-item">
            <div class="faq-question">' . $question . ' <span class="arrow">▼</span></div>
            <div class="faq-answer">' . $answer . '</div>
        </div>';
	}
	echo '</div>';

	return ob_get_clean();
}
add_shortcode('charges_faq_shortcode', 'render_charges_faq_shortcode');


////////////////////////////////////////////////////////////////////////////////////////


add_action('wp_footer', function () {
	?>
	<script>
		document.addEventListener('DOMContentLoaded', function () {
			const demoButton = document.querySelector('.track-demo');
			if (demoButton) {
				demoButton.addEventListener('click', function (e) {
					_paq.push(['trackEvent', 'Home-Page', 'Start Trading Now', 'Create Demo Account']);
					e.preventDefault();
				});
			}
		});
	</script>
	<?php
});


////////////////////////////////////////////////////////////////////////////////////////
// load css of templates and templates-part files
function apmwptheme_enqueue_styles()
{
	wp_enqueue_style('apmwptheme-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'apmwptheme_enqueue_styles');


////////////////////
// function apmwptheme_enqueue_styles()
// {
//     wp_enqueue_style(
//         'apmwptheme-style',
//         get_stylesheet_uri(),
//         array(),
//         filemtime(get_stylesheet_directory() . '/style.css') // this changes when file is updated
//     );
// }
// add_action('wp_enqueue_scripts', 'apmwptheme_enqueue_styles');
add_filter('show_admin_bar', '__return_true');

////////////////////////////////
// implementation of matomo in wp-editor
function enqueue_matomo_custom_tracking()
{
	wp_enqueue_script(
		'matomo-custom-tracking',
		get_template_directory_uri() . '/js/matomo-track-events.js',
		array(),
		null,
		true
	);
}
add_action('wp_enqueue_scripts', 'enqueue_matomo_custom_tracking');
////////////////////////////////////////////////////
// allow api to fetch tutorials to website eventually shown on ui

///----


add_action('rest_api_init', function () {
	register_rest_route('custom/v1', '/public-courses', array(
		'methods' => 'GET',
		'callback' => 'get_public_courses',
		'permission_callback' => '__return_true', // Make it public
	));
});
function get_public_courses()
{
	$args = array(
		'post_type' => 'courses',
		'post_status' => 'publish',
		'posts_per_page' => 10,
	);

	$query = new WP_Query($args);
	$courses = [];

	foreach ($query->posts as $post) {
		$video = get_post_meta($post->ID, '_tutor_video', true);
		$video_type = 'fallback';

		// Fallback: extract first <iframe> or <video>
		if (!$video) {
			if (preg_match('/<iframe.*?src=["\']([^"\']+)["\']/', $post->post_content, $matches)) {
				$video = $matches[1];
				$video_type = 'iframe';
			} elseif (preg_match('/<video.*?src=["\']([^"\']+)["\']/', $post->post_content, $matches)) {
				$video = $matches[1];
				$video_type = 'mp4';
			}
		} elseif (strpos($video, 'youtube.com') !== false || strpos($video, 'vimeo.com') !== false) {
			$video_type = 'iframe';
		} elseif (strpos($video, '.mp4') !== false || strpos($video, '.webm') !== false) {
			$video_type = 'mp4';
		}

		if (!$video) {
			$video = 'http://localhost/wordpress/wp-content/uploads/2025/07/117898-713302655_small.mp4';
			$video_type = 'fallback';
		}

		$courses[] = array(
			'id' => $post->ID,
			'title' => get_the_title($post),
			'link' => get_permalink($post),
			'content' => wp_strip_all_tags($post->post_content),
			'video' => $video,
			'video_type' => $video_type, // 'mp4', 'iframe', or 'fallback'
		);

	}

	return $courses;
}

/////////////////////////----------------dynamic sub menus depend on location----------
// testing is pending on real be it needs domain.en and domain.uk

// add_filter('wp_nav_menu_objects', 'filter_menu_by_description_keyword', 10, 2);

// function filter_menu_by_description_keyword($items, $args) {
//     // Adjust this to match your menu location if needed
//     if ($args->theme_location !== 'primary') {
//         return $items;
//     }

//     // Detect the current region — manually set or from URL
//     // Example: detect from domain
//     $host = $_SERVER['HTTP_HOST'];

//     // You can also customize this logic based on your setup
//     $is_uae = strpos($host, '.ae') !== false;
//     $is_uk = strpos($host, '.uk') !== false;
// foreach ($items as $key => $item) {
//     $desc = strtolower(trim($item->description));

//     // UAE domain — hide UK items
//     if ($is_uae && strpos($desc, 'uk') !== false) {
//         unset($items[$key]);
//     }

//     // UK domain — hide UAE items
//     if ($is_uk && strpos($desc, 'uae') !== false) {
//         unset($items[$key]);
//     }

//     // .com domain — hide both UAE and UK-specific items
//     if (!$is_uae && !$is_uk && (strpos($desc, 'uae') !== false || strpos($desc, 'uk') !== false)) {
//         unset($items[$key]);
//     }
// }

//     return $items;
// }


// below code is working based on page
// Visit: http://localhost/wordpress/cfd-trading/ → Should show UK menus
// Visit: http://localhost/wordpress/resource/ → Should show UAE menus

add_filter('wp_nav_menu_objects', 'filter_menu_by_description_keyword_localhost', 10, 2);

function filter_menu_by_description_keyword_localhost($items, $args)
{
	if ($args->theme_location !== 'primary') {
		return $items;
	}

	// Get the request URI to detect the current page path
	$request_uri = $_SERVER['REQUEST_URI'];

	$is_uae = strpos($request_uri, '/resource') !== false;
	$is_uk = strpos($request_uri, '/cfd-trading') !== false;

	foreach ($items as $key => $item) {
		$desc = strtolower(trim($item->description));

		// UAE page — hide UK items
		if ($is_uae && strpos($desc, 'uk') !== false) {
			unset($items[$key]);
		}

		// UK page — hide UAE items
		if ($is_uk && strpos($desc, 'uae') !== false) {
			unset($items[$key]);
		}

		// Other pages — hide both UK and UAE items
		if (!$is_uae && !$is_uk && (strpos($desc, 'uk') !== false || strpos($desc, 'uae') !== false)) {
			unset($items[$key]);
		}
	}

	return $items;
}

// ------------------------------------------------------------------------------




function myblocks_blockone_block_init() {
	/**
	 * Registers the block(s) metadata from the `blocks-manifest.php` and registers the block type(s)
	 * based on the registered block metadata.
	 * Added in WordPress 6.8 to simplify the block metadata registration process added in WordPress 6.7.
	 *
	 * @see https://make.wordpress.org/core/2025/03/13/more-efficient-block-type-registration-in-6-8/
	 */
	if ( function_exists( 'wp_register_block_types_from_metadata_collection' ) ) {
		wp_register_block_types_from_metadata_collection( __DIR__ . '/build', __DIR__ . '/build/blocks-manifest.php' );
		return;
	}

	/**
	 * Registers the block(s) metadata from the `blocks-manifest.php` file.
	 * Added to WordPress 6.7 to improve the performance of block type registration.
	 *
	 * @see https://make.wordpress.org/core/2024/10/17/new-block-type-registration-apis-to-improve-performance-in-wordpress-6-7/
	 */
	if ( function_exists( 'wp_register_block_metadata_collection' ) ) {
		wp_register_block_metadata_collection( __DIR__ . '/build', __DIR__ . '/build/blocks-manifest.php' );
	}
	/**
	 * Registers the block type(s) in the `blocks-manifest.php` file.
	 *
	 * @see https://developer.wordpress.org/reference/functions/register_block_type/
	 */
	$manifest_data = require __DIR__ . '/build/blocks-manifest.php';
	foreach ( array_keys( $manifest_data ) as $block_type ) {
		register_block_type( __DIR__ . "/build/{$block_type}" );
	}
}
// session for country specific header-----
// Start PHP session
function start_session_on_init() {
    if (!session_id()) {
        session_start();
    }
}
add_action('init', 'start_session_on_init');

// Handle form submission globally
function handle_country_selection() {
    if (isset($_POST['country'])) {
        $_SESSION['country'] = sanitize_text_field($_POST['country']);
        // Optional: Redirect to same page to clear POST data
        wp_safe_redirect($_SERVER['REQUEST_URI']);
        exit;
    }
}
add_action('init', 'handle_country_selection');
// 
function load_country_header() {
    $country = isset($_SESSION['country']) ? $_SESSION['country'] : 'uk';
    if ($country === 'uae') {
        get_header('new');
    } else {
        get_header();
    }
}
// End PHP session
<?php
/** Default**/
define('THEME_URL', get_template_directory_uri());
define('TEMPLATE_DIR', get_template_directory());
define("BI", THEME_URL . '/assets/images/backgrounds/6.jpg');
$logo = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full');
define('LU', ($logo) ? $logo[0] : THEME_URL . '/images/logo.svg');

/**
 * Psychiatrist In Nepal functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Psychiatrist_In_Nepal
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}
//ACF Option Page
if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
    acf_add_options_sub_page('Header');
    acf_add_options_sub_page('Footer');
    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false,
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Theme Header Settings',
        'menu_title' => 'Header',
        'parent_slug' => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Theme Footer Settings',
        'menu_title' => 'Footer',
        'parent_slug' => 'theme-general-settings',
    ));

}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function psychiatrist_in_nepal_setup()
{
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on Psychiatrist In Nepal, use a find and replace
     * to change 'psychiatrist-in-nepal' to the name of your theme in all the template files.
     */
    load_theme_textdomain('psychiatrist-in-nepal', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support('title-tag');

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'menu-1' => esc_html__('Primary', 'psychiatrist-in-nepal'),
            'menu-2' => esc_html__('Footer Menu', 'psychiatrist-in-nepal'),
            'menu-3' => esc_html__('Services', 'psychiatrist-in-nepal'),
        )
    );

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
            'style',
            'script',
        )
    );

    // Set up the WordPress core custom background feature.
    add_theme_support(
        'custom-background',
        apply_filters(
            'psychiatrist_in_nepal_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        )
    );
}
add_action('after_setup_theme', 'psychiatrist_in_nepal_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function psychiatrist_in_nepal_content_width()
{
    $GLOBALS['content_width'] = apply_filters('psychiatrist_in_nepal_content_width', 640);
}
add_action('after_setup_theme', 'psychiatrist_in_nepal_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function psychiatrist_in_nepal_widgets_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'psychiatrist-in-nepal'),
            'id' => 'sidebar-1',
            'description' => esc_html__('Add widgets here.', 'psychiatrist-in-nepal'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}
add_action('widgets_init', 'psychiatrist_in_nepal_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function psychiatrist_in_nepal_scripts()
{
    wp_enqueue_style('pin-all', THEME_URL . '/assets/css/all.css');
    wp_enqueue_style('pin-lb', THEME_URL . '/assets/css/libraries.css');
    wp_enqueue_style('pin-main', THEME_URL . '/assets/css/style.css');

    wp_enqueue_style('psychiatrist-in-nepal-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('psychiatrist-in-nepal-style', 'rtl', 'replace');

    //Scripts
    wp_enqueue_script('pin-js-plu', THEME_URL . '/assets/js/plugins.js', array('jquery'), _S_VERSION, true);
    wp_enqueue_script('pin-js-main', THEME_URL . '/assets/js/main.js', array('jquery'), _S_VERSION, true);

    wp_enqueue_script('psychiatrist-in-nepal-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

}
add_action('wp_enqueue_scripts', 'psychiatrist_in_nepal_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}
/**
 * Custom Functions
 */
require TEMPLATE_DIR . '/inc/cf.php';

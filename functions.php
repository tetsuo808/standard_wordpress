<?php
/**
 * Migration functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used
 * in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook.
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 */


/**
 * Sets up theme defaults and registers the various WordPress features that
 * the Migration theme supports.
 *
 * @uses add_editor_style() To add a Visual Editor stylesheet.
 * @uses add_theme_support() To add support for post thumbnails
 * @uses register_nav_menu() To add support for navigation menus.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 */
function migration_setup() {

	// This theme styles the visual editor with editor-style.css to give it some niceties.
	add_editor_style();

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Primary Menu', 'migration' ) );

	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 500, 9999 ); // Unlimited height, soft crop
}
add_action( 'after_setup_theme', 'migration_setup' );


/**
 * Enqueues scripts and styles for front-end.
 */
function migration_scripts_styles() {
	global $wp_styles;

	/*
	 * Loads our main stylesheet.
	 */
	wp_enqueue_style( 'migration-style', get_stylesheet_uri() );

	/*
	 * Optional: Loads the Internet Explorer specific stylesheet.
	 */
	//wp_enqueue_style( 'migration-ie', get_template_directory_uri() . '/css/ie.css', array( 'migration-style' ), '20121010' );
	//$wp_styles->add_data( 'migration-ie', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'migration_scripts_styles' );


/**
 * Breadrumbs
 */
function the_breadcrumb() {
    global $post;
    echo '<ul id="breadcrumbs" class="clearfix">';
    if (!is_home()) {
        echo '<li><a href="';
        echo get_option('home');
        echo '">';
        echo 'Home';
        echo '</a></li>';
        if (is_category() || is_single()) {
            echo '<li>';
            the_category(' </li><li> ');
            if (is_single()) {
                echo '</li><li>';
                the_title();
                echo '</li>';
            }
        } elseif (is_page()) {
            if($post->post_parent){
                $anc = get_post_ancestors( $post->ID );
                $title = get_the_title();
                foreach ( $anc as $ancestor ) {
                    $output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li> ';
                }
                echo $output;
                echo '<li>'.$title.'</li>';
            } else {
                echo '<li><strong> '.get_the_title().'</strong></li>';
            }
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


/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name' => 'Home right sidebar',
		'id' => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

function parrphabet_widgets_init() {

	register_sidebar( array(
		'name' => 'Latest Posts sidebar',
		'id' => 'latest_posts_1',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'parrphabet_widgets_init' );

function pazzphabet_widgets_init() {

	register_sidebar( array(
		'name' => 'Latest Case Study sidebar',
		'id' => 'latest_case_1',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'pazzphabet_widgets_init' );

function blogz_widgets_init() {

	register_sidebar( array(
		'name' => 'Blog sidebar',
		'id' => 'blog_categories_1',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'blogz_widgets_init' );



/**
*   Child page conditional
*   @ Accept's page ID, page slug or page title as parameters
*/
function is_child( $parent = '' ) {
    global $post;

    $parent_obj = get_page( $post->post_parent, ARRAY_A );
    $parent = (string) $parent;
    $parent_array = (array) $parent;

    if ( in_array( (string) $parent_obj['ID'], $parent_array ) ) {
        return true;
    } elseif ( in_array( (string) $parent_obj['post_title'], $parent_array ) ) {
        return true;
    } elseif ( in_array( (string) $parent_obj['post_name'], $parent_array ) ) {
        return true;
    } else {
        return false;
    }
}

/**
*   Remove Website URL from post comments
*/
add_filter('comment_form_default_fields', 'url_filtered');
function url_filtered($fields)
{
  if(isset($fields['url']))
   unset($fields['url']);
  return $fields;
}

/**
*   Add page title back to homepage
*/
add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
function baw_hack_wp_title_for_home( $title )
{
  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
    return __( 'Home', 'theme_domain' ) . ' | ' ;
  }
  return $title;
}

/**
*   Customised main menu html
*/
class My_Walker extends Walker_Nav_Menu {

    function start_lvl( &$output, $depth = 0, $args = array()) {
        $indent = str_repeat("\t", $depth);

        if ($depth == 0) {
            $output .= "\n$indent<div class='mobnav-subarrow'></div><ul class='children'>\n";
        } else {
            $output .= "\n$indent<ul class='children'>\n";
        }
    }

    function end_lvl( &$output, $depth = 0, $args = array()) {
        $indent = str_repeat("\t", $depth);

        if ($depth == 0) {
            $output .= "$indent</ul>\n";
        } else {
            $output .= "$indent</ul>\n";
        }
    }
}


/*************************************************************************
* Contact Form 7 remove <span></span>s
*************************************************************************/
//add_filter('wpcf7_form_elements', function($content) {
	//$content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

	//$content = str_replace('<br />', '', $content);

	//return $content;
//});

/**
*  Removes emoji crap in the header
*/
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


/**
*  THEME SETTINGS!
*/
function theme_settings_page(){
	?>
	    <div class="wrap">
	    <h1>Theme Panel</h1>
	    <form method="post" action="options.php">
	        <?php
	            settings_fields("section");
	            do_settings_sections("theme-options");
	            submit_button();
	        ?>
	    </form>
		</div>
	<?php
}

function add_theme_menu_item()
{
	add_menu_page("Theme Panel", "Theme Panel", "manage_options", "theme-panel", "theme_settings_page", null, 99);
}

add_action("admin_menu", "add_theme_menu_item");

function display_twitter_element()
{
	?>
    	<input type="text" name="twitter_url" id="twitter_url" value="<?php echo get_option('twitter_url'); ?>" />
    <?php
}

function display_facebook_element()
{
	?>
    	<input type="text" name="facebook_url" id="facebook_url" value="<?php echo get_option('facebook_url'); ?>" />
    <?php
}

function display_theme_panel_fields()
{
	add_settings_section("section", "All Settings", null, "theme-options");

	add_settings_field("twitter_url", "Twitter Profile Url", "display_twitter_element", "theme-options", "section");
    add_settings_field("facebook_url", "Facebook Profile Url", "display_facebook_element", "theme-options", "section");

    register_setting("section", "twitter_url");
    register_setting("section", "facebook_url");
}

add_action("admin_init", "display_theme_panel_fields");


function logo_display()
{
	?>
        <input type="file" name="logo" />
        <?php echo get_option('logo'); ?>
   <?php
}

function handle_logo_upload()
{
	if(!empty($_FILES["demo-file"]["tmp_name"]))
	{
		$urls = wp_handle_upload($_FILES["logo"], array('test_form' => FALSE));
	    $temp = $urls["url"];
	    return $temp;
	}

	return $option;
}

function display_theme_panel_fields()
{
	add_settings_section("section", "All Settings", null, "theme-options");

    add_settings_field("logo", "Logo", "logo_display", "theme-options", "section");

    register_setting("section", "logo", "handle_logo_upload");
}

add_action("admin_init", "display_theme_panel_fields");




/*************************************************************************
* Adds formatting classes to TinyMCE/Classic Editor.
*************************************************************************/
function add_style_select_buttons( $buttons ) {
	array_unshift( $buttons, 'styleselect' );
	return $buttons;
}
// Register our callback to the appropriate filter
add_filter( 'mce_buttons_2', 'add_style_select_buttons' );


//add custom styles to the WordPress editor
function my_custom_styles( $init_array ) {

	$style_formats = array(
		array(
			'title' => 'Stats (Large)',
			'block' => 'p',
			'classes' => 'stats-text-large',
			'wrapper' => false,
		),
		array(
			'title' => 'Stats (Medium)',
			'block' => 'p',
			'classes' => 'stats-text-medium',
			'wrapper' => false,
		),
		array(
			'title' => 'Stats (Small)',
			'block' => 'p',
			'classes' => 'stats-text-small',
			'wrapper' => false,
		),
	);
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );

	return $init_array;
}
// Attach callback to 'tiny_mce_before_init'
add_filter( 'tiny_mce_before_init', 'my_custom_styles' );

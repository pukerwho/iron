<?php
// Include your functions files here
include('inc/enqueues.php');
// Add your theme support ( cf :  http://codex.wordpress.org/Function_Reference/add_theme_support )
function customThemeSupport() {
    global $wp_version;
    add_theme_support( 'menus' );
    add_theme_support( 'post-thumbnails' );
    // let wordpress manage the title
    add_theme_support( 'title-tag' );
    //add_theme_support( 'custom-background', $args );
    //add_theme_support( 'custom-header', $args );
    // Automatic feed links compatibility
    if( version_compare( $wp_version, '3.0', '>=' ) ) {
        add_theme_support( 'automatic-feed-links' );
    } else {
        automatic_feed_links();
    }
}
add_action( 'after_setup_theme', 'customThemeSupport' );
// Content width
if( !isset( $content_width ) ) {
    // @TODO : edit the value for your own specifications
    $content_width = 960;
}

// Register menus, use wp_nav_menu() to display menu to your template ( cf : http://codex.wordpress.org/Function_Reference/wp_nav_menu )
register_nav_menus( array(
    'main_menu' => __( 'Menu principal', 'minimal-blank-theme' ) //@TODO : change i18n domain name to yours
) );
// Register sidebars
function registerThemeSidebars() {
    if( !function_exists( 'register_sidebar' ) ) {
        return;
    }
    register_sidebar( array(
        'name' => 'Main sidebar',
        'id' => 'main-sidebar',
        'description' => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
add_action( 'widgets_init', 'registerThemeSidebars' );
function addAdminEditorStyle() {
    add_editor_style( get_stylesheet_directory_uri() . 'css/editor-style.css' );
};
// подключаем файлы со стилями
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
    wp_enqueue_style( 'editor-style', get_stylesheet_directory_uri() . '/css/style.css' );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js','','',true);
    wp_enqueue_script( 'myscripts', get_template_directory_uri() . '/js/scripts.js','','',true);
    wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/swiper.min.js','','',true);
    wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/js/lightbox.min.js','','',true);
    wp_enqueue_script( 'scrollme', get_template_directory_uri() . '/js/scrollme.min.js','','',true);
};

//подключаем стили к админке
function load_custom_wp_admin_style() {
        wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/css/admin-style.css', false, '1.0.0' );
        wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );

function loadmore_ajax_handler(){
 
    // prepare our arguments for the query
    $args = json_decode( stripslashes( $_POST['query'] ), true );
    $args['paged'] = $_POST['page'] + 1; 
    $args['post_status'] = 'publish';
 
   
    query_posts( $args );
 
    if( have_posts() ) :
 
        
        while( have_posts() ): the_post();
            get_template_part( 'blocks/default/loop', 'default' );
        
        endwhile;
 
    endif;
    die; 
}

add_action('wp_ajax_loadmore', 'loadmore_ajax_handler'); 
add_action('wp_ajax_nopriv_loadmore', 'loadmore_ajax_handler'); 


function add_theme_menu_item() {
    add_menu_page("Theme Settings", "Theme Settings", "manage_options", "theme-settings", "theme_settings_page", null, 99);
    //register our settings
    register_setting( 'my-settings-group', 'facebook_link' );
    register_setting( 'my-settings-group', 'instagram_link' );
    register_setting( 'my-settings-group', 'google_analytics' );
}

add_action("admin_menu", "add_theme_menu_item");

function theme_settings_page() {
    include 'form-file.php';
}

function create_post_type() {
    register_post_type( 'steps',
        array(
          'labels' => array(
            'name' => __( 'Шаги' ),
            'singular_name' => __( 'Шаг' )
          ),
          'public' => true,
          'has_archive' => true,
          'hierarchical' => true,
          'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        )
    );
    register_post_type( 'products',
        array(
          'labels' => array(
            'name' => __( 'Товары' ),
            'singular_name' => __( 'Товар' )
          ),
          'public' => true,
          'has_archive' => true,
          'hierarchical' => true,
          'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        )
    );
}
add_action( 'init', 'create_post_type' );

function your_prefix_get_meta_box( $meta_boxes ) {
    $prefix = 'meta-';

    $meta_boxes[] = array(
        'id' => 'steps-info',
        'title' => esc_html__( 'Информация', 'steps-info' ),
        'post_types' => array( 'steps' ),
        'context' => 'advanced',
        'priority' => 'default',
        'autosave' => true,
        'fields' => array(
          array(
            'id' => $prefix . 'step-icon',
            'type' => 'text',
            'name' => esc_html__( 'Код иконки', 'steps-info' ),
          ),
          array(
            'id' => $prefix . 'step-number',
            'type' => 'text',
            'name' => esc_html__( 'Шаг №', 'steps-info' ),
          ),
        ),
    );

    $meta_boxes[] = array(
        'id' => 'products-info',
        'title' => esc_html__( 'Информация', 'products-info' ),
        'post_types' => array( 'products' ),
        'context' => 'advanced',
        'priority' => 'default',
        'autosave' => true,
        'fields' => array(
          array(
            'id' => $prefix . 'product-price',
            'type' => 'text',
            'name' => esc_html__( 'Цена', 'products-info' ),
          ),
          array(
            'id' => $prefix . 'product-price-link',
            'type' => 'file_advanced',
            'max_file_uploads' => 1,
            'name' => esc_html__( 'Ссылка на прайс', 'products-info' ),
          ),
          array(
            'id' => $prefix . 'product_contact_form',
            'type' => 'text',
            'name' => esc_html__( 'Код формы-заявки', 'products-info' ),
          ),
          array(
            'name'  => 'Фото-цены',
            'id' => $prefix . 'product-photo-price',
            'type' => 'image_advanced',
          ),
        ),
    );
    return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'your_prefix_get_meta_box' );

function my_custom_upload_mimes($mimes = array()) {
    $mimes['xls'] = "application/excel";
    return $mimes;
}
add_action('upload_mimes', 'my_custom_upload_mimes');

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Iron-Group';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(/wp-content/uploads/2019/01/iron-group-logo.png);
        width:100%;
        height:38px;
        background-size: contain;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
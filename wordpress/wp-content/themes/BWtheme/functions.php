<?php
function load_style() {
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' );
    wp_enqueue_style('bootstrap_icon', "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" );
    wp_enqueue_style('custom_style', get_template_directory_uri() .'./assets/css/custom-style.css');
}
function load_script() {
    wp_enqueue_script('bootstrap_js', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" );
    wp_enqueue_script('custom_script', get_template_directory_uri() .'./assets/js/script.js');
}

function bw_theme_support() {  
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

function custom_customize_register($wp_customize) {
    $wp_customize->add_section('homepage_section', array(
        'title' => __('Homepage Settings', 'your_theme_textdomain'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('homepage_image', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'homepage_image', array(
        'label' => __('Homepage Image', 'your_theme_textdomain'),
        'section' => 'homepage_section',
        'settings' => 'homepage_image',
    )));
}

add_action('customize_register', 'custom_customize_register');

class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = null) {
        if ($depth > 0) {
            return;
        }
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        if (strcasecmp($item->attr_title, 'divider') == 0 && $depth === 1) {
            $output .= '<li class="dropdown-divider">';
            return;
        }
        elseif (strcasecmp($item->title, 'divider') == 0 && $depth === 1) {
            $output .= '<li class="dropdown-divider">';
            return;
        }

        if (strcasecmp($item->attr_title, 'dropdown-header') == 0 && $depth === 1) {
            $output .= '<li class="dropdown-header">' . esc_attr($item->title);
            return;
        }
        elseif (strcasecmp($item->title, 'dropdown-header') == 0 && $depth === 1) {
            $output .= '<li class="dropdown-header">' . esc_attr($item->title);
            return;
        }

        parent::start_el($output, $item, $depth, $args);
    }
}
function add_menus() {

    $locations = array(
        'primary' => 'menu primario',  /* 'posizione' => 'nome visualizzato sul pannello di controllo' */
        'footer' => 'menu secondario'
    );

    register_nav_menus($locations);
}

add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_additional_class_on_li($classes, $item, $args)
{
    if (isset($args->add_li_class))
    {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
 
// A tags

add_filter( 'nav_menu_link_attributes', 'add_link_atts');

function add_link_atts($atts) 
{ 
     $atts['class'] = "nav-link"; 
     return $atts;
}

function my_theme_customize_title($wp_customize) {
    $wp_customize->add_section('title_section', array(
        'title' => __('Head Title', 'my_theme'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('title_text', array(
        'default' => 'Template Adattabile',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('title_text', array(
        'label' => __('Head Title', 'my_theme'),
        'section' => 'title_section',
        'type' => 'text',
    ));
}
function aggiungi_campo_placeholder() {
    add_meta_box(
        'campo_placeholder_id',
        'Immagine Placeholder',
        'mostra_campo_placeholder',
        'page', // specifica il tipo di post dove visualizzare il campo
        'normal',
        'high'
    );
}

function mostra_campo_placeholder($post) {
    $valore_campo = get_post_meta($post->ID, 'campo_placeholder', true);
    echo '<input type="text" name="campo_placeholder" value="' . esc_attr($valore_campo) . '" />';
}

function salva_campo_placeholder($post_id) {
    if (array_key_exists('campo_placeholder', $_POST)) {
        update_post_meta(
            $post_id,
            'campo_placeholder',
            sanitize_text_field($_POST['campo_placeholder'])
        );
    }
};



add_action('customize_register', 'my_theme_customize_title');

add_action('add_meta_boxes', 'aggiungi_campo_placeholder');
add_action('save_post', 'salva_campo_placeholder');



add_action('after_setup_theme','bw_theme_support');

add_action('init','add_menus');


add_action('wp_enqueue_scripts','load_style');
add_action('wp_enqueue_scripts','load_script');


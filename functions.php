<?php
/**
 * mbsTECH Theme Functions
 *
 * @package mbsTECH
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function mbstech_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('custom-logo');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mbstech'),
        'footer' => __('Footer Menu', 'mbstech'),
    ));
}
add_action('after_setup_theme', 'mbstech_theme_setup');

/**
 * Enqueue scripts and styles
 */
function mbstech_enqueue_scripts() {
    // Bootstrap CSS
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), '5.3.2');

    // Theme stylesheet
    wp_enqueue_style('mbstech-style', get_stylesheet_uri(), array('bootstrap'), '1.0.0');

    // Bootstrap JS
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array(), '5.3.2', true);

    // Custom theme JS
    wp_enqueue_script('mbstech-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('bootstrap-js'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'mbstech_enqueue_scripts');

/**
 * Custom excerpt length
 */
function mbstech_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'mbstech_excerpt_length');

/**
 * Custom excerpt more
 */
function mbstech_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'mbstech_excerpt_more');

/**
 * Add custom body classes
 */
function mbstech_body_classes($classes) {
    if (!is_singular()) {
        $classes[] = 'archive-page';
    }
    return $classes;
}
add_filter('body_class', 'mbstech_body_classes');

/**
 * Custom navigation walker for Bootstrap 5
 */
class Bootstrap_Nav_Walker extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'nav-item';

        if ($args->walker->has_children) {
            $classes[] = 'dropdown';
        }

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = ' class="' . esc_attr($class_names) . '"';

        $output .= $indent . '<li' . $class_names . '>';

        $atts = array();
        $atts['title'] = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target) ? $item->target : '';
        $atts['rel'] = !empty($item->xfn) ? $item->xfn : '';
        $atts['href'] = !empty($item->url) ? $item->url : '';

        if ($depth === 0) {
            $atts['class'] = 'nav-link';
            if ($args->walker->has_children) {
                $atts['class'] .= ' dropdown-toggle';
                $atts['data-bs-toggle'] = 'dropdown';
                $atts['role'] = 'button';
                $atts['aria-expanded'] = 'false';
            }
        } else {
            $atts['class'] = 'dropdown-item';
        }

        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args);

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}

/**
 * Get post reading time
 */
function mbstech_reading_time() {
    $content = get_post_field('post_content', get_the_ID());
    $word_count = str_word_count(strip_tags($content));
    $reading_time = ceil($word_count / 200);
    return $reading_time . ' min read';
}

/**
 * Get post categories list
 */
function mbstech_post_categories() {
    $categories = get_the_category();
    if (!empty($categories)) {
        echo '<div class="post-categories mb-3">';
        foreach ($categories as $category) {
            echo '<span class="category-badge">' . esc_html($category->name) . '</span>';
        }
        echo '</div>';
    }
}

/**
 * Custom post meta display
 */
function mbstech_post_meta() {
    echo '<div class="post-meta">';
    echo '<span class="post-date"><i class="bi bi-calendar"></i> ' . get_the_date() . '</span>';
    echo '<span class="post-author"><i class="bi bi-person"></i> ' . get_the_author() . '</span>';
    echo '<span class="post-reading-time"><i class="bi bi-clock"></i> ' . mbstech_reading_time() . '</span>';
    echo '</div>';
}

/**
 * Pagination
 */
function mbstech_pagination() {
    global $wp_query;

    if ($wp_query->max_num_pages <= 1) {
        return;
    }

    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $max = intval($wp_query->max_num_pages);

    echo '<nav class="pagination-nav mt-5" aria-label="Page navigation">';
    echo '<ul class="pagination justify-content-center">';

    if ($paged > 1) {
        echo '<li class="page-item"><a class="page-link" href="' . get_pagenum_link($paged - 1) . '">Previous</a></li>';
    }

    for ($i = 1; $i <= $max; $i++) {
        if ($i == $paged) {
            echo '<li class="page-item active"><span class="page-link">' . $i . '</span></li>';
        } else {
            echo '<li class="page-item"><a class="page-link" href="' . get_pagenum_link($i) . '">' . $i . '</a></li>';
        }
    }

    if ($paged < $max) {
        echo '<li class="page-item"><a class="page-link" href="' . get_pagenum_link($paged + 1) . '">Next</a></li>';
    }

    echo '</ul>';
    echo '</nav>';
}

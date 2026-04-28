<?php
/**
 * Jake Fruge Jr Grant functions and definitions
 */

function jfj_grant_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'jake-fruge-jr-grant'),
        'footer'  => __('Footer Menu', 'jake-fruge-jr-grant'),
    ));
}
add_action('after_setup_theme', 'jfj_grant_setup');

function jfj_grant_scripts() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Lato:wght@300;400;700&family=Oswald:wght@400;500;600&display=swap', array(), null);
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', array(), '6.4.2');
    wp_enqueue_style('jfj-grant-style', get_stylesheet_uri(), array(), '1.1.0');
    wp_enqueue_script('jfj-grant-main', get_template_directory_uri() . '/js/main.js', array(), '1.1.0', true);
}
add_action('wp_enqueue_scripts', 'jfj_grant_scripts');

/**
 * Register Custom Post Types
 */
function jfj_grant_register_cpts() {
    // Application Submissions
    register_post_type('application_sub', array(
        'labels' => array(
            'name' => __('Applications', 'jake-fruge-jr-grant'),
            'singular_name' => __('Application', 'jake-fruge-jr-grant'),
        ),
        'public' => false,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array('title', 'editor', 'custom-fields'),
        'menu_icon' => 'dashicons-welcome-write-blog',
    ));

    // Contact Submissions
    register_post_type('contact_sub', array(
        'labels' => array(
            'name' => __('Contact Submissions', 'jake-fruge-jr-grant'),
            'singular_name' => __('Contact Submission', 'jake-fruge-jr-grant'),
        ),
        'public' => false,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array('title', 'editor', 'custom-fields'),
        'menu_icon' => 'dashicons-email',
    ));
}
add_action('init', 'jfj_grant_register_cpts');

/**
 * Handle Form Submissions
 */
function jfj_handle_form_submissions() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['action']) && $_POST['action'] === 'submit_application') {
            $post_data = array(
                'post_title'   => sanitize_text_field($_POST['firstName'] . ' ' . $_POST['lastName']),
                'post_content' => sanitize_textarea_field($_POST['statement']),
                'post_status'  => 'publish',
                'post_type'    => 'application_sub',
            );
            $post_id = wp_insert_post($post_data);
            if ($post_id) {
                foreach ($_POST as $key => $value) {
                    if ($key !== 'action' && $key !== 'firstName' && $key !== 'lastName' && $key !== 'statement') {
                        update_post_meta($post_id, '_' . $key, sanitize_text_field($value));
                    }
                }
                wp_redirect(add_query_arg('submitted', 'success', wp_get_referer()));
                exit;
            }
        }
        
        if (isset($_POST['action']) && $_POST['action'] === 'submit_contact') {
            $post_data = array(
                'post_title'   => sanitize_text_field($_POST['subject']),
                'post_content' => sanitize_textarea_field($_POST['message']),
                'post_status'  => 'publish',
                'post_type'    => 'contact_sub',
            );
            $post_id = wp_insert_post($post_data);
            if ($post_id) {
                update_post_meta($post_id, '_name', sanitize_text_field($_POST['name']));
                update_post_meta($post_id, '_email', sanitize_email($_POST['email']));
                wp_redirect(add_query_arg('contacted', 'success', wp_get_referer()));
                exit;
            }
        }
    }
}
add_action('template_redirect', 'jfj_handle_form_submissions');

<?php

add_action( 'init', 'create_pro' );
function create_pro() {
    $args = array(
        'labels' => post_pro_labels( 'Project' ),
        'public' => true,
        'menu_icon' => 'dashicons-lightbulb',
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 11,
        'supports' => array('title', 'editor')
    );

    register_post_type( 'project', $args );
}

function post_pro_labels( $singular, $plural = '' )
{
    if( $plural == '') $plural = $singular .'s';
   
    return array(
        'name' => _x( $plural, 'post type general name' ),
        'singular_name' => _x( $singular, 'post type singular name' ),
        'add_new' => __( 'Add New' ),
        'add_new_item' => __( 'Add New '. $singular ),
        'edit_item' => __( 'Edit '. $singular ),
        'new_item' => __( 'New '. $singular ),
        'view_item' => __( 'View '. $singular ),
        'search_items' => __( 'Search '. $plural ),
        'not_found' =>  __( 'No '. $plural .' found' ),
        'not_found_in_trash' => __( 'No '. $plural .' found in Trash' ),
        'parent_item_colon' => ''
    );
}

add_filter('post_updated_messages', 'pro_updated_messages');
function pro_updated_messages( $messages ) {
    global $post, $post_ID;

    $messages['projects'] = array(
	    0 => '', // Unused. Messages start at index 1.
	    1 => sprintf( __('Projects updated. <a href="%s">View projects</a>'), esc_url( get_permalink($post_ID) ) ),
	    2 => __('Custom field updated.'),
	    3 => __('Custom field deleted.'),
	    4 => __('Projects updated.'),
	    /* translators: %s: date and time of the revision */
	    5 => isset($_GET['revision']) ? sprintf( __('Projects restored to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
	    6 => sprintf( __('Projects published. <a href="%s">View projects</a>'), esc_url( get_permalink($post_ID) ) ),
	    7 => __('Projects saved.'),
	    8 => sprintf( __('Projects submitted. <a target="_blank" href="%s">Preview projects</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
	    9 => sprintf( __('Projects scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview projects</a>'),
	    // translators: Publish box date format, see php.net/date
	    date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
	    10 => sprintf( __('Projects draft updated. <a target="_blank" href="%s">Preview projects</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
    );

    return $messages;
}

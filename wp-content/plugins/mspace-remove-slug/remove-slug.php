<?php
/* 
	Plugin Name: M Space Remove CPT Slug
* Plugin URI: http://mspacecreative.com
* Description: Removes CPT slug in permalinks
* Version: 1.0
* Author: Matt Cyr
* Author URI: http://mspacecreative.com

/* REMOVE CARDS SLUG */
function gp_remove_cpt_slug( $post_link, $post, $leavename ) {
 
    if ( 'cards' != $post->post_type || 'publish' != $post->post_status ) {
        return $post_link;
    }
 
    $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );
 
    return $post_link;
}

function gp_add_cpt_post_names_to_main_query( $query ) {
	// Bail if this is not the main query.
	if ( ! $query->is_main_query() ) {
		return;
	}
	// Bail if this query doesn't match our very specific rewrite rule.
	if ( ! isset( $query->query['page'] ) || 2 !== count( $query->query ) ) {
		return;
	}
	// Bail if we're not querying based on the post name.
	if ( empty( $query->query['name'] ) ) {
		return;
	}
	// Add CPT to the list of post types WP will include when it queries based on the post name.
	$query->set( 'post_type', array( 'post', 'page', 'cards' ) );
}

add_filter( 'post_type_link', 'gp_remove_cpt_slug', 10, 3 );
add_action( 'pre_get_posts', 'gp_add_cpt_post_names_to_main_query' );
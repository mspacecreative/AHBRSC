<?php
/* 
Plugin Name: M Space Card Catgories in Sidebar
Plugin URI: http://mspacecreative.com
Description: Grabs cards by category and places them in sidebar
Version: 1.0
Author: Matt Cyr
Author URI: http://mspacecreative.com
*/

if (!defined('ABSPATH')) exit;

function cards_in_sidebar( $atts ) {
    extract( shortcode_atts( array( 'limit' => 3, 'type' => 'cards','category' => ''), $atts ) );
    global $paged;
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;  

        $args = query_posts(  array ( 
        'posts_per_page' => $limit, 
        'post_type' => $type, 
        'order' => 'ASC', 
        // 'orderby' =>'menu_order', 
        'paged' => $paged ,
        'category_name' => $category) );
        if ( ! empty( $category ) ) {
        $args['category_name'] = $category;
    }
$list = ' ';   
while ( have_posts() ) { the_post();

    $list .= '<article class="cards-view clearfix">'
    . '<a href="' . get_permalink() . '">' . get_the_post_thumbnail() . '</a>'
    . '<div class="listing-content">' 
    . '<h3>' . get_the_title() . '</h3>'
    . '<h4 class="card_subtitle">' . get_field('subtitle') . '</h4>'
    .'<p>' . get_the_excerpt() . '<a class="read-more-link" href="' . get_permalink() . '">' . ' More...' . '</a>' . '</p>'
    . '</div>'
    . '</article>';
}

return 
'<div class="cards clearfix">' 
. $list 
. '</div>' .
wp_reset_query();

}
add_shortcode( 'cards_sidebar_categorized', 'cards_in_sidebar' );
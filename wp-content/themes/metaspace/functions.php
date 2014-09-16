<?php
function create_post_type() {
	register_post_type( 'dettol',
		array(
			'labels' => array(
				'name' => __( 'Dettol' ),
				'singular_name' => __( 'Dettol' ),
			),
		'capability_type' => 'post',
  		'capabilities' => array(
  			'create_posts' => false, // Removes support for the "Add New" function'
    		'delete_published_posts' => false
  			),
  		'map_meta_cap' => true, // Set to false, if users are not allowed to edit/delete existing posts
		'public' => true,
		'has_archive' => true,
		)
	);
}
add_action( 'init', 'create_post_type' );

// Show posts of 'post', 'page' and 'movie' post types on home page
add_action( 'pre_get_posts', 'add_my_post_types_to_query' );

function add_my_post_types_to_query( $query ) {
  if ( is_home() && $query->is_main_query() )
    $query->set( 'post_type', array( 'dettol' ) );
  return $query;
}

function query_vote_split_to_array(){
	global $wpdb;
	$vote_count = $wpdb->get_var( "SELECT COUNT(*) FROM wp_vote_data" );
	$number_formatted = sprintf("%07d", $vote_count);
	$array = str_split(strval($number_formatted));
	return $array;
}
?>
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

function get_images_facebook(){
	global $wpdb;
	$data = $wpdb->get_results( "SELECT profile_picture FROM wp_vote_data ORDER BY id DESC LIMIT 103" );
	return $data;
}

if ( ! function_exists( 'wp_new_user_notification' ) ) :
	function wp_new_user_notification( $user_id, $plaintext_pass = '' ) {
		
		/** Return early if no password is set */
		if ( empty( $plaintext_pass ) )
			return;
			
		$user 		= get_userdata( $user_id );
		$user_login = stripslashes( $user->user_login );
		$user_email = stripslashes( $user->user_email );
 
		// The blogname option is escaped with esc_html on the way into the database in sanitize_option
		// we want to reverse this for the plain text arena of emails.
		$blogname = wp_specialchars_decode( get_option( 'blogname' ), ENT_QUOTES );
 
		$message  = sprintf( __( 'Username: %s' ), $user_login) . "\r\n";
		$message .= sprintf( __( 'Password: %s' ), $plaintext_pass) . "\r\n";
		$message .= wp_login_url() . "\r\n";
 
		// wp_mail( $user_email, sprintf( __( '[%s] Your username and password' ), $blogname ), $message );
 
	}
endif;
?>
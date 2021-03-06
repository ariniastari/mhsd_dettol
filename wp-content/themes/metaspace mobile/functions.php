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

function query_vote_split_to_array(){
	global $wpdb;
	$vote_count = $wpdb->get_var( "SELECT COUNT(*) FROM wp_vote_data" );
	$vote_manual = (int) get_field('jumlah_dukungan', 11);
	$vote_count += $vote_manual;
	$number_formatted = sprintf("%07d", $vote_count);
	$array = str_split(strval($number_formatted));
	return $array;
}

function get_images_facebook(){
	global $wpdb;
	$data = $wpdb->get_results( "SELECT profile_picture FROM wp_vote_data ORDER BY id DESC LIMIT 103" );
	return $data;
}

if ( !function_exists('wp_new_user_notification') ) {
	function wp_new_user_notification( ) {}
}

// add_action('get_footer', 'check_post_value');
add_action('wp', 'check_post_value', 1);
function check_post_value() {
	//dd($_GET);
	if($_GET['dettol_vote']){
		$value = get_field("jumlah_dukungan", 11);
		update_field('jumlah_dukungan', $value + 1, 11);
		// dd($value);
		$redirect = esc_url( get_permalink( get_page_by_title( 'ULURKAN TANGAN' ) ) );
		redirect_to($redirect);
		//dd($redirect);
		//update_field('jumlah_dukungan', $value + 1);
	}

}
function redirect_to($redirect){
	wp_redirect($redirect, 302);
  die;
}

add_filter('get_avatar','change_avatar_css');

function change_avatar_css($class) {
	$class = str_replace("class='avatar", "class='img-glow", $class) ;
	return $class;
}	

?>
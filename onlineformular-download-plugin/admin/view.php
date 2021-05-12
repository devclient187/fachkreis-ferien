<?php
echo 'Loading...'
$args = array(
	'post_type'		=> 'flamingo_inbound'
);
$my_posts = get_posts( $args );

if( ! empty( $my_posts ) ){
	// $output = '<ul>';
	foreach ( $my_posts as $p ){
		echo $p->post_title . '<br>';
		// $output .= '<li><a href="' . get_permalink( $p->ID ) . '">' 
		// . $p->post_title . '</a></li>';
	}
	// $output .= '<ul>';
}
else {
	echo 'Keine Posts'
}
// echo $output
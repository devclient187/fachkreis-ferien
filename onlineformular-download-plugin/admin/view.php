<h1>Cool!</h1>
<?php
$args = array(
	'numberposts'	=> 20,
	'category'		=> 4
);
$my_posts = get_posts( $args );

if( ! empty( $my_posts ) ){
	$output = '<ul>';
	foreach ( $my_posts as $p ){
		$output .= '<li><a href="' . get_permalink( $p->ID ) . '">' 
		. $p->post_title . '</a></li>';
	}
	$output .= '<ul>';
}

echo $output
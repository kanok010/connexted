<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function showPublishedvideogallery_1( $id ) {
	global $wpdb;
	$query        = $wpdb->prepare( "SELECT * FROM " . $wpdb->prefix . "huge_it_videogallery_videos where videogallery_id = '%d' order by ordering ASC", $id );
	$images       = $wpdb->get_results( $query );
	$query        = $wpdb->prepare( "SELECT * FROM " . $wpdb->prefix . "huge_it_videogallery_galleries where id = '%d' order by id ASC", $id );
	$videogallery = $wpdb->get_results( $query );
	$paramssld    = '';

	return front_end_videogallery( $images, $paramssld, $videogallery );
}

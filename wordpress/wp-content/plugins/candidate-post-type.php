<?php
/*
Plugin Name: Candidate Custom Post Type
Plugin URI: http://nettsia.no
Description: Plugin for candidates
Version: 1.0
Author: Kristoffer
Author URI:http://nettsia.no
Textdomain: kinsta
License: GPLv2
*/

function create_posttype() {
 
    register_post_type( 'Candidate',
        array(
            'labels' => array(
                'name' => __( 'Candidates' ),
                'singular_name' => __( 'Candidate' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'candidates'),
            'show_in_rest' => true,
 
        )
    );
}
add_action( 'init', 'create_posttype' );
<?php
// Theme support options
require_once(get_template_directory().'/assets/functions/theme-support.php'); 

// WP Head and other cleanup functions
require_once(get_template_directory().'/assets/functions/cleanup.php'); 

// Register scripts and stylesheets
require_once(get_template_directory().'/assets/functions/enqueue-scripts.php'); 

// Register custom menus and menu walkers
require_once(get_template_directory().'/assets/functions/menu.php'); 

// Register sidebars/widget areas
require_once(get_template_directory().'/assets/functions/sidebar.php'); 

// Makes WordPress comments suck less
require_once(get_template_directory().'/assets/functions/comments.php'); 

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/assets/functions/page-navi.php'); 

// Adds support for multiple languages
require_once(get_template_directory().'/assets/translation/translation.php'); 

if(isset($_COOKIE['viewedPages']))
    $pagesSeen = unserialize($_COOKIE['viewedPages']);
$args = array( 'post_type' => 'page', 'numberposts' => 1, 'orderby' => 'rand' );
$rand_posts = get_posts( $args );
foreach( $rand_posts as $post ) :
	$pagesSeen[] = get_the_ID(); 
    setcookie('viewedPages', serialize($pagesSeen), time()+3600, '/');
endforeach;
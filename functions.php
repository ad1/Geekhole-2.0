<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Enable "Featured Image" for Blogposts
	// To enabled it for posts and pages, do this:
	// add_theme_support('post-thumbnails');
	add_theme_support('post-thumbnails', array('post'));
	// Default images are cropped (3rd param (true)) with a resolution of 630x350
	set_post_thumbnail_size(630, 350, true);
	
	add_image_size('front-big', 630, 250, true);
	add_image_size('front-small', 315, 250, true);
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    require_once ( get_stylesheet_directory() . '/geekhole-options.php' );
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

?>
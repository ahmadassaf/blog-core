<?php

/* Template Name: My Blog Theme - Templated (SMARTY) */

global $smarty;

	get_header();                                       // Get the page header

	$home           = array();                          // The main object array that will hold the home() variables
	$category_posts = array();                          // The main object array that will hold the categories() list
	$quote          = get_quote(); 	                    // The Quote in the textbanner
	$home_quote     = $quote[0]->quote;

	echo '<div class="textbanner"><q>'.$home_quote.'</q></div>';

	include('home_posts.php'); 													// The posts list in the right handside
	include('projects.php');														// The latest post and the projects list
	include('recent_featured_posts.php');							  // The recent/featured posts list

	get_footer();

	?>



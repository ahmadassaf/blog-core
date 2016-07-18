<?php

	global $smarty , $cache_time;
	$home    = array();                            // The main object array that will hold the home() variables

	if(!$smarty->isCached('projects.tpl', 'projects')) {

		if ( false === ($value = get_transient( 'projects')) ) {

			$args_recent        = array( 'numberposts' => 1 , 'order'=> 'DESC', 'orderby' => 'date','cat' => -5800);
			$args               = array( 'numberposts' => 3 , 'order'=> 'DESC', 'orderby' => 'date','cat' => 5800);
			$recent_post        = get_posts( $args_recent );
			$projects_postslist = array_merge($recent_post,get_posts( $args ));

			foreach($projects_postslist as $post) {

			$post_ID           = get_the_ID();	 		             // The Post ID
			$post_thumbnail    = "";              		          	 // The post specified Tumbnail (if exists)
			$post_meta         = get_post_metadata($post_ID,true);   // Retreive list of ranked Keywords and Tags

			if (has_post_thumbnail()) {
				$thumbnailsrc      = wp_get_attachment_image_src( get_post_thumbnail_id($post_ID), 'large' ) ;
				$post_thumbnail    = 'http://ahmadassaf.com/blog/wp-content/themes/blog/timthumb.php?src='.str_replace("localhost", "ahmadassaf.com", $thumbnailsrc[0]).'&amp;h=400&amp;w=800&amp;zc=1';
			}

			$home["projects"][] = array(
				"post_ID"             => $post_ID,
				"post_thumbnail_meta" => $thumbnailsrc[0],
				"post_thumbnail"      => $post_thumbnail,
				"post_permalink"      => get_permalink($post_ID),
				"post_publish_date"   => get_the_date('F j, Y'),
				"post_title"          => get_the_title(),
				"post_excerpt"        => get_the_excerpt(),
				"post_categories"     => $post_meta["categories"],
				"post_tags"           => count($post_meta["tags"]) > 5 ? array_slice($post_meta["tags"],0,5) : $post_meta["tags"]
				);
			}

			set_transient( 'projects', $home, $cache_time );
		} else $home = get_transient( 'projects' );

		$smarty->assign('home',$home);
	}

	$smarty->display('projects.tpl','home');

?>
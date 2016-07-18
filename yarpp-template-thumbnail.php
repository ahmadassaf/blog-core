<?php /*
Automatic Post Thumbnail Template
Author: Ahmad Assaf (http://ahmadassaf.com)
*/?>
<?php

	global $smarty , $cache_time;
	if ($related_query->have_posts()) {

		$related_postslist_parsed = array();
		$post_ID                  = get_the_ID();	 		               	   	// The Post ID

		if(!$smarty->isCached('YARPP.tpl', 'YARPP:'.$post_ID)) {
			if ( false === ($value = get_transient('YARPP:'.$post_ID)) ) {

				while ($related_query->have_posts()) : $related_query->the_post();

				$post_thumbnail      = "";              		                // The post specified Tumbnail (if exists)
				$post_thumbnail_meta = "";                                      // The post thumbnail not resized for meta information
				$post_meta           = get_post_metadata($post->ID, false);     // Retreive list of ranked Keywords and Tags

				if (has_post_thumbnail()) {
					$post_thumbnail_meta = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ) ;
					$post_thumbnail      = 'http://ahmadassaf.com/blog/wp-content/themes/blog/timthumb.php?src='.str_replace("localhost", "ahmadassaf.com", $post_thumbnail_meta[0]).'&amp;h=100&amp;w=130&amp;zc=1';
				}

				$related_postslist_parsed["id"]   = "related_posts";
				$related_postslist_parsed["name"] = "Related Posts";

				$related_postslist_parsed["posts_array"][] = array(
					"post_ID"             => $post->ID,
					"post_thumbnail_meta" => $post_thumbnail_meta[0],
					"post_thumbnail"      => $post_thumbnail,
					"post_permalink"      => get_permalink($post->ID),
					"post_title"          => get_the_title(),
					"post_excerpt"        => get_the_excerpt(),
					"post_tags"           => count($post_meta["tags"]) > 5 ? array_slice($post_meta["tags"],0,5) : $post_meta["tags"]
				);

				endwhile;

				set_transient( 'YARPP:'.$post_ID , $related_postslist_parsed, $cache_time );

			} else $related_postslist_parsed = get_transient( 'YARPP:'.$post_ID );

			$smarty->assign('posts',$related_postslist_parsed);
		}

	$smarty->display('YARPP.tpl','YARPP:'.$post_ID);

	} else {
		$smarty->assign('posts',false);
		$smarty->display('YARPP.tpl','YARPP:'.$post_ID);
	}
?>
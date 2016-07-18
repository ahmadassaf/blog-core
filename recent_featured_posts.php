<?php

  global $smarty , $cache_time;

  $recent_featured_postslist_parsed = array();                                // The array to save the parsed ready to display results

  if(!$smarty->isCached('posts_previews.tpl', 'recent_featured_posts')) {

    if ( false === ($value = get_transient('recent_featured_posts')) ) {

    	$recent_args        = array( 'numberposts' => 6 , 'order'=> 'DESC', 'orderby' => 'date','cat' => -5800);
    	$recent_postslist   = array_slice(get_posts( $recent_args ),1,5);
    	$featured_args      = new WP_Query();
    	$featured_postslist = $featured_args->query('tag=Featured&showposts=5');

    	$recent_featured_array            = array_merge($recent_postslist, $featured_postslist);
    	$recent_featured_postslist_parsed = array();

      foreach($recent_featured_array as $post) {

        $post_ID             = get_the_ID();                         // The Post ID
        $post_thumbnail      = "";                                   // The post specified Tumbnail (if exists)
        $post_thumbnail_meta = "";                                   // The post thumbnail not resized for meta information
        $post_meta           = get_post_metadata($post_ID, false);   // Retreive list of ranked Keywords and Tags

        if (has_post_thumbnail()) {
          $post_thumbnail_meta = wp_get_attachment_image_src( get_post_thumbnail_id($post_ID), 'large' ) ;
          $post_thumbnail      = 'http://ahmadassaf.com/blog/wp-content/themes/blog/timthumb.php?src='.str_replace("localhost", "ahmadassaf.com", $post_thumbnail_meta[0]).'&amp;h=100&amp;w=130&amp;zc=1';
        }

        $recent_featured_postslist_parsed["posts_array"][] = array(
          "post_ID"             => $post_ID,
          "post_thumbnail_meta" => $post_thumbnail_meta[0],
          "post_thumbnail"      => $post_thumbnail,
          "post_permalink"      => get_permalink($post_ID),
          "post_title"          => get_the_title(),
          "post_excerpt"        => get_the_excerpt(),
          "post_tags"           => count($post_meta["tags"]) > 5 ? array_slice($post_meta["tags"],0,5) : $post_meta["tags"]
        );
      }

      set_transient( 'recent_featured_posts', $recent_featured_postslist_parsed, $cache_time );

    } else $recent_featured_postslist_parsed = get_transient( 'recent_featured_posts' );

    $smarty->assign('posts',$recent_featured_postslist_parsed);
  }

  $smarty->display('posts_previews.tpl','recent_featured_posts');

?>

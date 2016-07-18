<?php

  include("includes/SHARE/buttonBuilder.php");

  global $smarty, $cache_time;

  get_header();                                                  // Get the page header

  the_post();
  $index               = array();                                // The main object array that will hold the index() variables
  $post_ID             = get_the_ID();                           // The Post ID

  if(!$smarty->isCached('index.tpl', "post - ".$post_ID)) {

    if ( false === ($value = get_transient("post:".$post_ID)) ) {

      $post_title          = get_the_title();                    // The post title
      $post_excerpt        = get_the_excerpt();                  // The post excerpt
      $post_permalink      = get_permalink($post_ID);            // The post permalink
      $post_thumbnail_meta = "";                                 // The post thumbnail not resized for meta information
      $post_thumbnail      = "";                                 // The post specified Tumbnail (if exists)
      $post_meta           = get_post_metadata($post_ID,true);   // Retreive list of ranked Keywords and Tags
      $content             = get_the_content();                  // Get the Post main textual content
      $next_post           = get_previous_post();                // Get the next post in navigation
      $post_series         = array();                            // Check if the post is part of a series and bring the series information

      if (has_post_thumbnail()) {
        $post_thumbnail_meta = wp_get_attachment_image_src( get_post_thumbnail_id($post_ID), 'large' ) ;
        $post_thumbnail      = 'http://ahmadassaf.com/blog/wp-content/themes/blog/timthumb.php?src='.$post_thumbnail_meta[0].'&amp;h=200&amp;w=300&amp;zc=1';
      }

      /* Build the share button loader */
      $shareButton_builder = new buttonBuilder("Ahmad Assaf's Blog");

      $shareButton_builder->set_link($post_permalink);
      $shareButton_builder->set_link_title($post_title);
      $shareButton_builder->set_link_description($post_excerpt);
      $shareButton_builder->set_link_thumbnail($post_thumbnail_meta[0]);

      $index["shareButton"]       = $shareButton_builder->build(array("twitter","facebook","google","delicious","reddit","linkedin","stumbleupon","hackernews","pinterest","buffer"));
      $index["secondary_sharing"] = $shareButton_builder->build(array("instapaper","pocket"));

      /* Check if the post is part of a series */
      $series_info = get_the_series();

      if ($series_info) {
        $post_series["series_title"]   = $series_info[0]->name;
        $post_series["series_members"] = get_series_posts($series_info->term_id);
        $index["series"]               = $post_series;
      }

      $index["post"]  = array(
            "post_ID"             => $post_ID,
            "next_post_link"      => $next_post ? $next_post->guid : "",
            "post_wordCount"      => str_word_count($content),
            "post_comments"       => formated_comments_number('Leave a Comment', '1 Comment', '% Comments'),
            "post_thumbnail_meta" => $post_thumbnail_meta[0],
            "post_thumbnail"      => $post_thumbnail,
            "post_permalink"      => get_permalink($post_ID),
            "post_published_date" => get_the_date('l, F j, Y'),
            "post_title"          => $post_title,
            "post_excerpt"        => htmlentities($post_excerpt,ENT_QUOTES),
            "post_categories"     => $post_meta["categories"],
            "post_content"        => apply_filters('the_content', $content),
            "post_keywords"       => $post_meta["keywords"],
            "post_tags"           => $post_meta["tags"]
          );

      set_transient( "post:".$post_ID , $index, $cache_time );

    } else $index = get_transient("post:".$post_ID);

    $smarty->assign('index',$index);
  }

  $smarty->display('index.tpl','post: '.$post_ID);

  related_posts();

  $smarty->display('post_footer.tpl','post_footer: '.$post_ID);

  $smarty->display('SNARC.tpl');

  get_footer();

?>
<?php

  global $smarty;
  global $query_string;

  get_header();                                                  // Get the page header

  $smarty->clearCache('search.tpl');

  $archive            = array();
  $isCategory         =  is_category() ? "true" : "false";
  $isSearch           =  is_search  () ? "true" : "false";

  $posts = query_posts($query_string);

  if (have_posts()) {

    foreach ($posts as $post) {

      $post_ID             = get_the_ID();                         // The Post ID
      $post_thumbnail      = "";                                   // The post specified Tumbnail (if exists)
      $post_thumbnail_meta = "";                                   // The post thumbnail not resized for meta information
      $post_meta           = get_post_metadata($post_ID, true);    // Retreive list of ranked Keywords and Tags

      if (has_post_thumbnail()) {
        $post_thumbnail_meta = wp_get_attachment_image_src( get_post_thumbnail_id($post_ID), 'large' ) ;
        $post_thumbnail      = 'http://ahmadassaf.com/blog/wp-content/themes/blog/timthumb.php?src='.str_replace("localhost", "ahmadassaf.com", $post_thumbnail_meta[0]).'&amp;h=200&amp;w=300&amp;zc=1';
      }

      $archive["posts"][]  = array(
        "post_ID"             => $post_ID,
        "post_thumbnail_meta" => $post_thumbnail_meta[0],
        "post_thumbnail"      => $post_thumbnail,
        "post_permalink"      => get_permalink($post_ID),
        "post_publish_date"   => get_the_date('F j, Y'),
        "post_title"          => search_title_highlight(),
        "post_excerpt"        => search_excerpt_highlight(),
        "post_categories"     => $post_meta["categories"],
        "post_tags"           => count($post_meta["tags"]) > 5 ? array_slice($post_meta["tags"],0,5) : $post_meta["tags"]
      );
    }
  }
  $smarty->assign('search',$archive);
  $smarty->display('search.tpl');

  // Print out the pagination links wrapped in a div
  if (function_exists("pagination")) pagination();

  include('projects.php');
  include('recent_featured_posts.php');

?>

<script type="text/javascript">

var isSearch          = '<?php echo $isSearch;?>';
var isCategory        = '<?php echo $isCategory;?>';

</script>

<?php  get_footer(); ?>
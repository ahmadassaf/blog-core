<?php

global $smarty, $query_string, $cache_time;

	get_header();                                           // Get the page header

	$archive           = array();								   		   		// The Archive page object
	$categories_filter = array();								   		   		// The Archive categories filter bar
	$isCategory        =  is_category() ? "true" : "false";
	$isSearch          =  is_search  () ? "true" : "false";
	$tag_title         =  single_tag_title("", false);
	$tag_ID            =  get_query_var('tag_id');
	$page_number       =  get_query_var('paged');

	if(!$smarty->isCached('tag.tpl', "tag - ".$tag_ID.":Paged:".$page_number)) {

		if ( false === ($value = get_transient("tag:".$tag_ID.":Paged:".$page_number)) ) {

			$posts = query_posts($query_string);

			if (have_posts()) {

				foreach ($posts as $post) {

					$post_ID             = get_the_ID();	 		              			  // The Post ID
					$post_thumbnail      = "";              		                		// The post specified Tumbnail (if exists)
					$post_thumbnail_meta = "";                                 	    // The post thumbnail not resized for meta information
					$post_meta           = get_post_metadata($post_ID, true);       // Retreive list of ranked Keywords and Tags

					if (has_post_thumbnail()) {
						$post_thumbnail_meta = wp_get_attachment_image_src( get_post_thumbnail_id($post_ID), 'large' ) ;
						$post_thumbnail      = 'http://ahmadassaf.com/blog/wp-content/themes/blog/timthumb.php?src='.str_replace("localhost", "ahmadassaf.com", $post_thumbnail_meta[0]).'&amp;h=200&amp;w=300&amp;zc=1';
					}

					$archive["categories_filter"] = $categories_filter;
					$archive["posts"][]           = array(
						"post_ID"             => $post_ID,
						"post_thumbnail_meta" => $post_thumbnail_meta[0],
						"post_thumbnail"      => $post_thumbnail,
						"post_permalink"      => get_permalink($post_ID),
						"post_publish_date"   => get_the_date('F j, Y'),
						"post_title"          => get_the_title(),
						"post_excerpt"        => get_the_excerpt(),
						"post_categories"     => $post_meta["categories"],
						"post_tags"           => count($post_meta["tags"]) > 5 ? array_slice($post_meta["tags"],0,5) : $post_meta["tags"]
					);
				}
			}

			set_transient( "tag:".$tag_ID.":Paged:".$page_number , $archive, $cache_time );

		} else $archive = get_transient("tag:".$tag_ID.":Paged:".$page_number);

		// Print out the pagination links wrapped in a div
		if (function_exists("pagination")) $archive["pagination"] = pagination();

		$smarty->assign('archive',$archive);
	}

	$smarty->display('tag.tpl',"tag - ".$tag_ID."|".$page_number);

	include('recent_featured_posts.php');

?>

<script type="text/javascript">

var isSearch          = '<?php echo $isSearch;?>';
var isCategory        = '<?php echo $isCategory;?>';

$('.pagination a:first').addClass('active');
$('.wrapper-dropdown span').text("<?php echo html_entity_decode($category->name) ; ?>");

</script>

<?php get_footer(); ?>

<?php

function cache_cleaner() {

	global $wpdb, $smarty;

	// Respond to the actions sent from the UI and retreive the parameters
	$action    = $_POST['activity'];
	$post_ID   = $_POST['post_id'];
	$post_type = $_POST['post_type'];
	$post_page = $_POST['post_page'];
	$post_name = $_POST['post_name'];

	// Call the appropriate function that corresponds to the action sent from th UI
	call_user_func_array($action , array($post_type,$post_ID,$post_page,$post_name));
	die();
}


// Clear a specific post transient + its YARPP attached transient
function clear_transient($post_type,$post_ID,$post_page,$post_name) {
	if ($post_type == "Post") {
		delete_transient("post:".$post_ID);
		delete_transient("YARPP:".$post_ID);
	} else delete_transient("archive:".$post_ID.":Paged:".$post_page);

	echo $post_type." with ID: ".$post_ID." - ".$post_name." : Transients are Deleted Successfully";
}

// Clear a specific post Smarty cache + its YARPP attached cache
function clear_cache($post_type,$post_ID,$post_page,$post_name) {
	global $smarty;
	if ($post_type == "Post") {
		$smarty->clearCache('index.tpl', "post:".$post_ID);
		$smarty->clearCache('posts_previews.tpl', "YARPP:".$post_ID);
	} else $smarty->clearCache('archive.tpl', "category - ".$post_ID.":Paged:".$post_page);

	echo $post_type." with ID: ".$post_ID." - ".$post_name." : Caches are Deleted Successfully";
}

// Clear all the Smarty caches for Archives, posts ... etc.
function clear_all_caches() {
	global $smarty;
	$smarty->clearAllCache();

	echo "All Smarty Caches Cleared";
}

// Clear all the transients for Archives, posts ... etc.
function clear_all_transients() {

	$results = get_transients();            // Getting the list of all transients

	// First we delete the simple single valued transients

	delete_transient("recent_posts");       // Deleting the recent posts transient
	delete_transient("featured_posts");     // Deleting the featured posts transient
	delete_transient("menu");               // Deleting the menu transient

	// Looping throught the list of all transients
	foreach($results as $transient) {
		// Extracting the transient name from the variable
		$post_transient =  str_replace("_transient_", "", $transient->name);
		delete_transient($post_transient);
	}

	echo "All Transients Cleared";
}

// Get from the Database all the transients that are related to the post, archives or YARPP templates
function get_transients() {

	global $wpdb;

	$sql = "SELECT `option_name` AS `name`, `option_value` AS `value`
	FROM  $wpdb->options
	WHERE `option_name` LIKE '%transient_post%'  ||  `option_name` LIKE  '%YARPP:%' ||  `option_name` LIKE  '%archive:%'
	ORDER BY `option_name`";

	$results = $wpdb->get_results( $sql );

	return $results;
}

// the main function that will run to render the Front-end (display and list transients)
function clear_cache_plugin_options(){
	global $smarty;

	$transient_elements       = array(); 							 // The main array the will hold the results

	// Retreive the list of transients for YARPP. Archives and Posts
	$transients = get_transients();

	foreach($transients as $transient) {

		// Extract the transient name and type from the list
		$post_transient    = str_replace("_transient_", "", $transient->name);
		$transient_details = explode(':', $post_transient);
		$transient_type    = $transient_details[0];
		$transient_ID      = $transient_details[1];

		if ($transient_type == "post") {
			$transient_elements["posts"][] =  array(
				"type" => "Post",
				"ID"   => $transient_ID ,
				"name" => get_the_title( $transient_ID ),
				"link" =>  get_permalink($transient_ID ));
		}
		else if($transient_type == "archive") {
			// Get the category Wordpress object to retreive the name, Page ID
			$category             = get_term_by('id', $transient_ID  , 'category');
			$category_page        = $transient_details[3];
			$transient_elements["category"][] = array(
				"type" => "Category",
				"ID" => $transient_ID ,
				"name" => $category->name ,
				"page" => $category_page,
				"link" => get_category_link($transient_ID));
		}
	}

	$smarty->assign('cache_cleaner',$transient_elements);
	$smarty->display('admin_cache_cleaner.tpl','admin_cache_cleaner');
}

// Wordpress hook to attach the shortcut icon in the desired menu
function clear_cache_plugin_menu(){
	add_management_page('Cache Cleaner', 'Clear All Caches', 'manage_options', 'wc-admin-menu', 'clear_cache_plugin_options');
}

function clear_cache_javascript() {
	?>
	<script type="text/javascript" >
	jQuery(document).ready(function($) {
		document.clearAllCache = function(action,type,ID,page, name) {
			var data = {action: "clear_cache", activity: action, post_type :type, post_id :ID, post_page: page, post_name:name};
			$.post(ajaxurl, data, function(response) {
				alert(response);
			});
		}
	});
	</script>


	<?php }
	// Attach the appropriate Wordpress Hooks
	add_action		  ('admin_footer', 'clear_cache_javascript' );
	add_action		  ('wp_ajax_clear_cache', 'cache_cleaner' );
	add_action		  ('admin_menu', 'clear_cache_plugin_menu');

	?>
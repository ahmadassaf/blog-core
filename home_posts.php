<?php

 	if(!$smarty->isCached('home.tpl', 'home')) {

 		$home           = array();                          // The main object array that will hold the home() variables

 		if ( false === ($value = get_transient('home_posts')) ) {

			$category_posts = array();                      // The main object array that will hold the categories() list
	 		$homepage_categories = array("Programming" => 6, "Web Development" => 9,"Data Mining" => 15725, "Semantic Web" => 15109);

	 		foreach ($homepage_categories as $key=>$category) {
				$args               = array( 'numberposts' => 3 , 'order'=> 'DESC', 'orderby' => 'date','cat' => $category);
				$category_postslist = get_posts( $args );

		        foreach($category_postslist as $post) {
					$category_posts[$key][] = get_post_details($post);
				}
	 		}

			$args             = array( 'numberposts' => 1 , 'order'=> 'DESC', 'orderby' => 'date','cat' => -5800);
			$recent_postslist = get_posts( $args );

        foreach($recent_postslist as $post) {
	        	$home["post"] = get_post_details($post);
			}

			$home["cateogries_list"] = $category_posts;
			set_transient( 'home_posts', $home, $cache_time );

		} else $home = get_transient( 'home_posts' );
		$smarty->assign('home',$home);
	}

	$smarty->display('home.tpl','home');

?>
<?php 
	header('Content-type: application/json');
	require_once('includes/social-parser.php');
	require('includes/simpleCache.php');

	$cache = new SimpleCache();

	$id                = $_POST['id'];
	$youtube_playlists = $_POST['y'];
	$twitter_lists     = $_POST['t'];
	$twitter_search    = $_POST['ts'];
	$keywords          = $_POST['k'];
	$zemanta           = $_POST['z'];

	if($data = $cache->get_cache($id)){
		echo($data);
		die();
	} 
	else { 
		$parser = new socialParser(array('keywords'=> json_decode($keywords),
			"youtube_playlists" => json_decode($youtube_playlists),
			"twitter_lists"     => json_decode($twitter_lists),
			"twitter_search"    => json_decode($twitter_search),
			"zemanta"           => json_decode($zemanta)
		));

		$result = $parser->build();
		$result = array_filter($result);
		
		shuffle($result);
		$cache->set_cache($id, json_encode($result));

		echo(json_encode($result));
		die();
	}
?>

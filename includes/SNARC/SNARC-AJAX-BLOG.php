<?php 

	header('Content-type: application/json');
	date_default_timezone_set('UTC');

	require_once('Utilities/util.php');
	require_once('Utilities/simpleCache.php');
	require_once('DocumentBuilder/semantic-document.php');
	require_once('DocumentBuilder/zemanta.php');
	require_once('SearchService/SNARC-search.php');

	$cache = new SimpleCache();
	
	$url           = str_replace('localhost','ahmadassaf.com',$_POST['l']);
	$id            = "socialAggregator".sha1($_POST['l']);
	$zemanta_posts = json_decode($_POST['z']);
	$keywords      = json_decode($_POST['k']);
	$category 	   = json_decode($_POST['c']);

	if ($document_encoded_result = $cache->get_cache('Semanticdocument:'.sha1($url))){
		$document = json_decode($document_encoded_result);
	} else {
		$document          = new semanticDocument();
		$zemantaExtractor  = new zemanta();

		$document->setURL($url);
		$document->setTitle($zemanta_posts->title);
		$document->setText ($zemanta_posts->text);

		$zemantaExtractor->build(sha1($url),$document->getTitle(),$document->getText());

		$document->setLanguage("English");
		$document->setLanguageCode("en");
		$document->setZemantaPosts($zemantaExtractor->getRelatedPosts());
		$document->setKeywords($keywords);
		$document->setCategories(array("alchemy"=>array("computer_internet"), "zemanta" => array("Computers")));		
	}

	$cache->set_cache('Semanticdocument:'.sha1($url), json_encode($document));

	if($data = $cache->get_cache($id)){
		echo($data);
		die();
	} 
	else { 
		$SNARCSearch             = new SNARCSearch();
		$result                  = $SNARCSearch->build($document);

		$result = array_filter($result);
		shuffle($result);
		$encoded_result = json_encode($result);
		$cache->set_cache($id,$encoded_result );

		echo($encoded_result);
		die();
	}
?>

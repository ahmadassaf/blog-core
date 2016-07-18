<?php 

	header('Content-type: application/json; charset=utf8');
	date_default_timezone_set('UTC');

	require_once('Utilities/util.php');
	require_once('Utilities/simpleCache.php');

	require_once('DocumentBuilder/semanticDocumentBuilder.php');

	$semanticDocumentBuilder = new semanticDocumentBuilder();
	$result =  $semanticDocumentBuilder->build($_POST['url'],$_POST['text'],$_POST['title'],$_POST['tags']);

	echo json_encode($result);
	die();

?>
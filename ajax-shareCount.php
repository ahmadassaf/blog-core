<?php 

	header('Content-type: application/json');
	require_once("includes/SHARE/shareCalculator.php");

	$url      = $_POST['url'];
	$services = $_POST['services'];

	$share_counter_builder = new shareCalculator($url);
	$share_counter         = $share_counter_builder->build($services);


	echo(json_encode($share_counter));
	die();
?>

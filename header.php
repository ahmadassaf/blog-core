<!doctype html>

<html lang="en-US">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php wp_title(''); if (!is_home()) {  echo ' : '; bloginfo('name'); } ?> </title>
	<meta name="keywords" content="Ahmad Assaf, Ahmad Assaf Blog, Ahmed Assaf, Semantic Web, Data Mining, Big Data, Business Intelligence, Web Development, jQuery, Tutorials, jQuery Plugin"/>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="Shortcut Icon" href="http://ahmadassaf.com/images/fav.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="http://ahmadassaf.com/images/fav_128.png"/>
	<link rel="alternate" type="application/rss+xml" title="Ahmad Assaf Blog RSS Feed" href="http://ahmadassaf.com/blog/feed/" />
	<link rel="pingback" href="http://ahmadassaf.com/blog/xmlrpc.php" />
	<link href='http://fonts.googleapis.com/css?family=Duru+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/blog/wp-content/themes/blog/style.css?v=1.0" />
	<?php wp_head(); ?>
</head>
<body itemscope itemtype="http://schema.org/Blog">

	<!-- Include rich meta information about authorship -->
	<?php include("includes/author-meta.php"); ?>
		<div class="wrapper-overlay">
            <div class="wrapper">
           		<?php include ("menu.php");?>
            	<div class="<?php if (is_404()) echo 'notFound '; if ( is_archive() || is_search() || is_404()) echo 'archive main';  else if (is_home()) echo 'home'; else if (is_single()) echo 'main single'; ?>">
<?php 
	if(isset($color))
		include("include/color_ccd.php"); 
	else if(isset($photon))
		;
	else
		include("include/ccd.php"); 
	include("include/slider.php");
?>
<html>

<head>
	<title>CCD Lab</title>
	<link type="text/css" rel="stylesheet" href="http://astro.columbia.edu/~msalem/ccd/css/jquery-ui-1.9.0.min.css" />
	<link type="text/css" rel="stylesheet" href="http://astro.columbia.edu/~msalem/ccd/css/main.css" />
	<link type="text/css" rel="stylesheet" href="http://astro.columbia.edu/~msalem/ccd/css/jquery.jscrollpane.css" />

	<script type="text/javascript" src="http://www.astro.columbia.edu/~msalem/ccd/js/jquery-1.8.2.js"></script>
	<script type="text/javascript" src="http://www.astro.columbia.edu/~msalem/ccd/js/jquery-ui-1.9.0.min.js"></script>
	<script type="text/javascript" src="http://www.astro.columbia.edu/~msalem/ccd/js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="http://www.astro.columbia.edu/~msalem/ccd/js/jquery.jscrollpane.min.js"></script>
<?php
	if(!isset($color))
		echo "<script type=\"text/javascript\" src=\"http://www.astro.columbia.edu/~msalem/ccd/js/ccd.js\"></script>\n";
?>
</head>

<body>
	<div class="wrapper">

	<ul class="topNav">
		<h2><a href="http://www.astro.columbia.edu/~msalem/ccd">CCD Lab</a></h2>
		<li><a href="http://www.astro.columbia.edu/~msalem/ccd/photon">Photon Counts</a>
		<li><a href="http://www.astro.columbia.edu/~msalem/ccd/pointSource">Point Source</a>
		<li><a href="http://www.astro.columbia.edu/~msalem/ccd/extended">Extended Source</a>
		<li><a href="http://www.astro.columbia.edu/~msalem/ccd/readOut">Read Out</a>
		<li><a href="http://www.astro.columbia.edu/~msalem/ccd/color">Color CCDs</a>
		<br />
	</ul>
	

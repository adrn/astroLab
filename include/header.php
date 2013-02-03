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
	<link type="text/css" rel="stylesheet" href="css/jquery-ui-1.9.0.min.css" />
	<link type="text/css" rel="stylesheet" href="css/main.css" />
	<link type="text/css" rel="stylesheet" href="css/jquery.jscrollpane.css" />

	<script type="text/javascript" src="js/jquery-1.8.2.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.9.0.min.js"></script>
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
	<script src="http://d3js.org/d3.v3.min.js"></script>
<?php
	if(!isset($color))
		echo "<script type=\"text/javascript\" src=\"js/ccd.js\"></script>\n";
?>
</head>

<body>
	<div class="wrapper">

	<ul class="topNav">
		<h2><a href="/ccd">CCD Lab</a></h2>
		<li><a href="photon">Photon Counts</a>
		<li><a href="pointSource">Point Source</a>
		<li><a href="color">Color CCDs</a>
		<br />
	</ul>
	

<?php include("include/ccd.php"); ?>
<html>

<head>
	<title>CCD Lab</title>
	<link type="text/css" rel="stylesheet" href="http://astro.columbia.edu/~msalem/ccd/css/main.css" />

	<script type="text/javascript" src="http://www.astro.columbia.edu/~msalem/ccd/js/jquery.js"></script>
	<script type="text/javascript" src="http://www.astro.columbia.edu/~msalem/ccd/js/ccd.js"></script>
	<script type="text/javascript">$(document).ready( function(){ 
		var nRows = 30, nCols = 30;

		// initialize CCD array
		var CCD  = new Array(nRows);
		for( i = 0 ; i < nRows ; i++ )
			CCD[i] = Array(nCols);

		// zero it out
		for( i = 0 ; i < nRows ; i++ )
			for( j = 0 ; j < nCols ; j++ )
				CCD[i][j] = 0;

		// build display / controls
		ccd(CCD); 
	});</script>
</head>

<body>
	<div class="wrapper">

	<ul class="topNav">
		<li><a href="http://www.astro.columbia.edu/~msalem/ccd/photon">Photon Counts</a>
		<li><a href="http://www.astro.columbia.edu/~msalem/ccd/pointSource">Point Source</a>
		<li><a href="http://www.astro.columbia.edu/~msalem/ccd/extended">Extended Source</a>
		<li><a href="http://www.astro.columbia.edu/~msalem/ccd/readOut">Read Out</a>
		<li><a href="http://www.astro.columbia.edu/~msalem/ccd/color">Color CCDs</a>
		<br />
	</ul>
	

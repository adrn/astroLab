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
	
	<h1>CCD Lab</h1>

	<p class="intro"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
			sed do eiusmod tempor incididunt ut labore et dolore magna
			aliqua. Ut enim ad minim veniam, quis nostrud exercitation
			ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

	<div class="rightCol">

		<ul class="controls">
			<li><a href="" id="black">Underexposed</a></li>
			<li><a href="" id="white">Overexposed</a></li>
			<li><a href="" id="noise">White Noise</a></li>
			<li><a href="" id="star">Star</a></li>
			<li><a href="" id="extended">Extended Source</a></li>
		</ul>

		<div id="black_par" class="explanation">
			<h2>Under Exposed</h2>
			<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
					sed do eiusmod tempor incididunt ut labore et dolore magna
					aliqua. Ut enim ad minim veniam, quis nostrud exercitation
					ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	
			<p> Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
					cupidatat non proident, sunt in culpa qui officia deserunt mollit
					anim id est laborum.</p>
		</div>
		<div id="white_par" class="explanation">
		  <h2>Over Exposed</h2>
		  <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
		      sed do eiusmod tempor incididunt ut labore et dolore magna
		      aliqua. Ut enim ad minim veniam, quis nostrud exercitation
		      ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

		  <p> Duis aute irure dolor in reprehenderit in voluptate velit esse
		      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
		      cupidatat non proident, sunt in culpa qui officia deserunt mollit
		      anim id est laborum.</p>
		</div>
		<div id="noise_par" class="explanation">
		  <h2>White Noise</h2>
		  <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
		      sed do eiusmod tempor incididunt ut labore et dolore magna
		      aliqua. Ut enim ad minim veniam, quis nostrud exercitation
		      ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

		  <p> Duis aute irure dolor in reprehenderit in voluptate velit esse
		      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
		      cupidatat non proident, sunt in culpa qui officia deserunt mollit
		      anim id est laborum.</p>
		</div>
		<div id="star_par" class="explanation">
		  <h2>A Star (unresolved source)</h2>
		  <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
		      sed do eiusmod tempor incididunt ut labore et dolore magna
		      aliqua. Ut enim ad minim veniam, quis nostrud exercitation
		      ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

		  <p> Duis aute irure dolor in reprehenderit in voluptate velit esse
		      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
		      cupidatat non proident, sunt in culpa qui officia deserunt mollit
		      anim id est laborum.</p>
		</div>
		<div id="extended_par" class="explanation">
		  <h2>Extended Source (resolved)</h2>
		  <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
		      sed do eiusmod tempor incididunt ut labore et dolore magna
		      aliqua. Ut enim ad minim veniam, quis nostrud exercitation
		      ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

		  <p> Duis aute irure dolor in reprehenderit in voluptate velit esse
		      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
		      cupidatat non proident, sunt in culpa qui officia deserunt mollit
		      anim id est laborum.</p>
		</div>
		<div id="black_par" class="explanation">
		  <h2>Under Exposed</h2>
		  <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
		      sed do eiusmod tempor incididunt ut labore et dolore magna
		      aliqua. Ut enim ad minim veniam, quis nostrud exercitation
		      ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

		  <p> Duis aute irure dolor in reprehenderit in voluptate velit esse
		      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
		      cupidatat non proident, sunt in culpa qui officia deserunt mollit
		      anim id est laborum.</p>
		</div>


	</div>

	<svg class="ccd">
<?php

	$nRows = 30;
	$nCols = 30;

	$width = 19;
	$height = 19;


	for( $i = 0 ; $i < $nRows ; $i++ ){
		for( $j = 0 ; $j < $nCols ; $j++ ){
			$y = $i * ($height + 1);
			$x = $j * ($width + 1 );
			echo "		<rect x=\"$x\" y=\"$y\" width=\"$width\" height=\"$height\" class=\"pixel\""
				. " i=\"$i\" j=\"$j\" />\n";
		}
	}// end i for

?>
	</svg>
	<br />
	</div>
	<p class="copyright">Copyright 2012</p>
</body>
</html>

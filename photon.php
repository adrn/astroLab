<?php include("include/header.php");?>
	<h1>Photon Counts</h1>

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

<?php 
	ccd(30,30,19,19); 
	include("include/footer.php");
?>

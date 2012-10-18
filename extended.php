<?php include("include/header.php"); ?>

	<h1>Extended Sources</h1>

	<p class="intro"> Extended Source
Often times, astronomers want to observe not just point sources like stars, but extended sources like galaxies and nebulae.  For these objects, the brightness is spread over many pixels, not just because of the instruments but because of the physical size of the objects.</p> 

	<div class="rightCol">

		<ul class="controls">
			<li><a href="" id="black">RESET</a></li>
			<li><a href="" id="questions">Questions</a></li>
		</ul>
		
	<?php addSlider(); ?>

		<div id="point_par" class="explanation">
			<p>	Click on a pixel in the center of the CCD.  This spreading of the light 
					is an inherent property of telescopes. Since we can't remove it, astronomers 
					try to model this spread.</p>
		</div>
		
		<div id="overexp_par" class="explanation">
			<h2>Over Exposed</h2>
<p>Click on the same pixel a few more times.  You can see that the photons are now beginning to spill over into surro
unding pixels, more than just the original spread of the star.  You now have an overexposure.  You're removing the natural shape of 
the star and instead spreading out the light even more.</p>
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
		<div id="questions_par" class="explanation">
		  <h2>Questions</h2>
		</div>

		
	</div>

<?php
	ccd(30,30,19,19);
	include("include/footer.php");
?>

<?php include("include/header.php"); ?>

	<h1>Point Sources and Noise</h1>

	<p class="intro"> Each photon that comes in registers a count on one of the pixels. However, stars, which are considered single points of light, occupy more than one pixel on the CCD.</p>	

	<div class="rightCol">

		<ul class="controls">
			<li><a href="" id="black">RESET</a></li>
			<li><a href="" id="point">Point Source</a></li>
			<li><a href="" id="overexp">Overexposed</a></li>
			<li><a href="" id="noise">White Noise</a></li>
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
		  <p><strong>1</strong> Astronomers always try to have their sources in the center of the CCD.  Why is this better than having them closer to the edge?</p>
			<p><strong>2</strong> Reset the page and click on two pixels that are 2 spaces apart.  What happens when these two different sources are so close to each other on the CCD? With this in mind, if you wanted to resolve two stars that were close to each other, how high would you want your resolution to be?</p>
			<p><strong>3</strong> Something on over exposure ... </p>
		</div>

		
	</div>

<?php
	ccd(30,30,19,19);
	include("include/footer.php");
?>

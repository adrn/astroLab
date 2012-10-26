<?php include("include/header.php"); ?>

	<h1>Point Sources and Noise</h1>

	<p class="intro"> Each photon that comes in registers a count on one of the pixels. However, stars, which are considered single points of light, occupy more than one pixel on the CCD.</p>	

	<div class="rightCol">

		<a href="" class="button" id="reset">RESET</a>
		<ul class="controls">
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
			<p>	Sadly, no measuring device is absolutely perfect.  For CCDs, the main source of error from your device is white noise.  The source of the noise is the fact that sometimes, a pixel can add to its count without a photon ever hitting it.  Even worse is that this happens randomly.  The array to right shows you what random noise on your pixels looks like.  Clearly, this is bad because we relate the number of counts to brightness.  If the pixels are counting imaginary photons, our source will then be calculated to be a little too bright.</p>

			<p>	Noise can range from slightly bad to terribly bad.  Click on the array at the right to add a few point sources.  Then using the slide bar, change the noise level of your image.</p>

		</div>
		<div id="questions_par" class="explanation">
		  <h2>Questions</h2>
		  <p><strong>1</strong> Astronomers always try to have their sources in the center of the CCD.  Why is this better than having them closer to the edge?</p>
			<p><strong>2</strong> Reset the page and click on two pixels that are 2 spaces apart.  What happens when these two different sources are so close to each other on the CCD? With this in mind, if you wanted to resolve two stars that were close to each other, how high would you want your resolution to be?</p>
			<p><strong>3</strong> Is one way to combat the noise problem just to integrate longer? Explain why or why not.</p>
		</div>
		
	</div>

<?php
	ccd(30,30,19,19);
	include("include/footer.php");
?>

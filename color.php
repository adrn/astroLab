<?php 
	$color = true;
	include("include/header.php"); 
?>

	<h1>Color CCDs</h1>

	<p class="intro"> Each photon that comes in registers a count on one of the pixels. However, stars, which are considered single points of light, occupy more than one pixel on the CCD.</p>	

	<div class="rightCol">

		<div id="questions_par" class="explanation">
		  <h2>Questions</h2>
		  <p><strong>1</strong> Astronomers always try to have their sources in the center of the CCD.  Why is this better than having them closer to the edge?</p>
			<p><strong>2</strong> Reset the page and click on two pixels that are 2 spaces apart.  What happens when these two different sources are so close to each other on the CCD? With this in mind, if you wanted to resolve two stars that were close to each other, how high would you want your resolution to be?</p>
			<p><strong>3</strong> Something on over exposure ... </p>
		</div>
	</div>

<style type="text/css">
	.ccd .pixel.red   { fill: #ff0000; }	
	.ccd .pixel.green { fill: #00ff00; }	
	.ccd .pixel.blue  { fill: #0000ff; }	

	.explanation {
		display: block !important;
	}
</style>

<?php
	ccd(20,20,29,29);
	include("include/footer.php");
?>

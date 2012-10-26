<?php 
	$color = true;
	include("include/header.php"); 
?>

	<h1>Color CCDs</h1>
	<div class="rightCol">
		<div class="scroll-holder">
		<div class="scroll-pane">
			<div class="explanation">
				<p> So far, all we've talked about is a nondescript photon hitting 
						the CCD.  Everyone we've mentioned works for visible light of 
						any color.  So how do we take color images?</p>

				<p>	In the next section of the lab, we'll talk about how astronomers 
						get color information about the universe using filters.  However, 
						for some CCDs, like the ones in your digital cameras and phones, 
						are designed to automatically receive color information with built 
						in filters.</p>

				<p>	For these cameras, each pixel of the CCD only counts photons if 
						they're the correct color.  Generally, this is split into red, 
						green and blue light.  Then, after reading out the information, 
						the camera creates a color image by summing the information about 
						the amount of each color of light there was at each pixel.  So 
						really your color image is the sum of three separate images.</p>

				<p>	The general mosaic scheme for the different color images is displayed 
						on this page.</p>

				<p>	Each photon that comes in registers a count on one of the pixels. 
						However, stars, which are considered single points of light, occupy 
						more than one pixel on the CCD.</p>	

				<h2>Questions</h2>
				<p><strong>1</strong> Is it a problem that only one fourth of your 
					everyday camera detects red light? Why or why not? What about if we 
					used this method of assigning colors to each pixel in astronomy?</p>
			</div>
		</div></div>
	</div>

<style type="text/css">
	.ccd .pixel.red   { fill: #ff0000; }	
	.ccd .pixel.green { fill: #00ff00; }	
	.ccd .pixel.blue  { fill: #0000ff; }

	.scroll-holder {
		height: 600px;
	}	
	.scroll-pane {
		max-height: 600px;
	}
</style>

<script type="text/javascript">
	$(document).ready( function(){ 
		// J-scrollpane:
		$('.scroll-pane').jScrollPane({ hideFocus: true});
	});
</script>

<?php
	ccd(20,20,29,29);
	include("include/footer.php");
?>

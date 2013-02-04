<?php 
	$color = true;
	include("include/header.php"); 
?>

	<h1>Color CCDs</h1>
	<div class="rightCol">
		<div class="scroll-holder">
		<div class="scroll-pane">
			<div class="explanation">

				<p>	In this section we will learn about how astronomers get color 
				        information about the universe using filters. Filters do exactly
				        what you would expect: they filter out all light that is not within
				        a specific wavelength range. For example, a Blue filter will block
				        out all light that is not blue, or, all light with a wavelength that is
				        not close to 450 nm. Astronomical CCDs are generally sensitive to a very 
                        wide range of wavelengths, so if we want to construct a color image we
				        have to take three separate images -- one with a Red filter, one with 
				        a Green filter, and one with a Blue filter. </p>
                
                <p> Digital cameras work slightly differently: you don't have to take three
                        images every time you want a color image, so how do they work? These
                        CCDs typically have a <b>filter pattern</b> -- namely, each tiny pixel
                        has its own filter, the color of which is decided by an alternating 
                        pattern seen in the grid on the left. The blue pixels only record 
                        a count if a blue photon hits it, and the same for red and green cells. 
                        This means that when you take a picture, your camera has to do some 
                        extra work to combine these three slightly offset images into a single 
                        color image.</p>

				<p>	A typical filter mosaic scheme is shown on the left. <b><i>Question</i>: What
				        implications would this have on taking an image of a star? Can you think of
				        a trick we can do with the camera lens to alleviate this issue?</b>
				
				</p>

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

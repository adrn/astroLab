<?php 
	$photon = true;
	include("include/header.php");
?>
	<h1>Photon Counts</h1>

	<div class="rightCol">

		<div class="scroll-holder">
		<div class="scroll-pane">
			<div class="explanation">

				<p> A CCD is essentially an array of tiny light collectors called 
				        <b>pixels</b>. You can think of them like a bunch of 
				        little buckets -- when a camera shutter opens, each pixel
				        starts collecting photons. When the shutter closes after
				        some amount of time (the <b>exposure time</b>), we can
				        count how many photons were collected in each bucket. 
				        The number of photons corresponds to the brightness of
				        some object at that pixel, so we can convert from number
				        of photons into a brightness. </p>
				        
				<p> Imagine we only had one pixel in our camera. If I took a 
				        picture of this room, what would it look like? It would
				        just be a solid color! Now imagine we had 4 pixels. 
				        <b><i>Question:</i>How does increasing the number of pixels
				        affect the quality or <u>resolution</u> of the image?</b></p>
    
				<p> Click on the pixels of your screen to shoot a photon at that
				        pixel. You can click the same cell multiple times. After
				        you have done this for several of the pixels, click Image
				        to render it into an image.</p>

				<p><b><i>Question:</i> When looking at the sky, do you expect 
					most of your pixels to have counts or not? What about when 
					you take a picture of your friends? What's the difference?</b></p> 
			</div>
		</div>
		</div>
	</div>

<style type="text/css">
	.scroll-holder {
		height: 520px;
	}
	.scroll-pane {
		max-height: 520px;
	}
</style>

<script type="text/javascript">
	$(document).ready( function(){ 
		// J-scrollpane:
		$('.scroll-pane').jScrollPane({ hideFocus: true});
	});
</script>

<?php 
	include("include/photon.php");
	include("include/footer.php");
?>

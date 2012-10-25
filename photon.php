<?php 
	$photon = true;
	include("include/header.php");
?>
	<h1>Photon Counts</h1>

	<p class="intro"> In essence, the CCD is simply an array where each cell is called a "pixel."  The more cells or pixels you have, the higher the resolution.  So a 10 megapixel camera has 10 million pixels. </p>
	<p class="intro"> Each cell counts how many photons hit it. This count of the number of photons is then the brightness of your object at that pixel. So the more photons, the brighter the object at that pixel and the higher count that pixel has.</p>
	<p class="intro"> Click on the pixels of your screen to see an animation of how this works. Then answer the questions.</p>

	<div class="rightCol">
		
		<div id="questions_par" class="explanation on">
			<h2>Questions</h2>
			<p> <strong>1</strong> Does having more pixels mean higher or lower resolution for your image? Explain your answer.</p>
			<p> <strong>2</strong>  When looking at the sky, do you expect most of your pixels to have counts or not? What about when you take a picture of your friends? What's the difference?</p> 
		</div>


	</div>

<?php 
	include("include/photon.php");
	include("include/footer.php");
?>

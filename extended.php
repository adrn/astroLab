<?php 
	include("include/header.php"); 
?>

	<h1>Extended Sources</h1>

	<div class="rightCol">
		<div class="scroll-holder">
		<div class="scroll-pane">
			<div class="explanation">
				<p> Often times, astronomers want to observe not just point sources like 
						stars, but extended sources like galaxies and nebulae.  For these 
						objects, the brightness is spread over many pixels, not just because 
						of the instruments but because of the physical size of the objects.</p> 

		  <h2>Questions</h2>
			</div>
		</div></div>
	</div>

<?php
	ccd(30,30,19,19,"true");
	include("include/footer.php");
?>

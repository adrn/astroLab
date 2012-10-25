<?php 
	include("include/header.php"); 
?>

	<h1>Extended Sources</h1>

	<p class="intro"> Extended Source
Often times, astronomers want to observe not just point sources like stars, but extended sources like galaxies and nebulae.  For these objects, the brightness is spread over many pixels, not just because of the instruments but because of the physical size of the objects.</p> 

	<div class="rightCol">

		
		<div id="questions_par" class="explanation on">
		  <h2>Questions</h2>
		</div>

		
	</div>

<?php
	ccd(30,30,19,19,"true");
	include("include/footer.php");
?>

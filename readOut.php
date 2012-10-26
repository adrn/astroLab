<?php include("include/header.php"); ?>

	<h1>CCD Readout</h1>

	<div class="rightCol">
	   <div class="scroll-holder">
	   <div class="scroll-pane">
			<div class="explanation">
				<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do 
						eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim 
						ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
						aliquip ex ea commodo consequat.</p>

				<p>	Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
						dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
						proident, sunt in culpa qui officia deserunt mollit anim id est.</p>

				<h2>Bad Pixels</h2>
				<p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
						dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est.</p>	

				<h2>Questions</h2>
			  <p><strong>1</strong> Five ugly macintoshes grew up.</p>
			  <p><strong>2</strong> The difference between a cow and a bean is a bean
					can begin an adventure.</p>
			  <p><strong>3</strong> Slotted spoons don't hold much soup.</p>
			</div>
		</div></div>
	
		<a href="" id="reset" class="button">RESET</a>
		<a href="" id="shift" class="button">Shift Down</a>
	
		<ul class="break">
			<li><a href="" id="addSrcs" class="current">Add Sources</a></li>
			<li><a href="" id="break">Break Pixels</a></li>
			<br />
		</ul>
		<?php addSlider(); ?>
	</div>

<?php
	ccd(30,30,19,19);
	include("include/footer.php");
?>

<?php include("include/header.php"); ?>

	<h1>Point Sources and Noise</h1>

	<div class="rightCol">

		<div class="scroll-holder">
		<div class="scroll-pane">
			<div class="explanation">
				<p>	We know that stars are very large: the Sun could fit over a million Earths 
				        inside by volume! If you look at the Sun in the sky it has some size, but
				        any other star we can see in the night sky looks like a tiny pinprick of
				        light. That's because the distances to these other stars is so much greater
				        that we just perceive the light as coming from a single point. </p>
	            
	            <p> Each photon that hits a CCD registers a count on a single pixel. So why then do
	                    images of stars look like the light is smeared out over multiple pixels? This
	                    is due to a combination of two effects: <b>diffraction</b> and <b>atmospheric
	                    blurring</b>. 
			    <b><i>Question:</i> Why is it better to have a space telescope vs. a ground 
			    	based telescope?</b></p>
			    
		    <p> We're not going to talk about diffraction, but it is an unavoidable
	                    effect inherent to all telescopes. Atmospheric distortion, however, is easy to 
	                    understand: photons coming from outside of the Earth's atmosphere interact with 
	                    the air above us and get slightly deflected, causing the stars to look slightly 
	                    blurred. </p>
	            
	            <p> Click on a pixel on the simulated CCD to the left. This is what a typical image of
	                    a star will look like. </p>
	
				<h2>Over Exposed</h2>
				<p>	Click on the same pixel a few more times.  You can see that the photons 
						are now beginning to spill over into surrounding pixels, more than just 
						the original spread of the star.  You now have an overexposed source. For very
						bright stars, we can mediate this effect by taking shorter exposures (decrease 
						the exposure time), but then we can't see the faint objects. Finding a balance
						between overexposing the bright sources and underexposing the faint sources is
						a constant challenge for astronomers.</p>
	
				<h2>White Noise</h2>
				<p>	No electronic instrument is perfect -- they all produce some noise. Think of your 
				        stereo: even if no music is playing, if you turn up the volume too loud the 
				        speakers start to hiss. For CCDs, the main source of error from your device 
				        is called <b>white noise</b> (or <b>read noise</b>). The source of the noise 
				        is random motions of electrons in the detector that sometimes cause counts in
				        the pixels without a photon ever hitting it. Use the <b>Add White Noise</b> slider
				        to add noise of varying intensities to the simulated CCD. You can see that if there
				        is too much noise, our source will be washed out and we won't be able to detect it. For the same reason, if you take a picture at night or in a dark bar, it will often appear grainy or noisy.</p>

				<h2>Questions</h2>

				<p>Reset the page and click on two pixels that are 2 spaces apart.  
					<b>What happens when these two different sources are close to each other on the CCD? Can you think of a way to get around this issue (e.g., should we change something about the pixels)?<b></p>

			</div>
		</div></div>
	
		<a href="" class="button" id="reset">RESET</a>
		<?php addSlider(); ?>
	</div>

<?php
	ccd(30,30,19,19);
	include("include/footer.php");
?>

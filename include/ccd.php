<?php
	function ccd($nRows,$nCols,$width,$height,$extended="false"){

	echo "
	<script type=\"text/javascript\">$(document).ready( function(){ 
		var nRows = 30, nCols = 30;

		// initialize CCD array
		var CCD  = new ccd(nRows,nCols);

		// zero it out
		for( i = 0 ; i < nRows ; i++ )
			for( j = 0 ; j < nCols ; j++ ){
				CCD.signal[i][j] = 0;
				CCD.noise[i][j] = 0;
			}

		// build display / controls
		initialize_ccd(CCD,$extended);


  function slideAction() {
    var noiseLev = $('#noiseSlider').slider(\"value\");
    CCD.addNoise(noiseLev);
  }

  $(\".slider\").slider({
    orientation: \"horizontal\",
    range: \"min\",
    max: 10,
    value: 5,
    slide: slideAction,
    change: slideAction
  });


 
  });</script>\n";


		echo "\t<svg class=\"ccd\">\n";
		for( $i = 0 ; $i < $nRows ; $i++ ){
			for( $j = 0 ; $j < $nCols ; $j++ ){
				$y = $i * ($height + 1);
				$x = $j * ($width + 1 );
				echo "    <rect x=\"$x\" y=\"$y\" width=\"$width\" height=\"$height\" class=\"pixel\""
					. " i=\"$i\" j=\"$j\" />\n";
			}
		}// end i for
		echo "\t</svg>\n";
	} // end ccd fcn
?>

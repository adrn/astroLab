<?php
	function ccd($nRows,$nCols,$width,$height){
		echo "\t<svg class=\"ccd\">\n";
		for( $i = 0 ; $i < $nRows ; $i++ ){
			for( $j = 0 ; $j < $nCols ; $j++ ){
				$y = $i * ($height + 1);
				$x = $j * ($width + 1 );
				echo "    <rect x=\"$x\" y=\"$y\" width=\"$width\" height=\"$height\" class=\"pixel\""
					. " i=\"$i\" j=\"$j\" />\n";
			}
		}// end i for
		echo "\t</svg\n";
	} // end ccd fcn
?>

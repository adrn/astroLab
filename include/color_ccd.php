<?php
	function ccd($nRows,$nCols,$width,$height){
		echo "\t<svg class=\"ccd\">\n";
		for( $i = 0 ; $i < $nRows ; $i++ ){
			for( $j = 0 ; $j < $nCols ; $j++ ){
				$y = $i * ($height + 1);
				$x = $j * ($width + 1 );

				$class = "green";
				if($i%2==0&&$j%2==0) $class="blue";
				if($i%2==1&&$j%2==1) $class="red";

				echo "    <rect x=\"$x\" y=\"$y\" width=\"$width\" height=\"$height\" class=\"pixel $class\""
					. " i=\"$i\" j=\"$j\" />\n";
			}
		}// end i for
		echo "\t</svg\n";
	} // end ccd fcn
?>

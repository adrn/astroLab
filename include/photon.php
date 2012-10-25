	<script type="text/javascript">$(document).ready( function(){

		var photonCount = 0;

		$('.photon_ccd .pixel').click(function(evt){
			evt.preventDefault();
			var pixel = $(this);

			// make photon and animate it
			var x = evt.pageX;
			var y = evt.pageY;
			var pID = "photon_" + (photonCount++).toString();

			$('body').append('<div class="photon" id="' + pID + '"></div>');
			$('#' + pID ).animate({left: x+"px",top: y+"px"},500, function(evt){
				$(this).remove();
				var count = parseInt(pixel.html()) + 1;
				pixel.html( count.toString() );
			});
  	});

  });</script>

	<style type="text/css">

		body {
			position: relative;
		}
	
		.photon {
			background-color: #F2A736;
			position: absolute;
			width: 18px;
			height: 18px;
			border-radius: 9px;
			-moz-border-radius: 9px;
			display: block;
			top: 0;
			left: 0;
		}
	
		.photon_ccd {
			width: 512px;
			height: 512px;
			border: 1px solid #888;
			border-left: 2px solid #888;
			border-top: 2px solid #888;
		}

		.photon_ccd .pixel {
			display: block;
			width: 31px;
			height: 25px;
			padding: 6px 0 0 0;
			font: 18px/100% helvetica, arial, sans-serif;
			text-decoration: none;
			color: #444;
			border-right: 1px solid #666;
			border-bottom: 1px solid #666;

			text-align: center;

			float: left;
			zoom: 1;
			
		}
	</style>

<?php
		
		$nRows = 16;
		$nCols = 16;

		$cellWidth = 32;

		echo "\t<div class=\"photon_ccd\">\n";
		for( $i = 0 ; $i < $nRows ; $i++ )
			for( $j = 0 ; $j < $nCols ; $j++ ){
				$y = $cellWidth * ( $i + .5 );
				$x = $cellWidth * ( $j + .5 );
				echo "    <a href=\"\" class=\"pixel\" i=\"$i\" j=\"$j\" x=\"$x\" y=\"$y\" />0</a>\n";
			}
		echo "\t<br/>\n\t</div>\n";
?>

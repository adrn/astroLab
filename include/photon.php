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
		
		#controls {
		    width: 512px;
		    text-align: center;
		    font-size: 10pt;
		}
		
		#controls a {
		    text-decoration: none;
		    cursor: pointer;
            color: rgb(49, 130, 189);
		}
		
		#controls .on {
		    font-weight: bold;
		    text-decoration: underline;
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

<div id="controls">
    <a onClick="show_grid();" class="on" id="grid">Pixel Grid</a>&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;<a onClick="generate_image();" id="image">Image</a>
</div>

<script type="text/javascript">
    
    // Because javascript doesn't have functions for getting the min or max
    //  of an array...
    Array.max = function( array ){
        return Math.max.apply( Math, array );
    };
    Array.min = function( array ){
        return Math.min.apply( Math, array );
    };
    
    // Return a 2D array with the photon values at each cell
    function pixel_matrix(num_pixels) {
        var pix_matrix = new Array(num_pixels);
        for (var i=0; i<num_pixels; i++) {
            pix_matrix[i] = new Array(num_pixels);
        }
        
        $(".photon_ccd .pixel").each(function(index) { 
            var pix = jQuery(this);
            pix_matrix[pix.attr("i")][pix.attr("j")] = {x: pix.attr("i"), 
                                                        y: pix.attr("j"),
                                                        z: parseInt(pix.text())};
        });
        
        return pix_matrix;
    }
    
    function show_grid() {
        $(".photon_ccd *").css("display", "block");
        $(".photon_ccd svg").css("display", "none");
        $("#controls #image").attr("class", "");
        $("#controls #grid").attr("class", "on");
    }
    
    function generate_image() {
        
        $("#controls #image").attr("class", "on");
        $("#controls #grid").attr("class", "");
        
        var num_pixels = 16;
        var matrix = pixel_matrix(num_pixels);
        
        // Get maximum pixel value in matrix
        var zs = new Array();
        for (var i=0; i<num_pixels; i++) {
            for (var j=0; j<num_pixels; j++) {
                zs.push(matrix[i][j].z);
            }
        }
        var max_pixel = Array.max(zs);
        
        // First, hide the old div
        var width = parseInt($(".photon_ccd").css("width"))-2,
            height = parseInt($(".photon_ccd").css("height"))-2;
        
        $(".photon_ccd *").css("display", "none");
        
        svg = d3.select(".photon_ccd").append("svg")
                .style("width", width)
                .style("height", height)
                .style("background", "#000");
        
        var x = d3.scale.ordinal().rangeBands([0, width]).domain(d3.range(num_pixels)),
            z = d3.scale.linear().domain([0,max_pixel]).clamp(true);
        
        function _row(row) {
            var cell = d3.select(this).selectAll(".cell")
                    .data(row)
                .enter().append("rect")
                    .attr("class", "cell")
                    .attr("x", function(d) { return x(d.y); })
                    .attr("width", x.rangeBand())
                    .attr("height", x.rangeBand())
                    .style("fill", "#fff")
                    .style("fill-opacity", function(d) { return z(d.z); });
        }
        
        svg.selectAll(".row")
                .data(matrix)
            .enter().append("g")
                .attr("transform", function(d, i) { return "translate(0," + x(i) + ")"; })
                .each(_row);

    }
    
</script>
/*
 *	CCD
 *		
 *		September, 2012
 *		Munier Salem
 *
 *		Endows control links with logic for
 *		manipulating CCD array cells, changing
 *		their colors to mimic various sources
 */

var nRows = 24;
var nCols = 25;

/*
 *	D2H
 *		Converts number between 0 - 15 to hex character
 */
function d2h(n){
	if( n < 10 ) return n.toString();
	if( n == 10 ) return 'a';
	if( n == 11 ) return 'b';
	if( n == 12 ) return 'c';
	if( n == 13 ) return 'd';
	if( n == 14 ) return 'e';
	return 'f';
}// end d2h


/*
 *	RANDOM
 *		Produces random greyscale hex color, 
 *	from #ffffff -> #000000
 */
function random(){
	color = "#";
	n = d2h((Math.floor(Math.random()*16)))
	    + d2h((Math.floor(Math.random()*16)));
	for(i = 0 ; i < 3 ; i++ )
		color += n;
	return color;	
}// end random

/*
 *	MAIN FCN
 * 		Gives each CCD control link its action
 */
function ccd(){

	$('.controls a').click( function(evt){

		evt.preventDefault();
		$('.controls a').removeClass('current');
		$(this).addClass('current');
		$('.rightCol .explanation').hide();

		id = $(this).attr('id');
		$('#'+ id + '_par').fadeIn(500);

		if( id == "noise" ){	
			$('.pixel').each( function(){
				$(this).css('fill',random() );
			});
		} else if( id == "star" ){	
			$('.pixel').each( function(){ $(this).css('fill',"#000"); });
			$('#pixel_' + ((nRows*nCols)/2)).css('fill','#fff');
		} else if( id == "extended" ){
			cntr = 300.0;
			scale = 8000.0;
			$('.pixel').each( function(){
				dx = parseFloat($(this).attr('x')) - cntr;
				dy = parseFloat($(this).attr('y')) - cntr;
				r = Math.sqrt(dx*dx+dy*dy);
				amp = 1.0/(r+10.0)*scale;
				amp = Math.floor(amp); 
				if( amp > 255 ) amp = 255;
				$(this).css('fill',"rgb(" + amp + "," + amp + "," + amp + ")" );
			});// end pixel each
		} else if( id == "white" ){ 
			$('.pixel').each( function(){ $(this).css('fill',"#fff"); });
		} else if( id == "black" ){
			$('.pixel').each( function(){ $(this).css('fill',"#000"); });
		} // end case if/else

	}); // end controls click fcn


	// testing click fcn in SVG
	$('.pixel').click( function(){
		$(this).css('fill',"#f70");
	});

} // end ccd

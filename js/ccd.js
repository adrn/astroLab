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
 *	D2HH
 *		Coverts # between 0 - 255 to a hex pattern, 00 - ff
 */
function d2hh(n){
	n1 = n%16;
	n2 = Math.floor(n/16);
	return d2h(n2) + d2h(n1);
}

/*
 *	PAINT
 *		Given an 2D array of integers, paints the ccd display
 *	squares (greyscale)
 */
function paint(CCD){
	$('.pixel').each( function(){
		i = $(this).attr('i');
		j = $(this).attr('j');
		color = d2hh(CCD[i][j]);
		color = "#"+color+color+color;
		$(this).css('fill',color);
	});
}

/*
 *	UNIFORM
 */
function uniform(CCD,val){
	nRows = CCD.length;
	nCols = CCD[0].length;
	for(i=0;i<nRows;i++)
		for(j=0;j<nRows;j++)
			CCD[i][j] = val;
}

/*
 *	MAIN FCN
 * 		Gives each CCD control link its action
 */
function ccd(CCD){

	var nRows = CCD.length;
	var nCols = 0;
	if( nRows > 0 )
		nCols = CCD[0].length;
	
	var im = Math.floor(nRows/2),jm=Math.floor(nCols/2);

	$('.controls a').click( function(evt){

		evt.preventDefault();
		$('.controls a').removeClass('current');
		$(this).addClass('current');
		$('.rightCol .explanation').hide();

		id = $(this).attr('id');
		$('#'+ id + '_par').fadeIn(500);

		if( id == "noise" ){	
			for( i = 0 ; i < nRows ; i++ )
				for( j = 0 ; j < nCols ; j++ )
					CCD[i][j] = Math.floor(Math.random()*256);
			paint(CCD);
		} else if( id == "star" ){
			uniform(CCD,0);
			CCD[im][jm] = 255;
			paint(CCD);
		} else if( id == "extended" ){		// FIXME!
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
			uniform(CCD,255);
			paint(CCD); 
		} else if( id == "black" ){
			uniform(CCD,0);
			paint(CCD);
		} // end case if/else

	}); // end controls click fcn


	// testing click fcn in SVG
	$('.pixel').click( function(){
		$(this).css('fill',"#F70");
		alert( "Row: " + $(this).attr('i') + ", Col: " + $(this).attr('j') );
	});

} // end ccd

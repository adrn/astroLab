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

var photonCnt = 0;
function photon(evt){
	x = evt.pageX - 5 ;
	y = evt.pageY - 5 ;
	var pID = "photon_" + photonCnt++;
	$('body').append('<div class="photon" id="' + pID + '"></div>');
	$('#' + pID ).animate({left: x+"px",top: y+"px"},1000, function(evt){$(this).remove();});
}







//	D2H
//		Converts number between 0 - 15 to hex character
function d2h(n){
	if( n < 10 ) return n.toString();
	if( n == 10 ) return 'a';
	if( n == 11 ) return 'b';
	if( n == 12 ) return 'c';
	if( n == 13 ) return 'd';
	if( n == 14 ) return 'e';
	return 'f';
}// end d2h

//	D2HH
//		Coverts # between 0 - 255 to a hex pattern, 00 - ff
function d2hh(n){
	n1 = n%16;
	n2 = Math.floor(n/16);
	return d2h(n2) + d2h(n1);
}

//	PAINT
//		Given an 2D array of integers, paints the ccd display
//	squares (greyscale)
function paint(CCD){
	$('.pixel').each( function(){
		i = $(this).attr('i');
		j = $(this).attr('j');
		color = d2hh(CCD[i][j]);
		color = "#"+color+color+color;
		$(this).css('fill',color);
	});
}

//	UNIFORM
//		Fills CCD array with 1 # value
function uniform(CCD,val){
	nRows = CCD.length;
	nCols = CCD[0].length;
	for(i=0;i<nRows;i++)
		for(j=0;j<nRows;j++)
			CCD[i][j] = val;
}

// ADD STAR
//		Adds fuzzy source emanating from given cntr
function addStar(CCD,istar,jstar){
	nRows = CCD.length;
	nCols = CCD[0].length;
	for( i = 0 ; i < nRows ; i++ )
		for( j = 0 ; j < nCols ; j++ ){
        dx = i - istar;
				dy = j - jstar;
				r = Math.sqrt(dx*dx+dy*dy);
				amp = Math.floor(200/(r+1)) + CCD[i][j];
				if( amp > 255 ) CCD[i][j] = 255;
				else CCD[i][j] = amp;
		} // end j for
}

// MAIN FUNCTION
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

		// Update CCD array by case ...
		if( id == "noise" ){	
			for( i = 0 ; i < nRows ; i++ )
				for( j = 0 ; j < nCols ; j++ )
					CCD[i][j] = Math.floor(Math.random()*256);
		} else if( id == "star" ){
			uniform(CCD,0);
			addStar(CCD,im,jm);
			addStar(CCD,im,jm);
		} else if( id == "extended" ){
			uniform(CCD,0);
			addStar(CCD,im,jm);
			addStar(CCD,im+1,jm);
			addStar(CCD,im-1,jm);
			addStar(CCD,im-2,jm);
			addStar(CCD,im-3,jm);
			addStar(CCD,im+3,jm);
		} else if( id == "white" ){
			uniform(CCD,255);
		} else if( id == "black" ){
			uniform(CCD,0);
		} // end case if/else

		// update display
		paint(CCD);

	}); // end controls click fcn


	// Produce a star upon clicking ...
	$('.pixel').click( function(evt){
		x = evt.pageX - 5 ;
		y = evt.pageY - 5 ;
		var pID = "photon_" + photonCnt++;

		currPixel = $(this);

		$('body').append('<div class="photon" id="' + pID + '"></div>');
		$('#' + pID ).animate({left: x+"px",top: y+"px"},1000, function(evt){
			$(this).remove(); 
			i = parseInt(currPixel.attr('i'));
			j = parseInt(currPixel.attr('j'));
			addStar(CCD,i,j);
			paint(CCD);
		});
	});

} // end ccd

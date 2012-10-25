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

// ccd 
//		CCD object
function ccd(nRows,nCols){

	this.nRows = nRows;
	this.nCols = nCols;

	// initialize signal array
  this.signal = new Array(nRows);
	for( i = 0 ; i < nRows ; i++ )
		this.signal[i] = Array(nCols);
	
	// initialize noise array
	this.noise = new Array(nRows);
	for( i = 0 ; i < nRows ; i++ )
		this.noise[i] = Array(nCols);

	this.addNoise = addNoise;
	function addNoise(n){
		for( i = 0 ; i < this.nRows ; i++ )
			for( j = 0 ; j < this.nCols ; j++ )
				this.noise[i][j] = Math.floor(Math.random()*n*25.6);
		paint(this);
	}

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
	if( n > 255 ) n = 255;
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
		color = d2hh(CCD.signal[i][j] + CCD.noise[i][j]);
		color = "#"+color+color+color;
		$(this).css('fill',color);
	});
}

//	UNIFORM
//		Fills CCD array with 1 # value
function uniform(CCD,val){
	for(i=0;i<CCD.nRows;i++)
		for(j=0;j<CCD.nCols;j++){
			CCD.signal[i][j] = val;
			CCD.noise[i][j] = 0.0;
		} // end j for
} // end uniform

// ADD STAR
//		Adds fuzzy source emanating from given cntr
function addStar(CCD,istar,jstar){
	for( i = 0 ; i < CCD.nRows ; i++ )
		for( j = 0 ; j < CCD.nCols ; j++ ){
        dx = i - istar;
				dy = j - jstar;
				r = Math.sqrt(dx*dx+dy*dy);
				amp = Math.floor(200/(r+1)) + CCD.signal[i][j];
				if( amp > 255 ) CCD.signal[i][j] = 255;
				else CCD.signal[i][j] = amp;
		} // end j for
}

// MAIN FUNCTION
function initialize_ccd(CCD,ext){

	var im = Math.floor(CCD.nRows/2),jm=Math.floor(CCD.nCols/2);

	$('.controls a').click( function(evt){

		evt.preventDefault();
		$('.controls a').removeClass('current');
		$(this).addClass('current');
		$('.rightCol .explanation').hide();

		id = $(this).attr('id');
		$('#'+ id + '_par').fadeIn(500);

		// Update CCD array by case ...
		if( id == "noise" ){	
			for( i = 0 ; i < CCD.nRows ; i++ )
				for( j = 0 ; j < CCD.nCols ; j++ ){
					CCD.noise[i][j] = Math.floor(Math.random()*256);
					CCD.signal[i][j] = 0.0;
				}
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
	$('.pixel').click( function(){
		i = parseInt($(this).attr('i'));
		j = parseInt($(this).attr('j'));
		addStar(CCD,i,j);
		paint(CCD);
	});

	// Make extended source
	if(ext){
		uniform(CCD,0);
		addStar(CCD,im,jm);
		addStar(CCD,im+1,jm);
		addStar(CCD,im-1,jm);
		addStar(CCD,im-2,jm);
		addStar(CCD,im-3,jm);
		addStar(CCD,im+3,jm);
	
		paint(CCD);
	} // end ext if

} // end ccd

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

	this.breaking = false;

	// initialize signal array
  this.signal = new Array(nRows);
	for( i = 0 ; i < nRows ; i++ )
		this.signal[i] = Array(nCols);
	
	// initialize noise array
	this.noise = new Array(nRows);
	for( i = 0 ; i < nRows ; i++ )
		this.noise[i] = Array(nCols);

	// D2H
	//		Converts # between 0 - 15 to a hex 0 - f
	this.d2h = d2h;
	function d2h(n){
		if( n < 10 ) return n.toString();
		if( n == 10 ) return 'a';
		if( n == 11 ) return 'b';
		if( n == 12 ) return 'c';
		if( n == 13 ) return 'd';
		if( n == 14 ) return 'e';
		return 'f';
	} // end d2h

	//  D2HH
	//    Coverts # between 0 - 255 to a hex pattern, 00 - ff
	this.d2hh = d2hh;
	function d2hh(n){
		if( n > 255 ) n = 255;
		n1 = n%16;
		n2 = Math.floor(n/16);
		return this.d2h(n2) + this.d2h(n1);
	} // end d2hh

	//  PAINT
	//    Given an 2D array of integers, paints the ccd display
	//  squares (greyscale)
	this.paint = paint;
	function paint(){
		CCD = this;
		$('.pixel').each( function(){
			i = $(this).attr('i');
			j = $(this).attr('j');
			if( CCD.signal[i][j] == -1 )
				color = "#ff0000";
			else if( CCD.signal[i][j] == -2 )
				color = "steelblue";
			else {
				color = CCD.d2hh(CCD.signal[i][j] + CCD.noise[i][j]);
				color = "#"+color+color+color;
			}
			$(this).css('fill',color);
		}); // end pixel ea. fcn
	} // end pain

	this.addNoise = addNoise;
	function addNoise(n){
		for( i = 0 ; i < this.nRows ; i++ )
			for( j = 0 ; j < this.nCols ; j++ )
				this.noise[i][j] = Math.floor(Math.random()*n*25.6);
		this.paint();
	} // and add noise

} // end ccd

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

	$('.break a').click( function(evt){
		evt.preventDefault();
		$('.break a').removeClass('current');
		$(this).addClass('current');
		id = $(this).attr('id');
		if( id == "break" )
			CCD.breaking = true;
		else
			CCD.breaking = false;
	}); // end break click fcn

	$('#reset').click( function(evt){
		evt.preventDefault();
		uniform(CCD,0);
		CCD.paint();
	});

	$('#shift').click(function(evt){
		evt.preventDefault();
		shiftDown(CCD);
	});

	$('.controls a').click( function(evt){

		evt.preventDefault();
		$('.controls a').removeClass('current');
		$(this).addClass('current');
		$('.rightCol .explanation').hide();

		id = $(this).attr('id');
		$('#'+ id + '_par').fadeIn(500);

	}); // end controls click fcn

	$('.pixel').click( function(){
			i = parseInt($(this).attr('i'));
			j = parseInt($(this).attr('j'));
		if(!CCD.breaking) // Produce a star upon clicking ...
			addStar(CCD,i,j);
		else 
			CCD.signal[i][j] = -1;
		CCD.paint();
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
	
		CCD.paint();
	} // end ext if

} // end ccd

function shiftDown(CCD){
	shiftOver(CCD,0);
	for(i = CCD.nRows - 1; i > 0 ; i-- )
		for(j = 0 ; j < CCD.nCols ; j++ )
			if( CCD.signal[i][j] != -1 ){
				CCD.signal[i][j] = CCD.signal[i-1][j];
				CCD.noise[i][j] = CCD.noise[i-1][j];
			}
	for(j = 0 ; j < CCD.nCols ; j++ )
		CCD.signal[0][j] = -2;
	CCD.paint();
}// end readOut

function shiftOver(CCD,n){
	var i = CCD.nRows - 1;
	if( n == CCD.nCols )
		return;
	for( j = CCD.nCols - 1 ; j > 0 ; j-- )
		if( CCD.signal[i][j] != -1 ) {
			CCD.signal[i][j] = CCD.signal[i][j-1];
			CCD.noise[i][j] = CCD.noise[i][j-1];
		}
	if( CCD.signal[i][0] != -1 )
		CCD.signal[i][0] = -2;
	CCD.paint();
	window.setTimeout(shiftOver(CCD,n+1),1000);
} // end shiftOver

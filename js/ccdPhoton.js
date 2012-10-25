/*
 *	PHOTON COUNTING
 *		
 *		September, 2012
 *		Munier Salem
 *
 *		Endows control links with logic for
 *		manipulating CCD array cells, changing
 *		their colors to mimic various sources
 */

var photonCnt = 0;

// MAIN FUNCTION
function photon_counting(CCD){


	// Produce a star upon clicking ...
	$('.pixel').click( function(evt){
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

} // end photon counting

$(function(){

	menuResize();

	/* smooth scrolling for scroll to top */
	$('.scroll-top').click(function(){
		$('body,html').animate({scrollTop:0},1000);
	});

	/* smooth scrolling for nav sections */
	$('#nav .navbar-nav li>a').click(function(){
		var link = $(this).attr('href');
	});

	$(window).resize(function(){ menuResize(); });


	/*
	$('#day_select').val('1');
	$('#days img').attr('src', 'unc/images/contents/timetable/20_2015.png');
	$('#day21').css('display', 'none');
	$('#day_select').change(function(e){
		var str	= $(this).val();
		if(str == '1'){
			$('#day20').css('display', 'block');
			$('#day21').css('display', 'none');
			$('#days img').attr('src', 'unc/images/contents/timetable/20_2015.png');
		}else{
			$('#day21').css('display', 'block');
			$('#day20').css('display', 'none');
			$('#days img').attr('src', 'unc/images/contents/timetable/21_2015.png');
		}
	});
	*/

/*
	// Image Lightbox
	var selectorG = '#lightbox a';
	var instanceG = $( selectorG ).imageLightbox(
	{
		onStart: function(){
			overlayOn();
			arrowsOn( instanceG, selectorG );
		},
		onEnd: function(){
			overlayOff();
			arrowsOff();
			captionOff();
			activityIndicatorOff();
		},
		onLoadStart: function(){
			captionOff();
			activityIndicatorOn();
		},
		onLoadEnd: function(){
			$( '.imagelightbox-arrow' ).css( 'display', 'block' );
			captionOn();
			activityIndicatorOff();
		}
	});

	var activityIndicatorOn = function() {
		$( '<div id="imagelightbox-loading"><div></div></div>' ).appendTo( 'body' );
	},
	activityIndicatorOff = function() {
		$( '#imagelightbox-loading' ).remove();
	},

	arrowsOn = function(instance, selector) {
		var $arrows = $( '<button type="button" class="imagelightbox-arrow imagelightbox-arrow-left"></button><button type="button" class="imagelightbox-arrow imagelightbox-arrow-right"></button>' );
		$arrows.appendTo( 'body' );
		$arrows.on('click touchend', function(e) {
			e.preventDefault();

			var $this = $( this ),
				$target = $( selector + '[href="' + $( '#imagelightbox' ).attr( 'src' ) + '"]' ),
				index = $target.index( selector );

			if ($this.hasClass('imagelightbox-arrow-left')) {
				index = index - 1;
				if (!$( selector ).eq( index ).length)
					index = $( selector ).length;
			} else {
				index = index + 1;
				if(!$( selector ).eq( index ).length)
					index = 0;
			}
			instance.switchImageLightbox( index );
			return false;
		});
	},
	arrowsOff = function() {
		$('.imagelightbox-arrow').remove();
	},
	overlayOn = function() {
		$( '<div id="imagelightbox-overlay"></div>' ).appendTo( 'body' );
	},
	overlayOff = function(){
		$( '#imagelightbox-overlay' ).remove();
	}
	captionOn = function() {
		var description = $( 'a[href="' + $( '#imagelightbox' ).attr( 'src' ) + '"] img' ).attr( 'alt' );
		if( description.length > 0 )
			$( '<div id="imagelightbox-caption">' + description + '</div>' ).appendTo( 'body' );
	},
	captionOff = function() {
		$( '#imagelightbox-caption' ).remove();
	};
*/
});

function menuResize() {
	var height = $('header').outerHeight();
	if ($('.main_image').get(0)){
		$('.main_image').css('marginTop', height);
	} else {
		$('.headerline').css('marginTop', height);
	}
}
/*!
 * jQuery Cookie Plugin v1.4.0
 * https://github.com/carhartl/jquery-cookie
 *
 * Copyright 2013 Klaus Hartl
 * Released under the MIT license
 */
(function (factory) {
	if (typeof define === 'function' && define.amd) {
		// AMD. Register as anonymous module.
		define(['jquery'], factory);
	} else {
		// Browser globals.
		factory(jQuery);
	}
}

(function ($) {

	var pluses = /\+/g;

	function encode(s) {
		return config.raw ? s : encodeURIComponent(s);
	}

	function decode(s) {
		return config.raw ? s : decodeURIComponent(s);
	}

	function stringifyCookieValue(value) {
		return encode(config.json ? JSON.stringify(value) : String(value));
	}

	function parseCookieValue(s) {
		if (s.indexOf('"') === 0) {
			// This is a quoted cookie as according to RFC2068, unescape...
			s = s.slice(1, -1).replace(/\\"/g, '"').replace(/\\\\/g, '\\');
		}

		try {
			// Replace server-side written pluses with spaces.
			// If we can't decode the cookie, ignore it, it's unusable.
			s = decodeURIComponent(s.replace(pluses, ' '));
		} catch(e) {
			return;
		}

		try {
			// If we can't parse the cookie, ignore it, it's unusable.
			return config.json ? JSON.parse(s) : s;
		} catch(e) {}
	}

	function read(s, converter) {
		var value = config.raw ? s : parseCookieValue(s);
		return $.isFunction(converter) ? converter(value) : value;
	}

	var config = $.cookie = function (key, value, options) {

		// Write
		if (value !== undefined && !$.isFunction(value)) {
			options = $.extend({}, config.defaults, options);

			if (typeof options.expires === 'number') {
				var days = options.expires, t = options.expires = new Date();
				t.setDate(t.getDate() + days);
			}

			return (document.cookie = [
				encode(key), '=', stringifyCookieValue(value),
				options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
				options.path    ? '; path=' + options.path : '',
				options.domain  ? '; domain=' + options.domain : '',
				options.secure  ? '; secure' : ''
			].join(''));
		}

		// Read

		var result = key ? undefined : {};

		// To prevent the for loop in the first place assign an empty array
		// in case there are no cookies at all. Also prevents odd result when
		// calling $.cookie().
		var cookies = document.cookie ? document.cookie.split('; ') : [];

		for (var i = 0, l = cookies.length; i < l; i++) {
			var parts = cookies[i].split('=');
			var name = decode(parts.shift());
			var cookie = parts.join('=');

			if (key && key === name) {
				// If second argument (value) is a function it's a converter...
				result = read(cookie, value);
				break;
			}

			// Prevent storing a cookie that we couldn't decode.
			if (!key && (cookie = read(cookie)) !== undefined) {
				result[name] = cookie;
			}
		}

		return result;
	};

	config.defaults = {};

	$.removeCookie = function (key, options) {
		if ($.cookie(key) !== undefined) {
			// Must not alter options, thus extending a fresh object...
			$.cookie(key, '', $.extend({}, options, { expires: -1 }));
			return true;
		}
		return false;
	};

}));




var stripesWrapper = $('#style-stripes');
function recheck() {
	setInterval(function(){
		resizeElements()
	},1000)
}

function resizeElements() {
	wh = $(window).height();
	ww = $(window).width();
	var tbh = $('#top-bar').height();

	var sWHeight = stripesWrapper.height();
	var newsWHeight = (wh-tbh);

	if(sWHeight != newsWHeight) {
		stripesWrapper.height(newsWHeight);
		$('#hoverStripe').css('background-size', ww+'px');
		$('#style-wrapper, #gallery-wrapper').css('height', (wh-40)+'px')
	}
}

function selectStyle() {
	stripesWrapper.on('mouseenter','a',function(){
		var bgSelect = $(this).attr('data-bg');
		stripesWrapper.addClass('fullBg'+bgSelect);
		stripesWrapper.find('.col').addClass('transparent');
		$('#hoverStripe').addClass('hoverS'+bgSelect);
		//$(".header_hover").animate({opacity: "0"}, 100);
		if(bgSelect == 1) {
			$('#hoverStripe').css('background-position', '0 0');
			$(".header_hover1").show().animate({opacity: "1"}, 300);
		}
		if(bgSelect == 2) {
			$('#hoverStripe').css('background-position', '-'+(ww/4)+'px 0');
			$(".header_hover2").show().animate({opacity: "1"}, 300);
		}
		if(bgSelect == 3) {
			$('#hoverStripe').css('background-position', '-'+(ww/2)+'px 0');
			$(".header_hover3").show().animate({opacity: "1"}, 300);
		}
		if(bgSelect == 4) {
			$('#hoverStripe').css('background-position', '-'+((ww/4)*3)+'px 0');
			$(".header_hover4").show().animate({opacity: "1"}, 300);
		}
		$('#headline').stop().fadeOut(250);		;
		playSample(bgSelect,'start');
	})
	stripesWrapper.on('mouseleave','a',function(){
		$(".header_hover").animate({opacity: "0"}, 1).hide();
		var bgSelect = $(this).attr('data-bg');
		stripesWrapper.removeClass();
		$('#hoverStripe').removeClass();
		$('#headline').fadeIn(250);
		stripesWrapper.find('.col').removeClass('transparent');
		playSample(bgSelect,'stop');
	})

	stripesWrapper.on('click','a',function(){
		var styleID = $(this).attr('data-bg');
		removeScreen('.selectStyle','left',true);
		showContent('#style-wrapper','left','style-'+styleID);
		$(this).parents('.gridContainer').addClass('currentStyle');
		$('.footer-container').fadeIn(700);
		gridVideo(styleID);
		return false;
	})

	$('#style-wrapper').on('click','.showGallery',function(){
		var galleryID = $(this).attr('data-gallery-id');
		removeScreen('#style-wrapper','left');
		showContent('#gallery-wrapper','left','gallery-'+galleryID,'gallery');
		$('#head-tab').fadeOut();
		//setTimeout(function(){console.log($('#gallery-wrapper .currentBlock .current').next().next().html())},2000);
		loadVideo($('#gallery-wrapper .currentBlock .current').next().next())
		setTimeout(function(){loadVideo($('#gallery-wrapper .currentBlock .current').next().next())},2000);
		 galleryArrows();
		return false;
	})
	$('#style-wrapper').on('click','.showVid',function(){
		var videoID = $(this).attr('data-video-id');
		removeScreen('#style-wrapper','left');
		runVideo(videoID);
		return false;
	});
	$('#head-tab').on('click',function(e){
		removeScreen('#style-wrapper','right','back');
		removeScreen('#gallery-wrapper','right','back');
		showContent('.selectStyle','right');
		return false;
	})
}

function removeScreen(el,removeDirection,header) {
	var removeThis = $(el);

	if(removeDirection == 'left') {
			removeThis.animate({'left':'-100%'},600);
		} else {
			removeThis.animate({'left' : '100%'},600);
		}
	if (header == true) {
		$('#top-bar').animate({'left' : '-100%'},600);
		$('#house-logo').animate({'left' : '-100px'},600);
		setTimeout(function(){
			$('#head-tab').fadeIn(1000)	
		},600)
	};
	if (header == 'back') {
		$('#top-bar').animate({'left' : '0'},600);
		$('#house-logo').animate({'left' : '50%'},600);
		//setTimeout(function(){
			//$('#head-tab').fadeIn(1000);
		//},600)
	};
	$('#gallery-wrapper').find('.galleryVideo').each(function(){
		$(this).html('');
	})
	pauseRemoveVideo();
	gridVideo(false,false,true);
}
var gallery1=new Array();
$('#gallery-1 li img').each(function(){
	   gallery1.push($(this).attr('data-src'));
})
var gallery2=new Array();
$('#gallery-2 li img').each(function(){
	   gallery2.push($(this).attr('data-src'));
})
var gallery3=new Array();
$('#gallery-3 li img').each(function(){
	   gallery3.push($(this).attr('data-src'));
})
var gallery4=new Array();
$('#gallery-4 li img').each(function(){
	   gallery4.push($(this).attr('data-src'));
})
var gallery5=new Array();
$('#gallery-5 li img').each(function(){
	   gallery5.push($(this).attr('data-src'));
})
var gallery6=new Array();
$('#gallery-6 li img').each(function(){
	   gallery6.push($(this).attr('data-src'));
})    
var gallerLoadingStatus=new Array(); 
var image__;  
var loader=0;  
function loadImage(el,direction,galleryNo,mediaType,photoNo) {
          var gallery=eval(galleryNo.replace('-',''));
          var imageUrl=gallery[photoNo];
          var image__ = new Image;
          image__.src = imageUrl;
            image__.onload=function(){
            $('#'+galleryNo+' li img[data-src="'+imageUrl+'"]').attr('src',imageUrl);
            galleryWidth(galleryNo);
            galleryArrows();
            setTimeout(function(){
				galleryWidth(galleryNo);
			},1000);
            if ((photoNo+1)<gallery.length) {
              loadImage(el,direction,galleryNo,mediaType,photoNo+1);
              gallerLoadingStatus[galleryNo]=gallerLoadingStatus[galleryNo]+1;
            }
           if ((gallerLoadingStatus[galleryNo]/gallery.length)>0.8) {
					setTimeout(function(){
							loadVideo($('#gallery-wrapper .currentBlock .current').next().next());
							loadVideo($('#gallery-wrapper .currentBlock .current').next());
							loadVideo($('#gallery-wrapper .currentBlock .current'));
							},4000);			   
              $('.loading').hide();
              if (loader==1) {
                showContent2(el,direction,galleryNo,mediaType);
                loader=0;
              }
            }  
          };
     //   }
    //}   
}    

function showContent(el,direction,contentID,mediaType){	 
  if (el=='.selectStyle') {
                pauseDZ();
                //setTimeout(function(){pauseDZ()},7000);
                $('.footer-container, #head-tab').fadeOut();
  }  
  if (el=='#style-wrapper') {
	nextSongCounter=0;
	$('.nextSong').removeClass('disabled');
	switch (contentID) {
		case 'style-1':
		setRadioId(30425);
		break;
		case 'style-2':
		setRadioId(30445);
		break;
		case 'style-3':
		setRadioId(30415);
		break;
		case 'style-4':
		setRadioId(30435);
		break;
	}
 	if (contentID!=undefined) fadeInPlayDZ();	
  }
  if (el=="#gallery-wrapper") {
    if (gallerLoadingStatus[contentID]==undefined) {
      loadImage(el,direction,contentID,mediaType,0);
      gallerLoadingStatus[contentID]=0;
      $('.loading').show();
      loader=1;
    } else {
       showContent2(el,direction,contentID,mediaType);
    }
   } else {  
    showContent2(el,direction,contentID,mediaType);
  }
}
function showContent2(el,direction,contentID,mediaType) {
  var showElement = el;
	if (direction == 'left') {
		$(showElement).css({'left': '100%'});
		$(showElement).animate({'left': '0'},600);
	} else if(direction == 'right'){
		$(showElement).css({'left': '-100%'});
		$(showElement).animate({'left': '0'},600);
	}
	if(contentID) {
		$('#'+contentID).addClass('currentBlock').fadeIn();
		if ( mediaType == 'gallery') {
			$('#'+contentID).siblings('.galleryBody').removeClass('currentBlock').fadeOut();
		} else {
			$('#'+contentID).siblings().removeClass('currentBlock').fadeOut();
		}
	}
	if(mediaType == 'gallery') {
    galleryWidth(contentID);
		$('#'+contentID).find('li').removeClass();
		$('#'+contentID).find('li:first-child').addClass('current').next().addClass('nextImg');
		gridVideo(false,false,true);
	}
	setHash(el);
}
function galleryWidth(contentID) {
		var summaryWidth = 0;
		var galleryDivs = $('#'+contentID).find('li');
		galleryDivs.each(function(){
			summaryWidth = summaryWidth + $(this).width();
		})
		$('#'+contentID).width(summaryWidth+20).css('left','0');
		setTimeout(function(){$('#'+contentID+' li').css('margin-left','-1px').css('padding-left','1px');},1000);
		setTimeout(function(){$('#'+contentID+' li').css('margin-left','').css('padding-left','');},2000);

}
function gridVideo(id,iscurrent,remove) {
	//console.log ('gridVideo:  id '+id+' iscurrent '+iscurrent+' remove '+remove);
	if (remove == true){
		$('#style-wrapper').find('video').remove();
	} else {
		var movie1 = '<video class="hiddenVideo fixedVid" autoplay loop muted><source src="media/crazy.webm" type="video/webm"><source src="media/crazy.mp4" type="video/mp4"></video>';
		var movie2 = '<video class="hiddenVideo" autoplay loop muted><source src="media/things.webm" type="video/webm"><source src="media/things.mp4" type="video/mp4"></video>';
		var movie3 = '<video class="hiddenVideo" autoplay loop muted><source src="media/always.webm" type="video/webm"><source src="media/always.mp4" type="video/mp4"></video>';
		var movie4 = '<video class="hiddenVideo" autoplay loop muted><source src="media/place.webm" type="video/webm"><source src="media/place.mp4" type="video/mp4"></video>';
		
		var videoContainer = $('#style-wrapper').find('.currentBlock').find('.showVid');
		if (iscurrent == true){
			var videoContainerID = $('#style-wrapper').find('.currentBlock').attr('id');
			var vId = videoContainerID.substr(6-7);
		} else {
			var vId = id;
		}
		var selectedMovie = eval('movie'+vId);	
		videoContainer.prepend(selectedMovie);
		gridVideoSize();
		setTimeout(function(){
			gridVideoSize();
		},500)
		setTimeout(function(){
			gridVideoSize();
		},1500)		
		setTimeout(function(){
			gridVideoSize();
		},3500)

					
	}
}
function gridVideoSize() {
			var videoContainer = $('#style-wrapper').find('.currentBlock').find('.showVid');
			var videEl = videoContainer.find('video')
			var videoSize = videEl.width()
			var videoContainerSize = videoContainer.width();
			if (videoContainerSize > videoSize) {
				videEl.css({
					'height' : 'auto',
					'width' : '100%'
				})
			}
			var newVidWidth = videEl.width();
			var newVidheight = videEl.height();
			//console.log ('margin-top:' + '-'+(newVidheight/2)+'px  '+'margin-left:' + '-'+(newVidWidth/2)+'px');
			videEl.css({
				'margin-top' : '-'+(newVidheight/2)+'px',
				'margin-left' : '-'+(newVidWidth/2)+'px'
			})	
}

function loadVideo(pasteVideo) {
	//console.log(pasteVideo.html());
		if( pasteVideo.find('.galleryVideo').length > 0 ) {
				pasteVideo.find('.galleryVideo').each(function(){
					if ($(this).find('video').length==0) {
						var videoGalID = $(this).attr('data-vid-id');
						appendCode = eval('movie'+videoGalID);
						$(this).html(appendCode);
						setTimeout(function(){
							
							resizeVideoGallery(pasteVideo);

						},400)
					}
				})
		}
		
}	
function resizeVideoGallery(pasteVideo) {
		var videEl = pasteVideo.find('video');
		var videoSize = videEl.width();
		var videoContainerSize = pasteVideo.find('.galleryVideo').width();
		if (videoContainerSize > videoSize) {
			videEl.css({
				'height' : 'auto',
				'width' : '100%'
			})
		}
		var newVidWidth = videEl.width();
		var newVidheight = videEl.height();
		videEl.css({
			'margin-top' : '-'+(newVidheight/2)+'px',
			'margin-left' : '-'+(newVidWidth/2)+'px'
		})	
}
// video inside gallery list
//gallery1
var movie1 = '<video id="vid1" autoplay loop muted><source src="media/g1/v1.webm" type="video/webm"><source src="media/g1/v1.mp4" type="video/mp4"></video>';
var movie2 = '<video preload="none" id="vid2" autoplay loop muted><source src="media/g1/v2.webm" type="video/webm"><source src="media/g1/v2.mp4" type="video/mp4"></video>';
var movie3 = '<video preload="none" id="vid3" autoplay loop muted><source src="media/g1/v3.webm" type="video/webm"><source src="media/g1/v3.mp4" type="video/mp4"></video>';
var movie4 = '<video preload="none" id="vid4" autoplay loop muted><source src="media/g1/v4.webm" type="video/webm"><source src="media/g1/v4.mp4" type="video/mp4"></video>';
//gallery 2
var movie5 = '<video preload="none" id="vid5" autoplay loop muted><source src="media/g2/v1.webm" type="video/webm"><source src="media/g2/v1.mp4" type="video/mp4"></video>';
var movie6 = '<video preload="none" id="vid6" autoplay loop muted><source src="media/g2/v2.webm" type="video/webm"><source src="media/g2/v2.mp4" type="video/mp4"></video>';
var movie7 = '<video preload="none" id="vid7" autoplay loop muted><source src="media/g2/v3.webm" type="video/webm"><source src="media/g2/v3.mp4" type="video/mp4"></video>';
var movie8 = '<video preload="none" id="vid8" autoplay loop muted><source src="media/g2/v4.webm" type="video/webm"><source src="media/g2/v4.mp4" type="video/mp4"></video>';
var movie9 = '<video preload="none" id="vid9" autoplay loop muted><source src="media/g2/v5.webm" type="video/webm"><source src="media/g2/v5.mp4" type="video/mp4"></video>';
var movie10 = '<video preload="none" id="vid10" autoplay loop muted><source src="media/g2/v6.webm" type="video/webm"><source src="media/g2/v6.mp4" type="video/mp4"></video>';
//gallery 3
var movie11 = '<video preload="none" id="vid11" autoplay loop muted><source src="media/g3/v1.webm" type="video/webm"><source src="media/g3/v1.mp4" type="video/mp4"></video>';
var movie12 = '<video preload="none" id="vid12" autoplay loop muted><source src="media/g3/v2.webm" type="video/webm"><source src="media/g3/v2.mp4" type="video/mp4"></video>';
var movie13 = '<video preload="none" id="vid13" autoplay loop muted><source src="media/g3/v3.webm" type="video/webm"><source src="media/g3/v3.mp4" type="video/mp4"></video>';
var movie14 = '<video preload="none" id="vid14" autoplay loop muted><source src="media/g3/v4.webm" type="video/webm"><source src="media/g3/v4.mp4" type="video/mp4"></video>';
//gallery 4


function galleryArrows() {
	var currentGallery =  $('#gallery-wrapper').find('.currentBlock');
	var currentImage = currentGallery.find('.current');
	var nextElements = currentImage.nextAll().length;
	var prevElements = currentImage.prevAll().length;	
	//console.log('nextElements: '+nextElements+' prevElements:'+prevElements);
	if( prevElements < 1) {
		$('#prevPic').fadeOut();
	} else {
		$('#prevPic').fadeIn();
	}
	if(nextElements > 1){
		$('#nextPic').fadeIn();
	} else {
		$('#nextPic').fadeOut();
	}
	
}

function gallery(){
	$('#gallery-wrapper #nextPic').off('mouseenter').on('mouseenter', function(e){
		$('#galleryHintRight').stop(true, true).fadeIn();
	}).off('mouseleave').on('mouseleave', function(e){
		$('#galleryHintRight').stop(true, true).fadeOut();
	});
	$( "#gallery-wrapper #nextPic" ).mousemove(function( event ) {
		var x = event.pageX-80;
		var y = event.pageY-30;
		$('#galleryHintRight').css({
				'margin-top' : y+'px',
				'margin-left' : x+'px'});
	});
	$('#gallery-wrapper #prevPic').off('mouseenter').on('mouseenter', function(e){
		$('#galleryHintLeft').stop(true, true).fadeIn();
	}).off('mouseleave').on('mouseleave', function(e){
		$('#galleryHintLeft').stop(true, true).fadeOut();
	});
	$( "#gallery-wrapper #prevPic" ).mousemove(function( event ) {
		var x = event.pageX+30;
		var y = event.pageY-30;
		$('#galleryHintLeft').css({
				'margin-top' : y+'px',
				'margin-left' : x+'px'});
	});	
	$('#gallery-wrapper').off('click').on('click', '#nextPic ,#prevPic',function(e){		
		
		var currentGallery =  $('#gallery-wrapper').find('.currentBlock');
		var currentImage = currentGallery.find('.current');
		var currentImageWidth = currentImage.width();
		var prevImage = currentImage.prev();
		var prevImageWidth = prevImage.width();
		var nextImage = currentImage.next();
		var nextElements = currentImage.nextAll().length;
		var prevElements = currentImage.prevAll().length;
		var prevPrev = prevImage.prev();

		if( $(this).hasClass('scrollNext') ) {
			if( nextElements == 2) {
				//console.log('NEXTLAST '+currentGallery.width()+'  '+$(window).width());
				currentGallery.animate({'left': '-'+(currentGallery.width() - $(window).width() - 20)+'px'});
				prevImage.removeClass('current nextImage');
				currentImage.removeClass();
				nextImage.attr('class','current')
				//$(this).fadeOut()
			}
			if( nextElements > 2) {
				currentGallery.animate({'left': '-='+currentImageWidth+'px'});
				nextImage.attr('class','current');
				nextImage.next().addClass('nextImg');
				currentImage.attr('class','');
				//$('#prevPic').fadeIn();
			}
		}
		if( $(this).hasClass('scrollPrev') ) {
			if(prevElements > 1){
				currentGallery.animate({'left': '+='+prevImageWidth+'px'});
				prevImage.attr('class','current');
				currentImage.attr('class','nextImg');
				//$('#nextPic').fadeIn();
			}
			if(prevElements == 1) {
				currentGallery.animate({'left': '0'});
				prevImage.attr('class','current');
				currentImage.attr('class','nextImage');
				//$(this).fadeOut();
			}
			nextImage.removeClass();
		}



		var pasteVideo = nextImage.next().next();
		loadVideo(pasteVideo);
		galleryArrows();
		return false;
	})


	$('.galleryBody').off('click').on('click','img, .vHalf',function(e){
		/*
		var clickedImg = $(this);
		var clickedContainer = $(this).parents('li');
		var nextSlide = clickedContainer.next('li');
		var prevCurrent = clickedContainer.prev();
		var currentWidth = clickedContainer.prev().width();
		var galleryContainer = $(this).parents('.galleryBody');
		var prevPrev = prevCurrent.prev();

		if( !clickedContainer.hasClass('current') && clickedContainer.prev().hasClass('current') ) {
			$('#nextPic').click();
		}
		galleryArrows();
		loadVideo(nextSlide);
	*/
	return false;
	})
	$('#gallery-wrapper').on('click','.xclose',function(){
		removeScreen('#gallery-wrapper','right');
		showContent('#style-wrapper','right');
		$('#head-tab').fadeIn();
		gridVideo(false,true,false);
		galleryArrows();
		return false;
	})
	$('#video').on('click','.xclose',function(){
		removeScreen('#video','right');
		pauseRemoveVideo();
		showContent('#style-wrapper','right');
		$('.footer-container, #head-tab').fadeIn();
		gridVideo(false,true,false);
		deezerPause=2;
		return false;
	})
}

function pauseRemoveVideo() {
	playDZVideo();
	if( $('#video').find('video').length > 0) {
		$('#video').find('video').get(0).pause();
		$('#video').animate({'left': '100%'},600)
		setTimeout(function() {$('#video').html('')},600);
	}
}

function runVideo(id) {
	var suffixVideo='';
	if (!playDZOnVideo) {
		pauseDZVideo();
		$('.footer-container, #head-tab').fadeOut();
	} else {
		suffixVideo='m';
	}
	
	var selectedMovie1 = '<span class="sndCtrl"></span><span id="playagain">play again</span><span class="xclose"></span><div><video id="vid" autoplay><source src="media/house2014'+suffixVideo+'.webm" type="video/webm"><source src="media/house2014'+suffixVideo+'.mp4" type="video/mp4"></video></div>';
	var selectedMovie2 = '<span class="sndCtrl"></span><span id="playagain">play again</span><span class="xclose"></span><div><video id="vid" autoplay><source src="media/house2014'+suffixVideo+'.webm" type="video/webm"><source src="media/house2014'+suffixVideo+'.mp4" type="video/mp4"></video></div>';
	var selectedMovie3 = '<span class="sndCtrl"></span><span id="playagain">play again</span><span class="xclose"></span><div><video id="vid" autoplay><source src="media/house2014'+suffixVideo+'.webm" type="video/webm"><source src="media/house2014'+suffixVideo+'.mp4" type="video/mp4"></video></div>';
  	var selectedMovie4 = '<span class="sndCtrl"></span><span id="playagain">play again</span><span class="xclose"></span><div><video id="vid" autoplay><source src="media/house2014'+suffixVideo+'.webm" type="video/webm"><source src="media/house2014'+suffixVideo+'.mp4" type="video/mp4"></video></div>';
	
	var selectedMovie = eval('selectedMovie'+id);
	$('#video').html(selectedMovie);
	setTimeout(function(){
		var marginTop = ($('#video').find('div').height()/2);
		$('#video').find('div').css('margin-top', '-'+marginTop+'px');
	},250)
	$('#video').css({'left':'100%'});
	$('#video').animate({'left':'0'},600)
	setTimeout(function(){
		var marginTop = ($('#video').find('div').height()/2);
		$('#video').find('div').css('margin-top', '-'+marginTop+'px');
	},550)
	var vidCtrl = document.getElementById('vid');

	if (playDZOnVideo) {
		$('.sndCtrl').hide();
	}
	$('.sndCtrl').on('click',function(){
		if( $(this).hasClass('muted') ){
			vidCtrl.muted = "";
			$(this).removeClass('muted');
		} else {
			vidCtrl.muted = "muted";
			$(this).addClass('muted');
		}
		return false;
	})

	$('#vid').on('ended', function(){
		$('#playagain').fadeIn();
		var vidCtrl = document.getElementById('vid');
		vidCtrl.play();
		vidCtrl.pause();
	});
	$('#playagain').on('click', function(){
		vidCtrl.play();
		$(this).fadeOut();
		return false;
	})
  setHash('video-'+id);
}

var playerLoaded=false;
var currentRadioID=0;
var radioToPlay=0;
var isPlay=false;
var intervalFadeInPlay=0;
var intervalCurrentVolume=0;
var onloadDZdo=null;

//-------------P.K.
var deezerPause=0;   
var deezerInterval=setInterval(function(){deezerChecker();},3000);

function deezerChecker() {
	//console.log('deezerChecker: '+playerLoaded+'  deezerPause '+deezerPause);
	if (playerLoaded==true && deezerPause==1) {
		//console.log('deezerChecker: pause');
		isPlay=1;
		pauseDZ();		
	} else if (playerLoaded==true && deezerPause==2) {
		 playDZ();
		 clearInterval(deezerInterval);
		 //console.log('deezerChecker: play');
	}
}
//----------------

function setRadioId(id) {
                if (currentRadioID!=id) {
                        radioToPlay=id;
                        if (isPlay) {
                                DZ.player.playRadio(radioToPlay);
                                currentRadioID=radioToPlay;
                        }
                }
        }

        function fadeInPlayDZ() {
                if (!playerLoaded) {
			onloadDZdo=fadeInPlayDZ;
			return;
		}
                if (isPlay) return;
                DZ.player.setVolume(0);
                playDZ();
                intervalCurrentVolume=0;
                intervalFadeInPlay=setInterval(function() {
                        intervalCurrentVolume++;
                        DZ.player.setVolume(intervalCurrentVolume);
                        if (intervalCurrentVolume==5) {
                                clearInterval(intervalFadeInPlay);
				DZ.player.setVolume(50);
                                intervalFadeInPlay=0;
                        }
                },120);          
        }

playafterclose=0;
function pauseDZVideo() {
	if (!playerLoaded) return;
	if (isPlay) {
		playafterclose=1;
		pauseDZ();
	} else {
		playafterclose=0;
	}
}
nextSongCounter=0;
function playDZVideo() {
	if (!playerLoaded) return;
	if (playafterclose) {
		playafterclose=0;
		playDZ();
	}
}
        function pauseDZ() {
                if (!playerLoaded) return;
                if (!isPlay) return;
                isPlay=false;
		$('.playPause').removeClass('stopped');
                DZ.player.pause();
        }
	function nextSongDZ() {
		if (nextSongCounter==4) {
			$('.nextSong').addClass('disabled');
		} else {
			nextSongCounter++;
			DZ.player.next();
		}
	}
        function playDZ() {
                if (!playerLoaded) return;
                if (isPlay) return;
                if (currentRadioID != radioToPlay) {
                        DZ.player.playRadio(radioToPlay);
                        currentRadioID=radioToPlay;
                }
                isPlay=true;
		$('.playPause').addClass('stopped');
                DZ.player.play();
        }
	function onPlayerLoaded() {
                playerLoaded = true;
                DZ.Event.subscribe('current_track', function(arg){
                        $('.deezerPlayer .title').html('<b>'+arg.track.title+'</b> '+arg.track.artist.name);
                });
		if (onloadDZdo) {
			onloadDZdo();
		}
		$('.nextSong').on('click',function() {
			nextSongDZ();
		});
		$('.playPause').on('click', function(){
			if (isPlay) {
				pauseDZ();
			} else {
				playDZ();
			}
                	//$(this).toggleClass('stopped');
        	})
	}
function deezerPlayer() {
	    DZ.init({
                appId  : '127975',
                channelUrl :channelUrl,
                player : {
                        onload : onPlayerLoaded
                }
        });

}

function playSample(el,stopStart) {
	var element = $('.str'+el).find('audio')[0];
	if (stopStart == 'start') {element.play();}
	else {element.pause();}
}

$('.showVid').addClass('showHidden');

var galleryRotator1=new Array('../../images/galeria4/03.jpg','../../images/galeria4/11.jpg','../../images/galeria4/12.jpg','../../images/galeria4/18.jpg','../../images/galeria4/19.jpg');
var galleryRotator2=new Array('../../images/galeria4/03.jpg','../../images/galeria4/11.jpg','../../images/galeria4/12.jpg','../../images/galeria4/18.jpg','../../images/galeria4/19.jpg');
var galleryRotator3=new Array('../../images/galeria4/03.jpg','../../images/galeria4/11.jpg','../../images/galeria4/12.jpg','../../images/galeria4/18.jpg','../../images/galeria4/19.jpg');
var galleryRotator4=new Array('../../images/galeria4/03.jpg','../../images/galeria4/11.jpg','../../images/galeria4/12.jpg','../../images/galeria4/18.jpg','../../images/galeria4/19.jpg');
var gCounter=0;
var gRotatorTimeout;

function galleryRotator(el) {
			//console.log('rotuje: '+el+'   '+gallpic7[gCounter]);
			var gall=eval(el);
			if (gall[gCounter]!=undefined) {
				$('#'+el).css('background-image','url(/img'+gall[gCounter]+')');
			}
			if ((gCounter+1)>=gall.length)
				gCounter=0;
			else
				gCounter++;
}

var gSelectors=new Array('#galleryRotator1','#galleryRotator2','#galleryRotator3','#galleryRotator4');
function hiddenCaptions(){
	$('.showGallery').on('mouseenter',function(){
		$(this).addClass('showHidden');
	})
	$('.showGallery').on('mouseleave',function(){
		$(this).removeClass('showHidden');
	})
	for (var z=0;z<gSelectors.length;z++) {
		$(gSelectors[z]).off('mouseenter').on('mouseenter',function(){		
			var elId=$(this).attr('id')
			if ($(this).attr('mainBg')==undefined) {
				var bg = $(this).css('background-image');
				bg = bg.replace('url(','').replace(')','').replace('"','').replace('"','');
				$(this).attr('mainBg', bg);
			}
			window.clearInterval(gRotatorTimeout);
			galleryRotator(elId);
			gCounter++;
			
			gRotatorTimeout=window.setInterval(function(){
				galleryRotator(elId);
			},500);
		})
		$(gSelectors[z]).off('mouseleave').on('mouseleave',function(){		
			window.clearInterval(gRotatorTimeout);
			$(this).css('background-image','url('+$(this).attr('mainBg')+')');
			console.log($(this).attr('mainBg'));
			//$(this).removeAttr('style');
		})	
	}
}
var hashArrMain=new Array('','crazy-life','things-i-love','always-on-the-road','forgotten-places');	
var hashArrSlide1=new Array('','video','you-need-to-walk','tune-in','start-over');	
var hashArrSlide2=new Array('','video','make-some-noise','visit-the-place','uncover');
var hashArrSlide3=new Array('','video','just-go-there','cmon','run');
var hashArrSlide4=new Array('','video','rising','happen-to-be','crowd-in');
var hashArrSlideGal1=new Array('','',3,2,1);	
var hashArrSlideGal2=new Array('','',4,6,5);
var hashArrSlideGal3=new Array('','',5,2,1);
var hashArrSlideGal4=new Array('','',6,3,4);

function jumpOnStart() {
	var hash=location.hash.replace('#','');
    hash=hash.split('/');
	if (hash[0]!='') {
		if(hash.length>1) {
			var jumpIndex=hashArrMain.indexOf(hash[0]);
			if (jumpIndex!=-1) {
				$('#style-stripes .str'+jumpIndex+' a').click();                
			  var hashArrSlideN = eval('hashArrSlide'+jumpIndex); 
			  var jumpIndex2=hashArrSlideN.indexOf(hash[1]); 
			  if (jumpIndex2==1) {
				  $('#style-'+jumpIndex+' .showVid').click();
				  setTimeout(function(){$('#head-tab').fadeOut();},1000);
				  if (!playDZOnVideo) {
					deezerPause=1;
				  } else {
					deezerPause=2;  
				  }	
			  } else {
				  hashArrSlideGalN=eval('hashArrSlideGal'+jumpIndex);
				  var galleryNo=hashArrSlideGalN[jumpIndex2];
				  $('#style-'+jumpIndex+' .showGallery[data-gallery-id="'+galleryNo+'"]').click(); 
				  setTimeout(function(){
						$('#head-tab').fadeOut();
						galleryArrows();
						//loadVideo($('#gallery-wrapper .currentBlock .current').next().next());					
				  },1000);
						setTimeout(function(){
								//loadVideo($('#gallery-wrapper .currentBlock .current').next().next());
								//loadVideo($('#gallery-wrapper .currentBlock .current').next());
								//loadVideo($('#gallery-wrapper .currentBlock .current'));
								},4000);	
						setTimeout(function(){
								//loadVideo($('#gallery-wrapper .currentBlock .current').next().next());
								//loadVideo($('#gallery-wrapper .currentBlock .current').next());
								//loadVideo($('#gallery-wrapper .currentBlock .current'));						
							},13000);			
			  }  
			}       
		
		} else {
			var jumpIndex=hashArrMain.indexOf(hash[0]);
			if (jumpIndex!=-1) {
				$('#style-stripes .str'+jumpIndex+' a').click();        
			} else {
				$('.footer-container, #head-tab').fadeOut();
			}
			$('#gallery-wrapper .xclose').click();		
		}
		
	} else {
		$('#head-tab').click();
	}
}
function setHash(el) {
	var hash1='';
	var hash2='';
	if (el!='.selectStyle') {
		var level1=$('#style-wrapper .gridContainer').index($('#style-wrapper .currentBlock'));
		var level2=$('#gallery-wrapper .galleryBody').index($('#gallery-wrapper .currentBlock'));
		var hash1=hashArrMain[level1+1];
		var video=el.indexOf('video-');
		if ((level2!=-1 && el=='#gallery-wrapper') || video!=-1) {
      if(video!=-1) {
  			if (level1==0) {
  				var hash2=hashArrSlide1[1];
  			} else if (level1==1) {
  				var hash2=hashArrSlide2[1];
  			} else if (level1==2) {
  				var hash2=hashArrSlide3[1];
  			} else if (level1==3) {
  				var hash2=hashArrSlide4[1];
  			}
      } else {
  			if (level1==0) {
  				var hash2=hashArrSlide1[hashArrSlideGal1.indexOf(level2+1)];
  			} else if (level1==1) {
  				var hash2=hashArrSlide2[hashArrSlideGal2.indexOf(level2+1)];
  			} else if (level1==2) {
  				var hash2=hashArrSlide3[hashArrSlideGal3.indexOf(level2+1)];
  			} else if (level1==3) {
  				var hash2=hashArrSlide4[hashArrSlideGal4.indexOf(level2+1)];
  			}
      }
		}
	}
	if (hash2!='') {
		var fullHash=hash1+'/'+hash2;
	} else {
		var fullHash=hash1;
	}
	manualHashChange=0;
	setTimeout(function(){manualHashChange=1},1000);
	location.hash=fullHash;
	analytics(fullHash)
}
var manualHashChange=0;
$(window).bind( 'hashchange', function(e) {
	if (manualHashChange==1) {
		jumpOnStart();
	}
});

 var image_=new Array(); 
 var preloadMainImagesCounter=1;
 var imageList= new Array ('/campaign_logo.png','/str4.jpg','/str4_h.jpg','/str3.jpg','/str3_h.jpg','/str1.jpg','/str1_h.jpg','/str2.jpg','/str2_h.jpg','/house_logo.png','/headline.png','/grid_1_caption.png','/grid_2_caption.png','/grid_3_caption.png','/grid_4_caption.png','/deezer.png','/1_home.jpg','/sprites.png','/2_home.jpg','/3_home.jpg','/4_home.jpg','/g1/7.jpg','/g3/1.jpg','/g2/7.jpg','/g1/1.jpg','/grid_1.jpg','/grid_3.jpg','/grid_2.jpg','/grid_4.jpg','/grid_5.jpg','/grid_7.jpg','/grid_6.jpg','/grid_8.jpg','/grid_9.jpg','/grid_11.jpg','/grid_10.jpg','/xclose.png','/switches.png','/g1/9.jpg','/g1/5.jpg','/g2/2.jpg','/g2/3.jpg','/g2/4.jpg','/g2/5.jpg','/g2/6.jpg','/g3/3.jpg','/g2/1.jpg','/deez_contr.png','/arrow_left.png','/switch_your_style.png','/g3/1a.jpg','/g2/7a.jpg','/g1/1a.jpg','/g1/7a.jpg','/grid_4a.jpg','/grid_2a.jpg','/grid_3a.jpg','/grid_6a.jpg','/grid_1a.jpg','/grid_7a.jpg','/grid_9a.jpg','/grid_10a.jpg','/grid_11a.jpg');
 /*
function preloadMainImages(i) {  
	//alert(image_);
	//for (var i = 0; i < imageList.length; ++i) {
		url = '/img'+imageList[i];
    image_[url] = new Image();      
    image_[url].src = url;
		image_[url].onload=function() {
			//alert(1);
    	 preloadMainImagesCounter++;
    	// if (preloadMainImagesCounter>40) 
			//alert('load image: '+preloadMainImagesCounter+'/'+imageList.length+'   '+url);
    	 if (preloadMainImagesCounter==imageList.length) {
			 $('div.loadingMain').fadeOut(1000);
				setTimeout(function(){
					gridVideoSize();
				},500)
				setTimeout(function(){
					gridVideoSize();
				},3500)
			 
		 }
		 if (i+1<imageList.length)
			preloadMainImages(i+1);
		}
	//}
	
}
*/
function preloadMainImages(i) {  
	//alert(image_);
	
	var url = '/img'+imageList[i];
    image_[url] = new Image();      
    image_[url].src = url;
		image_[url].onload=function() {
			//alert(1);
    	 preloadMainImagesCounter++;
    	// if (preloadMainImagesCounter>40) 
			//console.log('load image: '+i+'  '+preloadMainImagesCounter+'/'+imageList.length+'   '+image_[url]);
    	 if (preloadMainImagesCounter==imageList.length) {
			 $('div.loadingMain').fadeOut(1000);
				setTimeout(function(){
					gridVideoSize();
				},500)
				setTimeout(function(){
					gridVideoSize();
				},3500)
			 
		 }
		// if (i+1<imageList.length)
		//	preloadMainImages(i+1);
		}
	//}	
}
function preloadMainImagesLoop() {
	for (var i = 0; i < imageList.length; ++i) {
		preloadMainImages(i);
	}
}
 
function analytics(hash) {
		hash='/kampania/'+hash;
		//console.log(hash);
		_gaq.push(['_trackPageview', hash]);
		_gaq.push(['b._trackPageview', hash]);	
		_gaq.push(['c._trackPageview', hash]);	
} 
//setTimeout(function(){$('div.loadingMain').fadeOut(1000);},1000);
$(window).resize(function(){
	galleryWidth($('#gallery-wrapper .currentBlock').attr('id'));
	setTimeout(function(){
	$('#gallery-wrapper .currentBlock video').each(function() {
		resizeVideoGallery($(this).closest('li'));		
	})
	},1000);
	
})
$(document).ready(function(){
	
	var agent   = navigator.userAgent;
	
  if( /Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) && ($.cookie('preventMobileVersion') != 'yes') ) {
	    //return false;
	    window.location = "/mobile.php#";
	} else {
	
		//preloadMainImages(0);
		preloadMainImagesLoop();
		setTimeout(function(){$('div.loadingMain').fadeOut(1000);},30000);
		resizeElements();
		recheck();
		selectStyle();
		deezerPlayer();
		gallery();
		hiddenCaptions();
		jumpOnStart();	  
	}  
});

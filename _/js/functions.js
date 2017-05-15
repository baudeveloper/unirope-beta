// remap jQuery to $
(function($){})(window.jQuery);

/* trigger when page is ready */
$(document).ready(function (){

		// Go Back button
		$("goBackBtn").click(function() {
			window.history.back();
		});

		// Atlas Copco script.
		$(".column-atlas .sub-menu").append("<li class='seperator italic'><a href='http://www.atlascopco.ca/caus/' title='Visit Atlas Copco website to check their product range.' target='_blank'><img src='/wp-content/themes/unirope/img/logo-atlas.jpg'></a></li>");


		$(".zoooom").hover(function () {
	        var elevateZoom=$(this).data('elevateZoom');
	        if (typeof elevateZoom === 'undefined') {
	            $(this).elevateZoom({
	                zoomWindowPosition: 11,
					zoomWindowOffetx: 0,
					zoomWindowOffety: 0,
					lensSize: 0,
					lenszoom: false,
					lensOpacity: 0,
					zoomWindowWidth: 300,
					zoomWindowHeight: 350,
					borderSize: 0,
	           });
	        } else {
	           log('zoooom.mousenter.zoomEnabled',elevateZoom.options.zoomEnabled);
	           elevateZoom.changeState('enable');
	        } // if
		});

	    $('.zoooom').after('<i class="zoom-icon fa fa-search-plus"></i>');

		$("table.data, table.category, table.category-thumbs, table.table-list").each(function() {
  		var tableHead = $(this)
   		.wrap('<div class="tblWrap" style="position: relative"></div>')
    	.css({ position:'relative', zIndex: 20 })
    	.find('thead')

   		$(this).parent('.tblWrap')
    	.css({ position:'relative' })
    	.prepend('<div class="tbloverlay"></div>').find('.tbloverlay').css({
    		position:   'absolute',
    		zIndex:     10,
    		width:      tableHead.width(),
    		height:		tableHead.height()
   		});
		});

		$("ul.main-nav > li > ul").addClass("horz-menu").hide().css('visibility','hidden');

		$(".breadcrumbs a:contains('RUD')").text("RUD");

		$("#home-content #quick-links a.btn:nth-child(3n+3)").css("margin-right",0);
		$("#content .table-half:nth-child(odd)").css("margin-right",0);

		var $mydataTable = $("table.data:not(.slings-overview)");
			$mydataTable.find("thead tr:nth-child(2) th, thead tr:nth-child(3) th").css({"vertical-align":"top", "text-align":"center"}).parents('table').find("tbody tr:nth-child(odd)").addClass("altRow");

		$("table.rowHeaders tbody tr td:first-child").css({"text-align":"left", "font-weight" : 600});

		$(".tabbertab:first-child table.data tbody tr td").find(".productDetails").attr('rel', 'pdM').parents('tr').find('td .liftingCapIcon').attr('rel', 'lcM');
		$(".tabbertab:last-child table.data tbody tr td").find(".productDetails").attr('rel', 'pdI').parents('tr').find('td .liftingCapIcon').attr('rel', 'lcI');
		$("a.liftingCapIcon").closest('td').css({"text-align":"right"});

		$(".dfx, .iges, .step").closest('td').addClass("cadFiles");

  		$("table.data:not(.slings-overview) tbody tr").hover(function() {
  	  		$(this).addClass("over");
  			}, function() {
  	  		$(this).removeClass("over");
  		});

  		$("table.category tbody tr td:not(.empty), table.category-thumbs tbody tr td:not(.empty), table.table-list tbody tr td:not(.empty)").hover(function() {
  	  		$(this).addClass("over-grad");
  			}, function() {
  	  		$(this).removeClass("over-grad");
  		});

  		/*
var alt = $("figure").children("img").attr("alt");
		$("figure").children("figcaption").html(alt);
*/

  		var $rudTableGrad = $("table.rud tbody tr:first-child");
  			$rudTableGrad.find("td:first-child").css({"text-align":"left"}).addClass("grad").parents("tr:first-child").find("td").addClass("grad");


		// Initialize Slides
			$('#main-slider').slides({
				preload: true,
				play: 8000,
				pause: 150,
				hoverPause: true,
				effect: 'fade',
				animationStart: function(current){
					$('.main-caption').animate({
						bottom:-15
					},100);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationStart on slide: ', current);
					};
				},
				animationComplete: function(current){
					$('.main-caption').animate({
						bottom:0
					},200);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationComplete on slide: ', current);
					};
				},
				slidesLoaded: function() {
					$('.main-caption').animate({
						bottom:0
					},200);
				}
			});

			$('#product-slider').slides({
				preload: true,
				play: 5000,
				pause: 150,
				hoverPause: true,
				effect: 'slide, fade',
				pagination: false
			});




			/*---------------------------------
				HTML5 Placeholder Support
			-----------------------------------*/
			$('input, textarea').placeholder();

			/*---------------------------------
				CSS Helpers
			-----------------------------------*/
			if($.browser.msie){ $('body').addClass('msie'); }
			$('.icon').wrapInner('<span aria-hidden="true"></span>');
			$('input[type=checkbox]').addClass('checkbox');
			$('input[type=radio]').addClass('radio');
			$('input[type=file]').addClass('file');
			$('[disabled=disabled]').addClass('disabled');

			/*---------------------------------
		ToolTip - TipTip
	-----------------------------------*/

	// Standard tooltip
	$('.tooltip, .tooltip-top, .tooltip-bottom, .tooltip-right, .tooltip-left').each(function(){
		// variables
		var tpos = 'top';
		var content = $(this).attr('title');
		var dataContent = $(this).attr('data-content');
		var keepAlive = false;
		var action = 'hover';

		// position
		if($(this).hasClass('tooltip-top')) 	{ tpos = 'top'; 	}
		if($(this).hasClass('tooltip-right')) 	{ tpos = 'right'; 	}
		if($(this).hasClass('tooltip-bottom')) 	{ tpos = 'bottom'; 	}
		if($(this).hasClass('tooltip-left')) 	{ tpos = 'left'; 	}

		// content
		$('.tooltip-content').removeClass('hide').wrap('<div class="hide"></div>');
		if(dataContent) { content = $(dataContent).html(); keepAlive = true; }

		// action (hover or click) defaults to hover
		if($(this).attr('data-action') == 'hover') { action = 'hover'; }

		// tooltip
		$(this).attr('title','')
		.tipTip({defaultPosition: tpos, content: content, keepAlive: keepAlive, activation: action});
	});


  		$("a.liftingCapIcon").fancybox({
  			'padding'		: 0,
  			'opacity'		: true,
  			'overlayShow'	: true,
  			'overlayColor'		: '#000',
  			'overlayOpacity'	: 0.8,
  			'transitionIn'	: 'fade',
  			'transitionOut'	: 'none',
  			'showPrintButton' : true
  		});

  		$("a.productDetails").fancybox({
  			'padding'		: 0,
  			'opacity'		: true,
  			'overlayShow'	: true,
  			'overlayColor'		: '#000',
  			'overlayOpacity'	: 0.8,
  			'transitionIn'	: 'fade',
  			'transitionOut'	: 'none',
  			'showPrintButton' : true
  		});

  		$(".iframe").click(function() {
			$.fancybox({
				'padding'		: 0,
				'autoScale'		: false,
				'transitionIn'	: 'none',
				'transitionOut'	: 'none',
				'title'			: this.title,
				'width'			: 640,
				'height'		: 385,
				'href'			: this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
				'type'			: 'swf',
				'swf'			: {
				'wmode'				: 'transparent',
				'allowfullscreen'	: 'true'
				}
			});

			return false;
		});

  		$('a#fancybox-print').click(function(){
  			$(".fancy-printable").printArea();
  			return false;
  		});

  		$("#tb-newsletter a, #subscribe-footer a").fancybox({
  			'padding'		: 0,
  			'opacity'		: true,
  			'overlayShow'	: true,
  			'overlayColor'		: '#000',
  			'overlayOpacity'	: 0.8,
  			'transitionIn'	: 'fade',
  			'transitionOut'	: 'none'
  		});

  		$('#subsubmit').click(function(){
			$.fancybox.close();
			return false;
		});


	/* Scrolling plugin */

/*
	function filterPath(string) {
    return string
      .replace(/^\//,'')
      .replace(/(index|default).[a-zA-Z]{3,4}$/,'')
      .replace(/\/$/,'');
    }
    var locationPath = filterPath(location.pathname);
    var scrollElem = scrollableElement('html', 'body');
   
    $('a[href*=#]').each(function() {
      var thisPath = filterPath(this.pathname) || locationPath;
      if (  locationPath == thisPath
      && (location.hostname == this.hostname || !this.hostname)
      && this.hash.replace(/#/,'') ) {
        var $target = $(this.hash), target = this.hash;
        if (target) {
          var targetOffset = $target.offset().top;
          $(this).click(function(event) {
            event.preventDefault();
            $(scrollElem).animate({scrollTop: targetOffset}, 400, function() {
              location.hash = target;
            });
          });
        }
      }
    });
   
    // use the first element that is "scrollable"
    function scrollableElement(els) {
      for (var i = 0, argLength = arguments.length; i <argLength; i++) {
        var el = arguments[i],
            $scrollElement = $(el);
        if ($scrollElement.scrollTop()> 0) {
          return el;
        } else {
          $scrollElement.scrollTop(1);
          var isScrollable = $scrollElement.scrollTop()> 0;
          $scrollElement.scrollTop(0);
          if (isScrollable) {
            return el;
          }
        }
      }
      return [];
    }
*/

});



$(window).load(function() {
	/*
$("table.data, table.category, table.category-thumbs, table.table-list").each(function() {
  		var tableHead = $(this)
   		.wrap('<div class="tblWrap" style="position: relative"></div>')
    	.css({ position:'relative', zIndex: 20 })
    	.find('thead')

   		$(this).parent('.tblWrap')
    	.css({ position:'relative' })
    	.prepend('<div class="tbloverlay"></div>').find('.tbloverlay').css({
    		position:   'absolute',
    		zIndex:     10,
    		width:      tableHead.width(),
    		height:		tableHead.height()
   		});
		});
*/

});

$(window).resize(function() {

});

$(document).on('click','.close-btn',function(){
    $(this).parents('#tiptip_holder').css("display","none");
});

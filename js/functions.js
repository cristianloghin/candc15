/*
function calc_slide_height(slider) {

	slider_height = 0;
	slider.children().each(function() {
		
		if( slider_height < $(this).height() ) {
			slider_height = $(this).height();
		}

	});
	
	slider.find('.slide').each(function(){

		$(this).height( slider_height );
	});
	
}
jQuery.fn.extend({
	slider : function(settings) {
		
		var slider = settings.target;
		var slides_no = slider.children().length;
		var current_slide = 1;
		
		function move_slides(dir) {
			
			current_slide = current_slide + dir;

			if (current_slide == 1)
			{
				slider.find('.slider_title').removeClass('alt');
				nav.find('.next_bt').fadeIn(300);
				nav.find('.prev_bt').fadeOut(300);
			}
			else if ( current_slide == slides_no )
			{
				slider.find('.slider_title').addClass('alt');
				nav.find('.prev_bt').fadeIn(300);
				nav.find('.next_bt').fadeOut(300);
			}
			else
			{
				slider.find('.slider_title').addClass('alt');
				nav.find('.prev_bt').fadeIn(300);
				nav.find('.next_bt').fadeIn(300);
			}
		
			var value = -(100 * (current_slide - 1)) + '%';

			slider.find('.banner_slider_control').animate(
			{
				'margin-left' : value
			}, 800);

			if ( settings.flexi )
			{
				var new_height = slider.find( '.slide:nth-child(' + current_slide + ')' ).height();

				slider.find('.banner_slider_wrapper').animate(
				{
					'height' : new_height
				}, 500);
			}
			slider.find('.current').removeClass('current');
			slider.find( '.slide:nth-child(' + current_slide + ')' ).addClass('current');
		}

		slider.children().wrapAll('<div class="banner_slider_wrapper"><div class="banner_slider_control"></div></div>');
		
		slider.append('<div class="slider_nav"><div class="nav_wrapper"></div></div>');
		var nav = slider.find('.nav_wrapper');
		nav.prepend('<div class="prev_bt"><span class="icon-arrow-prev" data-direction="-1"></span></div>').append('<div class="next_bt"><span class="icon-arrow-next" data-direction="1"></span></div>');

		slider.find('.banner_slider_wrapper').css(
		{
			'width' : '100%',
			'overflow' : 'hidden',
			'position' : 'relative',
		});

		if ( settings.flexi )
		{
			$(window).load(function() {
				var height = slider.find('.slide:first-child').height();
				slider.find('.banner_slider_wrapper').height( height );
			});
		}

		slider_width = slides_no * 100 + '%';
		slide_width = 100 / slides_no + '%';
		slider.find('.banner_slider_control').css(
		{
			'width' : slider_width
		});
		slider.find('.slide').each(function(){
			$(this).css('width', slide_width);
		});

		nav.find('span').click(function() {
			move_slides( eval($(this).data('direction')) );
		});

		if(settings.title) {
			slider.prepend('<div class="slider_title"><div><h2 class="LargeHeading">' + settings.title_text + '</h2></div></div>');
		}
	}
});

jQuery.fn.extend({
	tab_slider : function(settings)
	{
		var slider = settings.target;
		var slides_no = slider.find('.nav ul').children().length;
		var width = ( slides_no * 100 ) + '%';
		var slide_width = ( 100 / slides_no ) + '%';
		var height = slider.find('.slide:first-child').height();
		
		slider.find('.slides').children().wrapAll('<div class="slides_wrapper"><div class="control"></div></div>');
		slider.find('.slides_wrapper').css(
		{
			'width' : '100%',
			'overflow' : 'hidden',
			'position' : 'relative',
			'height' : height
		});

		slider.find('.control').css(
		{
			'width' : width
		});
		slider.find('.slide').each(function ()
		{
			$(this).css('width', slide_width );
		});

		function show_tab(id)
		{
			var no = Number( id.slice(4) ) - 1;
			var value = - ( slider.find('.control').width() / slides_no ) * no;
			var height = slider.find( '#' + id ).height();

			slider.find('.control').animate(
			{
				'margin-left' : value
			}, 800);

			slider.find('.slides_wrapper').animate(
			{
				'height' : height
			}, 500);

		}

		slider.find('.nav ul li').click( function()
		{
			id = $(this).data('id');
			show_tab(id);
			slider.find('.nav ul li.active').removeClass('active');
			$(this).addClass('active');
		});
	}
});

jQuery.fn.extend({
	piechart : function(data)
	{
		
		var chart = data.target;
		var dataset = [];
		var colist = [];
		var segments = data.segments;
		
		for (i = 0; i < segments; i++) {
			dataset.push( data.dataset.segments[i].value );
			colist.push( data.dataset.segments[i].color )
		}

		var canvas_id = 'can' + chart.attr('id').substr(3);
		chart.find('.chart').append('<canvas id="' + canvas_id + '" width="' + chart.find('.chart').width() + '" height="' + chart.find('.chart').height() + '"></canvas>')

		function pie( ctx, w, h, dataset )
		{
			var radius = h / 2 - 5;
			var centerx = w / 2;
			var centery = h / 2;
			var total = 0;
			for (x = 0; x < dataset.length; x++)
			{
				total += dataset[x];
			}; 
			var lastend = 0;
			var offset = Math.PI / 2;
			for (x = 0; x < dataset.length; x++)
			{
				var thispart = dataset[x]; 
				ctx.beginPath();
				ctx.fillStyle = colist[x];
				ctx.moveTo(centerx,centery);
				var arcsector = Math.PI * (2 * thispart / total);
				ctx.arc(centerx, centery, radius, lastend - offset, lastend + arcsector - offset, false);
				ctx.lineTo(centerx, centery);
				ctx.fill();
				ctx.closePath();		
				lastend += arcsector;	
			}
			if (data.style == 'donut')
			{
				ctx.beginPath();
				ctx.fillStyle = 'white';
				ctx.moveTo(centerx,centery);
				ctx.arc(centerx, centery, radius / 2, 0, 2*Math.PI);
				ctx.fill();
				ctx.closePath();
			}
		}

		var c = document.getElementById(canvas_id);
		var ctx = c.getContext('2d');
		
		pie(ctx, c.width, c.height, dataset);


	}
});


// Listener for width changes

function add_listeners() {
	$(window).resize(function() {
		flag = false;
		setTimeout(function() {
			if(!flag)
			{
				if($(window).innerWidth() >= 1024)
				{
					$('.main_menu').show(); // main menu
					if ( $('.submenu-toggle').hasClass('active') )
					{
						$('.control_menu').show();
					}
				}
				else
				{
					$('.control_menu').hide();
					$('.main_menu').hide();
					$('.toggle_menu span').removeClass('icon-close-menu').addClass('icon-open-menu');
				}

				if( $(window).innerWidth() >= 1280 ) {
					$('.toggle_page_submenu').next().attr('style', '');
				}
				
				flag = true;
			}
		}, 150);
	})
}
*/
//Shared menu behaviour 

function init_menus() {
	
	$('.toggle_menu span').click(function(){
		$(this).toggleClass('icon-open-menu icon-close-menu');
		$('nav.main_menu').slideToggle(300);
	});


	// submenu drop downs
	$('.submenu-toggle').click(function()
	{
		var target_id = $(this).data('id');
		
		if ($('.submenu-toggle').hasClass('active') ) // submenu is open
		{
			
			if( $('.submenu-toggle.active').data('id') == target_id ) // close submenu
			{
				$('#' + target_id).slideUp(300);
				$(this).find('span').removeClass('icon-menu-arrow-up').addClass('icon-menu-arrow-down');
				$(this).removeClass('active');
				$('.control_menu').hide();
			}
			else // close submenu, open other submenu
			{
				var open_id = $('.submenu-toggle.active').data('id');
				$('#' + open_id).slideUp(300);
				$('.submenu-toggle.active').find('span').removeClass('icon-menu-arrow-up').addClass('icon-menu-arrow-down');
				$('.submenu-toggle.active').removeClass('active');
				$('#' + target_id).slideDown(300);
				$(this).find('span').removeClass('icon-menu-arrow-down').addClass('icon-menu-arrow-up');
				$(this).addClass('active');
			}
		}
		else // open submenu
		{
			$('#' + target_id).slideDown(300);
			$(this).find('span').removeClass('icon-menu-arrow-down').addClass('icon-menu-arrow-up');
			$(this).addClass('active');
			if($(window).innerWidth() >= 1200)
			{
				$('.control_menu').show();
			}
		}

		$('.control_menu').click( function()
		{
			var open_id = $('.submenu-toggle.active').data('id');
			$( '#' + open_id ).slideUp(300);
			$('.submenu-toggle.active').removeClass('active');
			$(this).hide();
			
		})
		
	});

	// page submnu dropdown

	$('.toggle_page_submenu').click(function()
	{
		if($(this).find('span').is(':visible'))
		{
			$(this).next().slideToggle(300);
			$(this).find('span').toggleClass('icon-menu-arrow-down icon-menu-arrow-up');
		}
	});

	
	$(window).scroll(function() {
		if ( !$('.toggle_page_submenu').find('span').is(':visible') )
		{
			if ( $(window).scrollTop() > 122 )
			{
				$('.submenu_wrapper').css(
				{
					'position' : 'fixed',
					'top' : '24px'
				});

			} else {
				$('.submenu_wrapper').attr('style', '');
			}
		}
	});
}


//Accounts Tabbed (EXPERIMENTAL)

function tab_accounts()
{
	$('td').each(function()
	{
		if($(this).hasClass('AccountsTabbed') || $(this).hasClass('AccountsTabbedBold'))
		{
			if($(this).html() != '')
			{
				var value = $(this).html();
				var index = value.lastIndexOf(')');
				if ( index != -1 )
				{
					var new_val = value.substring(0, index) + '<span>)</span>';
				}
				
				$(this).html(new_val);
			}
		}
	})
} 

/********/

jQuery.fn.extend({
	init_tab : function(settings) {
		var tab = $(this);

		// intialize the open tab
		if(tab.hasClass('open'))
		{
			tab.find('h3 span').removeClass('icon-plus').addClass('icon-minus');
		}
		// click function
		tab.find('h3').click( function()
		{
			if(tab.hasClass('open'))
			{
				tab.find('.content').slideUp(300, function()
				{
					tab.removeClass('open').addClass('closed');
					tab.find('h3 span').removeClass('icon-minus').addClass('icon-plus');
				});
			}
			else if(tab.hasClass('single'))
			{
				tab.find('.content').slideDown(300, function()
				{
					tab.removeClass('closed').addClass('open');
					tab.find('h3 span').removeClass('icon-plus').addClass('icon-minus');
				});
			}
			else
			{
				$('.mod_tab.switch.open').find('.content').slideUp(300, function()
				{
					$(this).parent().removeClass('open').addClass('closed');
					$(this).parent().find('h3 span').removeClass('icon-minus').addClass('icon-plus');
				});

				tab.find('.content').slideDown(300, function()
				{
					tab.removeClass('closed').addClass('open');
					tab.find('h3 span').removeClass('icon-plus').addClass('icon-minus');
				});
			}
		})
	}
});
function open_highlight(id, height)
{
	$('#'+id).addClass('open');
	$('#'+id).animate(
	{
		'height' : height
	}, 800,
	function() {
		calc_offsets();
		$(this).css('height', 'auto');
		$(this).find('.content').animate({
			opacity: 1
		});
	});
	
}

// adjust slider height and slide position when the page is resized
			
			/*
			var windowTO;
			window.onresize = function()
			{
				clearTimeout(windowTO);
				windowTO = setTimeout( function()
				{
					$('body').find('.mod_slider_pro').each(function()
					{
						var active_slide = $(this).find('.slide#' + $(this).data('active') );
						var val = active_slide.innerHeight();
						active_slide.prevAll().css(
						{
							'margin-left' : - active_slide.width()
						});
						$(this).find('.wrapper').animate(
						{
							'height' : val
						}, 300);
					});
				}, 300);
			}

			*/
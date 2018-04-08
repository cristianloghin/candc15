jQuery.fn.extend({
	slider_pro : function() {
		
		var slider = $(this);
		var type = $(this).data('type');
		var v_scaling = $(this).data('height')
		var effect = $(this).data('effect');
		var slides_no = slider.children().length;
		var active = 0;
		var wrapper;
		var control;
		var navig;

		function build() {
			
			// Create wrappers

			var wrap = '<div class="wrapper"><div class="control"></div></div>';
			slider.children().wrapAll( wrap );

			// Set wrapper and control variables

			wrapper = slider.find('.wrapper');
			control = slider.find('.control');

			// Set widths

			control.css('width', slides_no * 100 + '%');
			control.children().css('width', 100 / slides_no + '%');
			control.children(':not(:first-child)').css({
				'position': 'absolute',
				'margin-left' : (100 / slides_no) + '%'
			});
			
			// Create navigation

			if( type == 'tabbed' ) {
				var nav = '<div class="tabbed_nav">';
				control.children().each( function()
				{
					// add indexes to the slides for identification
					$(this).attr('id', 's-' + $(this).index());
					//
					nav += '<div class="tab">'+$(this).data('name')+'</div>';
				});
				nav += '</div>';
				slider.prepend(nav);

				// set navigation variable
				navig = slider.find('.tabbed_nav');
				navig.children(':first-child').addClass('active');
			}
		}

		function set_height(slide_height) {
			
			var duration = 950;
			
			wrapper.animate({
				'height' : slide_height
			}, duration, function()
			{
				wrapper.css('height', 'auto');
			});
		}

		function events() {
			navig.children().click( function()
			{
				var id = $(this).index();

				if( active != id )
				{
					change(active, id);
					active = id;
				}
				navig.find('.active').removeClass('active');
				$(this).addClass('active');
			});
		}
		function change(from_slide, to_slide) {
			
			var s_out = control.find('.slide#s-' + from_slide);
			var s_in = control.find('.slide#s-' + to_slide);
			//var val = s_out.width();

			var val = - (100 / slides_no) + '%';

			// rearange slides --- SIMPLIFY THIS

			wrapper.css('height', s_out.innerHeight());

			if ( (from_slide - to_slide) < 0 )
			{	
				s_in.detach().insertAfter(s_out).css({
					'opacity' : 1,
					'margin-left' : 0,
					'position' : 'relative'
				});

				if( effect == 'fade-slide')
				{
					s_out.animate(
					{
						'opacity' : 0
					}, 150, function() {
						
						s_out.animate(
						{
							'margin-left' : val
						}, 800, function()
						{
							$(this).css('position', 'absolute');
						})
					});
				}
			}
			else
			{
				s_in.detach().insertBefore(s_out).css({
					'opacity' : 1,
					'margin-left' : val,
					'position': 'relative'
				});

				if( effect == 'fade-slide')
				{
					s_out.animate(
					{
						'opacity' : 0
					}, 150, function()
					{
						$(this).css({
							'position': 'absolute',
							'margin-left' : $(this).width()
						});
						s_in.animate(
						{
							'margin-left' : 0
						}, 800)
					});
				}
				
			}
			if( v_scaling == 'flexi' )
			{
				var h_val = s_in.innerHeight();
				set_height(h_val);
			}
		}

		build();
		events();
	}
});


<?php
	/*$sections = array(
		array( 'data' => 'home/home_01_01', 'module' => 'mod_content'),
		array(
			'data' => 'home/home_01_02',
			'module' => 'mod_slider_pro',
			'id' => 'home-slider-1',
			'type' => 'tabbed',
			'effect' => 'fade-slide',
			'height' => 'flexi'
		),
		array( 'data' => 'home/home_01_03', 'module' => 'mod_content'),
		array( 'data' => 'home/home_01_04', 'module' => 'mod_content')
	);*/

	$sections = array(
		array( 'data' => 'home/home_01_01', 'module' => 'mod_content'),
		array( 'data' => 'home/home_01_02', 'module' => 'mod_content'),
		array( 'data' => 'home/home_01_03', 'module' => 'mod_content'),
		array( 'data' => 'home/home_01_04', 'module' => 'mod_content')
	);

	echo '<div class="page_wrapper container">';
	echo '<div class="page_container">';

	$counter = 1;
	foreach ($sections as $section)
	{
		echo '<section>';
		$data = $section['data'];

		if ( $section['module'] == 'mod_slider_pro')
		{
			$id = $section['id'];
			$type = $section['type'];
			$effect = $section['effect'];
			$height = $section['height'];
		}

		require('inc/mod/' . $section['module'] . '.php');
		echo '</section>';
		$counter++;
	}

	echo '</div>'; // close container
	echo '</div>'; // close wrapper
?>

<script>

	function open_modal(content) {

		$('body').prepend('<div class="modal_container"></div>');
		$('.modal_container').append('<div class="modal_wrapper"></div>');
		$('.modal_wrapper').append('<div class="modal_content"></div>');
		$('.modal_content').html(content);
		$('.modal_content').append('<span class="icon-close-menu"></span>');

		$('.modal_container').animate({'opacity' : 1});

		$('.icon-close-menu').click(function() {
			$('.modal_container').animate({'opacity' : 0}, function() {
				$('.modal_container').remove();
			});
		})
	}

	function set_banner_height() {
		var width = $(window).innerWidth();
		var extra = ( $('#extra-text').is(':visible') ) ? $('#extra-text').outerHeight() : 0;

		if ( width < 1024 )
		{
			var height = $('#banner').outerHeight() - extra;
			
			$('#image-wrapper').css(
			{
				'width': width,
				'margin-left' : - width / 2
			});
		}
		else if ( width < 1280 )
		{
			var height = $('#banner').outerHeight();
			$('#image-wrapper').css(
			{
				'width': width,
				'margin-left' : - width / 2
			});
		}
		else
		{
			var height = $('#banner').outerHeight();
			$('#image-wrapper').css(
			{
				'width': 1280,
				'margin-left' : -640
			});
		}		

		var ratio = height/width;

		if ( ratio > 1200/2360 )
		{
			
			var margin_right = Math.round ( width - width * 0.9 );
			
			$('#image-wrapper img').css(
			{
				'height': '100%',
				'width' : 'auto',
				'margin-right': - margin_right,
				'margin-top': 0
			});
		}
		else
		{

			$('#image-wrapper img').css(
			{
				'height': 'auto',
				'width' : '100%'
			});

			var margin_top = Math.round( ($('#image-wrapper img').height() - height) / 2 );

			$('#image-wrapper img').css(
			{
				'margin-top': - margin_top,
				'margin-right': 0
			});
		}

		$('#image-wrapper').css({
			'height': height
		});
	}

	$('#more-text').click( function()
	{
		$(this).animate( 
		{
			'opacity' : 0
		});
		$('#extra-text').slideDown();
	});

	$('.icon-info').click(function()
	{
		var content = '<p>This report includes forward-looking statements, including statements concerning current expectations about future financial performance and economic and market conditions which C&C Group believes are reasonable. However, these statements are neither promises nor guarantees, but are subject to risks and uncertainties, including those factors discussed <a href="/business-and-strategy/strategic-report.html">here</a> that could cause actual results to differ materially from those anticipated.</p>'
		open_modal(content);
	});

	var windowTO;
	window.onresize = function()
	{
		clearTimeout(windowTO);
		windowTO = setTimeout( function()
		{
			set_banner_height();
		}, 300);
	}
	$(window).load( function()
	{
		set_banner_height();
	});

</script>
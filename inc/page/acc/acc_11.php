<?php
	$sections = array(
		array(
			'data' => 'acc/acc_11_01',
			'module' => 'mod_slider_pro',
			'id' => 'bus-slider-1',
			'type' => 'tabbed',
			'effect' => 'fade-slide',
			'height' => 'flexi'
		)
	);
		
	echo '<div class="page_wrapper container">';
	echo '<div class="page_container">';
	echo '<div class="page_header"><h1>Notes</h1><h3>forming part of the financial statements</h3></div>';

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
	}

	echo '</div>'; // close container
	echo '</div>'; // close wrapper
?>
<?php
	$sections = array(
		array(
			'data' => 'bus/bus_01_01',
			'module' => 'mod_slider_pro',
			'id' => 'bus-slider-1',
			'type' => 'tabbed',
			'effect' => 'fade-slide',
			'height' => 'flexi'
		),
		array(
			'data' => 'bus/bus_01_02',
			'module' => 'mod_slider_pro',
			'id' => 'bus-slider-2',
			'type' => 'tabbed',
			'effect' => 'fade-slide',
			'height' => 'flexi'
		)
	);
	
	echo '<div class="page_wrapper container">';
	echo '<div class="page_container">';
	echo '<div class="page_header"><h1>Operations Review</h1></div>';
	
	foreach ($sections as $section)
	{
		echo '<section>';
		$data = $section['data'];
		$id = $section['id'];
		$type = $section['type'];
		$effect = $section['effect'];
		$height = $section['height'];
		require('inc/mod/' . $section['module'] . '.php');
		echo '</section>';
	}
	echo '</div>'; // close container
	echo '</div>'; // close wrapper
?>
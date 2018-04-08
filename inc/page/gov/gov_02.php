<?php
	$sections = array(
		array( 'data' => 'gov/gov_02_01', 'module' => 'mod_content')
	);
		
	echo '<div class="page_wrapper container">';
	echo '<div class="page_container">';
	echo '<div class="page_header"><h1>Directors’ Report</h1></div>';

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
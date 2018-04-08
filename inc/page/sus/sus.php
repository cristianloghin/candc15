<?php
	$sections = array(
		array( 'data' => 'sus/sus_01_01', 'module' => 'shared/mod_shared_banner'),
		array( 'data' => 'sus/sus_01_02', 'module' => 'sus/mod_sus_con'),
		array( 'data' => 'sus/sus_01_03', 'module' => 'sus/mod_sus_con'),
		array( 'data' => 'sus/sus_01_04', 'module' => 'sus/mod_sus_con'),
		array( 'data' => 'sus/sus_01_05', 'module' => 'shared/mod_shared_pic_grid'),
		array( 'data' => 'sus/sus_01_06', 'module' => 'sus/mod_sus_con')
	);
	$counter = 1;
	echo '<div class="page_wrapper" id="sus_page">';
	echo '<div class="page_container">';
	// echo '<h1 class="LargeHeading">Sustainability</h1>';
	
	foreach ($sections as $section)
	{
		echo '<section id="sec_' . $counter . '">';
		$data = $section['data'];
		require('inc/mod/' . $section['module'] . '.php');
		echo '</section>';
		$counter++;
	}
	echo '</div>'; // close container
	echo '</div>'; // close wrapper
?>
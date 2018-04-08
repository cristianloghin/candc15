<?php
	$modules = array(
		array( 'icon' => 'cow', 'text' => 'Our Farmers' ),
		array( 'icon' => 'people', 'text' => 'Our People and Supply Chain' ),
		array( 'icon' => 'gears', 'text' => 'Our Subsidiaries' ),
		array( 'icon' => 'basket', 'text' => 'Our Customers and Consumers' )
	);
	foreach ($modules as $module) {
		$icon = $module['icon'];
		$text = $module['text'];
		require('inc/mod/shared/mod_shared_ico_txt.php');
	}	
?>
<?php
	/*
	
	Tab Module

	*/
	echo '<div class="mod_tab '.$class.'" id="tab_'.$counter.'">';

	$title = explode('_', $title);

	echo '<h3>'.$title[0];

	echo '<span class="icon-plus"></span>';
	echo '</h3>';
	echo '<div class="content">';
	require_once('inc/data/'.$data .'.php');
	echo '</div>';

	echo '<script> $(".mod_tab#tab_' . $counter .'").init_tab(); </script>';
	echo '</div>'; // close tab
?>

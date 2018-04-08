<?php
	$id = substr($data, 4);
	echo '<div class="mod_bus_con" id="' . $id . '">';
	require('inc/data/' . $data . '.php');
	echo '</div>';
?>
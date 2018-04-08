<?php
	$id = substr($data, 5);
	echo '<div class="mod_supp_con" id="' . $id . '">';
	require('inc/data/' . $data . '.php');
	echo '</div>';
?>
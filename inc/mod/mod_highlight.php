<?php

	/*

	Module higlights

	*/
	echo '<div class="mod_highlight" id="' . $data['id'] . '">';
	
	if(!isset($data['image']))
	{	
		echo '<div class="content txt_only">';
		echo '<div class="text"><p class="large">'.$data['text'].'</p></div>';
	}
	else
	{
		echo '<div class="content">';
		echo '<div class="image"><img src="img/'.$data['image'].'.jpg"></div>';
		echo '<div class="text"><p class="large">'.$data['text'].'</p></div>';
	}
	echo '</div>';
	echo '</div>';
?>


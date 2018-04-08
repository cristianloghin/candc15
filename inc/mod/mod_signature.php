<?php
	/*
		Signature module

	*/

	echo '<div class="mod_signature">';
	if(isset($data['intro']))
	{
		echo '<div class="intro">'.$data['intro'].'</div>';
	}
	echo '<div class="people">';
	foreach ($data['people'] as $key => $person)
	{
		echo '<div><h4>'.$person['name'].'</h4>'.$person['position'].'</div>';
	}
	echo '</div>';
	if(isset($data['date']))
	{
		echo '<div class="date">'.$data['date'].'</div>';
	}
	echo '</div>';
?>
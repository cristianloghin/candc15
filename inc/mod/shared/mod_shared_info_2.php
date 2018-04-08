<?php
	echo '<div class="mod_shared_info_2">';
	echo '<h3>' .$title. '</h3>';
	$count = 0;
	echo '<div class="rows">';
	foreach($data['v_labels'] as $row)
	{
		echo '<div class="row">';
		echo '<div class="v-label">'.$row.'</div>';
		if ($count == 0)
		{
			echo '<div class="bar active"><span style="width: ' . $data['values'][$count] . '%"></span></div>';
		}	
		else
		{
			echo '<div class="bar"><span style="width: ' . $data['values'][$count] . '%"></span></div>';
		}
		echo '</div>';
		$count++;
	}
	echo '<div style="width: 100%; clear: both; height: 0"></div>';
	echo '</div>'; // close rows
	echo '<div class="grid">';
	$width = 90 / (count($data['h_labels']) - 1);
	$count = 0;
	foreach ($data['h_labels'] as $column)
	{
		if ($count == 0)
		{ 
			echo '<div class="column" style="width: 10%">';
		}
		else
		{
			echo '<div class="column" style="width: ' . $width . '%">';
		}
		echo '<span></span>';
		echo '<span>' . $column . '</span>';
		echo '</div>';
		$count ++;
	}
	echo'</div>';
	echo '</div>';
?>
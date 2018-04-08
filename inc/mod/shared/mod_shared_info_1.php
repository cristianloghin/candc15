<?php
	if($flag)
	{
		echo '<div class="mod_shared_info_1">';
		echo '<h3>' .$title. '</h3>';
		echo '<div class="row">';
		echo '<span class="icon-arrow-up"></span>';
		echo '<span class="big-no">' . $big . '</span>';
		echo '</div>';
		echo '<div class="row">';
		echo '<span class="date date-1">' . $date_1 . '</span>';
		echo '<span class="bar"><span class="bar-1" style="width: 100%"></span></span>';
		echo '<span class="value value-1">' . $value_1_txt . '</span>';
		echo '</div>';
		echo '<div class="row">';
		echo '<span class="date date-2">' . $date_2 . '</span>';
		$width = 100 * $value_2 / $value_1;
		echo '<span class="bar"><span class="bar-2" style="width: ' . $width . '%"></span></span>';
		echo '<span class="value value-2">' . $value_2_txt . '</span>';
		echo '</div>';
		echo '<div style="width: 100%; height: 0px; clear: both"></div>';
		echo '</div>';
	}
	else
	{
		echo '<div class="mod_shared_info_1">';
		echo '<div class="row">';
		echo '<span></span>';
		echo '<h3>' .$title. '</h3>';
		echo '</div>';
		echo '<div class="row">';
		echo '<span class="icon-arrow-up"></span>';
		echo '<span class="big-no">' . $big . '</span>';
		echo '</div>';
		echo '<div class="row">';
		echo '<span></span>';
		echo '<span class="text">' . $text . '</span>';
		echo '</div>';
		echo '<div style="width: 100%; height: 0px; clear: both"></div>';
		echo '</div>';
	}
?>
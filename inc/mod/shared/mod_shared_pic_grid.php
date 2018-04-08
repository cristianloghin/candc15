<div class="mod_shared_pic_grid">

<?php
	require('inc/data/' . $data . '.php');
	$loc_counter = 0;
	foreach ($data as $image)
	{	
		if ($loc_counter % 2 == 0) {
			echo '<div class="row">';
		}
		echo '<div class="image-wrapper">';
		echo '<div class="image">';
		echo '<img src="' . $image['link'] . '">';
		echo '</div>'; // close image
		echo '<div class="caption">';
		echo '<p>' . $image['caption'] . '</p>';
		echo '</div>'; // close caption
		echo '</div>'; // close wrapper

		if (($loc_counter + 1) % 2 == 0) {
			echo '</div>'; // close row 
		}

		$loc_counter ++;
	}
?>
<div style="width: 100%; height:0; clear: both"></div>
</div>
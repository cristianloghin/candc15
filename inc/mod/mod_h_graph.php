<div class="mod_h_graph">

<?php
	
	$max = max($graph['values']);

	foreach ($graph['labels'] as $key => $label) {
		
		echo '<div class="row">';
		echo '<div>'.$label.'</div>';
		$value = $graph['values'][$key];
		$width = round( $value / $max * 100 );
		echo '<div><div style="width: ' . $width . '%">&nbsp;</div></div>';
		$unit = explode('/', $graph['unit']);
		if ( count($unit) > 1 )
		{
			echo '<div>'.$unit[0].number_format($value, 2, '.', ',').$unit[1].'</div>';
		}
		else
		{
			echo '<div>'.number_format($value, 2, '.', ',').$unit[0].'</div>';
		}
		echo '</div>'; // close row
		$counter++;
	}

?>

</div>
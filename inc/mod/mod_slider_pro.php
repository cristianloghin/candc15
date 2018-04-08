<?php
	/*
	
	Module: Slider Pro

	*/
	echo '<div class="mod_slider_pro" id="' . $id . '">';
	require('inc/data/' . $data . '.php');
	echo '</div>';
?>

<script>
	$('#<?php echo $id; ?>').data(
	{
		'type': '<?php echo $type; ?>',
		'effect': '<?php echo $effect; ?>',
		'height': '<?php echo $height; ?>'
	});
	$('#<?php echo $id; ?>').slider_pro();
</script>
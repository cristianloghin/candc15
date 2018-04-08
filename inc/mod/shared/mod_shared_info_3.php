<?php
	echo '<div class="mod_shared_info_3" id="pie-' . $id . '">';
	echo '<script>';
	echo 'var data_set_' . $id . ' = ' . json_encode($data) .';';
	echo '</script>';
	echo '<h3>' . $data['title'] . '</h3>';
	echo '<div class="wrapper">';
	echo '<div class="chart"></div>';
	echo '<div class="legend">';

	foreach ($data['segments'] as $value) {
		echo '<div><span style="background: ' . $value['color'] . '"></span>' . $value['label'] . '<span>' . $value['value'] . $data['unit'] . '</span></div>';
	}

	echo '</div>';
	echo '</div>';
	echo '</div>';
?>
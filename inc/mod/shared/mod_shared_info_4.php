<div class="mod_shared_info_4 pie" id="pie-<?php echo $id; ?>">
	<?php
		echo '<script>';
		echo 'var data_set_' . $id . ' = ' . json_encode($data) .';';
		echo '</script>';
	?>
	<div>
		<h3>% Group Turnover</h3>
	</div>
	<div class="chart"></div>
	<div>
		<span><?php echo $value; ?></span>
	</div>
</div>
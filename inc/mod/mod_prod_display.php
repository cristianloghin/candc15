<?php
	/*
		Product display module for C&C Group
	*/

	echo '<div class="mod_prod_display" id="'.$tab_id.'">';
	echo '<h4>'.$subtitle[0].'</h4>';
	echo '<div class="images_wrapper">';

	foreach ($products as $product)
	{
		echo '<div class="product">';
		echo '<img src="img/products/'.$product['image'].'.jpg">';
		echo '</div>';
	}

	echo '</div>';
	if(isset($subtitle[1])) {
		echo '<h4>'.$subtitle[1].'</h4>';
		echo '<div class="logos_wrapper">';
		foreach ($distributed as $logo)
		{
			echo '<div class="logo"><img src="img/logos/'.$logo['image'].'.jpg"></div>';
		}
		echo '</div>';
	}
?>
</div> <!-- Close module -->
 
<script type="text/javascript">

	$('.mod_prod_display#<?php echo $tab_id; ?>').prod_display();

</script>
<div class="slide">
	<div class="contents">
		<div class="text_box_1">
			<p class="TextPullQuote">While for many of our competitors the sustainability demands of the customers will present a challenge, for the Irish dairy industry, it presents an opportunity to showcase what we do naturally.</p>
		</div>
	</div>
</div>
<div class="slide">
	<div class="contents">
		<div class="icon_box_1">
		<?php
			$modules = array(
				array( 'icon' => 'power', 'text' => '16% reduction in electricity consumption at Head Office since 2012' ),
				array( 'icon' => 'meter', 'text' => '18% reduction in thermal energy at Adams Foods Limited in 2014' ),
				array( 'icon' => 'water', 'text' => 'Installation of an RO system (Reverse Osmosis) at Thiel facility in Wisconsin which will save c. 4.5 million litres of 
			water a year' ),
				array( 'icon' => 'trash', 'text' => '10% reduction of waste at IDB Deutschland' )
			);
			foreach ($modules as $module) {
				$icon = $module['icon'];
				$text = $module['text'];
				require('inc/mod/shared/mod_shared_ico_txt.php');
			}	
		?>
		</div>
	</div>
</div>
<div class="notes_nav">
	<nav>
		<ul>
			<?php
			$counter = 1;
			for ($x = 0;  $x < 35; $x++ ) 
			{
				
				if ( $x % 5 == 0 )
				{
					if( $counter == 1 ) {
						$active = ' active';
					} else {
						$active = '';
					}
					echo '<li class="notes_tab_button' . $active . '" data-id="tab_' . $counter . '">';
					echo ( $x + 1 ) . ' - ';
				}
				
				if ( ($x + 1) % 5 == 0 )
				{
					echo ( $x + 1 );
					echo '<span></span>';
					echo '</li>';
					$counter++;
				}
			}
			?>
		</ul>
	</nav>
</div>
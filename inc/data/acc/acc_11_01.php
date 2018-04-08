<?php
	
	for($x = 0; $x < 28; $x++ )
	{
		if($x % 4 == 0)
		{
			echo '<div class="slide" data-name="'.($x + 1).'-'.($x + 4).'">';
		}

		require_once('inc/data/acc/notes/note_'.($x + 1).'.php');

		if( ($x+1) % 4 == 0)
		{
			echo '</div>';
		}
	}
	
?>
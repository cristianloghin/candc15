<div class="submenu_wrapper">
	<div class="submenu_container container">
		<nav>
			<div class="toggle_page_submenu">In this section<span class="icon-menu-arrow-down"></span></div>
			<ul>
				<?php
					$category = $_GET['cat'];
					foreach ($structure as $item)
					{
						if ($item['slug'] == $category)
						{
							$submenu = $item['submenu'];
						}
					}
					foreach( $submenu as $item ) {
						if( $_GET['id'] == $item['slug'])
						{
							echo '<li class="active"><a href="' . $category . '/' . $item['slug'] . '.html">' . $item['name'] . '</a><span></span></li>';
						} else
						{
							echo '<li><a href="' . $category . '/' . $item['slug'] . '.html">' . $item['name'] . '</a><span></span></li>';
						}
					}
				?>
			</ul>
		</nav>
	</div>
</div>
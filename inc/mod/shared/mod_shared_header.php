<header>
	<div class="container">
		<div class="top">
			<div class="logo">
				<a href="/"></a>
			</div>
			<div class="title">
				<span>Annual Report 2015</span>
			</div>
			<div class="toggle_menu">
				<span class="icon-open-menu"></span>
			</div>
		</div>
		<nav class="main_menu">
			<ul>
				<li<?php echo get_active_menu('home'); ?>><a href="/">Home</a></li>
				<?php
					foreach ($structure as $item)
					{
						echo '<li' . get_active_menu($item['slug']) . '>';
						if ($item['type'] == 'single')
						{
							echo '<a href="' . $item['slug'] . '.html">' . $item['name'] . '</a>';
						}
						else
						{
							echo '<a class="submenu-toggle" data-id="submenu-' . $item['slug'] . '">' . $item['name'] . '<span class="icon-menu-arrow-down"></span></a>';
							echo '<ul class="submenu" id="submenu-' . $item['slug'] . '">';
							foreach ( $item['submenu'] as $sub_item )
							{
								echo '<li><a href="' . $item['slug'] . '/' . $sub_item['slug'] . '.html">' .$sub_item['name']. '</a></li>';
							}
							echo '</ul>'; // close submenu
						}
						echo '</li>';
					}
				?>
			</ul>
			<div class="download">
				<a href="/img/C&C-Group-Annual-Report-2015.pdf" target="_blank">
					<span class="icon-large-download"></span>
					<span>Download PDF version</span>
				</a>
			</div>
		</nav>
	</div>
</header>
<div class="control_menu"></div>

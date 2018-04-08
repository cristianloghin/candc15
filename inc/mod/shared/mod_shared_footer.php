<footer>
	<div class="container">
		<div>
			<a href="/" class="logo_footer"></a>
			<p class="small">For more information on the Group please visit our corporate website <a href="http://www.candcgroupplc.com">www.candcgroupplc.com</a></p>
		</div>
		<div>
			<p>Annual Report 2015<a href="/img/C&C-Group-Annual-Report-2015.pdf" target="_blank"><span class="icon-large-download"></span>Download</a></p>
			<nav class="footer_menu">
				<ul>
					<li><a href="/">Home</a></li>
					<?php
						foreach ($structure as $item)
						{
							if ($item['type'] == 'single')
							{
								echo '<li>';
								echo '<a href="' . $item['slug'] . '.html">' . $item['name'] . '</a>';
								echo '</li>';
							}
							else
							{
								echo '<li>';
								echo '<a href="' . $item['slug'] . '/' . $item['submenu'][0]['slug'] . '.html">' . $item['name'] . '</a>';
								echo '</li>';
							}
						}
					?>
				</ul>
			</nav>
		</div>
		<div class="credits">
			<a href="http://www.candcgroupplc.com/">&copy; C&amp;C Group plc 2015</a>
			<a href="http://www.sourcedesign.ie/" target="_blank">Site design: Source Design</a>
		</div>
	</div>
</footer>
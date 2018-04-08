<div class="slide" data-name="How we are configured">
	<h4>C&amp;C has five business segments, which comprise:</h4>
	<?php
		$tabs = array(
			array( 'data' => 'bus/tabs/tab_01', 'module' => 'mod/mod_tab', 'class' => 'closed switch', 'title' => 'Ireland' ),
			array( 'data' => 'bus/tabs/tab_02', 'module' => 'mod/mod_tab', 'class' => 'closed switch', 'title' => 'Scotland' ),
			array( 'data' => 'bus/tabs/tab_03', 'module' => 'mod/mod_tab', 'class' => 'closed switch', 'title' => 'C&amp;C Brands' ),
			array( 'data' => 'bus/tabs/tab_04', 'module' => 'mod/mod_tab', 'class' => 'closed switch', 'title' => 'North America' ),
			array( 'data' => 'bus/tabs/tab_05', 'module' => 'mod/mod_tab', 'class' => 'closed switch', 'title' => 'Export' )
		);
		$counter = 1;
		foreach ($tabs as $tab) {
			$data = $tab['data'];
			$class = $tab['class'];
			$title = $tab['title'];
			require('inc/'.$tab['module'].'.php');
			$counter ++;
		}
	?>
</div>
<div class="slide" data-name="Markets">
	<div>
		<div class="map"><img src="img/world-map.png"></div>
		<p class="large">Exporting to over 50 markets internationally.</p>
		<div class="countries">
			<ul class="list">
				<li>Andorra</li>
				<li>Australia</li>
				<li>Austria</li>
				<li>Bahamas</li>
				<li>Bahrain</li>
				<li>Bermuda</li>
				<li>Brazil</li>
				<li>Belgium</li>
				<li>Bulgaria</li>
				<li>Canada</li>
				<li>Caribbean</li>
				<li>China</li>
				<li>Costa Rica</li>
				<li>Cyprus</li>
			</ul>
			<ul class="list">
				<li>Czech Republic</li>
				<li>Denmark</li>
				<li>Estonia</li>
				<li>Finland</li>
				<li>France</li>
				<li>Germany</li>
				<li>Gibraltar</li>
				<li>Greece</li>
				<li>Hong Kong</li>
				<li>Hungary</li>
				<li>India</li>
				<li>Israel</li>
				<li>Italy</li>
				<li>Japan</li>
			</ul>
			<ul class="list">
				<li>Latvia</li>
				<li>Lithuania</li>
				<li>Luxembourg</li>
				<li>Malaysia</li>
				<li>Malta</li>
				<li>Mexico</li>
				<li>Netherlands</li>
				<li>New Zealand</li>
				<li>Norway</li>
				<li>Philippines</li>
				<li>Portugal</li>
				<li>Qatar</li>
				<li>Russia</li>
				<li>Singapore</li>
			</ul>
			<ul class="list">
				<li>South Korea</li>
				<li>Spain</li>
				<li>Sri Lanka</li>
				<li>Sweden</li>
				<li>Switzerland</li>
				<li>Taiwan</li>
				<li>Thailand</li>
				<li>Turkey</li>
				<li>UAE</li>
				<li>Ukraine</li>
				<li>United Kingdom</li>
				<li>USA</li>
				<li>Vietnam</li>
			</ul>
		</div>
	</div>
	<?php
		/*
		$tabs = array(
			array('data' => 'bus/tabs/tab_06', 'module' => 'mod/mod_tab', 'class' => 'closed single bottom', 'title' => 'More,Less')
		);

		foreach ($tabs as $tab) {
			$data = $tab['data'];
			$class = $tab['class'];
			$title = $tab['title'];
			require('inc/'.$tab['module'].'.php');
			$counter ++;
		}
		*/
	?>
</div>
<div class="slide" data-name="Brands">
	<div class="two_column_text">
		<div>
			<h4>Irish Cider Brands</h4>
			<p>Bulmers Original is a premium, traditional blend of Irish cider with an authentic clean and refreshing taste. Also in the range are Bulmers Pear and Bulmers Berry.</p>
			<p>Magners is a premium, traditional blend of Irish cider with a crisp, refreshing flavour and a natural authentic character. Also in the range are Magners Orchard Berries and Magners Pear.</p>
			<h4>English Cider Brands</h4>
			<p>Gaymers is a clean, crisp, easy drinking medium cider made using the finest English apples.</p>
			<p>Blackthorn is a West Country legend and one of the country’s best known and widely drunk ciders due its secret blend of bittersweet English cider apples. The range includes Blackthorn Gold, Blackthorn Dry and Black ‘n Black.</p>
			<p>Ye Olde English is a traditional medium dry cider made using a unique blend of dessert and cider apples to deliver a deliciously refreshing taste.</p> 
			<p>Addlestones is a naturally cloudy premium cider that is twice fermented but never filtered to deliver its unique, smooth taste.</p>
			<p>Chaplin &amp; Cork’s is an award winning range of exquisite Somerset ciders made using pure juice from the finest English cider apples. The range includes Somerset Gold and Somerset Reserve.</p>
			<p>K cider is a full strength, premium cider expertly pressed with a unique blend of English cider apples to deliver a full bodied flavour and rich golden colour.</p>
			<p>Other English cider brands include Natch, Special VAT and Taunton Traditional.</p>
			<h4>American Cider Brands</h4>
			<p>Woodchuck Hard Cider is a premium hard cider handcrafted in Vermont, USA from the highest quality ingredients while offering an innovative range of ciders.</p> 
			<p>Wyder’s Cider was formulated in 1987 by cider master Ian Wyder and is now available throughout the central and western United States.</p>
			<p>Hornsby’s is a cider which combines traditional cider-making techniques with an American heritage. It comes in two styles, Crisp Apple and Amber Draft. In the UK Hornsby’s is sold in two flavoured varieties: Crisp Apple and Strawberry and Lime.</p>
		</div>
		<div>
			<h4>Wine and Spirit Brands</h4>
			<p>The Group’s portfolio of wine and spirit brands sold in the on-trade includes the Oliver &amp; Greg’s and Moondarra wine brands, Odessa Vodka and Squires Gin.</p>
			<p>The Group also distributes a number of wine brands in the Republic of Ireland including Santa Rita, Blossom Hill, Carmen Discovery and Yellow Tail.</p>
			<h4>Soft Drinks</h4>
			<p>Tipperary Natural Mineral Water is filtered from the Devils Bit Mountain in County Tipperary and is bottled at source in the village of Borrisoleigh.</p>
			<p>Finches is a range of premium soft drinks in orange and pink lemon flavours produced in Ireland with pure natural spring water.</p>
			<h4>Beer Brands</h4>
			<p>Tennent’s Lager is brewed to the highest standards to create a lager with a crisp taste and refreshingly clean finish. Tennent’s has been made with pride in the heart of Glasgow since 1885, but is famous far beyond its home city. Tennent’s Lager is Scotland’s best-selling lager.</p>
			<p>Tennent’s Black T is brewed in Glasgow using finest natural ingredients, including 100% Scottish barley. It is a golden lager with a well rounded flavour and a distinct smooth maltiness.</p>
			<p>Caledonia Best is a modern, distinctive ale that is balanced, sweet and smooth, with a malty roast flavour and a pleasant hoppy bitterness.</p>
			<p>Heverlee is a premium Belgian Beer, which is endorsed by the Abbey of the order of Prémontré, in the town of Heverlee in Leuven.</p>
			<p>Clonmel 1650, named after one of the most historic events in the town of Clonmel, is a fine example of a pilsner style lager with a slightly fruity estery nose and a subtle hoppy character.</p>
			<p>Other beer brands include Tennent’s Beer aged with Whisky Oak, Tennent’s Extra, Tennent’s Scotch Ale, Tennent’s 1885, Lemon T, Tennent’s T2 and Roundstone.</p>
		</div>
	</div>
</div>
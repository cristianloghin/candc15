<!DOCTYPE html>
<html>
<head>
	<?php require_once('inc/config.php');?>
	<meta charset="UTF-8">
	<title>
		C&amp;C Group - Annual Report 2015
		<?php
			if( isset($_GET['cat']) ) {
				echo ' - '. $categories[$_GET['cat']]; 
			}
		?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<base href="http://candc2015.local/">
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,900&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--link rel="shortcut icon" href="img/favicon.ico"-->
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/functions.js"></script>
	<script src="js/modernizr.js"></script>
	<script src="js/slider_pro.js"></script>
	<script src="js/prod_display.js"></script>
	<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-63697726-1', 'auto');
		  ga('send', 'pageview');
	</script>
</head>
<body <?php get_body_class(); ?>>
	<?php
		
		require_once('inc/mod/shared/mod_shared_header.php'); // page header

		if ( isset($_GET['cat']) ) // subpages
		{
			$folder = $folders[$_GET['cat']][0];

			if(isset($folders[$_GET['cat']][1])) // check if there is a submenu
			{
				$id = $folders[$_GET['cat']][1][$_GET['id']];
				require_once('inc/mod/shared/mod_shared_submenu.php');
				require_once('inc/page/' . $folder . '/' . $folder . '_' . $id . '.php');
				$page_id = $_GET['id'];
			}
			else
			{
				require_once('inc/page/' . $folder . '/' . $folder . '.php');
				$page_id = $_GET['cat'];
			}
		}
		else // home page
		{
			require_once('inc/page/home.php');
			$page_id = 'home';
		}
		require_once('inc/mod/shared/mod_shared_footer.php');
	?>
	<script>
	$(function() {
		init_menus();
	});
	</script>
</body>
</html>
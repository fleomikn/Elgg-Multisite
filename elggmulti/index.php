<?php
	require_once(dirname(__FILE__) . '/multi/start.php');
	
	
	session_start();
	
?>
<html>
	<head>
		<title>Elgg Multisite</title>
		<link rel="stylesheet" href="css.css" type="text/css" />
	</head>
	
	<body>
	<div class="header">
		<?php include(dirname(__FILE__).'/multi/pages/titlebar.php'); ?>
	</div>
	<div class="page_body">
	<?php
		if (elggmulti_countusers() > 0)
		{
		
			$loggedinuser = $_SESSION['user'];
		
			if (!$loggedinuser)
			{
				include(dirname(__FILE__).'/multi/pages/login.php');
			}
			else
			{
				include(dirname(__FILE__).'/multi/pages/mainform.php');
			}
		}
		else
		{
			include(dirname(__FILE__).'/multi/pages/firstuser.php');
		}
	?>
	</div>
	<div class="footer">
		<div class="copyright">ElggMultisite brought to you by <a href="http://www.unofficialelgg.com/" target="_blank">UnofficialElgg.com</a></div>
	</div>
	</body>
</html>
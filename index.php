<!DOCTYPE html>
<html>
<head>
	<title>Sample Website</title>
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
	<header>
		<?php 
			include 'header.php'
		?>
	</header>
	<section class="content">
		<section class="leftBlock">
			<?php 
			include 'node1.php'
			?>
		</section>		
		<aside class="rightBlock">
			<?php 
			include 'block1.php'
		?>
		</aside>
	</section>
	<section class="footer">
		<div class="topFooter">
			<?php 
			include 'menu.php'
		?>
		</div>
		<div class="bottomFooter">
			<h2>Copyrights </h2>
		</div>
	</section>
</body>
</html>
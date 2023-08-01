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
			<div>
				<h1>ABOUT US</h1>
				<hr>
				<p>
					There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
				</p>
			</div>
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
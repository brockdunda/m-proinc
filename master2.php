<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $pagetitle ?></title>
		<link rel="stylesheet" type="text/css" href="/css/styles.css">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
		<!-- Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Droid+Sans|Roboto+Condensed' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div class="container">	
			<?php include "header.php"; ?>
			<div class="row">
				<div class="span4">
					<?php include "leftmenu.php" ?>
				</div>
				<div class="span8">
					<div class="main-content">
						<?php echo $pagemaincontent; ?>
					</div>
				</div>
			</div>
			<?php include ("footer.php");?>						
		</div>
	</body>
	<!-- Scripts Loaded here -->
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</html>
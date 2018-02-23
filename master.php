<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $pagetitle ?></title>
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"> -->
		<link rel="stylesheet" type="text/css" href="/css/styles.css">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
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
</html>
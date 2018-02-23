<?php ob_start(); ?>
	<h1 class="heading-green">Put the versatility of the Trimmer Trolley to work for you!</h1>
	<div id="myCarousel" class="carousel slide">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<!-- <li data-target="#myCarousel" data-slide-to="2" class=""></li> -->
		</ol>
		<div class="carousel-inner">
			<div class="item active">
				<img src="/img/TTpics/TT_edger.jpg" alt="">
				<div class="carousel-caption">
					<p>Easily edge around the patio!</p>
				</div>
			</div>
			<div class="item">
				<img src="/img/TTpics/TT_edge-running.jpg" alt="">
				<div class="carousel-caption">
					<p>Create a defined edge for walkways and paths.</p>
				</div>
			</div>
			<div class="item">
				<img src="/img/TTpics/trimmerlady.jpg" alt="">
				<div class="carousel-caption">					
					<p>Easily mow areas of lawn.</p>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&#8249;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&#8250;</a>
	</div>
	<p>The new Trimmer Trolley is designed to reduce back fatigue, strain and discomfort when mowing, edging
		 or trimming with your line trimmer.</p>
	<p>Trimmer Trolley's patented universal attachment can be adjusted to a nearly infinite number of positions.
		 This creates a stable platform allowing you a uniform mowing height and a consistent depth and width when 
		 edging along sidewalks, driveways, etc.</p>		
	<p>Use two wheels for edging and trimming around rockery. Use the casting wheel for mowing those hard to reach
		 areas - high banks, culverts and areas too small to reach with your lawn mower. The caster mode makes for
		  fast work by allowing you to swing the trimmer side to side resulting in a clean, well groomed job. No 
		  more gouging your turf leaving an unsightly lawn. Attach your blower to quickly remove debris, attach your
		   brush to clean your driveway or patio.</p>
	<p>Breeze through your yard care with ease. Whether your yard is large or small, overgrown or neatly manicured.
		 Trimmer Trolley always makes your line or string trimmer the right tool for the job!</p>
	<p>Trimmer Trolley fits most straight and curved shaft line trimmers, and can easily be swung out of the way 
		into it's stowed position for your trimmer's conventional use.</p>
	<p class="fits">Fits: Briggs, Poulon, Red Max, Bolens, Cub Cadet, Echo, Homelite, Husqvarna, Ryobi, Sears, Stihl,
		 Toro, Troy-Built, Weedeater and more!</p>
<?php	
//  Assign all Page Specific variables
$pagemaincontent = ob_get_contents(); 
ob_end_clean();
$pagetitle = "M-ProInc - Trimmer Trolley - Line trimming made easy!";
include("master.php");
?>

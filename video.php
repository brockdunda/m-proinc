<?php ob_start(); ?>
	<h1 class="heading-green">Trimmer Trolley Videos</h1>
	<p>Here are a few examples of how you can make the Trimmer Trolley work for you.</p>
	<p class="video-heading">Video Introduction</p>
	<div class="video">
		<video width="350" height="auto" controls>
			<source src="video/Intro.mp4" type='video/mp4'/>
		</video>
	</div>	
	<div class="yt-videos">
		<iframe width="480" height="360" src="//www.youtube.com/embed/w8C-ZVWTrq8" frameborder="0" allowfullscreen></iframe>
		<iframe width="480" height="360" src="//www.youtube.com/embed/WrG2VcmtpiQ" frameborder="0" allowfullscreen></iframe>	
	</div>	
	<p class="bold">Background</p>
	<p>This seemed like a good opportunity to share some background as to how these videos came to be.</p>
	<p>All of these videos were shot by Mike the inventor himself. Alone, and armed with his trusty tripod and brand Sony camera, he would set up the scene and go to work.</p>
	<p>For two summers he devoted his free time to perfecting the Trimmer Trolley&copy; prototype, and collected these video clips. Many of these videos are fairly old, and some had to be
		recovered from archives of a long lost and lonely desktop, relegated to the crawlspace almost 8 years ago.</p>
	<p>My father, Mike the inventor, built and developed the Trimmer Trolley&copy; with the hope that some day, his invention might help someone else, as much as it helped him.
		These videos are a testament to the Trimmer Trolley's ability and usefulness as an essential attachment to the line trimmer.</p>
		<p class="video-heading">The Original Video</p>
	<div class="video">
		<video width="350" height="auto" controls>
			<source src="video/OhYeah2.mp4" type='video/mp4'/>
		</video>
	</div>
<?php	
//  Assign all Page Specific variables
$pagemaincontent = ob_get_contents(); 
ob_end_clean();
$pagetitle = "M-ProInc - Trimmer Trolley - Videos";
include("master.php");
?>
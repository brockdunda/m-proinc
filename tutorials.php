<?php ob_start(); ?>
<h1 class="heading-green">Trimmer Trolley Tutorials and Instructions</h1>
<p>You can view the Trimmer Trolley tutorial video below.</p>
<div class="yt-videos">
	<iframe width="480" height="360" src="//www.youtube.com/embed/WrG2VcmtpiQ" frameborder="0" allowfullscreen></iframe>	
</div>
<br />
<p>View the Trimmer Trolley <a href="/docs/Instructions.pdf" target="_blank">intructions</a>.</p>
<?php	
//  Assign all Page Specific variables
$pagemaincontent = ob_get_contents(); 
ob_end_clean();
$pagetitle = "M-ProInc - Trimmer Trolley - Tutorials";
include("master.php");
?>
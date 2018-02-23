<?php 
ob_start();
?>
<p>This page is under construction.</p>
<p>This is a test statement.</p>
<p>Hello world.</p>
<?php	
//  Assign all Page Specific variables
$pagemaincontent = ob_get_contents();
ob_end_clean();
$pagetitle = "FAQ's";
include("master.php");
?>

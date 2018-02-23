<?php ob_start(); ?>

<?php	
//  Assign all Page Specific variables
$pagemaincontent = ob_get_contents(); 
ob_end_clean();
$pagetitle = "M-ProInc - Trimmer Trolley - Line trimming made easy!";
include("master.php");
?>
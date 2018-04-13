<?php ob_start(); ?>
<h1 class="heading-green">About Us</h1>
<p>M-Pro Inc., our parent company, was founded in July 2002 following the successful launch of the Trimmer Trolley System. Our company is based in beautiful Redmond, Washington. We invent, design, and perfect our innovative product line.</p>
<p>The Trimmer Trolley is a new and innovative line trimmer attachment that allows you to mow, edge, and trim with greater ease and precision, while reducing the back and neck pain that often occurs after using heavy and unbalanced line trimmers.</p>
<p>M-Pro Inc. is always receptive to new markets and retailers for our innovative products. Our primary focus is on customer care and quality of products.</p>
<?php
//  Assign all Page Specific variables
$pagemaincontent = ob_get_contents();
ob_end_clean();
$pagetitle = "M-ProInc - Trimmer Trolley - About Us";
include("master.php");
?>

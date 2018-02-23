<?php ob_start(); ?>
<h1 class="heading-green">Get your Trimmer Trolley today for only <span class="price">$34.95</span></h1>
<p>You can order your very own Trimmer Trolley by adding one to your cart to the left.</p>
<p><i class="icon-arrow-left"></i> Order to the left!</p>
<h2 class="subheading">For Businesses or Companies/Bulk Orders</h2>
<p>Own a store or landscaping company? Order a case of 15 Trimmer Trolley's!</p>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
	<input type="hidden" name="cmd" value="_s-xclick">
	<input type="hidden" name="hosted_button_id" value="L5ALR2665HSYW">
	<input type="image" src="https://www.paypalobjects.com/WEBSCR-640-20110306-1/en_US/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
	<img alt="" border="0" src="https://www.paypalobjects.com/WEBSCR-640-20110306-1/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
<h2 class="subheading">For Customers in Australia (and territories)</h2>
<p>Please <a href="http://www.supersealer.net.au/#!/~/product/category=3303474&id=14369046">order here</a>.</p>
<h2 class="subheading">Interested in becoming a distributor?</h2>
<p>To inquire about bulk orders or becoming a distributor, please e-mail the m-pro <a href="mailto:order@m-proinc.com">orders department</a>.</p>
<?php	
//  Assign all Page Specific variables
$pagemaincontent = ob_get_contents(); 
ob_end_clean();
$pagetitle = "M-ProInc - Trimmer Trolley - Order a Trimmer Trolley";
include("master.php");
?>
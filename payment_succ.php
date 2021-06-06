<?php
require('top.php');
if ($_POST) {
	$razorpay_payment_id = $_POST['razorpay_payment_id'];
	
	// echo "Razorpay success ID: ". $razorpay_payment_id;
	print_r($_POST);
}

?>


<div class="row">
	<div class="col-md-12">
		<center>
			<img src="images/logo/payment-successful.png">
		</center>
	</div>
</div>
<?php
require('top.php');
if ($_POST) {
	$razorpay_payment_id = $_POST['razorpay_payment_id'];
	
	// echo "Razorpay success ID: ". $razorpay_payment_id;
	print_r($_POST);
}

$uid=$_SESSION['USER_ID'];
$uname=$_SESSION['USER_NAME'];
$uemail=$_SESSION['USER_EMAIL'];
$aid=get_safe_value($con,$_POST['aid']);
$payment_id=$_POST['razorpay_payment_id'];
// $name=get_safe_value($con,$_POST['name']);
// $gander=get_safe_value($con,$_POST['gander']);
// $day=get_safe_value($con,$_POST['day']);
// $month=get_safe_value($con,$_POST['month']);
// $year=get_safe_value($con,$_POST['year']);
// $hrs=get_safe_value($con,$_POST['hrs']);
// $min=get_safe_value($con,$_POST['min']);
// $sec=get_safe_value($con,$_POST['sec']);
// $pob=get_safe_value($con,$_POST['pob']);

	$date=date('Y-m-d h:i:s');
	mysqli_query($con,"INSERT INTO `booked_astrologers`(`aid`, `uid`, `uname`, `uemail`, `payment_id`, `date`) VALUES ('$aid','$uid','$uname','$uemail','$payment_id','$date')");

?>


<div class="row">
	<div class="col-md-12">
		<center>
			<img src="images/logo/payment-successful.png">
		</center>
	</div>
</div>
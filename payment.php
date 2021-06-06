<?php
require('top.php');
if(!isset($_SESSION['USER_LOGIN'])){
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}


if(isset($_GET['name']) &&  isset($_GET['aid'])){
    $aid=get_safe_value($con,$_GET['aid']);
    $name=get_safe_value($con,$_GET['name']);
$gander=get_safe_value($con,$_GET['gander']);
$day=get_safe_value($con,$_GET['day']);
$month=get_safe_value($con,$_GET['month']);
$year=get_safe_value($con,$_GET['year']);
$hrs=get_safe_value($con,$_GET['hrs']);
$min=get_safe_value($con,$_GET['min']);
$sec=get_safe_value($con,$_GET['sec']);
$pob=get_safe_value($con,$_GET['pob']);
}
?>
<center>
<form action="payment_succ.php" method="POST" class="mtb--100">
    <!-- Note that the amount is in paise = 50 INR -->
    <input type="text" name="aid" value="<?php echo $aid; ?>" hidden>
    <input type="text" name="name" value="<?php echo $name; ?>" hidden>
   <input type="text" name="gander" value="<?php echo $gander; ?>" hidden>
   <input type="text" name="day" value="<?php echo $day; ?>" hidden>
   <input type="text" name="month" value="<?php echo $month; ?>" hidden>
   <input type="text" name="year" value="<?php echo $year; ?>" hidden>
   <input type="text" name="hrs" value="<?php echo $hrs; ?>" hidden>
   <input type="text" name="min" value="<?php echo $min; ?>" hidden>
   <input type="text" name="sec" value="<?php echo $sec; ?>" hidden>
    <input type="text" name="pob" value="<?php echo $pob; ?>" hidden>

    <script
        src="https://checkout.razorpay.com/v1/checkout.js"
        data-key="<?php echo $razor_api_key; ?>"
        data-amount="10000"
        data-buttontext="Pay with Razorpay"
        data-name="<?php echo $razor_api_key; ?>"
        data-description="Test Txn with RazorPay"
        data-image="https://your-awesome-site.com/your_logo.jpg"
        data-prefill.name="Harshil Mathur"
        data-prefill.email="support@razorpay.com"
        data-theme.color="#F37254"
    ></script>
    <input type="hidden" value="Hidden Element" name="hidden">
    </form>
</center>
<?php require('footer.php')?>  
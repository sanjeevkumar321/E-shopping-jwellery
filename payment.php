<?php
require('top.php');
if(!isset($_SESSION['USER_LOGIN'])){
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}


?>

<form action="payment_succ.php" method="POST" class="mtb--100">
    <!-- Note that the amount is in paise = 50 INR -->
    <input type="text" name="xydfd">
    <input type="text" name="xydfdfdyetr">
    <input type="text" name="rfty">
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
<?php require('footer.php')?>  
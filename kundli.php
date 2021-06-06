<?php 
require('top.php');
if(!isset($_SESSION['USER_LOGIN'])){
	?>
	<script>
	window.location.href='login.php';
	</script>
	<?php
}

?>
 <!-- Start Bradcaump area -->
      
        <!-- End Bradcaump area -->
<section class="htc__product__details bg__white ptb--10">
	<div class="container">
		<div class="row">
			<form class="" action="payment.php" method="get" style="margin: 100px;">
	         <div class="row">
		 	 <div class="form-group">

		 	 <div class="col-md-6">
		    <label for="name">Name:</label>
		    <input type="text" class="form-control" name="name">
		    </div>

		    <div class="col-md-6">
		    <label for="gender">Gender:</label>
	         <select class="form-control" name="gander">
	    	<option value="Male">Male</option>
	    	<option  value="Female">Female</option>
	         </select>
		    </div>

		    </div>	 
	        </div>

	  		

	  		<div class="row">
		 	 <div class="form-group">

		 	 <div class="col-md-4">
		    <label for="day">Day:</label>
		    <input type="text" class="form-control" name="day">
		    </div>

		   <div class="col-md-4">
		    <label for="month">Month:</label>
		    <input type="text" class="form-control" name="month">
		    </div>

		    <div class="col-md-4">
		    <label for="year">Year:</label>
		    <input type="text" class="form-control" name="year">
		    </div>
		    
		    </div>	 
	        </div>


	        <div class="row">
		 	 <div class="form-group">

		 	 <div class="col-md-4">
		    <label for="hrs">Hrs:</label>
		    <input type="text" class="form-control" name="hrs">
		    </div>

		   <div class="col-md-4">
		    <label for="min">Min:</label>
		    <input type="text" class="form-control" name="min">
		    </div>

		    <div class="col-md-4">
		    <label for="sec">Sec:</label>
		    <input type="text" class="form-control" name="sec">
		    </div>
		    
		    </div>	 
	        </div>


	         <div class="row pb--30">
		 	 <div class="form-group">
		 	 <div class="col-md-12">
		 	 	 <label for="pob">Place of Bath:</label>
		 	 	<input type="text" name="pob" class="form-control">
		 	 </div>
		 	</div>
		    </div>



	         <div class="row" >
		 	 <div class="form-group">
		 	 <div class="col-md-12">
		 	 <center>	<button class="btn btn-them">Send</button></center>
		 	 </div>
		 	</div>
		    </div>
	</form>
      </div>
</div>

</section>



<?php require('footer.php')?>   
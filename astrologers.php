<?php 
require('top.php');
?>
 <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area">
            <div class="ptb--40">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                            	<h1 style="color: #c29958;">Astrologers</h1>
                               <p class="ptb--30">for a consultatio to solve any kind of problems, career problems, business, financial, health problems and so on. Our astrologer available in our show room and also available in the online prediction that is 100./' perfect according to astrology. So if you are thinking of consulting</p>
                               <p>with a astrologer then you can contact the best astrologer in Agartala</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
<section class="htc__product__details bg__white ptb--10">
	<div class="container">
		<div class="row">
		  <?php
		   $check_user=mysqli_query($con,"SELECT * FROM `booked_astrologers` where uid=".$_SESSION['USER_ID']." ");
		   if (mysqli_num_rows($check_user) > 0) {
		   $row = mysqli_fetch_assoc($check_user);
		   $aid= $row['aid'];
		   $book_date=$row['date'];
		   }
		   else{
		   	 $aid="";
		   $book_date="";
		   }

		  $result=mysqli_query($con,"SELECT * FROM `astrologers` where status=1");
				if (mysqli_num_rows($result) > 0) {
				 while($row = mysqli_fetch_assoc($result)) {
				 	if($aid!="" && $book_date!="" && $aid==$row['id'])
				 	{
				    echo '
				    	 <div class="col-lg-4 text-center">
				          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
				          <h2 class="pt--10">'.$row['aname'].'</h2>
				          <p class="pt--10">'.$row['des'].'</p>
				          <p class="pt--10 pb--20"><a class="btn btn-success" href="https://api.whatsapp.com/send?text=hi&phone='.$row['phone'].'" role="button" >Chart Now</a></p>
				        </div>
				    ';
				    }
				    else{
				    	 echo '
				    	 <div class="col-lg-4 text-center">
				          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
				          <h2 class="pt--10">'.$row['aname'].'</h2>
				          <p class="pt--10">'.$row['des'].'</p>
				          <p class="pt--10 pb--20"><a class="btn btn-default" href="kundli.php?aid='.$row['id'].'" role="button" >Book slot</a></p>
				        </div>
				    ';

				    }

				  }
				} else {
				  echo "0 results";
				}
		?>
      </div>
</div>

</section>



<?php require('footer.php')?>   
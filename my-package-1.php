
       <?php 	
	   include('header.php'); 	
   	   if(isset($_REQUEST['pk1_sub']))	   
	   {
	   $_SESSION['pkg_session']=1;
	   echo "<script>window.location='list-detail.php';</script>";	
	   exit();
	   }	 
  	   ?>
      
								
<form method='POST'>	
		<input type='submit' name='pk1_sub' />
</form>	
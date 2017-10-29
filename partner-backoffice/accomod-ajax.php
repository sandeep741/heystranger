
<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="css/styles.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/core.css" rel="stylesheet" type="text/css">
	<link href="css/components.css" rel="stylesheet" type="text/css">
	<link href="css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="js/pace.min.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="js/select2.min.js"></script>
	<script type="text/javascript" src="js/uniform.min.js"></script>

	<script type="text/javascript" src="js/app.js"></script>
	<script type="text/javascript" src="js/form_layouts.js"></script>
	<!-- /theme JS files -->
<?php
include('header.php');

$getaction=$_GET['ajaxaction'];

switch($getaction)
{
	case "test":			
     _test();
    break;



}

function _test()
{
?>
 <div class="form-group">
									  
									  
											
											<div class="col-md-2">
												<select  data-placeholder="Room Type" class="select select-icons" name='room_type[]' >
												<option value="">Choose Room Type</option>	
													<?php
												$rtqr=mysql_query("select * from room_type order by name asc");
												while($rtqrow=mysql_fetch_assoc($rtqr))
												{
												?>  
							<option data-icon="stumbleupon" value="<?php echo $rtqrow['name']; ?>"><?php echo $rtqrow['name']; ?></option>
							<?php
							}
							?>
                                                
												
												</select>
											</div>
											
										  
										   
                                          <div class="col-md-2">
                                             <select  data-placeholder="Max Guest" class="select-icons" name='cap[]' >
												<option value="">Max Guest</option>	
													<?php
											for($cap=1;$cap<=50;$cap++)
											{
												?>  
							<option data-icon="stumbleupon" value="<?php echo $cap; ?>"><?php echo $cap; ?></option>
							<?php
							}
							?>
                                                
												
												</select>
											 
                                          </div>
										  
										  <div class="col-md-2">
                                             <input type="text" name='avail[]' class="form-control" placeholder="Room Available">
                                          </div>
										  
										  
											
                                          <div class="col-md-2">
                                             <input type="text" name='room_price[]' class="form-control" placeholder="Enter Rates">
                                          </div>
										  
										  <div class="col-md-2">
                                        <input type="text" name='descr[]' class="form-control" placeholder="Description">
                                          </div>
										  
										  <div class="col-md-2">
                                             <input type="file"  class="file-styled" name='room_img[]'>
                                          </div>
										</div>			  
    
<?php
}

?>
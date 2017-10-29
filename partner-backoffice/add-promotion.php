<html lang="en">
<head>
	<?php
	include('header.php'); 	

	if(isset($_GET['aid']) && $_GET['aid']!='')
	{
	$aid=$_GET['aid'];
	} 
	
	?>

	<!-- Global stylesheets -->
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

	<script>
	$(document).ready(function(){
            
								
		$('#add_act').click(function()
		{
		     var form_group ='<div class="form-group">';
				 form_group +='<div class="col-lg-4 col-md-4 col-sm-4">';
				 form_group +='<input type="text" class="form-control"  value="" placeholder="Attraction" name="est_name[]">';
				 form_group +='</div>';
				 form_group +='<div class="col-lg-4 col-md-4 col-sm-4">';
				 form_group +='<input type="text" class="form-control"  value="" placeholder="Activity" name="actvity2[]">';
				 form_group +='</div>';
							
				form_group +='<div class="col-lg-4 col-md-4 col-sm-4">';
				form_group +='<input type="text" class="form-control"  value="" placeholder="Approximate Distance" name="approx_dis[]">';
				form_group +='</div>';
                form_group +='</div>';
            $('#res').append(form_group);
			
		});
		
							
		$('#remove_act').click(function()
		{
            $('#res').children().last().remove();
			
		});
		
});
	</script>
	
	<script>
	$(document).ready(function(){
            
								
		$('#add_room').click(function()
		{
		
		
		
		     var room_group ='<div class="form-group"><div class="col-md-2">';
				room_group +='<select  data-placeholder="Room Type" class="select-icons" name="room_type[]" >';
			    room_group +='<option value="">Choose Room Type</option>';	
													<?php
												$rtqr=mysql_query("select * from room_type order by name asc");
												while($rtqrow=mysql_fetch_assoc($rtqr))
												{
												?>  
				room_group +='<option value="<?php echo $rtqrow["name"]; ?>"><?php echo $rtqrow['name']; ?></option>';
							<?php
							}
							?>
                                                
												
	room_group +='</select></div>';
	
room_group +='<div class="col-md-2"><select  data-placeholder="Max Guest" class="select-icons" name="cap[]" >';
room_group+='<option value="">Max Guest</option>';	
													<?php
											for($cap=1;$cap<=20;$cap++)
											{
												?>  
			room_group +='<option  value="<?php echo $cap; ?>"><?php echo $cap; ?></option>';
							<?php
							}
							?>
                            room_group +='</select></div>';	
							
	room_group +='<div class="col-md-2"><input type="text" name="avail[]" class="form-control" placeholder="Room Available"></div>';							
	
	room_group +='<div class="col-md-2"><input type="text" name="room_price[]" class="form-control" placeholder="Enter Rates"></div>';

room_group +='<div class="col-md-2"><input type="text" name="descr[]" class="form-control" placeholder="Description"></div>';												

room_group +='<div class="col-md-2"><input type="file" name="room_img[]" class="file-styled" placeholder="room_img[]"></div>';										  
										  
            $('#room_res').append(room_group);
			
		});
		
							
		$('#remove_room').click(function()
		{
            $('#room_res').children().last().remove();
			
		});
		
});
	</script>
	
	
	
	<script>
	$(document).ready(function(){
            
								
		$('#add_extra').click(function()
		{
		     var extra_group ='<div class="form-group">';
			
		extra_group +='<div class="col-md-3">';
				extra_group +='<select  data-placeholder="Item" class="select-icons" name="item[]" >';
				 extra_group +='<option value="">Item</option>';	
													<?php
												$itt=mysql_query("select * from item order by name asc");
												while($ittrow=mysql_fetch_assoc($itt))
												{
												?>  
				extra_group +='<option value="<?php echo $ittrow["name"]; ?>"><?php echo $ittrow['name']; ?></option>';
							<?php
							}
							?>
                                                
	    extra_group +='</select></div>';
		
		extra_group +='<div class="col-md-3"><input type="text" name="extra_price[]" class="form-control" placeholder="Enter Price"></div>';

		extra_group +='<div class="col-md-3"><input type="file" name="extra_img[]" class="file-styled" placeholder="Enter Price"></div>';

		extra_group +='<div class="col-md-3"><select data-placeholder="Extra Condition" class="select-icons" name="extra_cond[]" ><option data-icon="stumbleupon" value="">Choose Condition</option><option data-icon="stumbleupon" value="yes">Yes</option><option data-icon="stumbleupon" value="No">No</option></select></div>';	
			 
			 
            $('#extra_res').append(extra_group);
			
		});
		
							
		$('#remove_extra').click(function()
		{
            $('#extra_res').children().last().remove();
			
		});
		
});
	</script>
	
	
	
<script>
$(document).ready(function(){	
$('#cv').css("display","none");		

$('#condit').change(function()
		{
        var co=$('#condit').val();
		
		if(co=='Yes')
		{
		$('#cv').css("display","block");
		}
		else
		{
		$('#cv').css("display","none");
		}
		
			
		});
});
</script>	


<script>
$(document).ready(function(){	
var b=$('#sht').val();

if(b=='Yes')
{
	$('#pick').css("display","block");
}

$('#sht').change(function()
		{
        var conn=$('#sht').val();
		
		if(conn=='Yes')
		{
		$('#pick').css("display","block");
		}
		else
		{
		$('#pd').val('');
		$('#pt').val('');
		$('#padd').val('');
		$('#pick').css("display","none");
		}
		
			
		});
});
</script>	



<script>
$(document).ready(function(){	
var bm=$('#vid_con').val();

if(bm=='Yes')
{
	$('#viddiv').css("display","block");
}

$('#vid_con').change(function()
		{
        var conn2=$('#vid_con').val();
		
		if(conn2=='Yes')
		{
		$('#viddiv').css("display","block");
		}
		else
		{
		$('#vidtext').val('');
		
		$('#viddiv').css("display","none");
		}
		
			
		});
});
</script>
	
	
	<script>
	$(document).ready(function(){
            
								
		$('#add_venue').click(function()
		{
		     var venue_group ='<div class="form-group">';
											
				 venue_group +='<div class="col-md-2"><input type="text" name="venue_name[]" class="form-control" placeholder="Enter Venue Name"></div>';
				 
				 venue_group +='<div class="col-md-2"><select  data-placeholder="Capacity" class="select-icons" name="venue_avail[]" ><option value="">Capacity</option><option  value="15">1-15</option><option  value="30">15-30</option><option  value="50">30-50</option><option  value="100">50-100</option><option  value="200">100-200</option><option  value="500">200-500</option><option  value="500+">More Than 500</option></select></div>';
				 
				 venue_group ='<div class="form-group"><div class="col-md-2">';
				venue_group +='<select  data-placeholder="Feature" class="select-icons" name="ven_feat[]" >';
				 venue_group +='<option value="">Feature</option>';	
													<?php
												$fr=mysql_query("select * from features order by name asc");
												while($frow=mysql_fetch_assoc($fr))
												{
												?>  
				venue_group +='<option value="<?php echo $frow["name"]; ?>"><?php echo $frow['name']; ?></option>';
							<?php
							}
							?>
                                                
	venue_group +='</select></div>';
											
				venue_group+='<div class="col-md-2"><input type="text" name="venue_price[]" class="form-control" placeholder="Enter Venue Rates"></div>';							
											
										  
				venue_group+='<div class="col-md-3"><input type="text" name="venue_descr[]" class="form-control" placeholder="Description"></div>';						   
                                          
				venue_group+='<div class="col-md-3"><input type="file"  class="file-styled" name="venue_img[]"></div></div>';						  
										  
										  
										  
			 
			 
            $('#venue_res').append(venue_group);
			
		});
		
							
		$('#remove_venue').click(function()
		{
            $('#venue_res').children().last().remove();
			
		});
		
});
	</script>	
	
		
	<script>
	$(document).ready(function(){
            
								
		$('#add_confer').click(function()
		{
		
		     var confer_group ='<div class="form-group"><div class="col-md-2"><input type="text" name="confer_name[]" class="form-control" placeholder="Enter Conference Name"></div>';
			 
			 confer_group +='<div class="col-md-2"><select  data-placeholder="Capacity" class="select-icons" name="confer_avail[]" ><option value="">Capacity</option><option  value="100">1-100</option><option  value="500">100-500</option><option  value="1000">500-1000</option><option  value="5000">1000-5000</option><option  value="10000">5000-10000</option><option  value="10000+">More Than 10000</option></select></div>';
			 
			 confer_group ='<div class="form-group"><div class="col-md-2">';
				confer_group +='<select  data-placeholder="Feature" class="select-icons" name="con_feat[]" >';
				 confer_group +='<option value="">Feature</option>';	
													<?php
												$frf=mysql_query("select * from features order by name asc");
												while($ffrow=mysql_fetch_assoc($frf))
												{
												?>  
				confer_group +='<option value="<?php echo $ffrow["name"]; ?>"><?php echo $ffrow['name']; ?></option>';
							<?php
							}
							?>
                                                
	confer_group +='</select></div>';
			 
			 confer_group +='<div class="col-md-2"><input type="text" name="confer_price[]" class="form-control" placeholder="Enter Conference Rates"></div>';
											
			
			 confer_group +='<div class="col-md-2"><input type="text" name="confer_descr[]" class="form-control" placeholder="Description"></div>';
			
			confer_group +='<div class="col-md-2"><input type="file"  class="file-styled" name="confer_img[]"></div></div>';						  
										  
										  
										  
			 
			 
            $('#confer_res').append(confer_group);
			
		});
		
							
		$('#remove_confer').click(function()
		{
            $('#confer_res').children().last().remove();
			
		});
		
});
	</script>
	
</head>

<body>

	<!-- Main navbar -->
	<?php include('nav.php'); ?>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<?php include('sidebar.php'); ?>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
		<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Accommodation </span></h4>
						</div>

					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.php"><i class="icon-home2 position-left"></i> Home</a></li>
							
							<li class="active">Promotion</li>
							<li class="active">Add Promotion</li>
				
						</ul>
						
						<ul class="breadcrumb">
                        <?php if($_SESSION['mymsg']!=''){ ?><li style='color:green;font-weight:bold'><?php echo $_SESSION['mymsg']; unset($_SESSION['mymsg']); ?> </li><?php } ?>
<?php if($_SESSION['myerror']!=''){ ?><li style='color:red;font-weight:bold'><?php echo $_SESSION['myerror']; unset($_SESSION['myerror']); ?> </li><?php } ?>
                     </ul>

					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">
					
					<div class="row">
                     <div class="tabbable tab-content-bordered content-group-lg">
                        <ul class="nav nav-tabs nav-lg nav-tabs-highlight">
                           <li class="active">
                              <a href="#james" data-toggle="tab">
                              Promotion Detail <span class="status-mark position-right border-danger"></span>
                              </a>
                           </li>
						   <li>
                              <a href="#rooms" data-toggle="tab">
                              Rooms <span class="status-mark position-right border-danger"></span>
                              </a>
                           </li>
						   <li>
                              <a href="#activities" data-toggle="tab">
                              Activities <span class="status-mark position-right border-success"></span>
                              </a>
                           </li>
						   
						   <li>
                              <a href="#polici" data-toggle="tab">
                              Policies<span class="status-mark position-right border-success"></span>
                              </a>
                           </li>
						   
                           <li>
                              <a href="#william" data-toggle="tab">
                              Keywords & Meta Tags <span class="status-mark position-right border-danger"></span>
                              </a>
                           </li>
                           <li>
                              <a href="#jared" data-toggle="tab">
                              Video & Map <span class="status-mark position-right border-success"></span>
                              </a>
                           </li>
						   <li>
                              <a href="#promot" data-toggle="tab">
                              Promote Listing <span class="status-mark position-right border-success"></span>
                              </a>
                           </li>
                        
                        </ul>
						<?php
						if(isset($aid) && $aid!='')
						{
						
			$acc_data=mysql_fetch_assoc(mysql_query("select * from promotion_detail where id='$aid'"));
						
			$amenity_array=explode(",",$acc_data['amenity']);			
			$activity_array=explode(",",$acc_data['activity']);			
			$social_array=explode(",",$acc_data['social_pkg']);			
			$payment_array=explode(",",$acc_data['payment_type']);			
						
						?>
						<form class="form-horizontal" method='POST' action='action-page.php' enctype='multipart/form-data'>
                        <div class="tab-content">
						<input type='hidden' name='action' value="edit_promotion" />
						<input type='hidden' name='hid' value="<?php echo $aid; ?>" />
                           <div class="tab-pane fade in active has-padding" id="james">
                              
                                 <div class="panel panel-flat">
                                    <div class="panel-heading">
                                       <h5 class="panel-title">Accommodation Detail</h5>
                                    </div>
                                    <div class="panel-body">
										
										<div class="form-group">
													
										<div class="col-lg-6 col-md-6 col-sm-12">
				<input type="text" class="form-control" value="<?php echo $acc_data['accomod_name']; ?>"  placeholder="Accommodation Name" name='acc_name'>
				
										</div>
											
										<div class="col-lg-6 col-md-6 col-sm-12">
												<select class="select"  name='type_accommodation'>
												  <option value="">Choose Type of Accommodation</option>
												<?php
												$acoomqr=mysql_query("select * from accomodation order by name asc");
												while($accrow=mysql_fetch_assoc($acoomqr))
												{
												?>  
							<option value="<?php echo $accrow['name']; ?>" <?php if($acc_data['accomod_type']==$accrow['name']){ echo "selected"; } ?> ><?php echo $accrow['name']; ?></option>
                                                <?php
												}
												?>
												</select>
											</div>			
											
										</div>
										
										<div class="form-group">
													
										<div class="col-lg-6 col-md-6 col-sm-12">
				<select class="select"  name='rating'>
										<option value="">Star Rating</option>
												<?php
												for($sr=0;$sr<=6;$sr++)
												{
												?>
										<option <?php if($acc_data['rating']==$sr) { ?> selected <?php } ?> value="<?php echo $sr; ?>"><?php echo $sr; ?></option>		
												<?php
												}
												?>
												</select>
				
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
							<input type="text" class="form-control" value="<?php echo $acc_data['country']; ?>" placeholder="Country" name='country'>			
				
				
										</div>
											
										</div>
										
										<div class="form-group">
													
										<div class="col-lg-6 col-md-6 col-sm-12">
				<input type="text" class="form-control" value="<?php echo $acc_data['state']; ?>" placeholder=" Province / State" name='state'>
				
										</div>
										
										
										<div class="col-lg-6 col-md-6 col-sm-12">
				<input type="text" class="form-control" value="<?php echo $acc_data['city']; ?>"  placeholder="City / Town" name='city'>
				
										</div>
										
											
										</div>
										
										<div class="form-group">
										
										
										<div class="col-lg-6 col-md-6 col-sm-12">
				<input type="text" class="form-control" value="<?php echo $acc_data['street_address']; ?>" placeholder="Street Address" name='street_address'>
				
										</div>
													
										<div class="col-lg-6 col-md-6 col-sm-12">
										<input type="text" class="form-control"  placeholder="Suburb / Area" value="<?php echo $acc_data['area']; ?>" name='area'>
				
				
										</div>
										
											
										</div>
										
										<div class="form-group">
													
										<div class="col-lg-6 col-md-6 col-sm-12">
				<input type="text" value="<?php echo $acc_data['contact_no']; ?>" class="form-control"  placeholder="Contact No." name='contact_no'>
				
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
				<input type="text" value="<?php echo $acc_data['alternate_no']; ?>" class="form-control"  placeholder="Alternate No." name='alternate'>
				
										</div>
											
										</div>
										
										<div class="form-group">
													
										<div class="col-lg-6 col-md-6 col-sm-12">
				<input type="text" class="form-control" value="<?php echo $acc_data['reserve_email']; ?>"  placeholder="Reservation Email" name='reserv_email'>
				
										</div>
										
											
										</div>

								

										<div class="form-group">
											<label class="col-lg-3 control-label">Accommodation Detail:</label>
											<div class="col-lg-9">
									<textarea rows="5" cols="5" name='accommod_detail'  class="form-control" placeholder="Enter Accommodation Description"><?php echo $acc_data['detail']; ?></textarea>
											</div>
										</div>
										
										<div class="form-group">
													
										<div class="col-lg-6 col-md-6 col-sm-12">
										<input type="file"  class="file-styled" name='acc_img1'>
										<?php
										if($acc_data['vc_img1']!='')
										{
										?>
										<img width='100' src="img-accomo/<?php echo $acc_data['acc_img1']; ?>" />
										<?php
										}
										?>
							<input type="hidden"  name='old_acc_img1' value="<?php echo $acc_data['acc_img1']; ?>">
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
				                        <input type="file"  class="file-styled" name='acc_img2'>
										<?php
										if($acc_data['vc_img2']!='')
										{
										?>
										<img width='100' src="img-accomo/<?php echo $acc_data['acc_img2']; ?>" />
										<?php
										}
										?>
										<input type="hidden"  name='old_acc_img2' value="<?php echo $acc_data['acc_img2']; ?>">
										</div>
											
										</div>
										
										<div class="form-group">
													
										<div class="col-lg-6 col-md-6 col-sm-12">
										<input type="file"  class="file-styled" name='acc_img3'>
										<?php
										if($acc_data['vc_img3']!='')
										{
										?>
										<img width='100' src="img-accomo/<?php echo $acc_data['acc_img3']; ?>" />
										<?php
										}
										?>
										<input type="hidden"  name='old_acc_img3' value="<?php echo $acc_data['acc_img3']; ?>">
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
				                        <input type="file"  class="file-styled" name='acc_img4'>
										<?php
										if($acc_data['vc_img4']!='')
										{
										?>
										<img width='100' src="img-accomo/<?php echo $acc_data['acc_img4']; ?>" />
										<?php
										}
										?>
										<input type="hidden"  name='old_acc_img4' value="<?php echo $acc_data['acc_img4']; ?>">
										</div>
											
										</div>
										<div class="form-group">
													
										<div class="col-lg-6 col-md-6 col-sm-12">
										<input type="file"  class="file-styled" name='acc_img5'>
										<?php
										if($acc_data['vc_img5']!='')
										{
										?>
										<img width='100' src="img-accomo/<?php echo $acc_data['acc_img5']; ?>" />
										<?php
										}
										?>
										<input type="hidden"  name='old_acc_img5' value="<?php echo $acc_data['acc_img5']; ?>">
										</div>
										
											
										</div>
										
											
									</div>
                                 </div>
                              
                           </div>
						   
						   <div class="tab-pane fade has-padding" id="rooms">
                              
                                 <div class="panel panel-flat">
                                    <div class="panel-heading">
                                       <h5 class="panel-title">Rooms</h5>
                                    </div>
                                    <div class="panel-body">
                                      <?php
							$royy=mysql_query("select * from room_data where acco_id='$aid'");
							while($rorow=mysql_fetch_assoc($royy))
							{
							?>
                                      <div class="form-group">
									  
									  
											
											<div class="col-md-2">
												<select  data-placeholder="Room Type" class="select-icons" name='room_type[]' >
												<option value="">Choose Room Type</option>	
													<?php
												$rtqr=mysql_query("select * from room_type order by name asc");
												while($rtqrow=mysql_fetch_assoc($rtqr))
												{
												?>  
							<option <?php if($rorow['room_type']==$rtqrow['name']) { echo "selected"; } ?>  data-icon="stumbleupon" value="<?php echo $rtqrow['name']; ?>"><?php echo $rtqrow['name']; ?></option>
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
							<option <?php if($rorow['cap']==$cap){ ?> selected <?php } ?>  data-icon="stumbleupon" value="<?php echo $cap; ?>"><?php echo $cap; ?></option>
							<?php
							}
							?>
                                                
												
												</select>
                                          </div>
										  
										  <div class="col-md-2">
                                             <input type="text" name='avail[]' value="<?php echo $rorow['avail']; ?>" class="form-control" placeholder="Room Available">
                                          </div>
										  
										  <div class="col-md-2">
                              <input type="text"  value="<?php echo $rorow['price']; ?>" name='room_price[]' class="form-control" placeholder="Enter Rates">
                                          </div>
										  
										  <div class="col-md-2">
                                        <input type="text" value="<?php echo $rorow['description']; ?>" name='descr[]' class="form-control" placeholder="Description">
                                          </div>
										  
										  <div class="col-md-2">
                                             <input type="file"  class="file-styled" name='room_img[]'>
									<img height="50" src="img-room/<?php echo $rorow['imgg']; ?>" width='50' /> 
									
									<input type='hidden' name="roomoldimg[]" value="<?php echo $rorow['imgg']; ?>" />
                                          </div>
										</div>
										<?php
										}
										?>
										
							<div id='room_res'>
							
							</div>
							<a href="javascript:void(0)" id="add_room" class='btn btn-Success' >Add</a>
							<a href="javascript:void(0)" id="remove_room" class='btn btn-danger' >Remove</a>
							
							
							
							<br>			
							<br>			
							<div class="form-group">
											
							<div class="col-md-6">
							<textarea rows="4" cols="4" name='room_detail'  class="form-control" placeholder="Room Detail"><?php echo $acc_data['room_description']; ?></textarea>					
							</div>
							
							</div>
							<h6>Time Frame</h6>
							<div class="form-group">
							
							<div class="col-md-6">
						<input type="text" name='from_timeframe' value="<?php echo $acc_data['from_timeframe']; ?>" class="form-control" placeholder="">					
							</div>
							
							<div class="col-md-6">
							<input type="text" name='to_timeframe' value="<?php echo $acc_data['to_timeframe']; ?>" class="form-control" placeholder="">					
							</div>
											
							</div>	
							
										
                            <h5>Do you have Venue & Conference facilities at this property</h5>			
							
							<div class="form-group">
											
											<div class="col-md-2">
												<select  id='condit' data-placeholder="Choose Here" class="select-icons" name="ven_con_cond" >
												<option value="">Choose Here</option>	
													
							            <option data-icon="stumbleupon" <?php if($acc_data['ven_con_cond']=='Yes'){ echo "selected"; } ?>  value="Yes">Yes</option>
							            <option data-icon="stumbleupon" <?php if($acc_data['ven_con_cond']=='No'){ echo "selected"; } ?> value="No">No</option>
												
												</select>
											</div>
											
										</div>
									<!--dd-->

									          <?php
							$venyy=mysql_query("select * from venue_data where acco_id='$aid'");
							while($venrow=mysql_fetch_assoc($venyy))
							{
							?>
                                      <div class="form-group">
										
										
										<div class="col-md-2">
                              <input type="text"  value="<?php echo $venrow['venue_name']; ?>" name='venue_name[]' class="form-control" placeholder="Enter Venue Price">
                                          </div>
										<div class="col-md-2">	
										<select  data-placeholder="Capacity" class="select-icons" name='venue_avail[]' >
												<option value="">Capacity</option>	
									
							                    <option <?php if($venrow['venue_avail']=='15'){ ?>selected<?php } ?>  value="15">1-15</option>
							                    <option <?php if($venrow['venue_avail']=='30'){ ?>selected<?php } ?> value="30">15-30</option>
							                    <option  <?php if($venrow['venue_avail']=='50'){ ?>selected<?php } ?> value="50">30-50</option>
							                    <option  <?php if($venrow['venue_avail']=='100'){ ?>selected<?php } ?> value="100">50-100</option>
							                    <option  <?php if($venrow['venue_avail']=='200'){ ?>selected<?php } ?> value="200">100-200</option>
							                    <option  <?php if($venrow['venue_avail']=='500'){ ?>selected<?php } ?> value="500">200-500</option>
							                    <option  <?php if($venrow['venue_avail']=='500+'){ ?>selected<?php } ?> value="500+">More Than 500</option>
						
                                                
												
												</select>
											</div>
											
											<div class="col-md-2">
												<select  data-placeholder="Feature" class="select-icons" name='ven_feat[]' >
												<option value="">Feature</option>	
													<?php
												$vfqr=mysql_query("select * from features order by name asc");
												while($vqrrow=mysql_fetch_assoc($vfqr))
												{
												?>  
							<option <?php if($venrow['feat']==$vqrrow['name']) { ?>selected<?php } ?> value="<?php echo $vqrrow['name']; ?>"><?php echo $vqrrow['name']; ?></option>
							<?php
							}
							?>
                                                
												
												</select>
											</div>
											
                                          <div class="col-md-2">
                              <input type="text"  value="<?php echo $venrow['venue_price']; ?>" name='venue_price[]' class="form-control" placeholder="Enter Venue Rates">
                                          </div>
										  
										  
										  <div class="col-md-2">
                                        <input type="text" value="<?php echo $venrow['venue_descr']; ?>" name='venue_descr[]' class="form-control" placeholder="Description">
                                          </div>
										  
										  <div class="col-md-2">
                                             <input type="file"  class="file-styled" name='venue_img[]'>
									<img height="50" src="img-venue/<?php echo $venrow['venue_img']; ?>" width='50' /> 
									
									
                                          </div>
										</div>
										<?php
										}
										?>
										
							<div id='venue_res'>
							
							</div>
							<a href="javascript:void(0)" id="add_venue" class='btn btn-Success' >Add</a>
							<a href="javascript:void(0)" id="remove_venue" class='btn btn-danger' >Remove</a>
									
									
									<!--dd-->
									
									<h6>Conference</h6>
									
									
									          <?php
							$conyy=mysql_query("select * from confer_data where acco_id='$aid'");
							while($conrow=mysql_fetch_assoc($conyy))
							{
							?>
                                      <div class="form-group">
										
										
										<div class="col-md-2">
                              <input type="text"  value="<?php echo $conrow['confer_name']; ?>" name='confer_name[]' class="form-control" placeholder="Enter Conference Price">
                                          </div>
											
										  
										  <div class="col-md-2">	
										<select  data-placeholder="Capacity" class="select-icons" name='confer_avail[]' >
												<option value="">Capacity</option>	
						
												<option  <?php if($conrow['confer_avail']=='100'){ ?>selected<?php } ?>  value="100">1-100</option>
							                    <option  <?php if($conrow['confer_avail']=='500'){ ?>selected<?php } ?>value="500">100-500</option>
							                    <option <?php if($conrow['confer_avail']=='1000'){ ?>selected<?php } ?>  value="1000">500-1000</option>
							                    <option <?php if($conrow['confer_avail']=='5000'){ ?>selected<?php } ?>  value="5000">1000-5000</option>
							                    <option <?php if($conrow['confer_avail']=='10000'){ ?>selected<?php } ?>  value="10000">5000-10000</option>
							                    <option <?php if($conrow['confer_avail']=='10000+'){ ?>selected<?php } ?>  value="10000+">More Than 10000</option>
						
                                                
												
												</select>
											</div>
											
											<div class="col-md-2">
												<select  data-placeholder="Feature" class="select-icons" name='con_feat[]' >
												<option value="">Feature</option>	
													<?php
												$fqr=mysql_query("select * from features order by name asc");
												while($fqrrow=mysql_fetch_assoc($fqr))
												{
												?>  
							<option <?php if($conrow['feat']==$fqrrow['name']) { ?>selected<?php } ?> value="<?php echo $fqrrow['name']; ?>"><?php echo $fqrrow['name']; ?></option>
							<?php
							}
							?>
                                                
												
												</select>
											</div>
											
											
											
                                          <div class="col-md-2">
                              <input type="text"  value="<?php echo $conrow['confer_price']; ?>" name='confer_price[]' class="form-control" placeholder="Enter Conference Rates">
                                          </div>
										  
										  
										  <div class="col-md-2">
                                        <input type="text" value="<?php echo $conrow['confer_descr']; ?>" name='confer_descr[]' class="form-control" placeholder="Description">
                                          </div>
										  
										  <div class="col-md-2">
                                             <input type="file"  class="file-styled" name='confer_img[]'>
									<img height="50" src="img-confer/<?php echo $conrow['venue_img']; ?>" width='50' /> 
									
									
                                          </div>
										</div>
										<?php
										}
										?>
										
							<div id='confer_res'>
							
							</div>
							<a href="javascript:void(0)" id="add_confer" class='btn btn-Success' >Add</a>
							<a href="javascript:void(0)" id="remove_confer" class='btn btn-danger' >Remove</a>
									
									
									
							
                                    </div>
                                 </div>
                              
                           </div>
						   
						   
						    <div class="tab-pane fade has-padding" id="activities">
                              
                                 <div class="panel panel-flat">
                                    <div class="panel-heading">
                                       <h5 class="panel-title">Activities</h5>
                                    </div>
                                    <div class="panel-body">
                                      
								
										<div class="form-group">
											<label class="col-lg-2 control-label">Amenity on property :</label>
											<div class="col-lg-10">
												<select multiple="multiple" data-placeholder="Amenity on property" class="select-icons" name='amenity[]' >
													<optgroup label="Services">
													<?php
												$amenityqr=mysql_query("select * from amenity order by name asc");
												while($amenityqrow=mysql_fetch_assoc($amenityqr))
												{
												?>  
							<option data-icon="stumbleupon" <?php if(in_array($amenityqrow['name'],$amenity_array)) { echo "selected"; } ?> value="<?php echo $amenityqrow['name']; ?>"><?php echo $amenityqrow['name']; ?></option>
                                                <?php
												}
												?>	
													</optgroup>
													
												
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="col-lg-2 control-label">Activity on Property :</label>
											<div class="col-lg-10">
												<select multiple="multiple" data-placeholder="Activity on Property" class="select-icons" name='activity[]' >
													<optgroup label="Services">
														
													<?php
												$actqr=mysql_query("select * from activity order by name asc");
												while($actrow=mysql_fetch_assoc($actqr))
												{
												?>  
							<option <?php if(in_array($actrow['name'],$activity_array)) { echo "selected"; } ?> data-icon="stumbleupon" value="<?php echo $actrow['name']; ?>"><?php echo $actrow['name']; ?></option>
                                                <?php
												}
												?>
                            
													</optgroup>
													
												
												</select>
											</div>
										</div> 
										
							<h5>Popular Attraction and surroundings: Please provide as many details as possible</h5>
							
							<?php
							$actqryy=mysql_query("select * from accommod_activity where acco_id='$aid'");
							while($arow=mysql_fetch_assoc($actqryy))
							{
							?>
							
							<div class="form-group">
							<div class="col-lg-4 col-md-4 col-sm-4">
							<input type="text" class="form-control"  value="<?php echo $arow['establish']; ?>" placeholder="Attraction" name='est_name[]'>
							</div>
							
							<div class="col-lg-4 col-md-4 col-sm-4">
							<input type="text" class="form-control"  value="<?php echo $arow['activv']; ?>" placeholder="Activity" name='actvity2[]'>
							</div>
							
							<div class="col-lg-4 col-md-4 col-sm-4">
							<input type="text" class="form-control"  value="<?php echo $arow['approx_dis']; ?>" placeholder="Approximate Distance" name='approx_dis[]'>
							</div>
							</div>
							<?php
							}
							?>
							<div id='res'>
							
							</div>
							<a href="javascript:void(0)" id="add_act" class='btn btn-Success' >Add More</a>
							<a href="javascript:void(0)" id="remove_act" class='btn btn-danger' >Remove</a>
                                       
                                  
								
							
								<div class="panel-heading">
                                 <h6 class="panel-title">Transport</h6>
                                 </div> 			
                                 
								 
                              <div class="form-group">
											<label class="col-lg-2 control-label">Own Shuttle Service :</label>
											<div class="col-lg-12">
										<select  data-placeholder="Shuttle Service" id='sht' class="select-icons" name='shuttle' >
													
												 <option  value="">Services</option>
			<option <?php if($acc_data['shuttle_service']=='Yes'){ echo "selected"; } ?> value="Yes">Yes</option>
			<option <?php if($acc_data['shuttle_service']=='No'){ echo "selected"; } ?> value="No">No</option>
                                                
													
													
												
												</select>
											</div>
										</div>
									
										<div class="form-group" id='pick' style='display:none'>
											
									<div class="col-md-4">
				<input type="text" name='pickdate' value="<?php echo $acc_data['pickdate']; ?>" class="form-control" id='pd' placeholder="Choose Date">	
									</div>
									
									<div class="col-md-4">
				<input type="text" name='picktime' value="<?php echo $acc_data['picktime']; ?>" class="form-control" id='pt' placeholder="Choose Picktime">	
									</div>
									<div class="col-md-4">
				<input type="text" name='pickadd' class="form-control" id='padd' value="<?php echo $acc_data['pickadd']; ?>" placeholder="Enter Address">	
									</div>
										</div>
										
										</div>
							  
                           </div>
						   </div>
						   
						   
                           <div class="tab-pane fade has-padding" id="polici">
                              
                                 <div class="panel panel-flat">
                                    <div class="panel-heading">
                                       <h5 class="panel-title">Policies</h5>
                                    </div>
                                    <div class="panel-body">
                                      
                                      
                                       <div class="form-group">
                                          
                                          <div class="col-lg-6">
                           <input type="text" name='deposite' readonly value="<?php echo $acc_data['deposit']; ?>" class="form-control" placeholder="Enter Deposit">
                                          </div>
										  
										  
										                    	<div class="col-lg-6">
			<input type="text" name='cancel' value="<?php echo $acc_data['cancel']; ?>" class="form-control" placeholder="Enter Cancellation Policy">
											                    </div>
                                       </div>
									   
									   <h6> 
									   PLEASE TAKE NOTE: Once client have confirmed their booking “Hey Stranger” will charge 100% deposit. Deposit will be paid to you less “Hey Stranger” pre selected commission excl vat.
In the event of cancellation, your cancellation policy as displayed on “Hey Stranger” will apply.
“Hey Stranger” will retain their commission, due to a finders fee and will therefore not be responsible for any payments to your clients
Cancellation will be settled between you and the client according to your terms and are sorely your responsibility
									   </h6>
                                       
									   <div class="form-group">
                                          
                                          <div class="col-lg-6">
                                <input type="text" value="<?php echo $acc_data['timein']; ?>" name='timein' class="form-control" placeholder="Enter Time In">
                                          </div>
										  
										  
										                    	<div class="col-lg-6">
			<input type="text" name='timeout' value="<?php echo $acc_data['timeout']; ?>" class="form-control" placeholder="Enter Time Out">
											                    </div>
                                       </div>
									   
									   <div class="form-group">
                                          
                                          <div class="col-lg-6">
                                             <input type="text" value="<?php echo $acc_data['child_ext']; ?>" name='child_extra' class="form-control" placeholder="Children & Extra">
                                          </div>
										  
										  
										                    	<div class="col-lg-6">
			<input type="text" name='pets' class="form-control" value="<?php echo $acc_data['pets']; ?>" placeholder="Pets">
											                    </div>
                                       </div>
									   
									   <div class="form-group">
                                          
                                          <div class="col-lg-6">
                                            <select data-placeholder="payment_type" class="select-icons" name='payment_type' multiple>
							<option data-icon="stumbleupon" value="">Payment Type</option>					 

									         <?php
												$ptqr=mysql_query("select * from paymode order by name asc");
												while($ptqrow=mysql_fetch_assoc($ptqr))
												{
												?>  
							<option <?php if(in_array($ptqrow['name'],$payment_array)) { echo "selected"; } ?> value="<?php echo $ptqrow['name']; ?>"><?php echo $ptqrow['name']; ?></option>
                                                <?php
												}
												?>	
							
												</select>
                                          </div>
										  
										  
					                	<div class="col-lg-6">
			<input type="text" name='lang_spoken' value="<?php echo $acc_data['lang_spoken']; ?>" class="form-control" placeholder="Language Spoken At Facility">
									    </div>
                                       </div>
									   
									   <div class="form-group">
                                          
                                          <div class="col-lg-4">
                                            <select data-placeholder="Duration Of Accommodation" class="select-icons" name='acco_duration' >
											<option data-icon="stumbleupon" value="">Choose Duration</option>
							<option data-icon="stumbleupon" <?php if($acc_data['duration']=='Long Term'){ echo "selected"; } ?> value="Long Term">Long Term</option>					 
							<option data-icon="stumbleupon" <?php if($acc_data['duration']=='Short Term'){ echo "selected"; } ?> value="Short Term">Short Term</option>
							<option data-icon="stumbleupon" <?php if($acc_data['duration']=='Both'){ echo "selected"; } ?> value="Both">Both</option>
                                                
												</select>
                                          </div>
										  
										  <div class="col-lg-4">
                                            <select data-placeholder="Corporate Deals" class="select-icons" name='corpo_deals' >
											<option data-icon="stumbleupon" value="">Choose Corporate Deals</option>
									 
							<option data-icon="stumbleupon" <?php if($acc_data['corporate_deals']=='Yes'){ echo "selected"; } ?> value="Yes">Yes</option>
							<option data-icon="stumbleupon" <?php if($acc_data['corporate_deals']=='No'){ echo "selected"; } ?> value="No">No</option>
                                                
												</select>
                                          </div>
										  
										  <div class="col-lg-4">
                                            <select data-placeholder="Contractors Deals" class="select-icons" name='contract_deal' >
							<option data-icon="stumbleupon" value="">Choose Contractor Deals</option>
									 
							<option data-icon="stumbleupon" <?php if($acc_data['contract_deals']=='Yes'){ echo "selected"; } ?> value="Yes">Yes</option>
							<option data-icon="stumbleupon" <?php if($acc_data['contract_deals']=='No'){ echo "selected"; } ?> value="No">No</option>
                                                
                                                
												</select>
                                          </div>
										  
										  
                                       </div>
									   
									   
									   <div class="form-group">
                                          <label class="col-lg-3 control-label">Your  Terms</label>
										                    	<div class="col-lg-9">
				<textarea rows="5" cols="5" class="form-control" name='policy_terms' placeholder="Enter your Terms"><?php echo $acc_data['terms']; ?></textarea>
											                    </div>
                                          
                                       </div>
									   
									   <?php
							$polqry=mysql_query("select * from policiy_data where acco_id='$aid'");
							while($prow=mysql_fetch_assoc($polqry))
							{
							?>
									    <div class="form-group">
										   
										   <div class="col-md-3">
												<select  data-placeholder="Item" class="select-icons" name='item[]' >
												<option value="">Item</option>	
													<?php
												$it=mysql_query("select * from item order by name asc");
												while($rit=mysql_fetch_assoc($it))
												{
												?>  
							<option <?php if($prow['item']==$rit['name']) { ?>selected <?php } ?> data-icon="stumbleupon" value="<?php echo $rit['name']; ?>"><?php echo $rit['name']; ?></option>
							<?php
							}
							?>
                                                
												
												</select>
											</div>
										   
                                          
											
                                          <div class="col-md-3">
                                             <input type="text" value="<?php echo $prow['pricee']; ?>" name='extra_price[]' class="form-control" placeholder="Enter Price">
                                          </div>
										  
										  <div class="col-md-3">
                                             <input type="file"  class="file-styled" name='extra_img[]'>
											 <img src="img-policy/<?php echo $prow['imge']; ?>" width='50' height='50' />
								<input type='hidden' name="pololdimg[]" value="<?php echo $prow['imge']; ?>" />
                                          </div>
										  
										  	
											<div class="col-md-3">
											<select data-placeholder="Extra Condition" class="select-icons" name='extra_cond[]' >
							<option data-icon="stumbleupon" value="">Choose Condition</option>
									 
							<option data-icon="stumbleupon" <?php if($prow['condition']=='Yes') { echo 'selected'; } ?>  value="Yes">Yes</option>
							<option data-icon="stumbleupon" <?php if($prow['condition']=='No') { echo 'selected'; } ?> value="No">No</option>
                                                
                                                
												</select>
											</div>
										
										  
										</div>
										
								<?php
								}
								?>		
										
							<div id='extra_res'>
							
							</div>
							<a href="javascript:void(0)" id="add_extra" class='btn btn-Success' >Add</a>
							<a href="javascript:void(0)" id="remove_extra" class='btn btn-danger' >Remove</a>
										
                                       
                                    </div>
                                 </div>
                              
                           </div>
						   
						   
                           <div class="tab-pane fade has-padding" id="william">
                              
                                 <div class="panel panel-flat">
                                    <div class="panel-heading">
                                       <h5 class="panel-title">Keywords & Metatags</h5>
                                    </div>
                                    <div class="panel-body">
                                      
                                      
                                       <div class="form-group">
                                          <label class="col-lg-3 control-label">Title:</label>
                                          <div class="col-lg-9">
                                             <input type="text" value="<?php echo $acc_data['title']; ?>" name='title' class="form-control" placeholder="Enter Your Title">
                                          </div>
                                       </div>
                                       <div class="form-group">
											                  <label class="col-lg-3 control-label">Keywords:</label>
										                    	<div class="col-lg-9">
			<textarea rows="5" cols="5" class="form-control" placeholder="Enter your Keywords here" name='keyword'><?php echo $acc_data['keyword']; ?></textarea>
											                    </div>
									                    	</div>
									                    	
									                    	 <div class="form-group">
											                  <label class="col-lg-3 control-label">Meta Tags:</label>
										                    	<div class="col-lg-9">
				<textarea rows="5" cols="5" class="form-control" name='metatag' placeholder="Enter your Meta Tags here"><?php echo $acc_data['metatag']; ?></textarea>
											                    </div>
									                    	</div>
                                      
                                       
                                    </div>
                                 </div>
                              
                           </div>
                           <div class="tab-pane fade has-padding" id="jared">
                              
                                 <div class="panel panel-flat">
                                    <div class="panel-heading">
                                       <h5 class="panel-title">Video and Map</h5>
                                    </div>
                                    <div class="panel-body">
									
									<div class="form-group">
											<label class="col-lg-6 control-label">Do you have any video link :</label>
											<div class="col-lg-12">
										<select  data-placeholder="Choose Here" id='vid_con' class="select-icons" name='video_cond' >
													
												 <option  value="">Choose Here</option>
			<option <?php if($acc_data['video_cond']=='Yes'){ echo "selected"; } ?> value="Yes">Yes</option>
			<option <?php if($acc_data['video_cond']=='No'){ echo "selected"; } ?> value="No">No</option>
												</select>
											</div>
										</div>
                                       <div class="form-group" id="viddiv" style='display:none;'>
                                          <label class="col-lg-3 control-label">Accommodation Video </label>
                                          <div class="col-lg-9">
                                             <input type="text" value="<?php echo $acc_data['video']; ?>" class="form-control" id="vidtext" name='video' placeholder="Paste Your video Link here">
                                          </div>
                                       </div>
									
									   
							    <h4> Location</h4>							
								
                                       <div class="form-group">
                                          <label class="col-lg-3 control-label">Latitude:</label>
                                          <div class="col-lg-9">
                                             <input type="text" name='lat' value="<?php echo $acc_data['lat']; ?>" class="form-control" placeholder="Enter Latitude">
                                          </div>
                                       </div>
									   <div class="form-group">
                                          <label class="col-lg-3 control-label">Longitude:</label>
                                          <div class="col-lg-9">
                                             <input type="text" name='long' value="<?php echo $acc_data['longt']; ?>" class="form-control" placeholder="Enter Longitude">
                                          </div>
                                       </div>
                                      
                                    </div>
                                 </div>
                              
                           </div>
						   
						   
						    <div class="tab-pane fade has-padding" id="promot">
                              
                                 <div class="panel panel-flat">
                                    <div class="panel-heading">
                                       <h5 class="panel-title">Select promotion  option - Boost your listings for more exposure</h5>
                                    </div>
                                    <div class="panel-body">
									<div class="form-group">
											<label class="col-lg-2 control-label">Normal Advertising :</label>
											<div class="col-lg-3">
									<select  data-placeholder="Choose Here" class="select-icons" name='norm_adv' >
													
												 <option  value="">Choose Here</option>
		<option <?php if($acc_data['normal_advertise']=='Yes'){ echo "selected"; } ?> value="Yes">Yes</option>		<option  <?php if($acc_data['normal_advertise']=='No'){ echo "selected"; } ?> value="No">No</option>
													
												
												</select>
											</div>
											
											<label class="col-lg-3 control-label">Promotional Advertising :</label>
											<div class="col-lg-3">
									<select  data-placeholder="Choose Here" class="select-icons" name='prom_adv' >
													
												 <option  value="">Choose Here</option>
		<option <?php if($acc_data['promot_advertise']=='Yes'){ echo "selected"; } ?> value="Yes">Yes</option>
		<option  <?php if($acc_data['promot_advertise']=='No'){ echo "selected"; } ?> value="No">No</option>
													
												
												</select>
											</div>
										</div>
										
										<div class="form-group">
											<label class="col-lg-2 control-label">Website :</label>
											<div class="col-lg-3">
									<select  data-placeholder="Choose Here" class="select-icons" name='website' >
													
												 <option  value="">Choose Here</option>
		<option <?php if($acc_data['website']=='Yes'){ echo "selected"; } ?> value="Yes">Yes</option>
		<option  <?php if($acc_data['website']=='No'){ echo "selected"; } ?> value="No">No</option>
													
												</select>
											</div>
											
											<label class="col-lg-3 control-label">Social Media Banner :</label>
											<div class="col-lg-3">
									<select  data-placeholder="Choose Here" class="select-icons" name='smbanner' >
													
												 <option  value="">Choose Here</option>
		<option <?php if($acc_data['smbanner']=='Yes'){ echo "selected"; } ?> value="Yes">Yes</option>
		<option  <?php if($acc_data['smbanner']=='No'){ echo "selected"; } ?> value="No">No</option>
												
												</select>
											</div>
										</div>
										
										<div class="form-group">
								
								<table class="table table-striped table-hover table-border">
								<tr>
								<td>Sr:</td>
								<td>Package :</td>
								<td>Area :</td>
								<td>Time Frame :</td>
								<td>Ads :</td>
								<td>Extra Ads :</td>
								<td>Costs :</td>
								<td></td>
								</tr>
								
								<?php
								
								
								
								$fv=1;
								$sqr=mysql_query('select * from social_media_pkg');
								while($smrow=mysql_fetch_assoc($sqr))
								{
								?>
								<tr>
								<td><?php echo $fv; ?></td>
								<td><?php echo $smrow['pkg'];?></td>
								<td><?php echo $smrow['area'];?></td>
								<td><?php echo $smrow['timeframe'];?></td>
								<td><?php echo $smrow['ads'];?></td>
								<td><?php echo $smrow['extra_ads'];?></td>
								<td><?php echo $smrow['cost'];?></td>
								<td><input <?php if(in_array($smrow['id'],$social_array)) { echo "checked"; } ?>  type='checkbox' value="<?php echo $smrow['id']; ?>" name='spkg[]' /></td>
								</tr>
								<?php
								$fv++;
								}
								?>
								
								</table>
											
										</div>
                                       
									   
                                       
                                       <div class="text-right">
                                          <button type="submit" name='save' class="btn btn-primary">Save </button>
                                       </div>
                                    </div>
                                 </div>
                              
                           </div>
                          
                        </div>
						</form>
						
						<?php
						}
						else
						{
						
						?>
						<form class="form-horizontal" method='POST' action='action-page.php' enctype='multipart/form-data'>
                        <div class="tab-content">
						<input type='hidden' name='action' value="add_promotion" />
                           <div class="tab-pane fade in active has-padding" id="james">
                              
                                 <div class="panel panel-flat">
                                    <div class="panel-heading">
                                       <h5 class="panel-title">Accommodation Detail</h5>
                                    </div>
                                    <div class="panel-body">
										
										<div class="form-group">
													
										<div class="col-lg-6 col-md-6 col-sm-12">
				<input type="text" class="form-control"  placeholder="Accommodation Name" name='acc_name'>
				
										</div>
											
										<div class="col-lg-6 col-md-6 col-sm-12">
												<select class="select"  name='type_accommodation'>
												  <option value="">Choose Type of Accommodation</option>
												<?php
												$acoomqr=mysql_query("select * from accomodation order by name asc");
												while($accrow=mysql_fetch_assoc($acoomqr))
												{
												?>  
							<option value="<?php echo $accrow['name']; ?>"><?php echo $accrow['name']; ?></option>
                                                <?php
												}
												?>
												</select>
											</div>			
											
										</div>
										
										<div class="form-group">
													
										<div class="col-lg-6 col-md-6 col-sm-12">
										
										<select class="select"  name='rating'>
										<option value="">Star Rating</option>
												<?php
												for($sr=0;$sr<=6;$sr++)
												{
												?>
										<option value="<?php echo $sr; ?>"><?php echo $sr; ?></option>		
												<?php
												}
												?>
												</select>
				
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
										<input type="text" class="form-control"  placeholder="Country" name='country'>
				
				
										</div>
											
										</div>
										
										<div class="form-group">
													
										<div class="col-lg-6 col-md-6 col-sm-12">
				<input type="text" class="form-control"  placeholder="Province / State" name='state'>
				
										</div>
										
											
										<div class="col-lg-6 col-md-6 col-sm-12">
				<input type="text" class="form-control"  placeholder="City / Town" name='city'>
				
										</div>
										
										
											
										</div>
										
										<div class="form-group">
										
										<div class="col-lg-6 col-md-6 col-sm-12">
				
				<input type="text" class="form-control"  placeholder="Street Address" name='street_address'>
										</div>
													
										<div class="col-lg-6 col-md-6 col-sm-12">
				
				<input type="text" class="form-control"  placeholder="Suburb / Area" name='area'>
				
										</div>
									
											
										</div>
										
										<div class="form-group">
													
										<div class="col-lg-6 col-md-6 col-sm-12">
				<input type="text" class="form-control"  placeholder="Contact No." name='contact_no'>
				
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
				<input type="text" class="form-control"  placeholder="Alternate No." name='alternate'>
				
										</div>
											
										</div>
										
										<div class="form-group">
													
										<div class="col-lg-6 col-md-6 col-sm-12">
				<input type="text" class="form-control"  placeholder="Reservation Email" name='reserv_email'>
				
										</div>
										
											
										</div>

								

										<div class="form-group">
											<label class="col-lg-3 control-label">Accommodation Detail:</label>
											<div class="col-lg-9">
									<textarea rows="5" cols="5" name='accommod_detail'  class="form-control" placeholder="Enter Accommodation Description"></textarea>
											</div>
										</div>
										
										<div class="form-group">
													
										<div class="col-lg-6 col-md-6 col-sm-12">
										<input type="file"  class="file-styled" name='acc_img1'>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
				                        <input type="file"  class="file-styled" name='acc_img2'>
										</div>
											
										</div>
										
										<div class="form-group">
													
										<div class="col-lg-6 col-md-6 col-sm-12">
										<input type="file"  class="file-styled" name='acc_img3'>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
				                        <input type="file"  class="file-styled" name='acc_img4'>
										</div>
											
										</div>
										<div class="form-group">
													
										<div class="col-lg-6 col-md-6 col-sm-12">
										<input type="file"  class="file-styled" name='acc_img5'>
										</div>
										
											
										</div>
										
											
									</div>
                                 </div>
                              
                           </div>
						   
						   <div class="tab-pane fade has-padding" id="rooms">
                              
                                 <div class="panel panel-flat">
                                    <div class="panel-heading">
                                       <h5 class="panel-title">Rooms</h5>
                                    </div>
                                    <div class="panel-body">
                                      
                                      <div class="form-group">
									  
									  
											
											<div class="col-md-2">
												<select  data-placeholder="Room Type" class="select-icons" name='room_type[]' >
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
										
									<div id='room_res'>
							
							</div>
							<a href="javascript:void(0)" id="add_room" class='btn btn-Success' >Add</a>
							<a href="javascript:void(0)" id="remove_room" class='btn btn-danger' >Remove</a>	
										
							<br>			
							<br>			
							<div class="form-group">
											
							<div class="col-md-6">
							<textarea rows="4" cols="4" name='room_detail'  class="form-control" placeholder="Room Detail"></textarea>					
							</div>
							
							</div>
							<h6>Time Frame</h6>
							<div class="form-group">
							
							<div class="col-md-6">
						<input type="text" name='from_timeframe' class="form-control" placeholder="">					
							</div>
							
							<div class="col-md-6">
							<input type="text" name='to_timeframe' class="form-control" placeholder="">					
							</div>
											
							</div>	
						
										
							<h5>Do you have Venue & Conference facilities at this property</h5>			
							
										
                                      <div class="form-group">
											
											<div class="col-md-2">
												<select  id='condit' name="ven_con_cond" data-placeholder="Choose Here" class="select-icons" >
												<option value="">Choose Here</option>	
													
							            <option data-icon="stumbleupon" value="Yes">Yes</option>
							            <option data-icon="stumbleupon" value="No">No</option>
												
												</select>
											</div>
											
										</div>
								       <div id='cv'>
										<h6>Venue</h6>
										<div class="form-group">
											
											<div class="col-md-2">
											<input type="text" name='venue_name[]' class="form-control" placeholder="Enter Venue Name">	
											</div>
											
											<div class="col-md-2">
                                         <select  data-placeholder="Capacity" class="select-icons" name='venue_avail[]' >
												<option value="">Capacity</option>	
									
							                    <option  value="15">1-15</option>
							                    <option  value="30">15-30</option>
							                    <option  value="50">30-50</option>
							                    <option  value="100">50-100</option>
							                    <option  value="200">100-200</option>
							                    <option  value="500">200-500</option>
							                    <option  value="500+">More Than 500</option>
						
                                                
												
												</select>
                                          </div>
										  
										  <div class="col-md-2">
												<select  data-placeholder="Feature" class="select-icons" name='ven_feat[]' >
												<option value="">Feature</option>	
													<?php
												$fqr=mysql_query("select * from features order by name asc");
												while($fqrrow=mysql_fetch_assoc($fqr))
												{
												?>  
							<option data-icon="stumbleupon" value="<?php echo $fqrrow['name']; ?>"><?php echo $fqrrow['name']; ?></option>
							<?php
							}
							?>
                                                
												
												</select>
											</div>
											
                                          <div class="col-md-2">
                                             <input type="text" name='venue_price[]' class="form-control" placeholder="Enter Venue Rates">
                                          </div>
										  
										  
										  <div class="col-md-2">
                                        <input type="text" name='venue_descr[]' class="form-control" placeholder="Description">
                                          </div>
										  
										  <div class="col-md-2">
                                             <input type="file"  class="file-styled" name='venue_img[]'>
                                          </div>
										</div>
										
							<div id='venue_res'>
							
							</div>
							<a href="javascript:void(0)" id="add_venue" class='btn btn-Success' >Add</a>
							<a href="javascript:void(0)" id="remove_venue" class='btn btn-danger' >Remove</a>
							
							
							<br>
							<br>
										<h6>Conference</h6>
										<div class="form-group">
											
											<div class="col-md-2">
											<input type="text" name='confer_name[]' class="form-control" placeholder="Enter Conference Name">	
											</div>
											
										  
										  		<div class="col-md-2">
                                         <select  data-placeholder="Capacity" class="select-icons" name="confer_avail" >
												<option value="">Capacity</option>	
									
							                    <option  value="100">1-100</option>
							                    <option  value="500">100-500</option>
							                    <option  value="1000">500-1000</option>
							                    <option  value="5000">1000-5000</option>
							                    <option  value="10000">5000-10000</option>
							                    <option  value="10000+">More Than 10000</option>
						
                                                
												
												</select>
                                          </div>
										  
										  <div class="col-md-2">
												<select  data-placeholder="Feature" class="select-icons" name='con_feat[]' >
												<option value="">Feature</option>	
													<?php
												$cfqr=mysql_query("select * from features order by name asc");
												while($cfqrrow=mysql_fetch_assoc($cfqr))
												{
												?>  
							<option data-icon="stumbleupon" value="<?php echo $cfqrrow['name']; ?>"><?php echo $cfqrrow['name']; ?></option>
							<?php
							}
							?>
                                                
												
												</select>
											</div>
										  
											
                                          <div class="col-md-2">
                                             <input type="text" name='confer_price[]' class="form-control" placeholder="Enter Conference Rates">
                                          </div>
										 
										  <div class="col-md-2">
                                        <input type="text" name='confer_descr[]' class="form-control" placeholder="Description">
                                          </div>
										  
										  <div class="col-md-2">
                                             <input type="file"  class="file-styled" name='confer_img[]'>
                                          </div>
										</div>
										
										<div id='confer_res'>
							
							</div>
							<a href="javascript:void(0)" id="add_confer" class='btn btn-Success' >Add</a>
							<a href="javascript:void(0)" id="remove_confer" class='btn btn-danger' >Remove</a>
										
							</div>
										
                                       
                                    </div>
                                 </div>
                              
                           </div>
						   
						   
						    <div class="tab-pane fade has-padding" id="activities">
                              
                                 <div class="panel panel-flat">
                                    <div class="panel-heading">
                                       <h5 class="panel-title">Activities</h5>
                                    </div>
                                    <div class="panel-body">
                                      
								
										<div class="form-group">
											<label class="col-lg-2 control-label">Amenity on property :</label>
											<div class="col-lg-10">
												<select multiple="multiple" data-placeholder="Amenity on property" class="select-icons" name='amenity[]' >
													<optgroup label="Services">
													<?php
												$amenityqr=mysql_query("select * from amenity order by name asc");
												while($amenityqrow=mysql_fetch_assoc($amenityqr))
												{
												?>  
							<option data-icon="stumbleupon" value="<?php echo $amenityqrow['name']; ?>"><?php echo $amenityqrow['name']; ?></option>
                                                <?php
												}
												?>	
													</optgroup>
													
												
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="col-lg-2 control-label">Activity on Property :</label>
											<div class="col-lg-10">
												<select multiple="multiple" data-placeholder="Activity on Property" class="select-icons" name='activity[]' >
													<optgroup label="Services">
														
													<?php
												$actqr=mysql_query("select * from activity order by name asc");
												while($actrow=mysql_fetch_assoc($actqr))
												{
												?>  
							<option data-icon="stumbleupon" value="<?php echo $actrow['name']; ?>"><?php echo $actrow['name']; ?></option>
                                                <?php
												}
												?>
                            
													</optgroup>
													
												
												</select>
											</div>
										</div> 
										
							<h5>Popular Attraction and surroundings: Please provide as many details as possible</h5>
							<div class="form-group">
							<div class="col-lg-4 col-md-4 col-sm-4">
							<input type="text" class="form-control"  value="" placeholder="Attraction" name='est_name[]'>
							</div>
							
							<div class="col-lg-4 col-md-4 col-sm-4">
							<input type="text" class="form-control"  value="" placeholder="Activity" name='actvity2[]'>
							</div>
							
							<div class="col-lg-4 col-md-4 col-sm-4">
							<input type="text" class="form-control"  value="" placeholder="Approximate Distance" name='approx_dis[]'>
							</div>
							</div>
							<div id='res'>
							
							</div>
							<a href="javascript:void(0)" id="add_act" class='btn btn-Success' >Add More</a>
							<a href="javascript:void(0)" id="remove_act" class='btn btn-danger' >Remove</a>
                                       
                                  
								
							
								<div class="panel-heading">
                                 <h6 class="panel-title">Transport</h6>
                                 </div> 			
                                 
								 
                              <div class="form-group">
											<label class="col-lg-2 control-label">Own Shuttle Service :</label>
											<div class="col-lg-12">
										<select  data-placeholder="Shuttle Service" id='sht' class="select-icons" name='shuttle' >
													
													<option  value="">Services</option>
					                              <option  value="Yes">Yes</option>
					                              <option  value="No">No</option>
                                                
													
													
												
												</select>
											</div>
										</div>
										
										<div class="form-group" id='pick' style='display:none'>
											
									<div class="col-md-4">
				<input type="text" name='pickdate' class="form-control" id='pd' placeholder="Choose Date">	
									</div>
									
									<div class="col-md-4">
				<input type="text" name='picktime' class="form-control" id='pt' placeholder="Choose Picktime">	
									</div>
									<div class="col-md-4">
				<input type="text" name='pickadd' class="form-control" id='padd' placeholder="Enter Address">	
									</div>
										</div>
										
										</div>
							  
                           </div>
						   </div>
						   
						   
                           <div class="tab-pane fade has-padding" id="polici">
                              
                                 <div class="panel panel-flat">
                                    <div class="panel-heading">
                                       <h5 class="panel-title">Policies</h5>
                                    </div>
                                    <div class="panel-body">
                                      
                                      
                                       <div class="form-group">
                                          
                                          <div class="col-lg-6">
                                             <input type="text" name='deposite' value="100%" readonly class="form-control" placeholder="Enter Deposit">
                                          </div>
										  
										  
										                    	<div class="col-lg-6">
			<input type="text" name='cancel' class="form-control" placeholder="Enter Cancellation Policy">
											                    </div>
                                       </div>
									   
									   <h6> 
									   PLEASE TAKE NOTE: Once client have confirmed their booking “Hey Stranger” will charge 100% deposit. Deposit will be paid to you less “Hey Stranger” pre selected commission excl vat.
In the event of cancellation, your cancellation policy as displayed on “Hey Stranger” will apply.
“Hey Stranger” will retain their commission, due to a finders fee and will therefore not be responsible for any payments to your clients
Cancellation will be settled between you and the client according to your terms and are sorely your responsibility
									   </h6>
                                       
									   <div class="form-group">
                                          
                                          <div class="col-lg-6">
                                             <input type="text" name='timein' class="form-control" placeholder="Enter Time In">
                                          </div>
										  
										  
										                    	<div class="col-lg-6">
			<input type="text" name='timeout' class="form-control" placeholder="Enter Time Out">
											                    </div>
                                       </div>
									   
									   <div class="form-group">
                                          
                                          <div class="col-lg-6">
                                             <input type="text" name='child_extra' class="form-control" placeholder="Children & Extra">
                                          </div>
										  
										  
										                    	<div class="col-lg-6">
			<input type="text" name='pets' class="form-control" placeholder="Pets">
											                    </div>
                                       </div>
									   
									   <div class="form-group">
                                          
                                          <div class="col-lg-6">
                                            <select data-placeholder="payment_type" class="select-icons" name='payment_type' multiple>
							<option data-icon="stumbleupon" value="">Payment Type</option>					 

									
													<?php
												$ptqr=mysql_query("select * from paymode order by name asc");
												while($ptqrow=mysql_fetch_assoc($ptqr))
												{
												?>  
							<option  value="<?php echo $ptqrow['name']; ?>"><?php echo $ptqrow['name']; ?></option>
                                                <?php
												}
												?>
                                                
												</select>
                                          </div>
										  
										  
					                	<div class="col-lg-6">
			<input type="text" name='lang_spoken' class="form-control" placeholder="Language Spoken At Facility">
									    </div>
                                       </div>
									   
									   <div class="form-group">
                                          
                                          <div class="col-lg-4">
                                            <select data-placeholder="Duration Of Accommodation" class="select-icons" name='acco_duration' >
											<option data-icon="stumbleupon" value="">Choose Duration</option>
							<option data-icon="stumbleupon" value="Long Term">Long Term</option>					 
							<option data-icon="stumbleupon" value="Short Term">Short Term</option>
							<option data-icon="stumbleupon" value="Both">Both</option>
                                                
												</select>
                                          </div>
										  
										  <div class="col-lg-4">
                                            <select data-placeholder="Corporate Deals" class="select-icons" name='corpo_deals' >
											<option data-icon="stumbleupon" value="">Choose Corporate Deals</option>
									 
							<option data-icon="stumbleupon" value="yes">Yes</option>
							<option data-icon="stumbleupon" value="No">No</option>
                                                
												</select>
                                          </div>
										  
										  <div class="col-lg-4">
                                            <select data-placeholder="Contractors Deals" class="select-icons" name='contract_deal' >
							<option data-icon="stumbleupon" value="">Choose Contractor Deals</option>
									 
							<option data-icon="stumbleupon" value="yes">Yes</option>
							<option data-icon="stumbleupon" value="No">No</option>
                                                
                                                
												</select>
                                          </div>
										  
										  
                                       </div>
									   
									   
									   <div class="form-group">
                                          <label class="col-lg-3 control-label">Your  Terms</label>
										                    	<div class="col-lg-9">
				<textarea rows="5" cols="5" class="form-control" name='policy_terms' placeholder="Enter your Terms"></textarea>
											                    </div>
                                          
                                       </div>
									   
									   
									    <div class="form-group">
										   
										  
										  <div class="col-md-3">
												<select  data-placeholder="Item" class="select-icons" name='item[]' >
												<option value="">Item</option>	
													<?php
												$it=mysql_query("select * from item order by name asc");
												while($rit=mysql_fetch_assoc($it))
												{
												?>  
							<option data-icon="stumbleupon" value="<?php echo $rit['name']; ?>"><?php echo $rit['name']; ?></option>
							<?php
							}
							?>
                                                
												
												</select>
											</div>
											
                                          <div class="col-md-3">
                                             <input type="text" name='extra_price[]' class="form-control" placeholder="Enter Price">
                                          </div>
										  
										  <div class="col-md-3">
                                             <input type="file"  class="file-styled" name='extra_img[]'>
                                          </div>
										  
										  	
											<div class="col-md-3">
											<select data-placeholder="Extra Condition" class="select-icons" name='extra_cond[]' >
							<option data-icon="stumbleupon" value="">Choose Condition</option>
									 
							<option data-icon="stumbleupon" value="yes">Yes</option>
							<option data-icon="stumbleupon" value="No">No</option>
                                                
                                                
												</select>
											</div>
										
										  
										</div>
										
							<div id='extra_res'>
							
							</div>
							<a href="javascript:void(0)" id="add_extra" class='btn btn-Success' >Add</a>
							<a href="javascript:void(0)" id="remove_extra" class='btn btn-danger' >Remove</a>
										
                                       
                                    </div>
                                 </div>
                              
                           </div>
						   
						   
                           <div class="tab-pane fade has-padding" id="william">
                              
                                 <div class="panel panel-flat">
                                    <div class="panel-heading">
                                       <h5 class="panel-title">Keywords & Metatags</h5>
                                    </div>
                                    <div class="panel-body">
                                      
                                      
                                       <div class="form-group">
                                          <label class="col-lg-3 control-label">Title:</label>
                                          <div class="col-lg-9">
                                             <input type="text" name='title' class="form-control" placeholder="Enter Your Title">
                                          </div>
                                       </div>
                                       <div class="form-group">
											                  <label class="col-lg-3 control-label">Keywords:</label>
										                    	<div class="col-lg-9">
			<textarea rows="5" cols="5" class="form-control" placeholder="Enter your Keywords here" name='keyword'></textarea>
											                    </div>
									                    	</div>
									                    	
									                    	 <div class="form-group">
											                  <label class="col-lg-3 control-label">Meta Tags:</label>
										                    	<div class="col-lg-9">
				<textarea rows="5" cols="5" class="form-control" name='metatag' placeholder="Enter your Meta Tags here"></textarea>
											                    </div>
									                    	</div>
                                      
                                       
                                    </div>
                                 </div>
                              
                           </div>
                           <div class="tab-pane fade has-padding" id="jared">
                              
                                 <div class="panel panel-flat">
                                    <div class="panel-heading">
                                       <h5 class="panel-title">Video and Map</h5>
                                    </div>
                                    <div class="panel-body">
									<div class="form-group">
											<label class="col-lg-6 control-label">Do you have any video link :</label>
											<div class="col-lg-12">
										<select  data-placeholder="Choose Here" id='vid_con' class="select-icons" name='video_cond' >
													
												 <option  value="">Choose Here</option>
												<option value="Yes">Yes</option>
												<option  value="No">No</option>
													
												
												</select>
											</div>
										</div>
                                       <div class="form-group" id="viddiv" style='display:none;'>
                                          <label class="col-lg-3 control-label">Accommodation Video </label>
                                          <div class="col-lg-9">
                                             <input type="text" class="form-control" id="vidtext" name='video' placeholder="Paste Your video Link here">
                                          </div>
                                       </div>
									   
							    <h4> Location</h4>							
								
                                       <div class="form-group">
                                          <label class="col-lg-3 control-label">Latitude:</label>
                                          <div class="col-lg-9">
                                             <input type="text" name='lat' class="form-control" placeholder="Enter Latitude">
                                          </div>
                                       </div>
									   <div class="form-group">
                                          <label class="col-lg-3 control-label">Longitude:</label>
                                          <div class="col-lg-9">
                                             <input type="text" name='long' class="form-control" placeholder="Enter Longitude">
                                          </div>
                                       </div>
                                      
                                    </div>
                                 </div>
                              
                           </div>
						   
						   
						   <div class="tab-pane fade has-padding" id="promot">
                              
                                 <div class="panel panel-flat">
                                    <div class="panel-heading">
                                       <h5 class="panel-title">Select promotion  option - Boost your listings for more exposure</h5>
                                    </div>
                                    <div class="panel-body">
									<div class="form-group">
											<label class="col-lg-2 control-label">Normal Advertising :</label>
											<div class="col-lg-3">
									<select  data-placeholder="Choose Here" class="select-icons" name='norm_adv' >
													
												 <option  value="">Choose Here</option>
												<option value="Yes">Yes</option>
												<option  value="No">No</option>
													
												
												</select>
											</div>
											
											<label class="col-lg-3 control-label">Promotional Advertising :</label>
											<div class="col-lg-3">
									<select  data-placeholder="Choose Here" class="select-icons" name='prom_adv' >
													
												 <option  value="">Choose Here</option>
												<option value="Yes">Yes</option>
												<option  value="No">No</option>
													
												
												</select>
											</div>
										</div>
										
										<div class="form-group">
											<label class="col-lg-2 control-label">Website :</label>
											<div class="col-lg-3">
									<select  data-placeholder="Choose Here" class="select-icons" name='website' >
													
												 <option  value="">Choose Here</option>
												<option value="Yes">Yes</option>
												<option  value="No">No</option>
													
												
												</select>
											</div>
											
											<label class="col-lg-3 control-label">Social Media Banner :</label>
											<div class="col-lg-3">
									<select  data-placeholder="Choose Here" class="select-icons" name='smbanner' >
													
												 <option  value="">Choose Here</option>
												<option value="Yes">Yes</option>
												<option  value="No">No</option>
													
												
												</select>
											</div>
										</div>
                                       
									   
										<div class="form-group">
								
								<table class="table table-striped table-hover table-border">
								<tr>
								<td>Sr:</td>
								<td>Package :</td>
								<td>Area :</td>
								<td>Time Frame :</td>
								<td>Ads :</td>
								<td>Extra Ads :</td>
								<td>Costs :</td>
								<td></td>
								</tr>
								
								<?php
								$fv=1;
								$sqr=mysql_query('select * from social_media_pkg');
								while($smrow=mysql_fetch_assoc($sqr))
								{
								?>
								<tr>
								<td><?php echo $fv; ?></td>
								<td><?php echo $smrow['pkg'];?></td>
								<td><?php echo $smrow['area'];?></td>
								<td><?php echo $smrow['timeframe'];?></td>
								<td><?php echo $smrow['ads'];?></td>
								<td><?php echo $smrow['extra_ads'];?></td>
								<td><?php echo $smrow['cost'];?></td>
								<td><input type='checkbox' value="<?php echo $smrow['id']; ?>" name='spkg[]' /></td>
								</tr>
								<?php
								$fv++;
								}
								?>
								
								</table>
											
										</div>
									   
                                       
                                       <div class="text-right">
                                          <button type="submit" name='save' class="btn btn-primary">Save </button>
                                       </div>
                                    </div>
                                 </div>
                              
                           </div>
                          
                        </div>
						</form>
						<?php
						}
						?>
						
                     </div>
                  </div>

					<!-- Footer -->
					<?php include('footer.php'); ?>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>

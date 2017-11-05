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
var b=$('#sht').val();

if(b=='Yes')
{
	$('.pick').css("display","block");
	$('#shutbut').css("display","block");
}
else if(b=='No')
{
$('#shutbut').css("display","none");
}

$('#sht').change(function()
		{
        var conn=$('#sht').val();
		
		if(conn=='Yes')
		{
		$('.pick').css("display","block");
		$('#shutbut').css("display","block");
		}
		else
		{
		$('.pd').val('');
		$('.pt').val('');
		$('.padd').val('');
		$('.vnnn').val('');
		$('.pick').css("display","none");
		$('#shutbut').css("display","none");
		$('#trans_res').children().remove();
		}
		
			
		});
});
</script>	
	

	
		
	<script>
	$(document).ready(function(){
            
								
		$('#add_trans').click(function()
		{
		var ran = Math.floor((Math.random() * 100000) + 1);
		var uid='T'+ran;
		
		     var tr_group ='<div class="form-group" id="'+uid+'"><div class="col-md-3"><input type="text" name="venname[]" class="form-control" class="vnnn" placeholder="Give Event’s Name for Pick Up"></div>';
											
			tr_group +='<div class="col-md-3"><input type="text" name="pickdate[]" class="form-control" class="pd" placeholder="Provide Date"></div>';
			
			tr_group +='<div class="col-md-3"><input type="text" name="picktime[]" class="form-control" class="pt" placeholder="Provide time"></div>';
									
			tr_group +='<div class="col-md-3"><input type="text" name="pickadd[]" class="form-control" class="padd" placeholder="Enter Address"></div><br><a href="javascript:void(0)" onclick="remove_tran('+ran+')">Remove</a></div>';
				 
				 
				 
            $('#trans_res').append(tr_group);
			
		});
		
		
});


function remove_tran(did)
{			
			var final='T'+did;			
			$('#'+final).remove();
}

	</script>
	

	
	<script>
	$(document).ready(function(){
            
								
		$('#add_act').click(function()
		{
		
		var ran = Math.floor((Math.random() * 100000) + 1);
		
		var uid='A'+ran;
		
		     var form_group ='<div class="form-group" id="'+uid+'">';
				 form_group +='<div class="col-lg-4 col-md-4 col-sm-4">';
				 form_group +='<input type="text" class="form-control"  value="" placeholder="Name Of Attraction" name="est_name[]">';
				 form_group +='</div>';
				 
				 form_group +='<div class="col-lg-4 col-md-4 col-sm-4"><select  data-placeholder="Attraction Activity" class="form-control" name="actvity2[]" ><option value="">Attraction Activity</option>';	
									
							                    	<?php
												$surround=mysql_query("select * from surroundings order by name asc");
												while($surrrow=mysql_fetch_assoc($surround))
												{
												?>  
				form_group +='<option  data-icon="stumbleupon" value="<?php echo $surrrow['name']; ?>"><?php echo $surrrow["name"]; ?></option>';
                                                <?php
												}
												?>
						 form_group +='</select></div>';
							
				form_group +='<div class="col-lg-4 col-md-4 col-sm-4"><input type="text" class="form-control"  value="" placeholder="Approximate Distance" name="approx_dis[]"></div><br><a href="javascript:void(0)" onclick="remove_activity('+ran+')">Remove</a></div>';
				
            $('#res').append(form_group);
			
		});
	
		
});

function remove_activity(did)
{			
			var final='A'+did;			
			$('#'+final).remove();
}

	</script>
	
	<script>
	$(document).ready(function(){
            
								
		$('#add_extra').click(function()
		{
		var ran = Math.floor((Math.random() * 100000) + 1);
		
		var uid='E'+ran;
		
		     var extra_group ='<div class="form-group" id="'+uid+'">';
			
		extra_group +='<div class="col-md-3"><input type="text" name="item[]" class="form-control" placeholder="Item"></div>';
			
		
		extra_group +='<div class="col-md-3"><input type="text" name="extra_price[]" class="form-control" placeholder="Enter Price"></div>';

		extra_group +='<div class="col-md-3"><input type="file" name="extra_img[]" class="form-control" placeholder="Enter Price"></div>';

		extra_group +='<div class="col-md-3"><select data-placeholder="Extra Condition" class="form-control" name="extra_cond[]" ><option data-icon="stumbleupon" value="">Choose Condition</option><option data-icon="stumbleupon" value="yes">Yes</option><option data-icon="stumbleupon" value="No">No</option></select></div><br><a href="javascript:void(0)" onclick="remove_extra('+ran+')">Remove</a></div>';	
			 
			 
            $('#extra_res').append(extra_group);
			
		});
		
		
});

function remove_extra(did)
{			
			var final='E'+did;			
			$('#'+final).remove();
}
	</script>
	
	
	
<script>
$(document).ready(function(){	
$('#venue_div').css("display","none");		
$('#con_div').css("display","none");		

$('#vccondit').change(function()
		{
        var coo=$('#vccondit').val();
		
		if(coo=='Venue')
		{
		$('#venue_div').css("display","block");
		$('#con_div').css("display","none");
		}
		else if(coo=='Conference')
		{
		$('#venue_div').css("display","none");
		$('#con_div').css("display","block");
		}
		else if(coo=='Venue & Conference')
		{
		$('#venue_div').css("display","block");
		$('#con_div').css("display","block");
		}
		
			
		});
});
</script>	
	
	
	<script>
	$(document).ready(function(){
            
								
		$('#add_venue').click(function()
		{
		
		var ran = Math.floor((Math.random() * 100000) + 1);
		var uid='V'+ran;
		
		     var venue_group ='<div class="form-group" id="'+uid+'">';
											
				 venue_group +='<div class="col-md-2"><input type="text" name="venue_room_name[]" class="form-control" placeholder="Enter Venue Name"></div>';
				 
				 
				 venue_group +='<div class="col-md-2"><input type="text" name="venue_avail[]" class="form-control" placeholder="Capacity"></div>';
				 
											
				venue_group+='<div class="col-md-2"><input type="text" name="venue_room_price[]" class="form-control" placeholder="Enter Venue Rates"></div>';							
											
											
										  
				venue_group+='<div class="col-md-2"><input type="text" name="venue_descr[]" class="form-control" placeholder="Description"></div>';						   
                                          
				venue_group+='<div class="col-md-2"><input type="file"  class="form-control" name="venue_img[]"></div><br><a href="javascript:void(0)" onclick="remove_venue('+ran+')">Remove</a></div>';						  
										  
										  
										  
			 
			 
            $('#venue_res').append(venue_group);
			
		});
		
});

function remove_venue(did)
{			
			var final='V'+did;			
			$('#'+final).remove();
}
	</script>	
	
		
	<script>
	$(document).ready(function(){
            
								
		$('#add_confer').click(function()
		{
		
		var ran = Math.floor((Math.random() * 100000) + 1);
		var uid='C'+ran;
		
		     var confer_group ='<div class="form-group" id="'+uid+'"><div class="col-md-2"><input type="text" name="confer_room_name[]" class="form-control" placeholder="Enter Conference Name"></div>';
			 
			 confer_group +='<div class="col-md-2"><input type="text" name="confer_avail[]" class="form-control" placeholder="Capacity"></div>';
			 
			 confer_group +='<div class="col-md-2"><input type="text" name="confer_room_price[]" class="form-control" placeholder="Enter Conference Rates"></div>';
											
			
			 confer_group +='<div class="col-md-2"><input type="text" name="confer_descr[]" class="form-control" placeholder="Description"></div>';
			
			confer_group +='<div class="col-md-2"><input type="file"  class="form-control" name="confer_img[]"></div><br><a href="javascript:void(0)" onclick="remove_confer('+ran+')">Remove</a></div></div>';						  
										  
										  
										  
			 
			 
            $('#confer_res').append(confer_group);
			
		});
		
});

function remove_confer(did)
{			
			var final='C'+did;			
			$('#'+final).remove();
}

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
		<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Venue & Conference</span></h4>
						</div>

					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.php"><i class="icon-home2 position-left"></i> Home</a></li>
							
							<li class="active">Venue & Conference</li>
							<li class="active">Add Venue & Conference</li>
				
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
                              Venue & Conference <span class="status-mark position-right border-danger"></span>
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
                              Meta Tags & Meta Description <span class="status-mark position-right border-danger"></span>
                              </a>
                           </li>
                           <li>
                              <a href="#jared" data-toggle="tab">
                              Video & Map <span class="status-mark position-right border-success"></span>
                              </a>
                           </li>
                        
                        </ul>
						<?php
						if(isset($aid) && $aid!='')
						{
						
			$acc_data=mysql_fetch_assoc(mysql_query("select * from vc_detail where id='$aid'"));
						
			$amenity_array=explode(",",$acc_data['amenity']);			
			$activity_array=explode(",",$acc_data['activity']);		
            $payment_array=explode(",",$acc_data['payment_type']);			
						
						?>
						<form class="form-horizontal" method='POST' action='action-page.php' enctype='multipart/form-data'>
                        <div class="tab-content">
						<input type='hidden' name='action' value="edit_venue_confer" />
						<input type='hidden' name='hid' value="<?php echo $aid; ?>" />
                           <div class="tab-pane fade in active has-padding" id="james">
                              
                                 <div class="panel panel-flat">
                                    <div class="panel-heading">
                                       <h5 class="panel-title">Venue Detail</h5>
                                    </div>
                                    <div class="panel-body">
										
										<div class="form-group">
													
										<div class="col-lg-6 col-md-6 col-sm-12">
				<input type="text" class="form-control" value="<?php echo $acc_data['vc_name']; ?>"  placeholder=" Name" name='vc_name'>
				
										</div>
											
										<div class="col-lg-6 col-md-6 col-sm-12">
												<select class="select" id='vccondit' name='vc_type'>
												  <option value="">Choose Type</option>
												  <option <?php if($acc_data['vc_type']=='Venue'){ echo "selected"; } ?> value="Venue">Venue</option>
							                   <option <?php if($acc_data['vc_type']=='Conference'){ echo "selected"; } ?> value="Conference">Conference</option>
							                   <option <?php if($acc_data['vc_type']=='Venue & Conference'){ echo "selected"; } ?> value="Venue & Conference">Venue & Conference</option>
							
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
											<label class="col-lg-3 control-label">Establishment Detail:</label>
											<div class="col-lg-9">
							<textarea rows="5" cols="5" name='vc_detail'  class="form-control" placeholder="Give a description about your establishment"><?php echo $acc_data['detail']; ?></textarea>
											</div>
										</div>
										
										<div class="form-group">
													
										<div class="col-lg-6 col-md-6 col-sm-12">
										<input type="file"  class="file-styled" name='vc_img1'>
										<?php
										if($acc_data['vc_img1']!='')
										{
										?>
										<img width='100' src="img-ven-con/<?php echo $acc_data['vc_img1']; ?>" />
										<?php
										}
										?>
							<input type="hidden"  name='old_vc_img1' value="<?php echo $acc_data['vc_img1']; ?>">
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
				                        <input type="file"  class="file-styled" name='vc_img2'>
										<?php
										if($acc_data['vc_img2']!='')
										{
										?>
										<img width='100' src="img-ven-con/<?php echo $acc_data['vc_img2']; ?>" />
										<?php
										}
										?>
										<input type="hidden"  name='old_vc_img2' value="<?php echo $acc_data['vc_img2']; ?>">
										</div>
											
										</div>
										
										<div class="form-group">
													
										<div class="col-lg-6 col-md-6 col-sm-12">
										<input type="file"  class="file-styled" name='vc_img3'>
										<?php
										if($acc_data['vc_img3']!='')
										{
										?>
										<img width='100' src="img-ven-con/<?php echo $acc_data['vc_img3']; ?>" />
										<?php
										}
										?>
										<input type="hidden"  name='old_vc_img3' value="<?php echo $acc_data['vc_img3']; ?>">
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
				                        <input type="file"  class="file-styled" name='vc_img4'>
										<?php
										if($acc_data['vc_img4']!='')
										{
										?>
										<img width='100' src="img-ven-con/<?php echo $acc_data['vc_img4']; ?>" />
										<?php
										}
										?>
										<input type="hidden"  name='old_vc_img4' value="<?php echo $acc_data['vc_img4']; ?>">
										</div>
											
										</div>
										<div class="form-group">
													
										<div class="col-lg-6 col-md-6 col-sm-12">
										<input type="file"  class="file-styled" name='vc_img5'>
										<?php
										if($acc_data['vc_img5']!='')
										{
										?>
										<img width='100' src="img-ven-con/<?php echo $acc_data['vc_img5']; ?>" />
										<?php
										}
										?>
										<input type="hidden"  name='old_vc_img5' value="<?php echo $acc_data['vc_img5']; ?>">
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
							$num1=mysql_num_rows(mysql_query("select * from vc_venue_data where vc_id='$aid'"));
									
									?>
									<div <?php if($num1>0){ ?>  <?php } else { ?>id="venue_div" <?php } ?>>
                                     <h6>Venue</h6>
									<!--dd-->
									<div id='venue_res'>
									          <?php
											  $vo=1;
							$venyy=mysql_query("select * from vc_venue_data where vc_id='$aid'");
							while($venrow=mysql_fetch_assoc($venyy))
							{
							?>
							
                                      <div class="form-group" id="V<?php echo $vo;?>">
										
										
										<div class="col-md-2">
                              <input type="text"  value="<?php echo $venrow['venue_name']; ?>" name='venue_room_name[]' class="form-control" placeholder="Enter Venue Room">
                                          </div>
										  
										 <div class="col-md-2">
												
				<input type="text" name='venue_avail[]' value="<?php echo $venrow['venue_avail']; ?>" class="form-control" placeholder="Capacity">	
                                          </div>
											
											
                                          <div class="col-md-2">
                              <input type="text"  value="<?php echo $venrow['venue_price']; ?>" name='venue_room_price[]' class="form-control" placeholder="Enter Venue Rates">
                                          </div>
										  
										   
										  
										  <div class="col-md-3">
                                        <input type="text" value="<?php echo $venrow['venue_descr']; ?>" name='venue_descr[]' class="form-control" placeholder="Description">
                                          </div>
										  
										  <div class="col-md-3">
                                             <input type="file"  class="file-styled" name='venue_img[]'>
									<img height="50" src="img-vc-venue/<?php echo $venrow['venue_img']; ?>" width='50' /> 
									
									<input type='hidden' name="venoldimg[]" value="<?php echo $venrow['venue_img']; ?>" />								
									
                                          </div>
										  
							<a href="javascript:void(0)" onclick="remove_venue(<?php echo $vo;?>)">Remove</a>
										  
										</div>
										<?php
										$vo++;
										}
										?>
										
							
							</div>
							<a href="javascript:void(0)" id="add_venue" class='btn btn-Success' >Add</a>
							
							
										</div>
										
									
									
									<!--dd-->
									<?php
							$num2=mysql_num_rows(mysql_query("select * from vc_confer_data where vc_id='$aid'"));
									
									?>
									
									<div <?php if($num2>0){ ?>  <?php } else { ?>id="con_div" <?php } ?>>
									<h6>Conference</h6>
									
									<div id='confer_res'>
									          <?php
											  $co=1;
							$conyy=mysql_query("select * from vc_confer_data where vc_id='$aid'");
							while($conrow=mysql_fetch_assoc($conyy))
							{
							?>
                                      <div class="form-group" id="C<?php echo $co; ?>">
										
										
										<div class="col-md-2">
                              <input type="text"  value="<?php echo $conrow['confer_name']; ?>" name='confer_room_name[]' class="form-control" placeholder="Enter Room Name">
                                          </div>
										  
										  
											<div class="col-md-2">
												
				<input type="text" name='confer_avail[]' value="<?php echo $conrow['confer_avail']; ?>" class="form-control" placeholder="Capacity">	
                                          </div>
											
											
                                          <div class="col-md-2">
                              <input type="text"  value="<?php echo $conrow['confer_price']; ?>" name='confer_room_price[]' class="form-control" placeholder="Enter Conference Rates">
                                          </div>
										  
										  
										  <div class="col-md-3">
                                        <input type="text" value="<?php echo $conrow['confer_descr']; ?>" name='confer_descr[]' class="form-control" placeholder="Description">
                                          </div>
										  
										  <div class="col-md-3">
                                             <input type="file"  class="file-styled" name='confer_img[]'>
									<img height="50" src="img-vc-confer/<?php echo $conrow['confer_img']; ?>" width='50' /> 
									
						<input type='hidden' name="conoldimg[]" value="<?php echo $conrow['confer_img']; ?>" />
									
                                          </div>
										  
							<a href="javascript:void(0)" onclick="remove_confer(<?php echo $co;?>)">Remove</a>
										  
										</div>
										<?php
										$co++;
										}
										?>
										
							
							</div>
							<a href="javascript:void(0)" id="add_confer" class='btn btn-Success' >Add</a>
							
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
											<label class="col-lg-2 control-label">Amenity:</label>
											<div class="col-lg-9">
									<textarea rows="5" cols="5" name='amenity_descr'  class="form-control" placeholder="Enter Amenity Description"><?php echo $acc_data['amenity_descr']; ?></textarea>
											</div>
										</div>
                                      
								
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
											<label class="col-lg-2 control-label">Activity:</label>
											<div class="col-lg-9">
									<textarea rows="5" cols="5" name='activity_descr'  class="form-control" placeholder="Enter Activity Description"><?php echo $acc_data['activity_descr']; ?></textarea>
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
										
							<h5>Popular Attraction and surrounding: Please provide as many detail as possible</h5>
							
							<?php
							$ao=1;
							$actqryy=mysql_query("select * from vc_activity where vc_id='$aid'");
							while($arow=mysql_fetch_assoc($actqryy))
							{
							?>
							
							<div class="form-group" id="A<?php echo $ao; ?>">
							<div class="col-lg-4 col-md-4 col-sm-4">
							<input type="text" class="form-control"  value="<?php echo $arow['establish']; ?>" placeholder="Name Of Attraction" name='est_name[]'>
							</div>
							
							<div class="col-lg-4 col-md-4 col-sm-4">
							
                           <select  data-placeholder="Attraction Activity" class="select-icons" name='actvity2[]' >
												<option value="">Choose Here</option>	
									
							                    	<?php
												$surround=mysql_query("select * from surroundings order by name asc");
												while($surrrow=mysql_fetch_assoc($surround))
												{
												?>  
							<option <?php if($arow['activv']==$surrrow['name']){ ?>selected<?php } ?>  data-icon="stumbleupon" value="<?php echo $surrrow['name']; ?>"><?php echo $surrrow['name']; ?></option>
                                                <?php
												}
												?>
						  </select>
                            
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4">
							<input type="text" class="form-control"  value="<?php echo $arow['approx_dis']; ?>" placeholder="Approximate Distance" name='approx_dis[]'>
							</div>
							<a href="javascript:void(0)" onclick="remove_activity(<?php echo $ao;?>)">Remove</a>
							</div>
							<?php
							$ao++;
							}
							?>
							<div id='res'>
							
							</div>
							<a href="javascript:void(0)" id="add_act" class='btn btn-Success' >Add More</a>
						
                                       
                                  
								
							
								<div class="panel-heading">
                                 <h6 class="panel-title">Transport</h6>
                                 </div> 			

										 
                              <div class="form-group">
											<label class="col-lg-8 control-label">Transport / Shuttle Service</label>
											<div class="col-lg-12">
										<select  data-placeholder="Shuttle Service" id='sht' class="select-icons" name='shuttle' >
													
												 <option  value="">Services</option>
			<option <?php if($acc_data['shuttle_service']=='Yes'){ echo "selected"; } ?> value="Yes">Yes</option>
			<option <?php if($acc_data['shuttle_service']=='No'){ echo "selected"; } ?> value="No">No</option>
                                                
													
													
												
												</select>
											</div>
										</div>
										<div  id="trans_res">
									
							<?php
							$so=1;
							$shutyy=mysql_query("select * from vc_shuttle_multipledata where vc_id='$aid'");
							while($shutrow=mysql_fetch_assoc($shutyy))
							{
							
							?>
									
										
<div class="form-group" id="T<?php echo $so; ?>">
										
										<div class="col-md-3">
				<input type="text" name='venname[]' class="form-control vnnn" value="<?php echo $shutrow['event_name']; ?>"  placeholder="Give Event’s Name for Pick Up">	
									</div>
											
									<div class="col-md-3">
				<input type="text" name='pickdate[]' value="<?php echo $shutrow['provide_date']; ?>" class="form-control pd"  placeholder="Provide Date">	
									</div>
									
									<div class="col-md-3">
				<input type="text" name='picktime[]' value="<?php echo $shutrow['provide_time']; ?>" class="form-control pt"  placeholder="provide Time">	
									</div>
									<div class="col-md-3">
		<input type="text" name='pickadd[]' class="form-control padd"  value="<?php echo $shutrow['addr']; ?>" placeholder="Enter Address">	
									</div>
									
									<a href="javascript:void(0)" onclick="remove_tran(<?php echo $so;?>)">Remove</a>
							</div>
									

							<?php
							$so++;
							}
							?>
					
                                		
										</div>
							
						<div id="shutbut">
							<a href="javascript:void(0)" id="add_trans" class='btn btn-Success' >Add</a>
							
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
			<input type="text" name='cancel' value="<?php echo $acc_data['cancel']; ?>" class="form-control" placeholder="Enter Cancellation">
											                    </div>
                                       </div>
									   
									   <h6> 
									   PLEASE TAKE NOTE: Once client have confirmed their booking “Hey Stranger” will charge 100% deposit. Deposit will be paid to you less “Hey Stranger” pre selected commission excl vat.
In the event of cancellation, your cancellation policy as displayed on “Hey Stranger” will apply.
“Hey Stranger” will retain their commission, due to a finders fee and will therefore not be responsible for any payments to your clients.
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
                                            <select data-placeholder="Payment accepted at this facility" class="select-icons" name='payment_type[]' multiple>
							<option data-icon="stumbleupon" value="">Payment accepted at this facility</option>					 
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
							<option data-icon="stumbleupon" <?php if($acc_data['duration']=='Long & Short Term'){ echo "selected"; } ?> value="Long & Short Term">Long & Short Term</option>
                                                
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
									   
									   <h5>Do you offer extra's ( Example:Flower )</h5>
									   
									   
									   <?php
									   	   $eo=1;
							$polqry=mysql_query("select * from vc_policiy_data where vc_id='$aid'");
							while($prow=mysql_fetch_assoc($polqry))
							{
							?>
									    <div class="form-group" id="E<?php echo $eo; ?>">
										   
										   <div class="col-md-3">
						<input type="text" name="item[]" value="<?php echo $prow['item']; ?>" class="form-control" placeholder="Item">
										   </div>
										   
                                          <div class="col-md-3">
                                             <input type="text" value="<?php echo $prow['pricee']; ?>" name='extra_price[]' class="form-control" placeholder="Enter Price">
                                          </div>
										  
										  <div class="col-md-3">
                                             <input type="file"  class="file-styled" name='extra_img[]'>
											 <img src="img-vc-policy/<?php echo $prow['imge']; ?>" width='50' height='50' />
								<input type='hidden' name="pololdimg[]" value="<?php echo $prow['imge']; ?>" />
                                          </div>
										  
										  	
											<div class="col-md-3">
											<select data-placeholder="Extra Condition" class="select-icons" name='extra_cond[]' >
							<option data-icon="stumbleupon" value="">Choose Condition</option>
									 
							<option data-icon="stumbleupon" <?php if($prow['condition']=='Yes') { echo 'selected'; } ?>  value="Yes">Yes</option>
							<option data-icon="stumbleupon" <?php if($prow['condition']=='No') { echo 'selected'; } ?> value="No">No</option>
                                                
                                                
												</select>
											</div>
							<a href="javascript:void(0)" onclick="remove_extra(<?php echo $eo;?>)">Remove</a>
										  
										</div>
										
								<?php
								$eo++;
								}
								?>		
										
							<div id='extra_res'>
							
							</div>
							<a href="javascript:void(0)" id="add_extra" class='btn btn-Success' >Add</a>
										
                                       
                                    </div>
                                 </div>
                              
                           </div>
						   
						   
                           <div class="tab-pane fade has-padding" id="william">
                              
                                 <div class="panel panel-flat">
                                    <div class="panel-heading">
                                       <h5 class="panel-title">Metatags & Meta Description</h5>
                                    </div>
                                    <div class="panel-body">
                                      
                                      
                                       <div class="form-group">
                                          <label class="col-lg-3 control-label">Title:</label>
                                          <div class="col-lg-9">
                                             <input type="text" value="<?php echo $acc_data['title']; ?>" name='title' class="form-control" placeholder="Enter Your Title">
                                          </div>
                                       </div>
                                       <div class="form-group">
											                  <label class="col-lg-3 control-label">Meta Description :</label>
										                    	<div class="col-lg-9">
			<textarea rows="5" cols="5" class="form-control" placeholder="Enter your Meta Description here" name='keyword'><?php echo $acc_data['keyword']; ?></textarea>
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
                                          <label class="col-lg-3 control-label">Venue / Conference Video </label>
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
						<input type='hidden' name='action' value="add_venue_confer" />
                           <div class="tab-pane fade in active has-padding" id="james">
                              
                                 <div class="panel panel-flat">
                                    <div class="panel-heading">
                                       <h5 class="panel-title">Venue Details</h5>
                                    </div>
                                    <div class="panel-body">
										
										<div class="form-group">
													
										<div class="col-lg-6 col-md-6 col-sm-12">
				<input type="text" class="form-control"  placeholder=" Name" name='vc_name'>
				
										</div>
											
										<div class="col-lg-6 col-md-6 col-sm-12">
												<select class="select" id="vccondit" name='vc_type'>
												  <option value="">Choose Type</option>
												 
							                   <option value="Venue">Venue</option>
							                   <option value="Conference">Conference</option>
							                   <option value="Venue & Conference">Venue & Conference</option>
                                              
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
											<label class="col-lg-3 control-label">Establishment Detail:</label>
											<div class="col-lg-9">
			<textarea rows="5" cols="5" name='vc_detail'  class="form-control" placeholder="Give a description about your establishment"></textarea>
											</div>
										</div>
										
										<div class="form-group">
													
										<div class="col-lg-6 col-md-6 col-sm-12">
										<input type="file"  class="file-styled" name='vc_img1'>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
				                        <input type="file"  class="file-styled" name='vc_img2'>
										</div>
											
										</div>
										
										<div class="form-group">
													
										<div class="col-lg-6 col-md-6 col-sm-12">
										<input type="file"  class="file-styled" name='vc_img3'>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
				                        <input type="file"  class="file-styled" name='vc_img4'>
										</div>
											
										</div>
										<div class="form-group">
													
										<div class="col-lg-6 col-md-6 col-sm-12">
										<input type="file"  class="file-styled" name='vc_img5'>
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
                                      
								       <div id='venue_div'>
										<h6>Venue</h6>
										<div class="form-group">
											
											<div class="col-md-2">
											<input type="text" name='venue_room_name[]' class="form-control" placeholder="Enter Venue Name">	
											</div>
											
											<div class="col-md-2">
											
						<input type="text" name='venue_avail[]' class="form-control" placeholder="Capacity">	
										
                                          </div>
										  
                                          <div class="col-md-2">
                                             <input type="text" name='venue_room_price[]' class="form-control" placeholder="Enter Venue Rates">
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
							
							</div>
							<br>
							<br>
		                               <div id='con_div'>					
										<h6>Conference</h6>
										<div class="form-group">
											
											<div class="col-md-2">
											<input type="text" name='confer_room_name[]' class="form-control" placeholder="Enter Conference Name">	
											</div>
											
											<div class="col-md-2">
											
						<input type="text" name='confer_avail[]' class="form-control" placeholder="Capacity">	
										
                                          </div>
										  
											
                                          <div class="col-md-2">
                                             <input type="text" name='confer_room_price[]' class="form-control" placeholder="Enter Conference Rates">
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
											<label class="col-lg-2 control-label">Amenity:</label>
											<div class="col-lg-9">
									<textarea rows="5" cols="5" name='amenity_descr'  class="form-control" placeholder="Enter Amenity Description"></textarea>
											</div>
										</div>
								
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
											<label class="col-lg-2 control-label">Activity:</label>
											<div class="col-lg-9">
									<textarea rows="5" cols="5" name='activity_descr'  class="form-control" placeholder="Enter Activity Description"></textarea>
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
										
							<h5>Popular Attraction and surrounding: Please provide as many detail as possible</h5>
							<div class="form-group">
							<div class="col-lg-4 col-md-4 col-sm-4">
							<input type="text" class="form-control"  value="" placeholder="Name Of Attraction" name='est_name[]'>
							</div>
							
							<div class="col-lg-4 col-md-4 col-sm-4">
							
                           <select  data-placeholder="Attraction Activity" class="select-icons" name='actvity2[]' >
												<option value="">Choose Here</option>	
									
							                    	<?php
												$surround=mysql_query("select * from surroundings order by name asc");
												while($surrrow=mysql_fetch_assoc($surround))
												{
												?>  
							<option data-icon="stumbleupon" value="<?php echo $surrrow['name']; ?>"><?php echo $surrrow['name']; ?></option>
                                                <?php
												}
												?>
						  </select>
                            
							</div>
							
							<div class="col-lg-4 col-md-4 col-sm-4">
							<input type="text" class="form-control"  value="" placeholder="Approximate Distance" name='approx_dis[]'>
							</div>
							</div>
							<div id='res'>
							
							</div>
							<a href="javascript:void(0)" id="add_act" class='btn btn-Success' >Add More</a>
								
							
								<div class="panel-heading">
                                 <h6 class="panel-title">Transport</h6>
                                 </div> 			
                                 
								 
                              		 
                              <div class="form-group">
											<label class="col-lg-8 control-label">Transport / Shuttle Service</label>
											<div class="col-lg-12">
										<select  data-placeholder="Shuttle Service" id='sht' class="select-icons" name='shuttle' >
													
													<option  value="">Services</option>
					                              <option  value="Yes">Yes</option>
					                              <option  value="No">No</option>
                                                
													
													
												
												</select>
											</div>
										</div>
										
										<div class="form-group pick" style='display:none'>
										
										<div class="col-md-3">
				<input type="text" name='venname[]' class="form-control vnnn"  placeholder="Give Event’s Name for Pick Up">	
									</div>
											
									<div class="col-md-3">
				<input type="text" name='pickdate[]' class="form-control pd"  placeholder="Provide Date">	
									</div>
									
									<div class="col-md-3">
				<input type="text" name='picktime[]' class="form-control pt"  placeholder="Provide time">	
									</div>
									<div class="col-md-3">
				<input type="text" name='pickadd[]' class="form-control padd"  placeholder="Enter Address">	
									</div>
									
									<br>
									<br><br>
									
									<div id="trans_res">
									
									</div>
									
									<br><br>
									
							<a href="javascript:void(0)" id="add_trans" class='btn btn-Success' >Add</a>
							
									
									
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
                                             <input type="text" value="100% Deposit" readonly name='deposite' class="form-control" placeholder="Enter Deposit">
                                          </div>
										  
										  
										                    	<div class="col-lg-6">
			<input type="text" name='cancel' class="form-control" placeholder="Enter Cancellation Policy">
											                    </div>
                                       </div>
									   
									   <h6> 
									   PLEASE TAKE NOTE: Once client have confirmed their booking “Hey Stranger” will charge 100% deposit. Deposit will be paid to you less “Hey Stranger” pre selected commission excl vat.
In the event of cancellation, your cancellation policy as displayed on “Hey Stranger” will apply.
“Hey Stranger” will retain their commission, due to a finders fee and will therefore not be responsible for any payments to your clients.
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
                                            <select data-placeholder="Payment accepted at this facility" class="select-icons" name='payment_type[]' multiple >
							<option data-icon="stumbleupon" value="">Payment accepted at this facility</option>					 
									
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
							<option data-icon="stumbleupon" value="Long & Short Term">Long & Short Term</option>
                                                
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
									   
									   <h5>Do you offer extra's ( Example:Flower )</h5>
									   
									   
									    <div class="form-group">
										   
                                          <div class="col-md-3">
										  <input type="text" name="item[]" class="form-control" placeholder="Item">
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
							
										
                                       
                                    </div>
                                 </div>
                              
                           </div>
						   
						   
                           <div class="tab-pane fade has-padding" id="william">
                              
                                 <div class="panel panel-flat">
                                    <div class="panel-heading">
                                       <h5 class="panel-title">Metatags & Meta Description</h5>
                                    </div>
                                    <div class="panel-body">
                                      
                                      
                                       <div class="form-group">
                                          <label class="col-lg-3 control-label">Title:</label>
                                          <div class="col-lg-9">
                                             <input type="text" name='title' class="form-control" placeholder="Enter Your Title">
                                          </div>
                                       </div>
                                       <div class="form-group">
											                  <label class="col-lg-3 control-label">Meta Description :</label>
										                    	<div class="col-lg-9">
			<textarea rows="5" cols="5" class="form-control" placeholder="Enter your Meta Description here" name='keyword'></textarea>
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
                                          <label class="col-lg-3 control-label">Venue / Conference Video </label>
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

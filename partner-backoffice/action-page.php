<?php
include('../lib/config.php'); 

$value = $_GET['action'];

if($value!='')
{
$value = $_GET['action'];	
}
else
{
$value = $_POST['action'];
}

switch($value)
{

case "add_accommodation":			
      add_accommodation();
      break;
	  
case "edit_accommodation":			
      edit_accommodation();
      break;
	  
case "add_venue_confer":			
      add_venue_confer();
      break;

case "edit_venue_confer":			
      edit_venue_confer();
      break;

case "add_promotion":			
      add_promotion();
      break;

case "edit_promotion":			
      edit_promotion();
      break;	  
	  
case "delete_accomodation":			
      delete_accomodation();
      break;

case "delete_vencon":			
      delete_vencon();
      break;	  
	  
	  

}

function delete_accomodation()
{
$delid=$_GET['delid'];

$acc_data=mysql_fetch_assoc(mysql_query("select * from accommodation_detail where id='$delid'"));

unlink('img-accomo/'.$acc_data['acc_img1']);
unlink('img-accomo/'.$acc_data['acc_img1']);
unlink('img-accomo/'.$acc_data['acc_img1']);
unlink('img-accomo/'.$acc_data['acc_img1']);
unlink('img-accomo/'.$acc_data['acc_img1']);

mysql_query("delete from accommodation_detail where id='$delid'");
mysql_query("delete from accommod_activity where acco_id='$delid'");

$venue_qr=mysql_query("select * from venue_data where acco_id='$delid'");
while($vrow=mysql_fetch_assoc($venue_qr))
{
unlink('img-venue/'.$vrow['venue_img']);
}
mysql_query("delete from venue_data where acco_id='$delid'");


$c_qr=mysql_query("select * from confer_data where acco_id='$delid'");
while($crow=mysql_fetch_assoc($c_qr))
{
unlink('img-confer/'.$crow['confer_img']);
}
mysql_query("delete from confer_data where acco_id='$delid'");


$p_qr=mysql_query("select * from policiy_data where acco_id='$delid'");
while($prow=mysql_fetch_assoc($p_qr))
{
unlink('img-policy/'.$prow['imge']);
}
mysql_query("delete from policiy_data where acco_id='$delid'");


$r_qr=mysql_query("select * from room_data where acco_id='$delid'");
while($rrow=mysql_fetch_assoc($r_qr))
{
unlink('img-room/'.$rrow['imgg']);
}
mysql_query("delete from room_data where acco_id='$delid'");


      $_SESSION['mymsg']='Delete Successfully!';
	  echo "<script>window.location='my-accommodation.php';</script>";
	  exit();


}

function delete_vencon()
{
$delid=$_GET['delid'];

$acc_data=mysql_fetch_assoc(mysql_query("select * from vc_detail where id='$delid'"));

unlink('img-ven-con/'.$acc_data['vc_img1']);
unlink('img-ven-con/'.$acc_data['vc_img2']);
unlink('img-ven-con/'.$acc_data['vc_img3']);
unlink('img-ven-con/'.$acc_data['vc_img4']);
unlink('img-ven-con/'.$acc_data['vc_img5']);

mysql_query("delete from vc_detail where id='$delid'");
mysql_query("delete from vc_activity where vc_id='$delid'");

$venue_qr=mysql_query("select * from vc_venue_data where vc_id='$delid'");
while($vrow=mysql_fetch_assoc($venue_qr))
{
unlink('img-vc-venue/'.$vrow['venue_img']);
}
mysql_query("delete from vc_venue_data where vc_id='$delid'");


$c_qr=mysql_query("select * from vc_confer_data where vc_id='$delid'");
while($crow=mysql_fetch_assoc($c_qr))
{
unlink('img-vc-confer/'.$crow['confer_img']);
}
mysql_query("delete from vc_confer_data where vc_id='$delid'");


$p_qr=mysql_query("select * from vc_policiy_data where vc_id='$delid'");
while($prow=mysql_fetch_assoc($p_qr))
{
unlink('img-vc-policy/'.$prow['imge']);
}
mysql_query("delete from vc_policiy_data where vc_id='$delid'");


      $_SESSION['mymsg']='Delete Successfully!';
	  echo "<script>window.location='my_venue_confer.php';</script>";
	  exit();


}


function add_accommodation()
{
$cdate=date('Y-m-d');
$acc_name=$_POST['acc_name'];
$type_accommodation=$_POST['type_accommodation'];
$rating=$_POST['rating'];
$street_address=$_POST['street_address'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
$area=$_POST['area'];
$contact_no=$_POST['contact_no'];
$alternate=$_POST['alternate'];
$reserv_email=$_POST['reserv_email'];
$accommod_detail=$_POST['accommod_detail'];

$pickdate=$_POST['pickdate'];
$picktime=$_POST['picktime'];
$pickadd=$_POST['pickadd'];

$video_cond=$_POST['video_cond'];


$acc_img1=$_FILES['acc_img1']['name'];
$acc_img2=$_FILES['acc_img2']['name'];
$acc_img3=$_FILES['acc_img3']['name'];
$acc_img4=$_FILES['acc_img4']['name'];
$acc_img5=$_FILES['acc_img5']['name'];


if($acc_img1!=='')
{
$file1 = time()."A_".$_FILES["acc_img1"]["name"];
move_uploaded_file($_FILES["acc_img1"]["tmp_name"],"img-accomo/" .$file1);
}
else
{
$file1='';
}

if($acc_img2!=='')
{
$file2 = time()."A_".$_FILES["acc_img2"]["name"];
move_uploaded_file($_FILES["acc_img2"]["tmp_name"],"img-accomo/" .$file2);
}
else
{
$file2='';
}

if($acc_img3!=='')
{
$file3 = time()."A_".$_FILES["acc_img3"]["name"];
move_uploaded_file($_FILES["acc_img3"]["tmp_name"],"img-accomo/" .$file3);
}
else
{
$file3='';
}


if($acc_img4!=='')
{
$file4 = time()."A_".$_FILES["acc_img4"]["name"];
move_uploaded_file($_FILES["acc_img4"]["tmp_name"],"img-accomo/" .$file4);
}
else
{
$file4='';
}

if($acc_img5!=='')
{
$file5 = time()."A_".$_FILES["acc_img5"]["name"];
move_uploaded_file($_FILES["acc_img5"]["tmp_name"],"img-accomo/" .$file5);
}
else
{
$file5='';
}

$amenity=$_POST['amenity'];
$activity=$_POST['activity'];
$payment_type=$_POST['payment_type'];

$amenity_array=implode(',',$amenity);
$activity_array=implode(',',$activity);
$payment_array=implode(',',$payment_type);

$shuttle=$_POST['shuttle'];
$deposite=$_POST['deposite'];
$cancel=$_POST['cancel'];
$timein=$_POST['timein'];
$timeout=$_POST['timeout'];
$child_extra=$_POST['child_extra'];
$pets=$_POST['pets'];

$lang_spoken=$_POST['lang_spoken'];
$acco_duration=$_POST['acco_duration'];
$corpo_deals=$_POST['corpo_deals'];
$contract_deal=$_POST['contract_deal'];
$policy_terms=$_POST['policy_terms'];
$title=$_POST['title'];
$keyword=$_POST['keyword'];
$metatag=$_POST['metatag'];
$video=$_POST['video'];
$lat=$_POST['lat'];
$long=$_POST['long'];
$ven_con_cond=$_POST['ven_con_cond'];
$amenity_descr=$_POST['amenity_descr'];
$activity_descr=$_POST['activity_descr'];
$venmain_descr=$_POST['venmain_descr'];
$conmain_descr=$_POST['conmain_descr'];
$roomfull_descr=$_POST['roomfull_descr'];

mysql_query("INSERT INTO `accommodation_detail`(`id`, `partner_id`, `accomod_name`, `accomod_type`, `rating`, `detail`, `street_address`, `country`, `state`, `city`, `area`, `contact_no`, `alternate_no`, `reserve_email`, `acc_img1`, `acc_img2`, `acc_img3`, `acc_img4`, `acc_img5`, `amenity`, `activity`, `shuttle_service`, `deposit`, `cancel`, `timein`, `timeout`, `child_ext`, `pets`, `payment_type`, `lang_spoken`, `duration`, `corporate_deals`, `contract_deals`, `terms`, `title`, `keyword`, `metatag`, `video`, `lat`, `longt`,`cdate`,`pickdate`,`picktime`,`pickadd`,`video_cond`,`ven_con_cond`,`amenity_descr`,`activity_descr`,`venmain_descr`,`conmain_descr`,`roomfull_descr`) VALUES ('','$_SESSION[pid]','$acc_name','$type_accommodation','$rating','$accommod_detail','$street_address','$country','$state','$city','$area','$contact_no','$alternate','$reserv_email','$file1','$file2','$file3','$file4','$file5','$amenity_array','$activity_array','$shuttle','$deposite','$cancel','$timein','$timeout','$child_extra','$pets','$payment_array','$lang_spoken','$acco_duration','$corpo_deals','$contract_deal','$policy_terms','$title','$keyword','$metatag','$video','$lat','$long','$cdate','$pickdate','$picktime','$pickadd','$video_cond','$ven_con_cond','$amenity_descr','$activity_descr','$venmain_descr','$conmain_descr','$roomfull_descr')");

$lastid=mysql_insert_id();

/*------------activity multiple value*/
$est_name=$_POST['est_name'];
$actvity2=$_POST['actvity2'];
$approx_dis=$_POST['approx_dis'];

$count1=count($est_name);
if($est_name[0]!='')
{
for($i=0;$i<$count1;$i++)
{
$est=$est_name[$i];
$act=$actvity2[$i];
$app=$approx_dis[$i];
mysql_query("INSERT INTO `accommod_activity`(`id`,`acco_id`,`establish`, `activv`, `approx_dis`) VALUES ('','$lastid','$est','$act','$app')");
}
}
/*------------activity multiple value*/

/*------------room multiple value*/
$room_type=$_POST['room_type'];
$cap=$_POST['cap'];
$room_price=$_POST['room_price'];
$avail=$_POST['avail'];
$descr=$_POST['descr'];

$room_img_array=$_FILES["room_img"]["name"];
$room_img_tmp=$_FILES["room_img"]["tmp_name"];

$count2=count($room_type);
if($room_type[0]!='')
{
for($j=0;$j<$count2;$j++)
{
$room_type1=$room_type[$j];
$room_price1=$room_price[$j];
$avail1=$avail[$j];
$descr1=$descr[$j];
$cap1=$cap[$j];

$imgg=$room_img_array[$j];
$img_tmp=$room_img_tmp[$j];

if($imgg!='')
{
$rimg = time()."A_".$imgg;
move_uploaded_file($img_tmp,"img-room/" .$rimg);
}
else
{
$rimg='';
}

mysql_query("INSERT INTO `room_data`(`id`,`acco_id`,`room_type`, `price`, `avail`, `description`, `imgg`,`cap`) VALUES ('','$lastid','$room_type1','$room_price1','$avail1','$descr1','$rimg','$cap1')");

}
}

/*------------room multiple value*/


/*------------Policy multiple value*/
$item=$_POST['item'];
$extra_price=$_POST['extra_price'];
$extra_cond=$_POST['extra_cond'];


$extra_img_array=$_FILES["extra_img"]["name"];
$extra_img_tmp=$_FILES["extra_img"]["tmp_name"];

$count3=count($item);
if($item[0]!='')
{
for($k=0;$k<$count3;$k++)
{
$item1=$item[$k];
$extra_price1=$extra_price[$k];
$extra_cond1=$extra_cond[$k];

$eximgg=$extra_img_array[$k];
$eximg_tmp=$extra_img_tmp[$k];

if($eximgg!='')
{
$ex_img = time()."A_".$eximgg;
move_uploaded_file($eximg_tmp,"img-policy/" .$ex_img);
}
else
{
$ex_img='';
}

mysql_query("INSERT INTO `policiy_data`(`id`,`acco_id`,`item`, `pricee`, `imge`, `condition`) VALUES ('','$lastid','$item1','$extra_price1','$ex_img','$extra_cond1')");

}
}

/*------------policy multiple value*/


/*------------venue multiple value*/
$venue_name=$_POST['venue_name'];
$venue_price=$_POST['venue_price'];
$venue_avail=$_POST['venue_avail'];
$venue_descr=$_POST['venue_descr'];
$venue_img=$_POST['venue_img'];
$ven_feat=$_POST['ven_feat'];

$venue_img_array=$_FILES["venue_img"]["name"];
$venue_img_tmp=$_FILES["venue_img"]["tmp_name"];

$count4=count($venue_name);
if($venue_name[0]!='')
{
for($l=0;$l<$count4;$l++)
{
$venue_name1=$venue_name[$l];
$venue_price1=$venue_price[$l];
$venue_avail1=$venue_avail[$l];
$venue_descr1=$venue_descr[$l];
$venue_img1=$venue_img[$l];

$venimgg=$venue_img_array[$l];
$venimg_tmp=$venue_img_tmp[$l];

if($venimgg!='')
{
$ve_img = time()."A_".$venimgg;
move_uploaded_file($venimg_tmp,"img-venue/" .$ve_img);
}
else
{
$ve_img='';
}

mysql_query("INSERT INTO `venue_data`(`id`, `acco_id`, `venue_name`, `venue_price`, `venue_avail`, `venue_descr`, `venue_img`) VALUES ('','$lastid','$venue_name1','$venue_price1','$venue_avail1','$venue_descr1','$ve_img')");

}
}

/*------------venue multiple value*/



/*------------conference multiple value*/
$confer_name=$_POST['confer_name'];
$confer_price=$_POST['confer_price'];
$confer_avail=$_POST['confer_avail'];
$confer_descr=$_POST['confer_descr'];
$confer_img=$_POST['confer_img'];
$con_feat=$_POST['con_feat'];


$confer_img_array=$_FILES["confer_img"]["name"];
$confer_img_tmp=$_FILES["confer_img"]["tmp_name"];

$count5=count($confer_name);
if($confer_name[0]!='')
{
for($m=0;$m<$count5;$m++)
{
$confer_name1=$confer_name[$m];
$confer_price1=$confer_price[$m];
$confer_avail1=$confer_avail[$m];
$confer_descr1=$confer_descr[$m];
$confer_img1=$confer_img[$m];

$conferimgg=$confer_img_array[$m];
$conferimg_tmp=$confer_img_tmp[$m];

if($conferimgg!='')
{
$confer_img = time()."A_".$conferimgg;
move_uploaded_file($conferimg_tmp,"img-confer/" .$confer_img);
}
else
{
$confer_img='';
}

mysql_query("INSERT INTO `confer_data`(`id`, `acco_id`, `confer_name`, `confer_price`, `confer_avail`, `confer_descr`, `confer_img`) VALUES ('','$lastid','$confer_name1','$confer_price1','$confer_avail1','$confer_descr1','$confer_img')");

}
}

/*------------conference multiple value*/


      $_SESSION['mymsg']='Add Successfully!';
	  echo "<script>window.location='add-accommodation.php';</script>";
	  exit();


}

function edit_accommodation()
{
$hid=$_POST['hid'];
$cdate=date('Y-m-d');

$acc_name=$_POST['acc_name'];
$type_accommodation=$_POST['type_accommodation'];
$rating=$_POST['rating'];
$street_address=$_POST['street_address'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
$area=$_POST['area'];
$contact_no=$_POST['contact_no'];
$alternate=$_POST['alternate'];
$reserv_email=$_POST['reserv_email'];
$accommod_detail=$_POST['accommod_detail'];


$pickdate=$_POST['pickdate'];
$picktime=$_POST['picktime'];
$pickadd=$_POST['pickadd'];

$video_cond=$_POST['video_cond'];

$acc_img1=$_FILES['acc_img1']['name'];
$acc_img2=$_FILES['acc_img2']['name'];
$acc_img3=$_FILES['acc_img3']['name'];
$acc_img4=$_FILES['acc_img4']['name'];
$acc_img5=$_FILES['acc_img5']['name'];

$old_acc_img1=$_POST['old_acc_img1'];
$old_acc_img2=$_POST['old_acc_img2'];
$old_acc_img3=$_POST['old_acc_img3'];
$old_acc_img4=$_POST['old_acc_img4'];
$old_acc_img5=$_POST['old_acc_img5'];



if($acc_img1!=='')
{
$file1 = time()."A_".$_FILES["acc_img1"]["name"];
move_uploaded_file($_FILES["acc_img1"]["tmp_name"],"img-accomo/" .$file1);
}
else
{
$file1=$old_acc_img1;
}

if($acc_img2!=='')
{
$file2 = time()."A_".$_FILES["acc_img2"]["name"];
move_uploaded_file($_FILES["acc_img2"]["tmp_name"],"img-accomo/" .$file2);
}
else
{
$file2=$old_acc_img2;
}

if($acc_img3!=='')
{
$file3 = time()."A_".$_FILES["acc_img3"]["name"];
move_uploaded_file($_FILES["acc_img3"]["tmp_name"],"img-accomo/" .$file3);
}
else
{
$file3=$old_acc_img3;
}


if($acc_img4!=='')
{
$file4 = time()."A_".$_FILES["acc_img4"]["name"];
move_uploaded_file($_FILES["acc_img4"]["tmp_name"],"img-accomo/" .$file4);
}
else
{
$file4=$old_acc_img4;
}

if($acc_img5!=='')
{
$file5 = time()."A_".$_FILES["acc_img5"]["name"];
move_uploaded_file($_FILES["acc_img5"]["tmp_name"],"img-accomo/" .$file5);
}
else
{
$file5=$old_acc_img5;
}

$amenity=$_POST['amenity'];
$activity=$_POST['activity'];
$payment_type=$_POST['payment_type'];

$amenity_array=implode(',',$amenity);
$activity_array=implode(',',$activity);
$payment_array=implode(',',$payment_type);

$shuttle=$_POST['shuttle'];
$deposite=$_POST['deposite'];
$cancel=$_POST['cancel'];
$timein=$_POST['timein'];
$timeout=$_POST['timeout'];
$child_extra=$_POST['child_extra'];
$pets=$_POST['pets'];

$lang_spoken=$_POST['lang_spoken'];
$acco_duration=$_POST['acco_duration'];
$corpo_deals=$_POST['corpo_deals'];
$contract_deal=$_POST['contract_deal'];
$policy_terms=$_POST['policy_terms'];
$title=$_POST['title'];
$keyword=$_POST['keyword'];
$metatag=$_POST['metatag'];
$video=$_POST['video'];
$lat=$_POST['lat'];
$long=$_POST['long'];
$ven_con_cond=$_POST['ven_con_cond'];

$amenity_descr=$_POST['amenity_descr'];
$activity_descr=$_POST['activity_descr'];

$venmain_descr=$_POST['venmain_descr'];
$conmain_descr=$_POST['conmain_descr'];
$roomfull_descr=$_POST['roomfull_descr'];

mysql_query("Update `accommodation_detail` SET  `accomod_name`='$acc_name', `accomod_type`='$type_accommodation', `rating`='$rating', `detail`='$accommod_detail', `street_address`='$street_address', `country`='$country', `state`='$state', `city`='$city', `area`='$area', `contact_no`='$contact_no', `alternate_no`='$alternate',`reserve_email`='$reserv_email', `acc_img1`='$file1', `acc_img2`='$file2', `acc_img3`='$file3', `acc_img4`='$file4', `acc_img5`='$file5', `amenity`='$amenity_array', `activity`='$activity_array', `shuttle_service`='$shuttle', `deposit`='$deposite', `cancel`='$cancel', `timein`='$timein', `timeout`='$timeout', `child_ext`='$child_extra', `pets`='$pets', `payment_type`='$payment_array', `lang_spoken`='$lang_spoken', `duration`='$acco_duration', `corporate_deals`='$corpo_deals', `contract_deals`='$contract_deal', `terms`='$policy_terms', `title`='$title', `keyword`='$keyword', `metatag`='$metatag', `video`='$video', `lat`='$lat', `longt`='$long', `pickdate`='$pickdate',`picktime`='$picktime', `pickadd`='$pickadd',`video_cond`='$video_cond',`ven_con_cond`='$ven_con_cond',`amenity_descr`='$amenity_descr',`activity_descr`='$activity_descr',`venmain_descr`='$venmain_descr',`conmain_descr`='$conmain_descr',`roomfull_descr`='$roomfull_descr' where id='$hid'");


$lastid=$hid;

/*------------activity multiple value*/

mysql_query("delete from accommod_activity where acco_id='$lastid'");

$est_name=$_POST['est_name'];
$actvity2=$_POST['actvity2'];
$approx_dis=$_POST['approx_dis'];

$count1=count($est_name);
if($est_name[0]!='')
{
for($i=0;$i<$count1;$i++)
{
$est=$est_name[$i];
$act=$actvity2[$i];
$app=$approx_dis[$i];
mysql_query("INSERT INTO `accommod_activity`(`id`,`acco_id`,`establish`, `activv`, `approx_dis`) VALUES ('','$lastid','$est','$act','$app')");
}
}
/*------------activity multiple value*/


/*------------room multiple value*/
mysql_query("delete from room_data where acco_id='$lastid'");

$room_type=$_POST['room_type'];
$cap=$_POST['cap'];
$room_price=$_POST['room_price'];
$avail=$_POST['avail'];
$descr=$_POST['descr'];
$roomoldimg=$_POST['roomoldimg'];

$room_img_array=$_FILES["room_img"]["name"];
$room_img_tmp=$_FILES["room_img"]["tmp_name"];

$count2=count($room_type);
if($room_type[0]!='')
{
for($j=0;$j<$count2;$j++)
{
$room_type1=$room_type[$j];
$room_price1=$room_price[$j];
$avail1=$avail[$j];
$descr1=$descr[$j];
$cap1=$cap[$j];

$imgg=$room_img_array[$j];
$img_tmp=$room_img_tmp[$j];

if($imgg!='')
{
$rimg = time()."A_".$imgg;
move_uploaded_file($img_tmp,"img-room/" .$rimg);
}
else
{
$rimg=$roomoldimg[$j];
}

mysql_query("INSERT INTO `room_data`(`id`,`acco_id`,`room_type`, `price`, `avail`, `description`, `imgg`,`cap`) VALUES ('','$lastid','$room_type1','$room_price1','$avail1','$descr1','$rimg','$cap1')");

}
}

/*------------room multiple value*/


/*------------Policy multiple value*/

mysql_query("delete from policiy_data where acco_id='$lastid'");

$item=$_POST['item'];
$extra_price=$_POST['extra_price'];
$extra_cond=$_POST['extra_cond'];
$pololdimg=$_POST['pololdimg'];

$extra_img_array=$_FILES["extra_img"]["name"];
$extra_img_tmp=$_FILES["extra_img"]["tmp_name"];

$count3=count($item);
if($item[0]!='')
{
for($k=0;$k<$count3;$k++)
{
$item1=$item[$k];
$extra_price1=$extra_price[$k];
$extra_cond1=$extra_cond[$k];

$eximgg=$extra_img_array[$k];
$eximg_tmp=$extra_img_tmp[$k];

if($eximgg!='')
{
$ex_img = time()."A_".$eximgg;
move_uploaded_file($eximg_tmp,"img-policy/" .$ex_img);
}
else
{
$ex_img=$pololdimg[$k];
}

mysql_query("INSERT INTO `policiy_data`(`id`,`acco_id`,`item`, `pricee`, `imge`, `condition`) VALUES ('','$lastid','$item1','$extra_price1','$ex_img','$extra_cond1')");

}
}

/*------------policy multiple value*/



/*------------venue multiple value*/
mysql_query("delete from venue_data where acco_id='$lastid'");

$venue_name=$_POST['venue_name'];
$venue_price=$_POST['venue_price'];
$venue_avail=$_POST['venue_avail'];
$venue_descr=$_POST['venue_descr'];
$venue_img=$_POST['venue_img'];
$ven_feat=$_POST['ven_feat'];

$venoldimg=$_POST['venoldimg'];

$venue_img_array=$_FILES["venue_img"]["name"];
$venue_img_tmp=$_FILES["venue_img"]["tmp_name"];

$count4=count($venue_name);
if($venue_name[0]!='')
{
for($l=0;$l<$count4;$l++)
{
$venue_name1=$venue_name[$l];
$venue_price1=$venue_price[$l];
$venue_avail1=$venue_avail[$l];
$venue_descr1=$venue_descr[$l];
$venue_img1=$venue_img[$l];

$venimgg=$venue_img_array[$l];
$venimg_tmp=$venue_img_tmp[$l];

if($venimgg!='')
{
$ve_img = time()."A_".$venimgg;
move_uploaded_file($venimg_tmp,"img-venue/".$ve_img);
}
else
{
$ve_img=$venoldimg[$l];
}

mysql_query("INSERT INTO `venue_data`(`id`, `acco_id`, `venue_name`, `venue_price`, `venue_avail`, `venue_descr`, `venue_img`) VALUES ('','$lastid','$venue_name1','$venue_price1','$venue_avail1','$venue_descr1','$ve_img')");

}
}

/*------------venue multiple value*/



/*------------conference multiple value*/

mysql_query("delete from confer_data where acco_id='$lastid'");

$confer_name=$_POST['confer_name'];
$confer_price=$_POST['confer_price'];
$confer_avail=$_POST['confer_avail'];
$confer_descr=$_POST['confer_descr'];
$confer_img=$_POST['confer_img'];
$con_feat=$_POST['con_feat'];
$conoldimg=$_POST['conoldimg'];


$confer_img_array=$_FILES["confer_img"]["name"];
$confer_img_tmp=$_FILES["confer_img"]["tmp_name"];

$count5=count($confer_name);
if($confer_name[0]!='')
{
for($m=0;$m<$count5;$m++)
{
$confer_name1=$confer_name[$m];
$confer_price1=$confer_price[$m];
$confer_avail1=$confer_avail[$m];
$confer_descr1=$confer_descr[$m];
$confer_img1=$confer_img[$m];


$conferimgg=$confer_img_array[$m];
$conferimg_tmp=$confer_img_tmp[$m];

if($conferimgg!='')
{
$confer_img = time()."A_".$conferimgg;
move_uploaded_file($conferimg_tmp,"img-confer/" .$confer_img);
}
else
{
$confer_img=$conoldimg[$m];
}

mysql_query("INSERT INTO `confer_data`(`id`, `acco_id`, `confer_name`, `confer_price`, `confer_avail`, `confer_descr`, `confer_img`) VALUES ('','$lastid','$confer_name1','$confer_price1','$venue_avail1','$confer_descr1','$confer_img')");

}
}

      $_SESSION['mymsg']='Update Successfully!';
	  echo "<script>window.location='add-accommodation.php?aid=".$hid."';</script>";
	  exit();

}


function add_venue_confer()
{

$cdate=date('Y-m-d');
$acc_name=$_POST['vc_name'];
$type_accommodation=$_POST['vc_type'];
$rating=$_POST['rating'];
$street_address=$_POST['street_address'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
$area=$_POST['area'];
$contact_no=$_POST['contact_no'];
$alternate=$_POST['alternate'];
$reserv_email=$_POST['reserv_email'];
$accommod_detail=$_POST['vc_detail'];


$video_cond=$_POST['video_cond'];

$acc_img1=$_FILES['vc_img1']['name'];
$acc_img2=$_FILES['vc_img2']['name'];
$acc_img3=$_FILES['vc_img3']['name'];
$acc_img4=$_FILES['vc_img4']['name'];
$acc_img5=$_FILES['vc_img5']['name'];


if($acc_img1!=='')
{
$file1 = time()."A_".$_FILES["vc_img1"]["name"];
move_uploaded_file($_FILES["vc_img1"]["tmp_name"],"img-ven-con/" .$file1);
}
else
{
$file1='';
}

if($acc_img2!=='')
{
$file2 = time()."A_".$_FILES["vc_img2"]["name"];
move_uploaded_file($_FILES["vc_img2"]["tmp_name"],"img-ven-con/" .$file2);
}
else
{
$file2='';
}

if($acc_img3!=='')
{
$file3 = time()."A_".$_FILES["vc_img3"]["name"];
move_uploaded_file($_FILES["vc_img3"]["tmp_name"],"img-ven-con/" .$file3);
}
else
{
$file3='';
}


if($acc_img4!=='')
{
$file4 = time()."A_".$_FILES["vc_img4"]["name"];
move_uploaded_file($_FILES["vc_img4"]["tmp_name"],"img-ven-con/" .$file4);
}
else
{
$file4='';
}

if($acc_img5!=='')
{
$file5 = time()."A_".$_FILES["vc_img5"]["name"];
move_uploaded_file($_FILES["vc_img5"]["tmp_name"],"img-ven-con/" .$file5);
}
else
{
$file5='';
}

$amenity=$_POST['amenity'];
$activity=$_POST['activity'];
$payment_type=$_POST['payment_type'];

$amenity_array=implode(',',$amenity);
$activity_array=implode(',',$activity);
$payment_array=implode(',',$payment_type);

$shuttle=$_POST['shuttle'];
$deposite=$_POST['deposite'];
$cancel=$_POST['cancel'];
$timein=$_POST['timein'];
$timeout=$_POST['timeout'];
$child_extra=$_POST['child_extra'];
$pets=$_POST['pets'];

$lang_spoken=$_POST['lang_spoken'];
$acco_duration=$_POST['acco_duration'];
$corpo_deals=$_POST['corpo_deals'];
$contract_deal=$_POST['contract_deal'];
$policy_terms=$_POST['policy_terms'];
$title=$_POST['title'];
$keyword=$_POST['keyword'];
$metatag=$_POST['metatag'];
$video=$_POST['video'];
$lat=$_POST['lat'];
$long=$_POST['long'];

$amenity_descr=$_POST['amenity_descr'];
$activity_descr=$_POST['activity_descr'];
$venmain_descr=$_POST['venmain_descr'];
$conmain_descr=$_POST['conmain_descr'];
$roomfull_descr=$_POST['roomfull_descr'];

mysql_query("INSERT INTO `vc_detail`(`id`, `partner_id`, `vc_name`, `vc_type`, `rating`, `detail`, `street_address`, `country`, `state`, `city`, `area`, `contact_no`, `alternate_no`, `reserve_email`, `vc_img1`, `vc_img2`, `vc_img3`, `vc_img4`, `vc_img5`, `amenity`, `activity`, `shuttle_service`, `deposit`, `cancel`, `timein`, `timeout`, `child_ext`, `pets`, `payment_type`, `lang_spoken`, `duration`, `corporate_deals`, `contract_deals`, `terms`, `title`, `keyword`, `metatag`, `video`, `lat`, `longt`,`cdate`,`video_cond`,`amenity_descr`,`activity_descr`,`venmain_descr`,`conmain_descr`,`roomfull_descr`) VALUES ('','$_SESSION[pid]','$acc_name','$type_accommodation','$rating','$accommod_detail','$street_address','$country','$state','$city','$area','$contact_no','$alternate','$reserv_email','$file1','$file2','$file3','$file4','$file5','$amenity_array','$activity_array','$shuttle','$deposite','$cancel','$timein','$timeout','$child_extra','$pets','$payment_array','$lang_spoken','$acco_duration','$corpo_deals','$contract_deal','$policy_terms','$title','$keyword','$metatag','$video','$lat','$long','$cdate','$video_cond','$amenity_descr','$activity_descr','$venmain_descr','$conmain_descr','$roomfull_descr')");

$lastid=mysql_insert_id();

/*------------activity multiple value*/
$est_name=$_POST['est_name'];
$actvity2=$_POST['actvity2'];
$approx_dis=$_POST['approx_dis'];

$count1=count($est_name);
if($est_name[0]!='')
{
for($i=0;$i<$count1;$i++)
{
$est=$est_name[$i];
$act=$actvity2[$i];
$app=$approx_dis[$i];
mysql_query("INSERT INTO `vc_activity`(`id`,`vc_id`,`establish`, `activv`, `approx_dis`) VALUES ('','$lastid','$est','$act','$app')");
}
}
/*------------activity multiple value*/



/*------------shuttle multiple value*/


$venname=$_POST['venname'];
$pickdate=$_POST['pickdate'];
$picktime=$_POST['picktime'];
$pickadd=$_POST['pickadd'];

$count7=count($venname);
if($venname[0]!='')
{
for($h=0;$h<$count7;$h++)
{
$ve=$venname[$h];
$pida=$pickdate[$h];
$piti=$picktime[$h];
$piadd=$pickadd[$h];

mysql_query("INSERT INTO `vc_shuttle_multipledata`(`id`,`vc_id`,`event_name`, `provide_date`, `provide_time`, `addr`) VALUES ('','$lastid','$ve','$pida','$piti','$piadd')");
}
}
/*------------shuttle multiple value*/


/*------------Policy multiple value*/
$item=$_POST['item'];
$extra_price=$_POST['extra_price'];
$extra_cond=$_POST['extra_cond'];


$extra_img_array=$_FILES["extra_img"]["name"];
$extra_img_tmp=$_FILES["extra_img"]["tmp_name"];

$count3=count($item);
if($item[0]!='')
{
for($k=0;$k<$count3;$k++)
{
$item1=$item[$k];
$extra_price1=$extra_price[$k];
$extra_cond1=$extra_cond[$k];

$eximgg=$extra_img_array[$k];
$eximg_tmp=$extra_img_tmp[$k];

if($eximgg!='')
{
$ex_img = time()."A_".$eximgg;
move_uploaded_file($eximg_tmp,"img-vc-policy/" .$ex_img);
}
else
{
$ex_img='';
}

mysql_query("INSERT INTO `vc_policiy_data`(`id`,`vc_id`,`item`, `pricee`, `imge`, `condition`) VALUES ('','$lastid','$item1','$extra_price1','$ex_img','$extra_cond1')");

}
}

/*------------policy multiple value*/


/*------------venue multiple value*/
$venue_name=$_POST['venue_room_name'];
$venue_price=$_POST['venue_room_price'];
$venue_avail=$_POST['venue_cap'];
$venue_descr=$_POST['venue_descr'];
$venue_img=$_POST['venue_img'];
$ven_feat=$_POST['ven_feat'];


$venue_img_array=$_FILES["venue_img"]["name"];
$venue_img_tmp=$_FILES["venue_img"]["tmp_name"];

$count4=count($venue_name);
if($venue_name[0]!='')
{
for($l=0;$l<$count4;$l++)
{
$venue_name1=$venue_name[$l];
$venue_price1=$venue_price[$l];
$venue_avail1=$venue_avail[$l];
$venue_descr1=$venue_descr[$l];
$venue_img1=$venue_img[$l];

$venimgg=$venue_img_array[$l];
$venimg_tmp=$venue_img_tmp[$l];

if($venimgg!='')
{
$ve_img = time()."A_".$venimgg;
move_uploaded_file($venimg_tmp,"img-vc-venue/" .$ve_img);
}
else
{
$ve_img='';
}

mysql_query("INSERT INTO `vc_venue_data`(`id`, `vc_id`, `venue_name`, `venue_price`, `venue_avail`, `venue_descr`, `venue_img`) VALUES ('','$lastid','$venue_name1','$venue_price1','$venue_avail1','$venue_descr1','$ve_img')");

}
}

/*------------venue multiple value*/



/*------------conference multiple value*/
$confer_name=$_POST['confer_room_name'];
$confer_price=$_POST['confer_room_price'];
$confer_avail=$_POST['confer_cap'];
$confer_descr=$_POST['confer_descr'];
$confer_img=$_POST['confer_img'];
$con_feat1=$_POST['con_feat'];



$confer_img_array=$_FILES["confer_img"]["name"];
$confer_img_tmp=$_FILES["confer_img"]["tmp_name"];

$count5=count($confer_name);
if($confer_name[0]!='')
{
for($m=0;$m<$count5;$m++)
{
$confer_name1=$confer_name[$m];
$confer_price1=$confer_price[$m];
$confer_avail1=$confer_avail[$m];
$confer_descr1=$confer_descr[$m];
$confer_img1=$confer_img[$m];

$conferimgg=$confer_img_array[$m];
$conferimg_tmp=$confer_img_tmp[$m];

if($conferimgg!='')
{
$confer_img = time()."A_".$conferimgg;
move_uploaded_file($conferimg_tmp,"img-vc-confer/" .$confer_img);
}
else
{
$confer_img='';
}

mysql_query("INSERT INTO `vc_confer_data`(`id`, `vc_id`, `confer_name`, `confer_price`, `confer_avail`, `confer_descr`, `confer_img`) VALUES ('','$lastid','$confer_name1','$confer_price1','$confer_avail1','$confer_descr1','$confer_img')");

}
}

/*------------conference multiple value*/


      $_SESSION['mymsg']='Add Successfully!';
	  echo "<script>window.location='add_venue_confer.php';</script>";
	  exit();


}


function edit_venue_confer()
{
$hid=$_POST['hid'];
$cdate=date('Y-m-d');

$acc_name=$_POST['vc_name'];
$type_accommodation=$_POST['vc_type'];
$rating=$_POST['rating'];
$street_address=$_POST['street_address'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
$area=$_POST['area'];
$contact_no=$_POST['contact_no'];
$alternate=$_POST['alternate'];
$reserv_email=$_POST['reserv_email'];
$accommod_detail=$_POST['vc_detail'];

$video_cond=$_POST['video_cond'];


$acc_img1=$_FILES['vc_img1']['name'];
$acc_img2=$_FILES['vc_img2']['name'];
$acc_img3=$_FILES['vc_img3']['name'];
$acc_img4=$_FILES['vc_img4']['name'];
$acc_img5=$_FILES['vc_img5']['name'];

$old_acc_img1=$_POST['old_vc_img1'];
$old_acc_img2=$_POST['old_vc_img2'];
$old_acc_img3=$_POST['old_vc_img3'];
$old_acc_img4=$_POST['old_vc_img4'];
$old_acc_img5=$_POST['old_vc_img5'];



if($acc_img1!=='')
{
$file1 = time()."A_".$_FILES["vc_img1"]["name"];
move_uploaded_file($_FILES["vc_img1"]["tmp_name"],"img-ven-con/" .$file1);
}
else
{
$file1=$old_acc_img1;
}

if($acc_img2!=='')
{
$file2 = time()."A_".$_FILES["vc_img2"]["name"];
move_uploaded_file($_FILES["vc_img2"]["tmp_name"],"img-ven-con/" .$file2);
}
else
{
$file2=$old_acc_img2;
}

if($acc_img3!=='')
{
$file3 = time()."A_".$_FILES["vc_img3"]["name"];
move_uploaded_file($_FILES["vc_img3"]["tmp_name"],"img-ven-con/" .$file3);
}
else
{
$file3=$old_acc_img3;
}


if($acc_img4!=='')
{
$file4 = time()."A_".$_FILES["vc_img4"]["name"];
move_uploaded_file($_FILES["vc_img4"]["tmp_name"],"img-ven-con/" .$file4);
}
else
{
$file4=$old_acc_img4;
}

if($acc_img5!=='')
{
$file5 = time()."A_".$_FILES["vc_img5"]["name"];
move_uploaded_file($_FILES["vc_img5"]["tmp_name"],"img-ven-con/" .$file5);
}
else
{
$file5=$old_acc_img5;
}

$amenity=$_POST['amenity'];
$activity=$_POST['activity'];
$payment_type=$_POST['payment_type'];

$amenity_array=implode(',',$amenity);
$activity_array=implode(',',$activity);
$payment_array=implode(',',$payment_type);

$shuttle=$_POST['shuttle'];
$deposite=$_POST['deposite'];
$cancel=$_POST['cancel'];
$timein=$_POST['timein'];
$timeout=$_POST['timeout'];
$child_extra=$_POST['child_extra'];
$pets=$_POST['pets'];

$lang_spoken=$_POST['lang_spoken'];
$acco_duration=$_POST['acco_duration'];
$corpo_deals=$_POST['corpo_deals'];
$contract_deal=$_POST['contract_deal'];
$policy_terms=$_POST['policy_terms'];
$title=$_POST['title'];
$keyword=$_POST['keyword'];
$metatag=$_POST['metatag'];
$video=$_POST['video'];
$lat=$_POST['lat'];
$long=$_POST['long'];

$amenity_descr=$_POST['amenity_descr'];
$activity_descr=$_POST['activity_descr'];
$venmain_descr=$_POST['venmain_descr'];
$conmain_descr=$_POST['conmain_descr'];
$roomfull_descr=$_POST['roomfull_descr'];

mysql_query("Update `vc_detail` SET  `vc_name`='$acc_name', `vc_type`='$type_accommodation', `rating`='$rating', `detail`='$accommod_detail', `street_address`='$street_address', `country`='$country', `state`='$state', `city`='$city', `area`='$area', `contact_no`='$contact_no', `alternate_no`='$alternate',`reserve_email`='$reserv_email', `vc_img1`='$file1', `vc_img2`='$file2', `vc_img3`='$file3', `vc_img4`='$file4', `vc_img5`='$file5', `amenity`='$amenity_array', `activity`='$activity_array', `shuttle_service`='$shuttle', `deposit`='$deposite', `cancel`='$cancel', `timein`='$timein', `timeout`='$timeout', `child_ext`='$child_extra', `pets`='$pets', `payment_type`='$payment_array', `lang_spoken`='$lang_spoken', `duration`='$acco_duration', `corporate_deals`='$corpo_deals', `contract_deals`='$contract_deal', `terms`='$policy_terms', `title`='$title', `keyword`='$keyword', `metatag`='$metatag', `video`='$video', `lat`='$lat', `longt`='$long',`video_cond`='$video_cond',`amenity_descr`='$amenity_descr',`activity_descr`='$activity_descr',`venmain_descr`='$venmain_descr',`conmain_descr`='$conmain_descr',`roomfull_descr`='$roomfull_descr' where id='$hid'");


$lastid=$hid;



/*------------shuttle multiple value*/
mysql_query("delete from vc_shuttle_multipledata where vc_id='$lastid'");

$venname=$_POST['venname'];
$pickdate=$_POST['pickdate'];
$picktime=$_POST['picktime'];
$pickadd=$_POST['pickadd'];

$count7=count($venname);
if($venname[0]!='')
{
for($h=0;$h<$count7;$h++)
{
$ve=$venname[$h];
$pida=$pickdate[$h];
$piti=$picktime[$h];
$piadd=$pickadd[$h];

mysql_query("INSERT INTO `vc_shuttle_multipledata`(`id`,`vc_id`,`event_name`, `provide_date`, `provide_time`, `addr`) VALUES ('','$lastid','$ve','$pida','$piti','$piadd')");
}
}
/*------------shuttle multiple value*/



/*------------activity multiple value*/

mysql_query("delete from vc_activity where vc_id='$lastid'");

$est_name=$_POST['est_name'];
$actvity2=$_POST['actvity2'];
$approx_dis=$_POST['approx_dis'];

$count1=count($est_name);
if($est_name[0]!='')
{
for($i=0;$i<$count1;$i++)
{
$est=$est_name[$i];
$act=$actvity2[$i];
$app=$approx_dis[$i];
mysql_query("INSERT INTO `vc_activity`(`id`,`vc_id`,`establish`, `activv`, `approx_dis`) VALUES ('','$lastid','$est','$act','$app')");
}
}
/*------------activity multiple value*/


/*------------Policy multiple value*/

mysql_query("delete from vc_policiy_data where vc_id='$lastid'");

$item=$_POST['item'];
$extra_price=$_POST['extra_price'];
$extra_cond=$_POST['extra_cond'];
$pololdimg=$_POST['pololdimg'];

$extra_img_array=$_FILES["extra_img"]["name"];
$extra_img_tmp=$_FILES["extra_img"]["tmp_name"];

$count3=count($item);
if($item[0]!='')
{
for($k=0;$k<$count3;$k++)
{
$item1=$item[$k];
$extra_price1=$extra_price[$k];
$extra_cond1=$extra_cond[$k];

$eximgg=$extra_img_array[$k];
$eximg_tmp=$extra_img_tmp[$k];

if($eximgg!='')
{
$ex_img = time()."A_".$eximgg;
move_uploaded_file($eximg_tmp,"img-vc-policy/" .$ex_img);
}
else
{
$ex_img=$pololdimg[$k];
}

mysql_query("INSERT INTO `vc_policiy_data`(`id`,`vc_id`,`item`, `pricee`, `imge`, `condition`) VALUES ('','$lastid','$item1','$extra_price1','$ex_img','$extra_cond1')");

}
}

/*------------policy multiple value*/



/*------------venue multiple value*/
mysql_query("delete from vc_venue_data where vc_id='$lastid'");

$venue_name=$_POST['venue_room_name'];
$venue_price=$_POST['venue_room_price'];
$venue_avail=$_POST['venue_cap'];
$venue_descr=$_POST['venue_descr'];
$venue_img=$_POST['venue_img'];
$ven_feat=$_POST['ven_feat'];
$venoldimg=$_POST['venoldimg'];

$venue_img_array=$_FILES["venue_img"]["name"];
$venue_img_tmp=$_FILES["venue_img"]["tmp_name"];

$count4=count($venue_name);
if($venue_name[0]!='')
{
for($l=0;$l<$count4;$l++)
{
$venue_name1=$venue_name[$l];
$venue_price1=$venue_price[$l];
$venue_avail1=$venue_avail[$l];
$venue_descr1=$venue_descr[$l];
$venue_img1=$venue_img[$l];

$venimgg=$venue_img_array[$l];
$venimg_tmp=$venue_img_tmp[$l];

if($venimgg!='')
{
$ve_img = time()."A_".$venimgg;
move_uploaded_file($venimg_tmp,"img-vc-venue/".$ve_img);
}
else
{
$ve_img=$venoldimg[$l];
}

mysql_query("INSERT INTO `vc_venue_data`(`id`, `vc_id`, `venue_name`, `venue_price`, `venue_avail`, `venue_descr`, `venue_img`) VALUES ('','$lastid','$venue_name1','$venue_price1','$venue_avail1','$venue_descr1','$ve_img')");

}
}
/*------------venue multiple value*/



/*------------conference multiple value*/

mysql_query("delete from vc_confer_data where vc_id='$lastid'");

$confer_name=$_POST['confer_room_name'];
$confer_price=$_POST['confer_room_price'];
$confer_avail=$_POST['confer_cap'];
$confer_descr=$_POST['confer_descr'];
$confer_img=$_POST['confer_img'];
$con_feat=$_POST['con_feat'];
$conoldimg=$_POST['conoldimg'];

$confer_img_array=$_FILES["confer_img"]["name"];
$confer_img_tmp=$_FILES["confer_img"]["tmp_name"];

$count5=count($confer_name);
if($confer_name[0]!='')
{
for($m=0;$m<$count5;$m++)
{
$confer_name1=$confer_name[$m];
$confer_price1=$confer_price[$m];
$confer_avail1=$confer_avail[$m];
$confer_descr1=$confer_descr[$m];
$confer_img1=$confer_img[$m];

$conferimgg=$confer_img_array[$m];
$conferimg_tmp=$confer_img_tmp[$m];

if($conferimgg!='')
{
$confer_img = time()."A_".$conferimgg;
move_uploaded_file($conferimg_tmp,"img-vc-confer/" .$confer_img);
}
else
{
$confer_img=$conoldimg[$m];
}

mysql_query("INSERT INTO `vc_confer_data`(`id`, `vc_id`, `confer_name`, `confer_price`, `confer_avail`, `confer_descr`, `confer_img`) VALUES ('','$lastid','$confer_name1','$confer_price1','$confer_avail1','$confer_descr1','$confer_img')");


}
}

      $_SESSION['mymsg']='Update Successfully!';
	  echo "<script>window.location='add_venue_confer.php?aid=".$hid."';</script>";
	  exit();

}


function add_promotion()
{
$cdate=date('Y-m-d');
$acc_name=$_POST['acc_name'];
$type_accommodation=$_POST['type_accommodation'];
$rating=$_POST['rating'];
$street_address=$_POST['street_address'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
$area=$_POST['area'];
$contact_no=$_POST['contact_no'];
$alternate=$_POST['alternate'];
$reserv_email=$_POST['reserv_email'];
$accommod_detail=$_POST['accommod_detail'];

$pickdate=$_POST['pickdate'];
$picktime=$_POST['picktime'];
$pickadd=$_POST['pickadd'];

$video_cond=$_POST['video_cond'];

$room_detail=$_POST['room_detail'];
$from_timeframe=$_POST['from_timeframe'];
$to_timeframe=$_POST['to_timeframe'];


$acc_img1=$_FILES['acc_img1']['name'];
$acc_img2=$_FILES['acc_img2']['name'];
$acc_img3=$_FILES['acc_img3']['name'];
$acc_img4=$_FILES['acc_img4']['name'];
$acc_img5=$_FILES['acc_img5']['name'];


if($acc_img1!=='')
{
$file1 = time()."A_".$_FILES["acc_img1"]["name"];
move_uploaded_file($_FILES["acc_img1"]["tmp_name"],"img-promo/" .$file1);
}
else
{
$file1='';
}

if($acc_img2!=='')
{
$file2 = time()."A_".$_FILES["acc_img2"]["name"];
move_uploaded_file($_FILES["acc_img2"]["tmp_name"],"img-promo/" .$file2);
}
else
{
$file2='';
}

if($acc_img3!=='')
{
$file3 = time()."A_".$_FILES["acc_img3"]["name"];
move_uploaded_file($_FILES["acc_img3"]["tmp_name"],"img-promo/" .$file3);
}
else
{
$file3='';
}


if($acc_img4!=='')
{
$file4 = time()."A_".$_FILES["acc_img4"]["name"];
move_uploaded_file($_FILES["acc_img4"]["tmp_name"],"img-promo/" .$file4);
}
else
{
$file4='';
}

if($acc_img5!=='')
{
$file5 = time()."A_".$_FILES["acc_img5"]["name"];
move_uploaded_file($_FILES["acc_img5"]["tmp_name"],"img-promo/" .$file5);
}
else
{
$file5='';
}

$amenity=$_POST['amenity'];
$activity=$_POST['activity'];
$payment_type=$_POST['payment_type'];

$amenity_array=implode(',',$amenity);
$activity_array=implode(',',$activity);
$payment_array=implode(',',$payment_type);


$spkg=$_POST['spkg'];

$spkg_array=implode(',',$spkg);

$shuttle=$_POST['shuttle'];
$deposite=$_POST['deposite'];
$cancel=$_POST['cancel'];
$timein=$_POST['timein'];
$timeout=$_POST['timeout'];
$child_extra=$_POST['child_extra'];
$pets=$_POST['pets'];

$lang_spoken=$_POST['lang_spoken'];
$acco_duration=$_POST['acco_duration'];
$corpo_deals=$_POST['corpo_deals'];
$contract_deal=$_POST['contract_deal'];
$policy_terms=$_POST['policy_terms'];
$title=$_POST['title'];
$keyword=$_POST['keyword'];
$metatag=$_POST['metatag'];
$video=$_POST['video'];
$lat=$_POST['lat'];
$long=$_POST['long'];

$norm_adv=$_POST['norm_adv'];
$prom_adv=$_POST['prom_adv'];
$website=$_POST['website'];
$smbanner=$_POST['smbanner'];



mysql_query("INSERT INTO `promotion_detail`(`id`, `partner_id`, `accomod_name`, `accomod_type`, `rating`, `detail`, `street_address`, `country`, `state`, `city`, `area`, `contact_no`, `alternate_no`, `reserve_email`, `acc_img1`, `acc_img2`, `acc_img3`, `acc_img4`, `acc_img5`, `amenity`, `activity`, `shuttle_service`, `deposit`, `cancel`, `timein`, `timeout`, `child_ext`, `pets`, `payment_type`, `lang_spoken`, `duration`, `corporate_deals`, `contract_deals`, `terms`, `title`, `keyword`, `metatag`, `video`, `lat`, `longt`,`cdate`,`pickdate`,`picktime`,`pickadd`,`video_cond`,`room_description`,`from_timeframe`,`to_timeframe`,`normal_advertise`, `promot_advertise`, `website`, `smbanner`,`social_pkg`) VALUES ('','$_SESSION[pid]','$acc_name','$type_accommodation','$rating','$accommod_detail','$street_address','$country','$state','$city','$area','$contact_no','$alternate','$reserv_email','$file1','$file2','$file3','$file4','$file5','$amenity_array','$activity_array','$shuttle','$deposite','$cancel','$timein','$timeout','$child_extra','$pets','$payment_array','$lang_spoken','$acco_duration','$corpo_deals','$contract_deal','$policy_terms','$title','$keyword','$metatag','$video','$lat','$long','$cdate','$pickdate','$picktime','$pickadd','$video_cond','$room_detail','$from_timeframe','$to_timeframe','$norm_adv','$prom_adv','$website','$smbanner','$spkg_array')");

$lastid=mysql_insert_id();

/*------------activity multiple value*/
$est_name=$_POST['est_name'];
$actvity2=$_POST['actvity2'];
$approx_dis=$_POST['approx_dis'];

$count1=count($est_name);
if($est_name[0]!='')
{
for($i=0;$i<$count1;$i++)
{
$est=$est_name[$i];
$act=$actvity2[$i];
$app=$approx_dis[$i];
mysql_query("INSERT INTO `promotion_activity`(`id`,`acco_id`,`establish`, `activv`, `approx_dis`) VALUES ('','$lastid','$est','$act','$app')");
}
}
/*------------activity multiple value*/

/*------------room multiple value*/
$room_type=$_POST['room_type'];
$cap=$_POST['cap'];
$room_price=$_POST['room_price'];
$avail=$_POST['avail'];
$descr=$_POST['descr'];

$room_img_array=$_FILES["room_img"]["name"];
$room_img_tmp=$_FILES["room_img"]["tmp_name"];

$count2=count($room_type);
if($room_type[0]!='')
{
for($j=0;$j<$count2;$j++)
{
$room_type1=$room_type[$j];
$room_price1=$room_price[$j];
$avail1=$avail[$j];
$descr1=$descr[$j];
$cap1=$cap[$j];

$imgg=$room_img_array[$j];
$img_tmp=$room_img_tmp[$j];

if($imgg!='')
{
$rimg = time()."A_".$imgg;
move_uploaded_file($img_tmp,"img-promo-room/" .$rimg);
}
else
{
$rimg='';
}

mysql_query("INSERT INTO `promotion_room_data`(`id`,`acco_id`,`room_type`, `price`, `avail`, `description`, `imgg`,`cap`) VALUES ('','$lastid','$room_type1','$room_price1','$avail1','$descr1','$rimg','$cap1')");

}
}

/*------------room multiple value*/


/*------------Policy multiple value*/
$item=$_POST['item'];
$extra_price=$_POST['extra_price'];
$extra_cond=$_POST['extra_cond'];


$extra_img_array=$_FILES["extra_img"]["name"];
$extra_img_tmp=$_FILES["extra_img"]["tmp_name"];

$count3=count($item);
if($item[0]!='')
{
for($k=0;$k<$count3;$k++)
{
$item1=$item[$k];
$extra_price1=$extra_price[$k];
$extra_cond1=$extra_cond[$k];

$eximgg=$extra_img_array[$k];
$eximg_tmp=$extra_img_tmp[$k];

if($eximgg!='')
{
$ex_img = time()."A_".$eximgg;
move_uploaded_file($eximg_tmp,"img-promo-policy/" .$ex_img);
}
else
{
$ex_img='';
}

mysql_query("INSERT INTO `promotion_policiy_data`(`id`,`acco_id`,`item`, `pricee`, `imge`, `condition`) VALUES ('','$lastid','$item1','$extra_price1','$ex_img','$extra_cond1')");

}
}

/*------------policy multiple value*/


/*------------venue multiple value*/
$venue_name=$_POST['venue_name'];
$venue_price=$_POST['venue_price'];
$venue_avail=$_POST['venue_avail'];
$venue_descr=$_POST['venue_descr'];
$venue_img=$_POST['venue_img'];
$ven_feat=$_POST['ven_feat'];

$venue_img_array=$_FILES["venue_img"]["name"];
$venue_img_tmp=$_FILES["venue_img"]["tmp_name"];

$count4=count($venue_name);
if($venue_name[0]!='')
{
for($l=0;$l<$count4;$l++)
{
$venue_name1=$venue_name[$l];
$venue_price1=$venue_price[$l];
$venue_avail1=$venue_avail[$l];
$venue_descr1=$venue_descr[$l];
$venue_img1=$venue_img[$l];
$ven_feat1=$ven_feat[$l];

$venimgg=$venue_img_array[$l];
$venimg_tmp=$venue_img_tmp[$l];

if($venimgg!='')
{
$ve_img = time()."A_".$venimgg;
move_uploaded_file($venimg_tmp,"img-promo-venue/" .$ve_img);
}
else
{
$ve_img='';
}

mysql_query("INSERT INTO `promotion_venue_data`(`id`, `acco_id`, `venue_name`, `venue_price`, `venue_avail`, `venue_descr`, `venue_img`,`feat`) VALUES ('','$lastid','$venue_name1','$venue_price1','$venue_avail1','$venue_descr1','$ve_img','$ven_feat1')");

}
}

/*------------venue multiple value*/



/*------------conference multiple value*/
$confer_name=$_POST['confer_name'];
$confer_price=$_POST['confer_price'];
$confer_avail=$_POST['confer_avail'];
$confer_descr=$_POST['confer_descr'];
$confer_img=$_POST['confer_img'];
$con_feat=$_POST['con_feat'];


$confer_img_array=$_FILES["confer_img"]["name"];
$confer_img_tmp=$_FILES["confer_img"]["tmp_name"];

$count5=count($confer_name);
if($confer_name[0]!='')
{
for($m=0;$m<$count5;$m++)
{
$confer_name1=$confer_name[$m];
$confer_price1=$confer_price[$m];
$confer_avail1=$confer_avail[$m];
$confer_descr1=$confer_descr[$m];
$confer_img1=$confer_img[$m];
$con_feat1=$con_feat[$m];

$conferimgg=$confer_img_array[$m];
$conferimg_tmp=$confer_img_tmp[$m];

if($conferimgg!='')
{
$confer_img = time()."A_".$conferimgg;
move_uploaded_file($conferimg_tmp,"img-promo-confer/" .$confer_img);
}
else
{
$confer_img='';
}

mysql_query("INSERT INTO `promotion_confer_data`(`id`, `acco_id`, `confer_name`, `confer_price`, `confer_avail`, `confer_descr`, `confer_img`,`feat`) VALUES ('','$lastid','$confer_name1','$confer_price1','$confer_avail1','$confer_descr1','$confer_img','$con_feat1')");

}
}

/*------------conference multiple value*/


      $_SESSION['mymsg']='Add Successfully!';
	  echo "<script>window.location='add-promotion.php';</script>";
	  exit();


}

function edit_promotion()
{
$hid=$_POST['hid'];
$cdate=date('Y-m-d');

$acc_name=$_POST['acc_name'];
$type_accommodation=$_POST['type_accommodation'];
$rating=$_POST['rating'];
$street_address=$_POST['street_address'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
$area=$_POST['area'];
$contact_no=$_POST['contact_no'];
$alternate=$_POST['alternate'];
$reserv_email=$_POST['reserv_email'];
$accommod_detail=$_POST['accommod_detail'];


$pickdate=$_POST['pickdate'];
$picktime=$_POST['picktime'];
$pickadd=$_POST['pickadd'];

$video_cond=$_POST['video_cond'];

$room_detail=$_POST['room_detail'];
$from_timeframe=$_POST['from_timeframe'];
$to_timeframe=$_POST['to_timeframe'];


$acc_img1=$_FILES['acc_img1']['name'];
$acc_img2=$_FILES['acc_img2']['name'];
$acc_img3=$_FILES['acc_img3']['name'];
$acc_img4=$_FILES['acc_img4']['name'];
$acc_img5=$_FILES['acc_img5']['name'];

$old_acc_img1=$_POST['old_acc_img1'];
$old_acc_img2=$_POST['old_acc_img2'];
$old_acc_img3=$_POST['old_acc_img3'];
$old_acc_img4=$_POST['old_acc_img4'];
$old_acc_img5=$_POST['old_acc_img5'];



if($acc_img1!=='')
{
$file1 = time()."A_".$_FILES["acc_img1"]["name"];
move_uploaded_file($_FILES["acc_img1"]["tmp_name"],"img-promo/" .$file1);
}
else
{
$file1=$old_acc_img1;
}

if($acc_img2!=='')
{
$file2 = time()."A_".$_FILES["acc_img2"]["name"];
move_uploaded_file($_FILES["acc_img2"]["tmp_name"],"img-promo/" .$file2);
}
else
{
$file2=$old_acc_img2;
}

if($acc_img3!=='')
{
$file3 = time()."A_".$_FILES["acc_img3"]["name"];
move_uploaded_file($_FILES["acc_img3"]["tmp_name"],"img-promo/" .$file3);
}
else
{
$file3=$old_acc_img3;
}


if($acc_img4!=='')
{
$file4 = time()."A_".$_FILES["acc_img4"]["name"];
move_uploaded_file($_FILES["acc_img4"]["tmp_name"],"img-promo/" .$file4);
}
else
{
$file4=$old_acc_img4;
}

if($acc_img5!=='')
{
$file5 = time()."A_".$_FILES["acc_img5"]["name"];
move_uploaded_file($_FILES["acc_img5"]["tmp_name"],"img-promo/" .$file5);
}
else
{
$file5=$old_acc_img5;
}

$amenity=$_POST['amenity'];
$activity=$_POST['activity'];
$payment_type=$_POST['payment_type'];

$amenity_array=implode(',',$amenity);
$activity_array=implode(',',$activity);
$payment_array=implode(',',$payment_type);


$spkg=$_POST['spkg'];
$spkg_array=implode(',',$spkg);

$shuttle=$_POST['shuttle'];
$deposite=$_POST['deposite'];
$cancel=$_POST['cancel'];
$timein=$_POST['timein'];
$timeout=$_POST['timeout'];
$child_extra=$_POST['child_extra'];
$pets=$_POST['pets'];

$lang_spoken=$_POST['lang_spoken'];
$acco_duration=$_POST['acco_duration'];
$corpo_deals=$_POST['corpo_deals'];
$contract_deal=$_POST['contract_deal'];
$policy_terms=$_POST['policy_terms'];
$title=$_POST['title'];
$keyword=$_POST['keyword'];
$metatag=$_POST['metatag'];
$video=$_POST['video'];
$lat=$_POST['lat'];
$long=$_POST['long'];

$norm_adv=$_POST['norm_adv'];
$prom_adv=$_POST['prom_adv'];
$website=$_POST['website'];
$smbanner=$_POST['smbanner'];

mysql_query("Update `promotion_detail` SET  `accomod_name`='$acc_name', `accomod_type`='$type_accommodation', `rating`='$rating', `detail`='$accommod_detail', `street_address`='$street_address', `country`='$country', `state`='$state', `city`='$city', `area`='$area', `contact_no`='$contact_no', `alternate_no`='$alternate',`reserve_email`='$reserv_email', `acc_img1`='$file1', `acc_img2`='$file2', `acc_img3`='$file3', `acc_img4`='$file4', `acc_img5`='$file5', `amenity`='$amenity_array', `activity`='$amenity_array', `shuttle_service`='$shuttle', `deposit`='$deposite', `cancel`='$cancel', `timein`='$timein', `timeout`='$timeout', `child_ext`='$child_extra', `pets`='$pets', `payment_type`='$payment_array', `lang_spoken`='$lang_spoken', `duration`='$acco_duration', `corporate_deals`='$corpo_deals', `contract_deals`='$contract_deal', `terms`='$policy_terms', `title`='$title', `keyword`='$keyword', `metatag`='$metatag', `video`='$video', `lat`='$lat', `longt`='$long', `pickdate`='$pickdate',`picktime`='$picktime', `pickadd`='$pickadd',`video_cond`='$video_cond',`room_description`='$room_detail',`from_timeframe`='$from_timeframe',`to_timeframe`='$to_timeframe',`normal_advertise`='$norm_adv',`promot_advertise`='$prom_adv',`website`='$website',`smbanner`='$smbanner',`social_pkg`='$spkg_array' where id='$hid'");


$lastid=$hid;

/*------------activity multiple value*/

mysql_query("delete from promotion_activity where acco_id='$lastid'");

$est_name=$_POST['est_name'];
$actvity2=$_POST['actvity2'];
$approx_dis=$_POST['approx_dis'];

$count1=count($est_name);
if($est_name[0]!='')
{
for($i=0;$i<$count1;$i++)
{
$est=$est_name[$i];
$act=$actvity2[$i];
$app=$approx_dis[$i];
mysql_query("INSERT INTO `promotion_activity`(`id`,`acco_id`,`establish`, `activv`, `approx_dis`) VALUES ('','$lastid','$est','$act','$app')");
}
}
/*------------activity multiple value*/


/*------------room multiple value*/
mysql_query("delete from promotion_room_data where acco_id='$lastid'");

$room_name=$_POST['room_name'];
$cap=$_POST['cap'];
$room_price=$_POST['room_price'];
$avail=$_POST['avail'];
$descr=$_POST['descr'];
$roomoldimg=$_POST['roomoldimg'];

$room_img_array=$_FILES["room_img"]["name"];
$room_img_tmp=$_FILES["room_img"]["tmp_name"];

$count2=count($room_type);
if($room_type[0]!='')
{
for($j=0;$j<$count2;$j++)
{
$room_type1=$room_type[$j];
$room_price1=$room_price[$j];
$avail1=$avail[$j];
$descr1=$descr[$j];
$cap1=$cap[$j];

$imgg=$room_img_array[$j];
$img_tmp=$room_img_tmp[$j];

if($imgg!='')
{
$rimg = time()."A_".$imgg;
move_uploaded_file($img_tmp,"img-promo-room/" .$rimg);
}
else
{
$rimg=$roomoldimg[$j];
}

mysql_query("INSERT INTO `promotion_room_data`(`id`,`acco_id`,`room_type`, `price`, `avail`, `description`, `imgg`,`cap`) VALUES ('','$lastid','$room_type1','$room_price1','$avail1','$descr1','$rimg','$cap1')");

}
}

/*------------room multiple value*/


/*------------Policy multiple value*/

mysql_query("delete from promotion_policiy_data where acco_id='$lastid'");

$item=$_POST['item'];
$extra_price=$_POST['extra_price'];
$extra_cond=$_POST['extra_cond'];
$pololdimg=$_POST['pololdimg'];

$extra_img_array=$_FILES["extra_img"]["name"];
$extra_img_tmp=$_FILES["extra_img"]["tmp_name"];

$count3=count($item);
if($item[0]!='')
{
for($k=0;$k<$count3;$k++)
{
$item1=$item[$k];
$extra_price1=$extra_price[$k];
$extra_cond1=$extra_cond[$k];

$eximgg=$extra_img_array[$k];
$eximg_tmp=$extra_img_tmp[$k];

if($eximgg!='')
{
$ex_img = time()."A_".$eximgg;
move_uploaded_file($eximg_tmp,"img-promo-policy/" .$ex_img);
}
else
{
$ex_img=$pololdimg[$k];
}

mysql_query("INSERT INTO `promotion_policiy_data`(`id`,`acco_id`,`item`, `pricee`, `imge`, `condition`) VALUES ('','$lastid','$item1','$extra_price1','$ex_img','$extra_cond1')");

}
}

/*------------policy multiple value*/



/*------------venue multiple value*/
mysql_query("delete from promotion_venue_data where acco_id='$lastid'");

$venue_name=$_POST['venue_name'];
$venue_price=$_POST['venue_price'];
$venue_avail=$_POST['venue_avail'];
$venue_descr=$_POST['venue_descr'];
$venue_img=$_POST['venue_img'];
$ven_feat=$_POST['ven_feat'];


$venue_img_array=$_FILES["venue_img"]["name"];
$venue_img_tmp=$_FILES["venue_img"]["tmp_name"];

$count4=count($venue_name);
if($venue_name[0]!='')
{
for($l=0;$l<$count4;$l++)
{
$venue_name1=$venue_name[$l];
$venue_price1=$venue_price[$l];
$venue_avail1=$venue_avail[$l];
$venue_descr1=$venue_descr[$l];
$venue_img1=$venue_img[$l];
$ven_feat1=$ven_feat[$l];

$venimgg=$venue_img_array[$l];
$venimg_tmp=$venue_img_tmp[$l];

if($venimgg!='')
{
$ve_img = time()."A_".$venimgg;
move_uploaded_file($venimg_tmp,"img-promo-venue/".$ve_img);
}
else
{
$ve_img='';
}

mysql_query("INSERT INTO `promotion_venue_data`(`id`, `acco_id`, `venue_name`, `venue_price`, `venue_avail`, `venue_descr`, `venue_img`,`feat`) VALUES ('','$lastid','$venue_name1','$venue_price1','$venue_descr1','$ve_img','$ven_feat1')");

}
}

/*------------venue multiple value*/



/*------------conference multiple value*/

mysql_query("delete from promotion_confer_data where acco_id='$lastid'");

$confer_name=$_POST['confer_name'];
$confer_price=$_POST['confer_price'];
$confer_avail=$_POST['confer_avail'];
$confer_descr=$_POST['confer_descr'];
$confer_img=$_POST['confer_img'];
$con_feat=$_POST['con_feat'];


$confer_img_array=$_FILES["confer_img"]["name"];
$confer_img_tmp=$_FILES["confer_img"]["tmp_name"];

$count5=count($confer_name);
if($confer_name[0]!='')
{
for($m=0;$m<$count5;$m++)
{
$confer_name1=$confer_name[$m];
$confer_price1=$confer_price[$m];
$confer_avail1=$confer_avail[$m];
$confer_descr1=$confer_descr[$m];
$confer_img1=$confer_img[$m];
$con_feat1=$con_feat[$m];

$conferimgg=$confer_img_array[$m];
$conferimg_tmp=$confer_img_tmp[$m];

if($conferimgg!='')
{
$confer_img = time()."A_".$conferimgg;
move_uploaded_file($conferimg_tmp,"img-promo-confer/" .$confer_img);
}
else
{
$confer_img='';
}

mysql_query("INSERT INTO `promotion_confer_data`(`id`, `acco_id`, `confer_name`, `confer_price`, `confer_avail`, `confer_descr`, `confer_img`,`feat`) VALUES ('','$lastid','$confer_name1','$confer_price1','$confer_descr1','$confer_img','$con_feat1')");

}
}

      $_SESSION['mymsg']='Update Successfully!';
	  echo "<script>window.location='add-promotion.php?aid=".$hid."';</script>";
	  exit();

}



?>

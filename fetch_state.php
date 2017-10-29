<?php
include("lib/config.php");

if(isset($_GET['countr']) && $_GET['countr']!='')
{
$country=$_GET['countr']; 

if($country=='South Africa')
{
?>
				<div class="form-group  form-group-icon-left">
                     <label for="field-email">State<span class="color-red"> (*)</span></label>
                     <i class="fa fa-envelope input-icon input-icon-show"></i>
                     <select name="state" required class='form-control'>
                      <option value="">Select State</option>
                      <option value="Eastern Cape">Eastern Cape</option>
                      <option value="Free State">Free State</option>
                      <option value="Gauteng">Gauteng</option>
                      <option value="Kwazulu Natal">Kwazulu Natal</option>
                      <option value="Limpopo">Limpopo</option>
                      <option value="Mpumalanga">Mpumalanga</option>
                      <option value="North West">North West</option>
                      <option value="Northen Cape">Northen Cape</option>
                      <option value="Western Cape">Western Cape</option>
                      
                    </select>
					</div>
<?php
}
else
{
?>
<div class="form-group  form-group-icon-left">
                       <label for="field-email">State<span class="color-red"> (*)</span></label>
                       <i class="fa fa-envelope input-icon input-icon-show"></i>
               <input name="state" class="form-control" placeholder="Enter State" type="text" value="" required />
                     </div>
<?php
} 


}
	  
?>

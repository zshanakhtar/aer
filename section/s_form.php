<?php
include "../request/"."connection.php";

extract($_SESSION);
$app_id=trim($username);
$query="select * from student where app_id='$app_id'";
$result=mysqli_query($conn,$query);
$app_id2=mysqli_fetch_array($result,MYSQLI_ASSOC);

$query="select * from teammember where app_id='$app_id'";
$resultteam=mysqli_query($conn,$query);
?>
<form role="form" action="javascript:void(0)" onsubmit="return false;" class="form-horizontal ajaxsubmitform" id="sec1" >
<div class="panel panel-info">
	<div class="panel-heading" data-toggle="collapse" data-target="#one" style="font-size:150%;"><b>General Information</b><span class="btn btn-info pull-right glyphicon glyphicon-chevron-up"></span></div>
	<div  class="panel-body collapse in one" id="one">
		<div class="row form-group">
			<label for="app_id" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Application Number</label>
			<div class="col-sm-10">
				<input id="app_id" name="app_id" type="text" class="form-control" disabled />
			</div>
		</div>
		<div class="row form-group">
			<label for="team_name" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Team Name</label>
			<div class="col-sm-10">
				<input id="team_name" name="team_name" type="text" class="form-control" required />
			</div>
		</div>
		<div class="row form-group">
			<label for="project_name" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Project Name</label>
			<div class="col-sm-10">
				<input id="project_name" name="project_name" type="text" class="form-control" required />
			</div>
		</div>
		<div class="row form-group">
			<label for="problem" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Problem Category</label>
			<div class="col-sm-10">
				<select required class="form-control qswitch" id="problem" name="problem" data-show="0" >
					<option value="">--Select--</option>
					<option value="1">Water & Irrigation</option>
					<option value="2">Sanitation & Solid Liquid Waste Management</option>
					<option value="3">Rural Infrastructure</option>
					<option value="4">Tourism</option>
					<option value="5">Agriculture & Food</option>
					<option value="6">Education, Skill Initiative & Startups</option>
					<option value="7">Rural Craft & Livelihood</option>
					<option value="0" >Others</option>
				</select>
			</div>
		</div>
		<div class="row form-group problem_det hidden">
			<label for="problem_det" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Please Specify</label>
			<div class="col-sm-10">
				<textarea class="form-control" rows="5" id="problem_det" name="problem_det" required><?php echo htmlspecialchars($app_id2['problem_det']);?></textarea>
			</div>
		</div>
		<div class="row form-group">
			<label for="award_cat" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Award category</label>
			<div class="col-sm-10">
				<select required class="form-control" id="award_cat" name="award_cat">
					<option value="">--Select--</option>
					<option value="Diploma">Diploma</option>
					<option value="Degree">Degree</option>
				</select>
			</div>
		</div>
		<div class="row form-group">
			<label for="g_oriented" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Girls Only Team</label>
			<div class="col-sm-10">
				<select required class="form-control" id="g_oriented" name="g_oriented">
					<option value="">--Select--</option>
					<option value="Yes">Yes</option>
					<option value="No">No</option>
				</select>
			</div>
		</div>
		<div class="row form-group">
			<label for="i_entry" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Individual Participant</label>
			<div class="col-sm-10">
				<select required class="form-control" id="i_entry" name="i_entry">
					<option value="">--Select--</option>
					<option value="Yes">Yes</option>
					<option value="No">No</option>
				</select>
			</div>
		</div>
		<div class="row form-group">
			<label for="multi_dis" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Multi-discipline</label>
			<div class="col-sm-10">
				<select required class="form-control" id="multi_dis" name="multi_dis">
					<option value="">--Select--</option>
					<option value="Yes">Yes</option>
					<option value="No">No</option>
				</select>
			</div>
		</div>
		<div class="row form-group">
				<input id="flagsec1" type="text" value="N" class="form-control hidden" required />
		</div>
		
		<div class="row form-group">
			<div class="col-sm-offset-5 col-sm-2">
			     <button type="submit" class="btn btn-warning col-sm-6 col-sm-offset-3">
					<span class="glyphicon glyphicon-floppy-disk"></span>
					<br class="hidden-lg hidden-sm hidden-xs">					
					<span class="hidden-sm">Save</span>
				 </button>
			</div>
		</div>
	</div>
</div>
</form>
<form role="form"  action="javascript:void(0)" onsubmit="return false;" class="form-horizontal ajaxsubmitform" id="sec2" >
<div class="panel panel-info">
	<div class="panel-heading" data-toggle="collapse" data-target="#two" style="font-size:150%;"><b>Institute Details</b><span class="btn btn-info pull-right glyphicon glyphicon-chevron-up"></span></div>
	<div  class="panel-body collapse in one" id="two">
		<div class="row form-group">
			<label for="inst_name" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Name of Institute</label>
			<div class="col-sm-10">
				<input id="inst_name" name="inst_name" type="text" class="form-control" required />
			</div>
		</div>
		<div class="row form-group">
			<label for="inst_pid" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Institute Permanent_ID</label>
			<div class="col-sm-10">
				<input id="inst_pid" name="inst_pid" type="text" pattern='[1]{1}[-]{1}[0-9]{10,12}' class="form-control" required />
			</div>
		</div>
		<div class="row form-group">
			<label for="inst_address" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Address</label>
			<div class="col-sm-10">
				<input id="inst_address" name="inst_address" type="text" class="form-control" required />
			</div>
		</div>
		<div class="row form-group">
			<label for="inst_city" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">City</label>
			<div class="col-sm-10">
				<input id="inst_city" name="inst_city" type="text" class="form-control" required />
			</div>
		</div>
		<div class="row form-group">
			<label for="inst_state" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">State</label>
			<div class="col-sm-10">
				<select required class="form-control" id="inst_state" name="inst_state" required>
					<option value="Delhi">Delhi</option>
					<option value="UP">UP</option>
				</select>
			</div>
		</div>
		<div class="row form-group">
			<label for="inst_principal" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Name of Principal</label>
			<div class="col-sm-10">
				<input id="inst_principal" name="inst_principal" type="text" class="form-control" required />
			</div>
		</div>
		<div class="row form-group">
			<label for="inst_contact" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Contact Number</label>
			<div class="col-sm-10">
				<input id="inst_contact" name="inst_contact" type="text" pattern='[6-9]{1}[0-9]{9}' class="form-control" required />
			</div>
		</div>
		<div class="row form-group">
			<label for="inst_email" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Email Id</label>
			<div class="col-sm-10">
				<input id="inst_email" name="inst_email" type="email" class="form-control" required />
			</div>
		</div>
		<div class="row form-group">
				<input id="flagsec2" type="text" value="N" class="form-control hidden" />
		</div>
		<div class="row form-group">
			<div class="col-sm-offset-5 col-sm-2">
			     <button type="submit" class="btn btn-warning col-sm-6 col-sm-offset-3">
					<span class="glyphicon glyphicon-floppy-disk"></span>
										
										<span>Save</span>
				 </button>
			</div>
		</div>
	
	</div>
</div>
</form>


<?php include "s_form_sec3.php"; ?>


<form role="form" action="javascript:void(0)" onsubmit="return false;" class="form-horizontal ajaxsubmitform" id="sec4" >
<div class="panel panel-info">
	<div class="panel-heading" data-toggle="collapse" data-target="#four" style="font-size:150%;"><b>Mentor Details</b><span class="btn btn-info pull-right glyphicon glyphicon-chevron-up"></span></div>
	<div  class="panel-body collapse in one" id="four">
		<div class="row form-group">
			<label for="mentor_name" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Name of Mentor</label>
			<div class="col-sm-10">
				<input id="mentor_name" name="mentor_name" type="text" class="form-control" required />
			</div>
		</div>
		<div class="row form-group">
			<label for="stream" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Stream/Subject</label>
			<div class="col-sm-10">
				<input id="stream" name="stream" type="text" class="form-control" required />
			</div>
		</div>
		<div class="row form-group">
			<label for="qualification" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Highest Qualification</label>
			<div class="col-sm-10">
				<input id="qualification" name="qualification" type="text" class="form-control" required />
			</div>
		</div>
		<div class="row form-group">
			<label for="mentor_desi" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Designation</label>
			<div class="col-sm-10">
				<input id="mentor_desi" name="mentor_desi" type="text" class="form-control" required />
			</div>
		</div>
		<div class="row form-group">
			<label for="mentor_email" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Email Id</label>
			<div class="col-sm-10">
				<input id="mentor_email" name="mentor_email" type="email" class="form-control" required />
			</div>
		</div>
		<div class="row form-group">
			<label for="mentor_mobile" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Contact Number</label>
			<div class="col-sm-10">
				<input id="mentor_mobile" name="mentor_mobile" type="text" pattern='[6-9]{1}[0-9]{9}' class="form-control" required />
			</div>
		</div>
		<div class="row form-group">
			<label for="mentor_address" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Address</label>
			<div class="col-sm-10">
				<input id="mentor_address" name="mentor_address" type="text" class="form-control" required />
			</div>
		</div>
		<div class="row form-group">
			<label for="mentor_pin" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Pincode</label>
			<div class="col-sm-10">
				<input id="mentor_pin" name="mentor_pin" type="text" pattern='[0-9]{6}' class="form-control" required />
			</div>
		</div>
		<div class="row form-group">
			<label for="mentor_aadhar" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Aadhar Number</label>
			<div class="col-sm-10">
				<input id="mentor_aadhar" name="mentor_aadhar" type="text" pattern='[0-9]{12}' class="form-control" required />
			</div>
		</div>
		<div class="row form-group">
				<input id="flagsec4" type="text" value="N" class="form-control hidden" />
		</div>
		<div class="row form-group">
			<div class="col-sm-offset-5 col-sm-2">
			     <button type="submit" class="btn btn-warning col-sm-6 col-sm-offset-3">
					<span class="glyphicon glyphicon-floppy-disk"></span>
										
										<span>Save</span>
				 </button>
			</div>
		</div>
		
	</div>
</div>
</form>

<?php
$resultsum=mysqli_query($conn,"SELECT * FROM student WHERE app_id='$username'");
$row = $resultsum->fetch_assoc();
$resultsum1=mysqli_query($conn,"SELECT * FROM regist WHERE username='$app_id'");
$row1 = $resultsum1->fetch_assoc();
?>

<?php include "s_form_sec6.php"; ?>

<script>
$("#app_id").val("<?php echo $app_id;?>");
$("#team_name").val("<?php echo addslashes($row['team_name']);?>");
$("#project_name").val("<?php echo addslashes($row['project_name']);?>");
$("#problem").val("<?php echo addslashes($row['problem']);?>");
$("#award_cat").val("<?php echo addslashes($row['award_cat']);?>");
$("#g_oriented").val("<?php echo addslashes($row['g_oriented']);?>");
$("#i_entry").val("<?php echo addslashes($row['i_entry']);?>");
$("#multi_dis").val("<?php echo addslashes($row['multi_dis']);?>");
$("#inst_name").val("<?php echo addslashes($row['inst_name']);?>");
$("#inst_pid").val("<?php echo addslashes($row['inst_pid']);?>");
$("#inst_address").val("<?php echo addslashes($row['inst_address']);?>");
$("#inst_city").val("<?php echo addslashes($row['inst_city']);?>");
$("#inst_state").val("<?php echo addslashes($row['inst_state']);?>");
$("#inst_principal").val("<?php echo addslashes($row['inst_principal']);?>");
$("#inst_contact").val("<?php echo addslashes($row['inst_contact']);?>");
$("#inst_email").val("<?php echo addslashes($row['inst_email']);?>");
$("#mentor_name").val("<?php echo addslashes($row['mentor_name']);?>");
$("#stream").val("<?php echo addslashes($row['stream']);?>");
$("#qualification").val("<?php echo addslashes($row['qualification']);?>");
$("#mentor_desi").val("<?php echo addslashes($row['mentor_desi']);?>");
$("#mentor_email").val("<?php echo addslashes($row['mentor_email']);?>");
$("#mentor_mobile").val("<?php echo addslashes($row['mentor_mobile']);?>");
$("#mentor_address").val("<?php echo addslashes($row['mentor_address']);?>");
$("#mentor_pin").val("<?php echo addslashes($row['mentor_pin']);?>");
$("#mentor_aadhar").val("<?php echo addslashes($row['mentor_aadhar']);?>");
$("#Q7").val("<?php echo addslashes($row['Q7']);?>");
$("#Q8").val("<?php echo addslashes($row['Q8']);?>");
$("#Q9").val("<?php echo addslashes($row['Q9']);?>");
$("#Q10").val("<?php echo addslashes($row['Q10']);?>");



	$("#flagsec1").val("<?php echo addslashes($row['flagsec1']);?>");
	$("#flagsec2").val("<?php echo addslashes($row['flagsec2']);?>");
	$("#flagsec4").val("<?php echo addslashes($row['flagsec4']);?>");
	$("#flagsec5").val("<?php echo addslashes($row['flagsec5']);?>");
	$("#flagsec6").val("<?php echo addslashes($row['flagsec6']);?>");

$("#sec1,#sec2,#sec4,#sec5,#sec6").validator();

$(".ajaxsubmitform").on('submit',function(e) {
	var formid=$(this).attr('id');//get this form's id
    e.preventDefault(); // avoid to execute the actual submit of the form.
	setTimeout(function(e){ //wait 50ms to allow validator to execute
    var url = "request/"+formid+".php"; // the script where you handle the form input.
	// var data1=$("#"+formid).serialize()+"&flag"+formid+"=Y";
	// alert($("#"+formid).find('.has-error').length);//No of errors in the form
	if($("#"+formid).find('.has-error').length==0) 
	{
    $.ajax({
           type: "POST",
           url: url,
           data: $("#"+formid).serialize()+"&flag"+formid+"=Y", // serializes the form's elements.
           success: function(response)
           {
			   alert(response.toString()); //show response from the php script
			   savesuccess=1;
               //alert("Details saved");
           },
		   error: function(data,response){  
				alert("Network error");
			//handle error
			}
         });

	}
	}, 50);
});
$(".qswitch").each(function(){
	qtoggle(this);
});
$(".qswitch").on('change',function(){
	qtoggle(this);
});
function qtoggle(elem){
	var qswitchid=$(elem).attr("id");
	var str=$(elem).data('show');
	// alert($(elem).val()+'='+str);
			if($(elem).val()!="" && $(elem).val()==str)//check if value of switch is No
			{
				$("."+qswitchid+"_det").removeClass("hidden");
				$("#"+qswitchid+"_det").removeAttr("disabled");
			}
			else
			{
				$("#"+qswitchid+"_det").val("Please specify your problem");
				$("#"+qswitchid+"_det").attr("disabled","disabled");
				$("."+qswitchid+"_det").addClass("hidden");
			}
}
</script>


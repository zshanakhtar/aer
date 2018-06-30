<?php
include "../request/"."connection.php";

extract($_SESSION);
$app_id=trim($username);

$resultsum=mysqli_query($conn,"SELECT * FROM student WHERE app_id='$app_id'");
$row = $resultsum->fetch_assoc();
$resultsum1=mysqli_query($conn,"SELECT * FROM regist WHERE username='$username'");
$row1 = $resultsum1->fetch_assoc();
?>
<table  class ="table table-bordered table-striped" >
<thead>

</thead>

<tbody>
<tr>
<th colspan="8">
General Information
</th>
</tr>
<tr>
<td colspan="6">
Application Number
</td>
<td id="app_id" colspan="2">5
</td>

</tr>
<tr>
<td colspan="6">
Application Status
</td>
<td id="app_status" colspan="2">5
</td>

</tr>
<tr>
<td colspan="6">
Team Name
</td>
<td id="team_name" colspan="2">5
</td>
</tr>

<tr>
<td colspan="6">
Project Name
</td>
<td id="project_name" colspan="2">5
</td>
</tr>

<tr>
<td colspan="6">
Problem Category
</td>
<td id="problem" colspan="2">5
</td>
</tr>

<tr>
<td colspan="6">
Girls Only Team
</td>
<td id="g_oriented" colspan="2">5
</td>
</tr>

<tr>
<td colspan="6">
Individual Participant
</td>
<td id="i_entry" colspan="2">5
</td>
</tr>

<tr>
<td colspan="6">
Multi Discipline
</td>
<td id="multi_dis" colspan="2">5
</td>
</tr>

<tr>
<th colspan="8">
Institute Details
</th>
</tr>

<tr>
<td colspan="6">
Name of Institute
</td>
<td id="inst_name" colspan="2">5
</td>
</tr>

<tr>
<td colspan="6">
Institute Permanent_Id
</td>
<td id="inst_pid" colspan="2">5
</td>
</tr>

<tr>
<td colspan="6">
Address
</td>
<td id="inst_address" colspan="2">5
</td>
</tr>

<tr>
<td colspan="6">
City
</td>
<td id="inst_city" colspan="2">5
</td>
</tr>

<tr>
<td colspan="6">
State
</td>
<td id="inst_state" colspan="2">5
</td>
</tr>

<tr>
<td colspan="6">
State
</td>
<td id="inst_state" colspan="2">5
</td>
</tr>

<tr>
<td colspan="6">
Name of Principal
</td>
<td id="inst_principal" colspan="2">5
</td>
</tr>

<tr>
<td colspan="6">
Contact Number
</td>
<td id="inst_contact" colspan="2">5
</td>
</tr>

<tr>
<td colspan="6">
Email Id
</td>
<td id="inst_email" colspan="2">5
</td>
</tr>

<tr>
<th colspan="8">
Member Details
</th>
</tr>

<tr>
<th>Name of Student</th>
<th>Gender</th>
<th>Father's Name</th>
<th>Stream</th>
<th>Course Year</th>
<th>Mobile No.</th>
<th>Email Id</th>
<th>Role (TL/TM)</th>
</tr>


<?php 
					$resultteam=mysqli_query($conn,"SELECT mem_id,member_name,gender,father_name,stream,year,team_mobile,member_email,roll FROM teammember WHERE app_id='$app_id' ORDER BY mem_id ASC");
					$count=1;
					while($rowteam = $resultteam->fetch_assoc()){
					?>
					<tr>
						<td><?php echo ($rowteam['member_name']);?></td>
						<td><?php echo ($rowteam['gender']);?></td>
						<td><?php echo ($rowteam['father_name']);?></td>
						<td><?php echo ($rowteam['stream']);?></td>
						<td><?php echo ($rowteam['year']);?></td>
						<td><?php echo ($rowteam['team_mobile']);?></td>
						<td><?php echo ($rowteam['member_email']);?></td>
						<td><?php echo ($rowteam['roll']);?></td>
					</tr>
					<?php
					}
					?>


<tr>
<th colspan="3">
Mentor Details
</th>
</tr>

<tr>
<td colspan="6">
Name of Mentor
</td>
<td id="mentor_name" colspan="2">5
</td>
</tr>

<tr>
<td colspan="6">
Stream/Subject
</td>
<td id="stream" colspan="2">5
</td>
</tr>

<tr>
<td colspan="6">
Highest Qualifications
</td>
<td id="qualification" colspan="2">5
</td>
</tr>

<tr>
<td colspan="6">
Designation
</td>
<td id="mentor_desi" colspan="2">5
</td>
</tr>

<tr>
<td colspan="6">
Email Id
</td>
<td id="mentor_email" colspan="2">5
</td>
</tr>

<tr>
<td colspan="6">
Contact Number
</td>
<td id="mentor_mobile" colspan="2">5
</td>
</tr>

<tr>
<td colspan="6">
Address
</td>
<td id="mentor_address" colspan="2">5
</td>
</tr>

<tr>
<td colspan="6">
Pincode
</td>
<td id="mentor_pin" colspan="2">5
</td>
</tr>

<tr>
<th colspan="8">
Mentor Details
</th>
</tr>

<tr>
<th colspan="2">
Sr.No.
</th>
<th colspan="4">
Activity
</th>
<th colspan="2">
Number
</th>
</tr>

<tr>
<td colspan="2">
1
</td>
<td colspan="4">
Number of UG/Diploma projects guided on similar area during the last three years
</td>
<td colspan="2" id="similar_area">5
</td>
</tr>

<tr>
<td colspan="2">
2
</td>
<td colspan="4">
Number of UG/ Diploma projects guided to solve problem of society during the last three years
</td>
<td colspan="2" id="society_problem">5
</td>
</tr>

<tr>
<td colspan="2">
3
</td>
<td colspan="4">
Number of research publications during last three years
</td>
<td colspan="2" id="publications">5
</td>
</tr>
<tr>
<td colspan="2">
4
</td>
<td colspan="4">
Student Feedback Index
</td>
<td colspan="2" id="student_feedback">5
</td>
</tr>
<tr>
<td colspan="2">
5
</td>
<td colspan="4">
Number of achievement/award by students guided by the Teacher
</td>
<td colspan="2" id="achievement">5
</td>
</tr>
<tr>
<td colspan="2">
6
</td>
<td colspan="4">
Number of Awards/Patents (if any)
</td>
<td colspan="2" id="patents">5
</td>
</tr>

<tr>
<th colspan="8">
About Your Project
</th>
</tr>

<tr>
<td colspan="2">
Abstract
</td>
<td id="abstract" colspan="6">5
</td>
</tr>

<tr>
<td colspan="2">
Innovation
</td>
<td id="Q1" colspan="6">5
</td>
</tr>

<tr>
<td colspan="2">
Implement-ability
</td>
<td id="Q2" colspan="6">5
</td>
</tr>

<tr>
<td colspan="2">
Cost benefit
</td>
<td id="Q3" colspan="6">5
</td>
</tr>

<tr>
<td colspan="2">
Eco friendly
</td>
<td id="Q4" colspan="6">5
</td>
</tr>

<tr>
<td colspan="2">
Social impact
</td>
<td id="Q5" colspan="6">5
</td>
</tr>

<tr>
<td colspan="3">
<button type="text" class="btn btn-info col-xs-12">
					<span class="glyphicon glyphicon-floppy-disk"></span>
									
										<span>Print</span>
				 </button>
</td>
<td colspan="5">
<button type="text" class="btn btn-danger col-xs-12" onclick="submitform()" >
					<span class="glyphicon glyphicon-floppy-disk"></span>
									
										<span>Submit</span>
				 </button>
</td>
</tr>

</tbody>

</table>
<script>
$("#app_id").html("<?php echo $app_id;?>");
$("#app_status").html("<?php echo htmlspecialchars($row['app_status']);?>");
$("#team_name").html("<?php echo htmlspecialchars($row['team_name']);?>");
$("#project_name").html("<?php echo htmlspecialchars($row['project_name']);?>");
$("#problem").html("<?php echo htmlspecialchars($row['problem']);?>");
$("#award_cat").html("<?php echo htmlspecialchars($row['award_cat']);?>");
$("#g_oriented").html("<?php echo htmlspecialchars($row['g_oriented']);?>");
$("#i_entry").html("<?php echo htmlspecialchars($row['i_entry']);?>");
$("#multi_dis").html("<?php echo htmlspecialchars($row['multi_dis']);?>");
$("#inst_name").html("<?php echo htmlspecialchars($row['inst_name']);?>");
$("#inst_pid").html("<?php echo htmlspecialchars($row['inst_pid']);?>");
$("#inst_address").html("<?php echo htmlspecialchars($row['inst_address']);?>");
$("#inst_city").html("<?php echo htmlspecialchars($row['inst_city']);?>");
$("#inst_state").html("<?php echo htmlspecialchars($row['inst_state']);?>");
$("#inst_principal").html("<?php echo htmlspecialchars($row['inst_principal']);?>");
$("#inst_contact").html("<?php echo htmlspecialchars($row['inst_contact']);?>");
$("#inst_email").html("<?php echo htmlspecialchars($row['inst_email']);?>");
$("#mentor_name").html("<?php echo htmlspecialchars($row['mentor_name']);?>");
$("#stream").html("<?php echo htmlspecialchars($row['stream']);?>");
$("#qualification").html("<?php echo htmlspecialchars($row['qualification']);?>");
$("#mentor_desi").html("<?php echo htmlspecialchars($row['mentor_desi']);?>");
$("#mentor_email").html("<?php echo htmlspecialchars($row['mentor_email']);?>");
$("#mentor_mobile").html("<?php echo htmlspecialchars($row['mentor_mobile']);?>");
$("#mentor_address").html("<?php echo htmlspecialchars($row['mentor_address']);?>");
$("#mentor_pin").html("<?php echo htmlspecialchars($row['mentor_pin']);?>");
$("#similar_area").html("<?php echo htmlspecialchars($row['similar_area']);?>");
$("#society_problem").html("<?php echo htmlspecialchars($row['society_problem']);?>");
$("#publications").html("<?php echo htmlspecialchars($row['publications']);?>");
$("#student_feedback").html("<?php echo htmlspecialchars($row['student_feedback']);?>");
$("#achievement").html("<?php echo htmlspecialchars($row['achievement']);?>");
$("#patents").html("<?php echo htmlspecialchars($row['patents']);?>");
$("#abstract").html("<?php echo mysqli_real_escape_string($conn,$row['abstract']);?>");
$("#Q1").html("<?php echo mysqli_real_escape_string($conn,$row['Q1']);?>");
$("#Q2").html("<?php echo mysqli_real_escape_string($conn,$row['Q2']);?>");
$("#Q3").html("<?php echo mysqli_real_escape_string($conn,$row['Q3']);?>");
$("#Q4").html("<?php echo mysqli_real_escape_string($conn,$row['Q4']);?>");
$("#Q5").html("<?php echo mysqli_real_escape_string($conn,$row['Q5']);?>");



function submitform(){
	alert("Function correct");
	$.ajax({
           type: "POST",
           url: "request/sformsubmit.php",
           success: function(response)
           {
			   alert(response.toString()); //show response from the php script
               //alert("Details saved");
           },
		   error: function(data,response){  
				alert("Network error");
			//handle error
			}
         });
}
</script>
<?php
include "../request/".'connection.php'; //connect the connection page
session_start();

if ($_SERVER['REQUEST_METHOD']=='POST'){
	
extract($_POST);
extract($_SESSION);



// echo $roll;


if($member_action=="save")
{
	$query ="insert into teammember(app_id,mem_id,member_name,member_email,gender,father_name,stream,year,team_mobile,roll) values ('$username','$mem_id','$member_name','$member_email','$gender','$father_name','$member_stream','$year','$team_mobile','Team Member')";
	mysqli_query($conn, $query);
	echo "Member Details Saved";
}
else if($member_action=="del")
{
	$query = "DELETE FROM teammember WHERE mem_id='$mem_id' AND roll='Team Member'";
	mysqli_query($conn, $query);
	if($roll=='Team Leader')
		echo "Team Leader cannot be deleted";
	else
		echo "Delete success";
}
else if($member_action=="update")
{

	 $query="UPDATE teammember SET member_name='$member_name',member_email ='$member_email',gender='$gender',father_name='$father_name',year='$year',team_mobile='$team_mobile',roll='$roll',stream='$member_stream' WHERE app_id='$username' AND mem_id='$mem_id'";
	mysqli_query($conn, $query);
	echo "Member Details Updated";
}

		


}
?>
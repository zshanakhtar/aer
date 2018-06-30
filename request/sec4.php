<?php
include "../request/".'connection.php'; //connect the connection page
session_start();

if ($_SERVER['REQUEST_METHOD']=='POST'){
	
extract($_POST);
extract($_SESSION);



// echo $username;

$mentor_address = mysqli_real_escape_string($conn,$mentor_address);
$resultsum=mysqli_query($conn,"SELECT * FROM student WHERE app_id='$username' AND app_status='Submitted'");
   if($row = $resultsum->fetch_assoc())
	{
		echo "Application already submitted, details could not be updated";
	}
   else
   {
	   $resultsum=mysqli_query($conn,"SELECT * FROM student WHERE app_id='$username'");
   if($row = $resultsum->fetch_assoc())
   { 
	$query ="UPDATE student set mentor_name='$mentor_name', stream ='$stream',qualification='$qualification',mentor_desi='$mentor_desi',mentor_email='$mentor_email', mentor_mobile='$mentor_mobile', mentor_address='$mentor_address', mentor_pin='$mentor_pin',flagsec4='$flagsec4'   
		WHERE app_id='$username'";
		 mysqli_query($conn, $query);
	     echo "Mentor Details Saved";
   }
   else
   {
	   echo "server error";
   }
   }


}
?>
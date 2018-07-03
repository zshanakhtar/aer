<?php
include "../request/".'connection.php'; //connect the connection page
session_start();

if ($_SERVER['REQUEST_METHOD']=='POST'){
	
extract($_POST);
extract($_SESSION);

// echo $username;
if($usertype=='a')
{
$resultsum=mysqli_query($conn,"SELECT * FROM judge WHERE judge_id='$judge_id' AND app_id='$app_id'");
if($row = $resultsum->fetch_assoc())
{
	echo "2";
}
else
{
	$query ="INSERT into judge(judge_id,app_id,flageval2) values ('$judge_id','$app_id','N')";
	mysqli_query($conn, $query);
	echo "1";
}
}
else
{
    echo "2";
}
}
?>
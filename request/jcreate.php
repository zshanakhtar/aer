<?php
include "../request/".'connection.php'; //connect the connection page
session_start();

if ($_SERVER['REQUEST_METHOD']=='POST'){
	
extract($_POST);

$name = mysqli_real_escape_string($conn, $name);
$password = mysqli_real_escape_string($conn, $password);

echo $name."\n";
echo $email."\n";
// echo $mobile."\n";
echo "------Username: ".$judge_id."-------\n";
echo "------Password: ".$password."-------\n";

$FILLregist="INSERT INTO regist (username,password,usertype) values ('$judge_id','$password','j')";



if ($conn->query($FILLregist) === TRUE) {
	echo "Registration Done Successfully";
}

}
else{
	header("Location:../index.php");;
}



?>
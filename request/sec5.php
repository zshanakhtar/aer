<?php
include "../request/".'connection.php'; //connect the connection page
session_start();

if ($_SERVER['REQUEST_METHOD']=='POST'){
    
    extract($_POST);
    extract($_SESSION);
    // echo $username;
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
            $fileName = $username.'.pdf';
            $target = "../Documents/";
            $fileTarget = $target.$fileName;
            $tempFileName = $_FILES["myPDF"]["tmp_name"];
            $result = move_uploaded_file($tempFileName,$fileTarget);
            if($result) { 
                echo "Your file <html><b><i>".$fileName."</i></b></html> has been successfully uploaded";		
                $query = "INSERT INTO file_upload(filepath,filename) VALUES ('$fileTarget','$fileName')";	
                mysqli_query($conn, $query);
            }
            else {			
                echo "Sorry !!! There was an error in uploading your file";			
            }
            mysqli_close($conn);
            // 	$query ="UPDATE student set similar_area='$similar_area', society_problem ='$society_problem',publications='$publications',student_feedback='$student_feedback',achievement='$achievement', patents='$patents',flagsec5='$flagsec5'   
            // 		WHERE app_id='$username'";
            // 		mysqli_query($conn, $query);
            // 	echo "Mentor Details saved";
        }
        else
        {
            echo "server error";
        }
	}
}
?>
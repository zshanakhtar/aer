<?php
include "../request/".'connection.php'; //connect the connection page
session_start();
date_default_timezone_set("Asia/Calcutta"); 
$judge_id='JUD'.date('dmHis');

if ($_SERVER['REQUEST_METHOD']=='POST'){
	
extract($_POST);

$name = mysqli_real_escape_string($conn, $name);
$password = mysqli_real_escape_string($conn, $password);

echo $name."\n";
echo $email."\n";
// echo $mobile."\n";
echo $judge_id."\n";
echo $password."\n";

$FILLregist="INSERT INTO regist (username,password,usertype) values ('$judge_id','$password','j')";



if ($conn->query($FILLregist) === TRUE) {
	
	$message="Dear Applicant, Your registration has been done successfully. Your Application number is: ".$judge_id;
	include("testsms.php");
	$mclass = new sendSms();
    $mclass->sendSmsToUser($message,$mobile,". AICTE",238161,"registration","vishwakarma");
	 
	 $subject="Application ID for Vishwakarma Award";
	 $body="Dear Applicant,<br>
	 Your registration has been done successfully. Your Application number is: ".$judge_id;
	 sendmail($subject,$body,$email,"Applicant");
	 header('Refresh: 1; URL=index.php');	
	 echo "<script> alert('Your registration done Succesfully. Check your mail for more information.');</script>";
		 
} else {
    echo "Error: " . $FILL . "<br>" . $conn->error;
}

function sendmail($subject,$body,$sender,$sendertype)
{
	include("mailer/PHPMailerAutoload.php");
	    $mail = new PHPMailer;
        //$mail->SMTPDebug = 3;                               		// Enable verbose debug output
        $mail->isSMTP();                                      		// Set mailer to use SMTP
        $mail->Host = '192.168.1.118';                   			// Specify main and backup SMTP servers
        //$mail->SMTPAuth = true;                                   // Enable SMTP authentication
        //$mail->Username = 'aicte.admin@aicte-india.org';          // SMTP username
        //$mail->Password = '';                      				// SMTP password
        //$mail->SMTPSecure = 'ssl';                          		// Enable TLS encryption, `ssl` also accepted
        $mail->Port = 25;                                     		// TCP port to connect to
        $mail->From = 'aicte.admin@aicte-india.org';
        $mail->FromName = 'AICTE no-reply';
        $mail->addAddress($sender,$sendertype);
		//$mail->AddCC($sender2, "Contact Person");
   		// Add a recipient
	    //$mail->AddBCC("aictetestmail@gmail.com", "MailCheck");
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $body;
		//$mail->addAttachment("E:/uploads/".$path);
        //$mail->AltBody = $altBody;
		//echo $user_row["isSubmitted"]." ".$user_row["isStudentVerified"];
		
		//echo $subject;
	 
        if(!$mail->send()) {
            echo "failed";
			header('Location: index.php');	
        } else {
			
		echo "Your registration done Succesfully. Check your mail for more information.";
			
        }
}





// $resultsum=mysqli_query($conn,"SELECT usertype FROM regist WHERE username='$l_username' and password='$l_password'");
	// if($row = $resultsum->fetch_assoc())
	// {
			// extract($row);
			// $_SESSION['usertype']=$usertype;
			// $_SESSION['username']=$l_username;
			// header("Location:../dashboard.php");
	// }		
	// else
	// {
			// echo "Not found";
	// }
	

// mysqli_close($conn); // Closing Connection with Server
}
else{
	header("Location:../index.php");;
}



?>
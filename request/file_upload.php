<?php
	include 'connection.php'; 
	session_start();
    extract($_SESSION);
echo $username;
	$fileExistsFlag = 0; 
	$fileName = $username;
	
	/*
	* 	If file is not present in the destination folder
	*/
	
		$target = "NOC/";		
		$fileTarget = $target.$fileName;	
		$tempFileName = $_FILES["Filename"]["tmp_name"];
		$ext = pathinfo($fileName, PATHINFO_EXTENSION);
		if($ext != "pdf")
		{
   						 echo "Sorry, only PDF files are allowed.";
    				    //$uploadOk = 0;
		}
		//$fileDescription = $_POST['Description'];	
		else
	    {
				$result = move_uploaded_file($tempFileName,$fileTarget);
		/*
		*	If file was successfully uploaded in the destination folder
		*/
			  if($result)
			   { 
		     	echo "Your file <html><b><i>".$fileName."</i></b></html> has been successfully uploaded";		
		    	$query = "INSERT INTO file_upload(filepath,filename) VALUES ('$fileTarget','$fileName')";
				//$link->query($query) or die("Error : ".mysqli_error($link));		
			    mysqli_query($conn, $query);
			   }
				else 
				{			
					echo "Sorry !!! There was an error in uploading your file";			
				}
	}
		mysqli_close($conn);
	
	/*
	* 	If file is already present in the destination folder
	*/

?>
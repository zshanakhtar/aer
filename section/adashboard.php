<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Administrator Dashboard</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<!-- Validator   -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script> 

<!-- universal css -->
<link rel="stylesheet" href="css/universal.css">
<!-- adashboard css -->
<link rel="stylesheet" href="css/adashboard.css">

<!-- universal js -->
<script src="js/universal.js"></script>
<!-- adashboard js -->
<script src="js/adashboard.js"></script>

<!-- datatable css -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/jszip-2.5.0/dt-1.10.16/b-1.5.1/b-flash-1.5.1/b-html5-1.5.1/datatables.min.css"/>
<!-- datatable js -->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/jszip-2.5.0/dt-1.10.16/b-1.5.1/b-flash-1.5.1/b-html5-1.5.1/datatables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
  
</head>
<?php
include "request/"."connection.php";

extract($_SESSION);
$app_id=trim($username);
$query="select * from regist where username='$app_id'";
$result=mysqli_query($conn,$query);
 $app_id2=mysqli_fetch_array($result,MYSQLI_ASSOC);

$query="select * from teammember where app_id='$app_id'";
$resultteam=mysqli_query($conn,$query);
 
?>
<body>

<?php include 'section/ajaxloader.php'; ?>
<?php include 'section/navdashboard.php'; ?>
<?php include 'section/navadmin.php'; ?>


 <img src="images/logo.png"  style="margin-top:10px;margin-left:150px;width:25%;" alt="Image">
 <br>
 
 
<div id="myDiv1"></div>
<br>
<div class="review col-xs-12 col-sm-10 col-sm-offset-1">

</div>
<?php include 'section/footer.php'; ?>
</body>
</html>


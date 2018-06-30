<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Dashboard- Register your team; Fill team, mentor and institute details</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<!-- Validator   -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script> 

<!-- universal css -->
<link rel="stylesheet" href="css/universal.css">
<!-- sdashboard css -->
<link rel="stylesheet" href="css/sdashboard.css">

<!-- universal js -->
<script src="js/universal.js"></script>
<!-- sdashboard js -->
<script src="js/sdashboard.js"></script>
</head>

<body>

<?php include 'section/ajaxloader.php'; ?>
<?php include "navdashboard.php"; ?>
<?php include "navstudent.php"; ?>
<br>
  <div id="myDiv1"></div>
<div  class="review col-xs-12 col-sm-10 col-sm-offset-1">



</div>

<script>
function changeview(elem){
$.ajax({
    url: "request/getmodule.php",
    type: "POST",
    data: "module="+$(elem).data('module'),
    success: function(response){ 
        $('.review').html(response);
        //handle returned arrayList
    },
    error: function(e){  
        alert("error");
        //handle error
    } 
});
}
</script>

<?php include 'section/footer.php'; ?>
</body>
</html>


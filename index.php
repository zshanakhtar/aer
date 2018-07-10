<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AER Portal-Login, Register and more</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Validator   -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script> 

<!-- universal css -->
<link rel="stylesheet" href="css/universal.css">
<!-- index css -->
<link rel="stylesheet" href="css/index.css">

<!-- index js -->
  <script src="js/index.js"></script>
</head>
<?php
include "request/"."connection.php"; //connect the connection page
   session_start();


if(isset($_SESSION['usertype'])) { // if already login
   header("location: dashboard.php"); // send to home page
   exit; 
}

?>
<body>

<?php include 'section/ajaxloader.php'; ?>
<?php include 'section/navindex.php'; ?>


 <img src="images/logo.png"  style="margin-top:10px;margin-left:150px;width:25%;" alt="Image">
 <br>
 
 
<div id="myDiv1"></div>
<br>
<div class="review col-xs-12 col-sm-10 col-sm-offset-1">

<div class="top">
<div class="row">
<div class="col-sm-6">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" >
   
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/1.jpg" alt="img0" style="width:100%;">
      </div>

      <div class="item">
        <img src="images/2.jpg" alt="img" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="images/3.jpg" alt="img1" style="width:100%;">
      </div>
    </div>

  
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</div>

<div class="col-sm-6 col-xs-12 text">


  <h1 class="margin text-center">About Vishwakarma Awards</h1>
  <p>All India Council for Technical Education (AICTE), Ministry of Human Resource Development, Govt. of India ,The Indian Society for Technical Education (ISTE) & Engineering Council of India (ECI), the apex Engineering Body of India are jointly holding a competition "AICTE-ECI-ISTE Chhatra Vishwakarma Awards” for the students of AICTE approved Degree & Diploma level technical institutions.</p>
  <br>
</div>
</div>
</div>
<hr>
<div class="row">
    <div class="col-sm-5 col-xs-12">
      <div class="panel panel-info text-center">
        <div class="panel-heading">
          <h1><i class="fa fa-calendar" aria-hidden="true"></i> Important Dates</h1>
        </div>
        <div class="panel-body">
        <ul class="list-group">
        <li class="list-group-item">Online application will start from: <span class="badge">10-07-2018</span></li>
        <li class="list-group-item">Last date to submit the application: <span class="badge">10-08-2018</span></li>
      </ul> 
        </div>
</div>
<div class="panel panel-info text-center">
        <div class="panel-heading">
          <h1><i class="fa fa-download" aria-hidden="true"></i> Downloads</h1>
        </div>
      <div class="panel-body">
      <ul class="list-group">
        <li class="list-group-item"><a href="downloads/Guidelines-Chattra-Vishwakarma_2018.pdf" target="_blank">Guidelines</a><span class="badge">10-07-2018</span></li>
        <li class="list-group-item"><a href="downloads/Vishwa_ECI_2017.pdf" target="_blank">List of Winners for  Chhatra Vishwakarma Awards 2017</a><span class="badge">10-07-2018</span></li>
      </ul> 
        </div>
      </div> 
</div>
<div class="col-sm-7 col-xs-12">
  <h3>To recognize and honour innovative work of the students displaying exceptional skills in
  different Engineering streams. Awards will be given in following categories separately
  for Degree and Diploma Students (including students from AICTE approved Community College:</h3>
 <br><p>1. <strong>Category-I</strong>: Outstanding Student Engineers (3 Awards each in Civil, Electrical, Mechanical,
 Electronics Engineering, Computer Science and Biotechnology streams or their allied branches)(Ref. 
 Annexure-A for allied Branches).</p> <br><p> 2.<strong> Category-II</strong>: Outstanding Teachers Awards (3 Awards each in
 Civil, Electrical, Mechanical, Electronics Engineering, Computer Science and Biotechnology streams 
 or their allied branches).</p> <br><p>3.<strong> Category-III</strong>: Outstanding Institutions Awards (3 Awards) based on
 the maximum number of awards won from the above two categories and other criteria.</p>
</div>
</div>
</div>

<?php include 'section/footer.php'; ?>

</body>
</html>


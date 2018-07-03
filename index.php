<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

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

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->

  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active"> <img src="images/1.jpg"  style="height:528px; width:940px;"> </div>
    <div class="item"> <img src="images/2.jpg"  style="height:528px; width:940px;"> </div>
    <div class="item"> <img src="images/3.jpg"  style="height:528px; width:940px;"> </div>
  </div>
</div>
<hr>
<div class="container">
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading custom_class" style="background-color:#CD5C5C">
          <h1><i class="fa fa-calendar" aria-hidden="true" style="font-size:34px"></i> Important Dates</h1>
        </div>
        <div class="panel-body">
         <ol align="left">
  <p>
  

          <li>Online application will start from:xx-yy-zzzz</li><br></p>
              <p><li>Last date to submit the application:xx-yy-zzzz</li><br></p>
  <p><li>Last date to submit the application:xx-yy-zzzz</li><br></p>
              <p><li>Last date to submit the application:xx-yy-zzzz</li><br></p>
              <p><li>Last date to submit the application:xx-yy-zzzz</li><br></p>
</ol>
<br><br>
        </div>
        <div class="panel-footer">
          
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading custom_class" style="background-color:#CD5C5C">
          <h1 class="common"><i class="fa fa-user" aria-hidden="true" style="font-size:34px"></i> Mentor</h1>
        </div>
        <div class="panel-body">
           <p> Students from following stream or its aligned streams:<br></p>
          <ol align="left">
		   <p><li>
Civil/ Electrical/ Mechanical/ Electronics/Computer Engineering/Bio Technology and other aligned streams.</li></p>
             <p>  <li>Students of UG Engineering, Diploma Engineering Programs and Vocational Diploma programme of Community College are eligible to apply.</li></p>
  <p> <li>Nominations/Applications from girls / women are especially encouraged</li></p>
             <p>  <li>Number of UG/ Diploma projects guided to solve problem of society during the last three years, List of ideas to be included.</li></p>
            <p>   <li>Application for only Practical Demonstrable models (no theoretical knowledge papers) will be entertained.</li></p>
</ol>
        </div>
        <div class="panel-footer">
         
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading custom_class" style="background-color:#CD5C5C">
          <h1><i class="fa fa-user" aria-hidden="true" style="font-size:34px"></i>   Mentor</h1>
        </div>
        <div class="panel-body">
          <ol align="left">
           <p> <li>Mentor/ Teacher-In-charge whose students have been adjudged worthy of receiving the Category-I award shall be eligible for the consideration of award.</li></p>
           <p> <li>Other criteria shall include achievements of the mentor:</p>
<ol type="a" align="left">
            <p><li>Number of UG/ Diploma projects guided on similar area during the last three years.</li></p>
            <p><li>Number of UG/ Diploma projects guided to solve problem of society during the last three years.</li></p>
            <p><li>Number of research publications during last three years</li></p>
<p> <li>Student Feedback Index</li></p>
    
<p><li>Number of Awards/Patents (if any)</li></p>
            </ol>
        </div>
        <div class="panel-footer">

          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>    
  </div>
</div>

</div>
<?php include 'section/footer.php'; ?>

</body>
</html>


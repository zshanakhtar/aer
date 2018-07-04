<form role="form" action="javascript:void(0)" onsubmit="return false;" class="form-horizontal ajaxsubmitform" id="jallocate1" >
<div class="panel panel-info">
	<div class="panel-heading" data-toggle="collapse" data-target="#one" style="font-size:150%;"><b>General Information</b><span class="btn btn-info pull-right glyphicon glyphicon-chevron-up"></span></div>
	<div  class="panel-body collapse in one" id="one">
    <div class="row form-group">
	  	<label for="judge_id" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Judge</label>
	  	<div class="col-sm-10">
	  		<select required class="form-control" id="judge_id" name="judge_id">
	  			<option value="">--Select--</option>
          <?php
            $resultjudges=mysqli_query($conn,"SELECT username FROM regist WHERE usertype='j'");
            while($rowjudges = $resultjudges->fetch_assoc())
            {
              ?>
	  			<option value="<?php echo addslashes($rowjudges['username']);?>"><?php echo htmlspecialchars($rowjudges['username']);?></option>
            <?php } ?>
	  		</select>
	  	</div>
	  </div>
    <div class="row form-group">
	  	<label for="activeanchors" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">No of Selected Applications</label>
	  	<div class="col-sm-10">
	  		<input id="activeanchors" name="" type="text" class="form-control" disabled />
	  	</div>
	  </div>
    <div class="row form-group">
	  	<label for="appid_arr" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Selected Applications</label>
	  	<div class="col-sm-10">
	  		<input id="appid_arr" name="" type="text" class="form-control" required disabled />
	  	</div>
	  </div>
    <div class="row form-group hidden">
	  	<label for="app_id" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Current Application</label>
	  	<div class="col-sm-10">
	  		<input id="app_id" name="app_id" type="text" class="form-control" />
	  	</div>
	  </div>
    <div class="row form-group">
	  	<label for="" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Save Progress</label>
	  	<div class="col-sm-10">
        <div class="progress">
          <div class="progress-bar progress-bar-info" id="appid_sent" role="progressbar" style="width:34%;">
            Sent Successfully: 0/0
          </div>
          <div class="progress-bar progress-bar-warning" id="appid_exists" role="progressbar" style="width:33%;">
            Already Exists: 0/0
          </div>
          <div class="progress-bar progress-bar-danger" id="appid_error" role="progressbar" style="width:33%;">
            Network Error: 0/0
          </div>
          <div class="progress-bar progress-bar-danger" id="appid_error" role="progressbar" style="width:100%;">
            Select a judge and applications to send
          </div>
        </div>
	  	</div>
	  </div>
    <div class="row form-group">
      <div class="col-sm-offset-5 col-sm-2">
        <button type="submit" class="btn btn-warning col-sm-10 col-sm-offset-1">
          <span class="glyphicon glyphicon-floppy-disk"></span>
          <br class="hidden-lg hidden-sm hidden-xs">					
          <span class="hidden-sm">Send to Judge</span>
         </button>
      </div>
    </div>
	</div>
</div>
</form>
  <ul class="nav nav-tabs" id="problem_tabs">
      <li class="active"><a data-toggle="tab" data-i="0">Problem 0&nbsp;<span class="btn btn-xs btn-danger" id="pr0_count"></span></a></li>
      <li><a data-toggle="tab" data-i="1">Problem 1&nbsp;<span class="btn btn-xs btn-danger" id="pr1_count"></span></a></li>
      <li><a data-toggle="tab" data-i="2">Problem 2&nbsp;<span class="btn btn-xs btn-danger" id="pr2_count"></span></a></li>
      <li><a data-toggle="tab" data-i="3">Problem 3&nbsp;<span class="btn btn-xs btn-danger" id="pr3_count"></span></a></li>
      <li><a data-toggle="tab" data-i="4">Problem 4&nbsp;<span class="btn btn-xs btn-danger" id="pr4_count"></span></a></li>
      <li><a data-toggle="tab" data-i="5">Problem 5&nbsp;<span class="btn btn-xs btn-danger" id="pr5_count"></span></a></li>
      <li><a data-toggle="tab" data-i="6">Problem 6&nbsp;<span class="btn btn-xs btn-danger" id="pr6_count"></span></a></li>
      <li><a data-toggle="tab" data-i="7">Problem 7&nbsp;<span class="btn btn-xs btn-danger" id="pr7_count"></span></a></li>
  </ul>
  <div class="tab-content subreview">

  </div>




  <script>
  $(document).ready(function(){
    $($("#problem_tabs li a")[0]).click();
  });
  $("#problem_tabs li a").on('click',function(){
    var i=$(this).data("i");
    $.ajax({
    url: "request/getsubmodule.php",
    type: "POST",
    data: "module=allocate_judge"+"&submodule=problem"+"&i="+i,
    success: function(response){ 
        $('.subreview').html(response);
        $("#problem_table").DataTable();
        //handle returned arrayList
    },
    error: function(e){  
        alert("error");
        //handle error
    } 
    });
  });

  

  </script>
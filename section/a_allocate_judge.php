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
	  	<label for="" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">No of Selected Applications</label>
	  	<div class="col-sm-10">
	  		<input id="activeanchors" name="" type="text" class="form-control" required />
	  	</div>
	  </div>
    <div class="row form-group">
	  	<label for="" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Selected Applications</label>
	  	<div class="col-sm-10">
	  		<input id="appid_arr" name="" type="text" class="form-control" required />
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
  <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#problem1">Problem 1</a></li>
      <li><a data-toggle="tab" href="#problem2">Problem 2</a></li>
      <li><a data-toggle="tab" href="#problem3">Problem 3</a></li>
      <li><a data-toggle="tab" href="#problem4">Problem 4</a></li>
      <li><a data-toggle="tab" href="#problem5">Problem 5</a></li>
      <li><a data-toggle="tab" href="#problem6">Problem 6</a></li>
      <li><a data-toggle="tab" href="#problem7">Problem 7</a></li>
  </ul>
    <div class="tab-content">
      <div id="problem1" class="tab-pane fade in active">
  <div class="row form-group">
		  	<label for="abstract" class="col-sm-2 col-sm-offset-1 control-label" style="color:#337ab7">Select all teams having stream</label>
		  	<div class="col-sm-8">
          <?php
                
                $resultstream=mysqli_query($conn,"SELECT DISTINCT teammember.stream FROM teammember INNER JOIN student ON student.app_id=teammember.app_id WHERE student.app_status='Submitted'");
                while($rowstream = $resultstream->fetch_assoc())
                {
          ?>
                <span class="btn btn-default filter-control">
                  <?php echo htmlspecialchars($rowstream['stream']);?>
                </span>
            <?php 
                }
                ?>
            
		  	</div>

		  </div>
      <table id="problem1_table" class="table table-bordered table-striped table-responsive">
        <thead>
          <tr>
            <td>
              <input type="checkbox" />
            </td>
            <td>
              Application ID
            </td>
            <td>
              Team Name
            </td>
            <td>
              Award Category
            </td>
            <td>
              Streams
            </td>
          </tr>
        </thead>
        <tbody>
          <?php
          $resultteam=mysqli_query($conn,"SELECT app_id,team_name,award_cat FROM student WHERE problem='1'");// AND app_status='Submitted'
					$count=1;
					while($rowteam = $resultteam->fetch_assoc()){
            $app_id=$rowteam['app_id'];
            ?>
          <tr data-appid="<?php echo addslashes($app_id);?>">
            <td><label><input type="checkbox" value="">  <?php echo $count++; ?></label></td>
            <td>
              <span class="btn btn-default filter-anchor">
                <?php echo htmlspecialchars($app_id);?>
              </span>
            </td>
            <td><?php echo htmlspecialchars($rowteam['team_name']);?></td>
            <td><?php echo htmlspecialchars($rowteam['award_cat']);?></td>
            <td>
              <?php
                $resultstream=mysqli_query($conn,"SELECT DISTINCT stream FROM teammember WHERE app_id='$app_id'");
                while($rowstream = $resultstream->fetch_assoc())
                {
                ?>
                <span class="btn btn-default filter">
                  <?php echo htmlspecialchars($rowstream['stream']);?>
                </span>
              <?php } ?>
            </td>
          </tr>
          <?php
					}
					?>
        </tbody>
      </table>
      
      
    </div>
  
	<div id="problem2" class="tab-pane fade">
      <h3>Problem 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
	<div id="problem3" class="tab-pane fade">
      <h3>Problem 3</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
	<div id="problem4" class="tab-pane fade">
      <h3>Problem 4</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
	<div id="problem5" class="tab-pane fade">
      <h3>Problem 5</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
	<div id="problem6" class="tab-pane fade">
      <h3>Problem 6</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
	<div id="problem7" class="tab-pane fade">
      <h3>Problem 7</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  </div>




  <script>

  $("#problem1_table").DataTable();

  var appid_arr=[];
  $('.filter-control').on('click',function(){
    if($(this).hasClass("btn-default")) resetfilters();
        var filtertoggle=$(this).html();
        var filtercurrent;
        $(this).toggleClass("btn-danger");
        $(this).toggleClass("btn-default");
        
        $('.filter').each(function(){
          filtercurrent=$(this).html();
          if(filtercurrent==filtertoggle)
          {
            $(this).toggleClass("filter-active");
            var appidcurrent=$(this).closest('tr').data('appid');
            if($(this).hasClass("filter-active"))
              addappid(appidcurrent);
            else
              removeappid(appidcurrent);
          }
        });
        refreshfilteranchors();
    });

    $('.filter-anchor').on('click',function(){
      var appidcurrent=$(this).closest('tr').data('appid');
      if($(this).hasClass("btn-default"))
      {
        $(this).addClass("btn-danger");
        $(this).removeClass("btn-default");
        addappid(appidcurrent);
      }
      else
      {
        $(this).removeClass("btn-danger");
        $(this).addClass("btn-default");
        removeappid(appidcurrent);
      }
      $('.filter-control').removeClass("btn-danger");
      $('.filter-control').addClass("btn-default");
      refreshfilteranchors();      
    });

    function addappid(appid)
    {
      if(!hasappid(appid))
        appid_arr.push(appid);
    }
    function hasappid(appid)
    {
      for(var i=0;i<appid_arr.length;i++)
      {
        if(appid_arr[i]==appid)
        {
         return true;
        }
      }
      return false;
    }
    function removeappid(appid)
    {
      for(var i=0;i<appid_arr.length;i++)
      {
        if(appid_arr[i]==appid)
        {
         appid_arr.splice(i,1);
        }
      }
    }
    function refreshfilteranchors()
    {
      var anchorname;
      var activeanchors=0;
      // alert(appid_arr);
      $('.filter-anchor').each(function(){
        anchorname=$(this).html().trim();
        // alert(anchorname);
        if(hasappid(anchorname))
        {
          // alert("TRUE");
          activeanchors++;
          $(this).addClass('btn-danger');
          $(this).removeClass('btn-default');
        }
        else
        {
          // alert("FALSE");
          $(this).removeClass('btn-danger');
          $(this).addClass('btn-default');
        }
      });
      $("#activeanchors").val(activeanchors);
      $("#appid_arr").val(appid_arr);
    }
    function resetfilters()
    {
      appid_arr=[];
      refreshfilteranchors();
      $('.filter-control').removeClass("btn-danger");
      $('.filter').removeClass("filter-active");
      $('.filter-control').addClass("btn-default");
    }
  </script>
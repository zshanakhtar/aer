<style>
.blue-box{
    background-color:#337ab7;
    color:#ffffff;
    padding:4px;
    margin:2px;
    border-radius:4px;
}
</style>

<div id="problem" class="tab-pane fade in active">
        <div class="row form-group">
		  	<label for="" class="col-sm-2 col-sm-offset-1 control-label" style="color:#337ab7">Select all teams having stream</label>
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
      <table id="problem_table" class="table table-bordered table-striped table-responsive">
        <thead>
          <tr>
            <td>
              S.No
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
            <td>
              Judges
            </td>
          </tr>
        </thead>
        <tbody>
          <?php
          $resultteam=mysqli_query($conn,"SELECT app_id,team_name,award_cat FROM student WHERE problem='$i' AND app_status='Submitted'");
					$count=1;
					while($rowteam = $resultteam->fetch_assoc()){
            $app_id=$rowteam['app_id'];
            ?>
          <tr data-appid="<?php echo addslashes($app_id);?>">
            <td><label class="btn"><?php echo $count++; ?></label></td>
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
            <td>
            <?php
                $resultjalloted=mysqli_query($conn,"SELECT judge_id FROM judge WHERE app_id='$app_id'");
                while($rowjalloted = $resultjalloted->fetch_assoc())
                {
                ?>
                    <span class="blue-box">
                        <?php echo htmlspecialchars($rowjalloted['judge_id']);?>
                    </span>
                <?php
				}
			    ?>
            </td>
          </tr>
          <?php
					}
					?>
        </tbody>
      </table>
      
      
    </div>
    <script>
$("#pr<?php echo $i;?>_count").html("<?php echo $count-1;?>");

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
      $("#activeanchors").trigger('change');
      $("#appid_arr").val(appid_arr);
      $("#appid_arr").trigger('change');
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
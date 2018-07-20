<?php
include "../request/"."connection.php";

$resultsum=mysqli_query($conn,"SELECT * FROM student WHERE app_id='$app_id'");
$row = $resultsum->fetch_assoc();

$resulteval1=mysqli_query($conn,"SELECT count(*) FROM evaluator WHERE app_id='$app_id'");
$roweval1 = $resulteval1->fetch_assoc();
$resulteval1N=mysqli_query($conn,"SELECT count(*) FROM evaluator WHERE app_id='$app_id' AND flageval1='N'");
$roweval1N = $resulteval1N->fetch_assoc();
if($roweval1N['count(*)']==0)
{
    $flageval1='Y';
}
else if($roweval1['count(*)']==$roweval1N['count(*)'])
{
    $flageval1='N';
}
else
{
    $flageval1='P';
}

$resulteval2=mysqli_query($conn,"SELECT count(*) FROM judge WHERE app_id='$app_id'");
$roweval2 = $resulteval2->fetch_assoc();
$resulteval2N=mysqli_query($conn,"SELECT count(*) FROM judge WHERE app_id='$app_id' AND flageval2='N'");
$roweval2N = $resulteval2N->fetch_assoc();
if($roweval2N['count(*)']==0)
{
    $flageval2='Y';
}
else if($roweval2['count(*)']==$roweval2N['count(*)'])
{
    $flageval2='N';
}
else
{
    $flageval2='P';
}
?>

<div class="panel panel-info">
	<div class="panel-heading" data-toggle="collapse" data-target="#four" style="font-size:150%;"><b>Student form insights</b><span class="btn btn-info pull-right glyphicon glyphicon-chevron-up"></span></div>
	<div  class="panel-body collapse in one" id="four">
        <div class="col-sm-12 form-group">
			<label for="app_id" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Application Number</label>
            <div class="col-sm-10">
                <input id="app_id" name="app_id" type="text" class="form-control" disabled required />
			</div>
		</div>

		<div class="col-sm-4 form-group">
			<label for="flagsec1" class="col-sm-5 control-label" style="color:#337ab7; font-size:14px">General Information (Sec 1)</label>
            <div class="col-sm-3">
                <input id="flagsec1" name="flagsec1" type="text" class="form-control" required />
			</div>
            <div class="scorer col-sm-4" data-qname="flagsec1">
                <i class="btn btn-default" data-eval="Y"><span class="glyphicon glyphicon-ok"></span></i>
                <i class="btn btn-default" data-eval="N"><span class="glyphicon glyphicon-remove"></span></i>
            </div>
		</div>
		
		<div class="col-sm-4 form-group">
			<label for="flagsec2" class="col-sm-5 control-label" style="color:#337ab7; font-size:14px">Institute Details (Sec 2)</label>
            <div class="col-sm-3">
                <input id="flagsec2" name="flagsec2" type="text" class="form-control" required />
			</div>
            <div class="scorer col-sm-4" data-qname="flagsec2">
                <i class="btn btn-default" data-eval="Y"><span class="glyphicon glyphicon-ok"></span></i>
                <i class="btn btn-default" data-eval="N"><span class="glyphicon glyphicon-remove"></span></i>
            </div>
		</div>
		
		<div class="col-sm-4 form-group">
			<label for="flagsec3" class="col-sm-5 control-label" style="color:#337ab7; font-size:14px">Team Information (Sec 3)</label>
            <div class="col-sm-3">
                <input id="flagsec3" name="flagsec3" type="text" class="form-control" required />
			</div>
            <div class="scorer col-sm-4" data-qname="flagsec3">
                <i class="btn btn-default" data-eval="Y"><span class="glyphicon glyphicon-ok"></span></i>
                <i class="btn btn-default" data-eval="N"><span class="glyphicon glyphicon-remove"></span></i>
            </div>
		</div>
		
		<div class="col-sm-4 form-group">
			<label for="flagsec4" class="col-sm-5 control-label" style="color:#337ab7; font-size:14px">Mentor Details (Sec 4)</label>
            <div class="col-sm-3">
                <input id="flagsec4" name="flagsec4" type="text" class="form-control" required />
			</div>
            <div class="scorer col-sm-4" data-qname="flagsec4">
                <i class="btn btn-default" data-eval="Y"><span class="glyphicon glyphicon-ok"></span></i>
                <i class="btn btn-default" data-eval="N"><span class="glyphicon glyphicon-remove"></span></i>
            </div>
		</div>
		
		<div class="col-sm-4 form-group">
			<label for="flagsec5" class="col-sm-5 control-label" style="color:#337ab7; font-size:14px">Document Uploads (Sec 5)</label>
            <div class="col-sm-3">
                <input id="flagsec5" name="flagsec5" type="text" class="form-control" required />
			</div>
            <div class="scorer col-sm-4" data-qname="flagsec5">
                <i class="btn btn-default" data-eval="Y"><span class="glyphicon glyphicon-ok"></span></i>
                <i class="btn btn-default" data-eval="N"><span class="glyphicon glyphicon-remove"></span></i>
            </div>
		</div>
		
		<div class="col-sm-4 form-group">
			<label for="flagsec6" class="col-sm-5 control-label" style="color:#337ab7; font-size:14px">About Project (Sec 6)</label>
            <div class="col-sm-3">
                <input id="flagsec6" name="flagsec6" type="text" class="form-control" required />
			</div>
            <div class="scorer col-sm-4" data-qname="flagsec6">
                <i class="btn btn-default" data-eval="Y"><span class="glyphicon glyphicon-ok"></span></i>
                <i class="btn btn-default" data-eval="N"><span class="glyphicon glyphicon-remove"></span></i>
            </div>
		</div>
		
		<div class="col-sm-6 form-group">
			<label for="app_status" class="col-sm-4 control-label" style="color:#337ab7; font-size:14px">Application Status</label>
            <div class="col-sm-5">
                <input id="app_status" name="app_status" type="text" class="form-control" />
			</div>
            <div class="scorer col-sm-3" data-qname="app_status">
                <i class="btn btn-default" data-eval="Submitted"><span class="glyphicon glyphicon-ok"></span></i>
                <i class="btn btn-default" data-eval=""><span class="glyphicon glyphicon-remove"></span></i>
            </div>
		</div>
		
		<div class="col-sm-3 form-group">
			<label for="flageval1" class="col-sm-4 control-label" style="color:#337ab7; font-size:14px">Evaluated</label>
            <div class="">
                <input id="flageval1" type="text" class="form-control hidden" />
			</div>
            <div class="scorer-disabled col-sm-8" data-qname="flageval1">
                <i class="btn btn-default" data-eval="N"><span class="glyphicon glyphicon-remove"></span></i>
                <i class="btn btn-default" data-eval="P"><span class="glyphicon glyphicon-time"></span></i>
                <i class="btn btn-default" data-eval="Y"><span class="glyphicon glyphicon-ok"></span></i>
            </div>
		</div>

        <div class="col-sm-3 form-group">
			<label for="flageval2" class="col-sm-4 control-label" style="color:#337ab7; font-size:14px">Scored</label>
            <div class="">
                <input id="flageval2" type="text" class="form-control hidden" />
			</div>
            <div class="scorer-disabled col-sm-8" data-qname="flageval2">
                <i class="btn btn-default" data-eval="N"><span class="glyphicon glyphicon-remove"></span></i>
                <i class="btn btn-default" data-eval="P"><span class="glyphicon glyphicon-time"></span></i>
                <i class="btn btn-default" data-eval="Y"><span class="glyphicon glyphicon-ok"></span></i>
            </div>
		</div>

	</div>
</div>

<script>
    $('#flagsec1,#flagsec2,#flagsec3,#flagsec4,#flagsec5,#flagsec6,#app_status,#flageval1,#flageval2').on('keyup',function(e){
        var score=$(this).val().toUpperCase();
        $(this).closest('div.form-group').find('.scorer i').each(function(){
            if($(this).data('eval').toUpperCase()==score)
            {
                $(this).click();
            }
        });

        $(this).closest('div.form-group').find('.scorer-disabled i').each(function(){
            if($(this).data('eval').toUpperCase()==score)
            {
                $(this).addClass("btn-warning");
                $(this).removeClass("btn-default");
                $(this).siblings().removeClass("btn-warning");
                $(this).siblings().addClass("btn-default");
            }
        });
    });

    $('.scorer i').on('click',function(){
        var score=($(this).data('eval'));
        $(this).addClass("btn-danger");
        $(this).removeClass("btn-default");
        $(this).siblings().removeClass("btn-danger");
        $(this).siblings().addClass("btn-default");
        var str=$(this).parent().data('qname');
        $('#'+str).val(score);
    });

    $("#app_id").val("<?php echo addslashes($app_id);?>");
    $("#flagsec1").val("<?php echo addslashes($row['flagsec1']);?>");
    $('#flagsec1').trigger('keyup');
    $("#flagsec2").val("<?php echo addslashes($row['flagsec2']);?>");
    $('#flagsec2').trigger('keyup');
    $("#flagsec3").val("<?php echo addslashes($row['flagsec3']);?>");
    $('#flagsec3').trigger('keyup');
    $("#flagsec4").val("<?php echo addslashes($row['flagsec4']);?>");
    $('#flagsec4').trigger('keyup');
    $("#flagsec5").val("<?php echo addslashes($row['flagsec5']);?>");
    $('#flagsec5').trigger('keyup');
    $("#flagsec6").val("<?php echo addslashes($row['flagsec6']);?>");
    $('#flagsec6').trigger('keyup');
    $("#app_status").val("<?php echo addslashes($row['app_status']);?>");
    $('#app_status').trigger('keyup');
    $("#flageval1").val("<?php echo addslashes($flageval1);?>");
    $('#flageval1').trigger('keyup');
    $("#flageval2").val("<?php echo addslashes($flageval2);?>");
    $('#flageval2').trigger('keyup');
    
</script>
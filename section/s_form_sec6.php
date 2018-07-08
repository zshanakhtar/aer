
<div class="panel panel-info">
	<div class="panel-heading" data-toggle="collapse" data-target="#six" style="font-size:150%;"><b>About Your Project</b><span class="btn btn-info pull-right glyphicon glyphicon-chevron-up"></span></div>
	<div  class="panel-body collapse in one" id="six">
		<!-- <div class="row form-group">
			<label for="eco" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Eco?</label>
			<div class="col-sm-10">
				<select required class="form-control qswitch" onchange="" id="eco" name="eco">
					<option value="">--Select--</option>
					<option value="N">Yes</option>
					<option value="Y">No</option>
				</select>
			</div>
		</div>
		<div class="row form-group eco_det hidden">
			<label for="eco_det" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Eco Details</label>
			<div class="col-sm-10">
				<textarea class="form-control" rows="5" id="eco_det" name="eco_det"><?php //echo htmlspecialchars($row['eco_det']);?></textarea>
			</div>
		</div> -->
		<form role="form" action="javascript:void(0)" onsubmit="return false;" class="form-horizontal ajaxsubmitform" id="sec6" >
		<div class="row form-group">
			<label for="Q1" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">1.	Explain about the Problem/Development Challenge/Market Need/Opportunity Identified and how big is the problem. (maximum 50-100 words)</label>
			<div class="col-sm-10">
				<textarea class="form-control" rows="5" id="Q1" name="Q1" required><?php echo htmlspecialchars($row['Q1']);?></textarea>
			</div>
		</div>
		<div class="row form-group">
			<label for="Q2" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">2.	Explain about Innovation of Solution that you are proposing to address the Problem/Development Challenge/Market Need/Opportunity Identified (maximum 50-100 words)</label>
			<div class="col-sm-10">
				<textarea class="form-control" rows="5" id="Q2" name="Q2" required><?php echo htmlspecialchars($row['Q2']);?></textarea>
			</div>
		</div>
		<div class="row form-group">
			<label for="Q3" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">3.	Explain the Technology and Intellectual property right component involved in your proposed innovative solutions (maximum 50-100 words)</label>
			<div class="col-sm-10">
				<textarea class="form-control" rows="5" id="Q3" name="Q3" required><?php echo htmlspecialchars($row['Q3']);?></textarea>
			</div>
		</div>
		<div class="row form-group">
			<label for="Q4" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">4.	Explain about size of market or target beneficiary group and level of acceptance/adoption of your innovation (maximum 50-100 words)</label>
			<div class="col-sm-10">
				<textarea class="form-control" rows="5" id="Q4" name="Q4" required><?php echo htmlspecialchars($row['Q4']);?></textarea>
			</div>
		</div>
		<div class="row form-group">
			<label for="Q5" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">5.	Quantify kind of immediate benefit (Output), long term benefit (Outcome and impact it will create once will be adopted by them (maximum 50-100 words)</label>
			<div class="col-sm-10">
				<textarea class="form-control" rows="5" id="Q5" name="Q5" required><?php echo htmlspecialchars($row['Q5']);?></textarea>
			</div>
		</div>
		<div class="row form-group">
			<label for="Q6" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">6.	Highlight the delivery model on how you will implement or take the innovation to market or target beneficiary for quick adoption. (maximum 50-100 words)</label>
			<div class="col-sm-10">
				<textarea class="form-control" rows="5" id="Q6" name="Q6" required><?php echo htmlspecialchars($row['Q6']);?></textarea>
			</div>
		</div>
		<div class="row form-group">
			<label for="Q7" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">7.	Do you have developed prototype already? (Yes/ No)</label>
			<div class="col-sm-10">
				<select required class="form-control" onchange="" id="Q7" name="Q7">
					<option value="">--Select--</option>
					<option value="Yes">Yes</option>
					<option value="No">No</option>
				</select>
			</div>
		</div>
		<div class="row form-group">
			<label for="Q8" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">8.	Does your innovation have Intellectual Property rights? (Yes/No)</label>
			<div class="col-sm-10">
				<select required class="form-control" onchange="" id="Q8" name="Q8">
					<option value="">--Select--</option>
					<option value="Yes">Yes</option>
					<option value="No">No</option>
				</select>
			</div>
		</div>
		<div class="row form-group">
			<label for="Q9" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">9.	Do you have field tested the applicability of innovation/prototype? (Yes/No)</label>
			<div class="col-sm-10">
				<select required class="form-control" onchange="" id="Q9" name="Q9">
					<option value="">--Select--</option>
					<option value="Yes">Yes</option>
					<option value="No">No</option>
				</select>
			</div>
		</div>
		<div class="row form-group">
			<label for="Q10" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">10.	Do you feel that, your innovation have potential to take in form of business/start-up? (Yes/No)</label>
			<div class="col-sm-10">
				<select required class="form-control" onchange="" id="Q10" name="Q10">
					<option value="">--Select--</option>
					<option value="Yes">Yes</option>
					<option value="No">No</option>
				</select>
			</div>
		</div>
		<div class="row form-group">
				<input id="flagsec6" type="text" value="N" class="form-control hidden" />
		</div>
		<div class="row form-group">
			<div class="col-sm-offset-5 col-sm-2">
			     <button type="submit" class="btn btn-warning col-sm-6 col-sm-offset-3">
					<span class="glyphicon glyphicon-floppy-disk"></span>
									
										<span>Save</span>
				 </button>
			</div>
		</div>
		</form>
		<form role="form" action="javascript:void(0)" onsubmit="return false;" class="form-horizontal" id="sec5" enctype="multipart/form-data">
		<div class="row form-group">
			<label for="uploadPDF" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">File Upload</label>
			<label id="Filename" class="col-sm-8 btn btn-default">
				<input id="uploadPDF" type="file" name="myPDF" accept="application/pdf"/>&nbsp;
			</label>
			<div class="col-sm-2">
				<input type="button" class="btn btn-default" value="Preview" data-toggle="modal" data-target="#preview_1" onclick="PreviewImage();" />
				<input type="submit" class="btn btn-default" value="Upload" />
			</div>
			<div class="modal fade" id="preview_1" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title" style="color:#000099; font-size:14px">File Preview</h4>
						</div>
						<div class="modal-body" style="color:#000099; font-size:14px">
							<iframe id="viewer" frameborder="0" scrolling="no" class="col-xs-12" height="600"></iframe>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			<script type="text/javascript">
			function PreviewImage() {
				pdffile=document.getElementById("uploadPDF").files[0];
				pdffile_url=URL.createObjectURL(pdffile);
				$('#viewer').attr('src',pdffile_url);
				}
			</script>
		</form>
	</div>
</div>

<script>
	$("#sec5").on('submit',function(e) {
	var formid=$(this).attr('id');//get this form's id
    e.preventDefault(); // avoid to execute the actual submit of the form.
	setTimeout(function(e){ //wait 50ms to allow validator to execute
    var url = "request/"+formid+".php"; // the script where you handle the form input.
	var formData = new FormData($("#sec5")[0]);
$.ajax({
url: url,
type: 'POST',
data: formData,
datatype: 'json',
success: function(data) {
alert(data);
},
error: function(xhr, status, error) {
alert(xhr.responseText);
},
cache: false,
contentType: false,
processData: false
});
	}, 50);
});
</script>
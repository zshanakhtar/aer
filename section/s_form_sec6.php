<form role="form" action="javascript:void(0)" onsubmit="return false;" class="form-horizontal ajaxsubmitform" id="sec6" >
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
		<div class="row form-group">
			<label for="abstract" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Abstract</label>
			<div class="col-sm-10">
				<textarea class="form-control" rows="5" id="abstract" name="abstract" required><?php echo htmlspecialchars($row['abstract']);?></textarea>
			</div>
		</div>
		<div class="row form-group">
			<label for="Q1" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Innovation</label>
			<div class="col-sm-10">
				<textarea class="form-control" rows="5" id="Q1" name="Q1" required><?php echo htmlspecialchars($row['Q1']);?></textarea>
			</div>
		</div>
		<div class="row form-group">
			<label for="Q2" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Implement-ability</label>
			<div class="col-sm-10">
				<textarea class="form-control" rows="5" id="Q2" name="Q2" required><?php echo htmlspecialchars($row['Q2']);?></textarea>
			</div>
		</div>
		<div class="row form-group">
			<label for="Q3" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Cost benefit</label>
			<div class="col-sm-10">
				<textarea class="form-control" rows="5" id="Q3" name="Q3" required><?php echo htmlspecialchars($row['Q3']);?></textarea>
			</div>
		</div>
		<div class="row form-group">
			<label for="Q4" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Eco friendly</label>
			<div class="col-sm-10">
				<textarea class="form-control" rows="5" id="Q4" name="Q4" required><?php echo htmlspecialchars($row['Q4']);?></textarea>
			</div>
		</div>
		<div class="row form-group">
			<label for="Q5" class="col-sm-2 control-label" style="color:#337ab7; font-size:14px">Social impact</label>
			<div class="col-sm-10">
				<textarea class="form-control" rows="5" id="Q5" name="Q5" required><?php echo htmlspecialchars($row['Q5']);?></textarea>
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
	</div>
</div>
</form>
<script>
	
</script>
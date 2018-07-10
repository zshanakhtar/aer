
<div class="panel panel-info">
	<div class="panel-heading" data-toggle="collapse" data-target="#three" style="font-size:150%;"><b>Team Information</b><button class="btn btn-info pull-right"><span class="glyphicon glyphicon-chevron-up"></span></button></div>
	<div  class="panel-body collapse in one" id="three">
		
		<div class="row form-group">
			<div class="col-sm-12" style="overflow:auto;">
			<div><center><p><b style="color:#FA8072;">Click on Save button for every entry</b></p></center></div>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th class="hidden">Sr.No</th>
						<th>Name of Student</th>
						<th>Age</th>
						<th>Gender</th>
						<th>Father's Name</th>
						<th>Stream</th>
						<th>Course Year</th>
						<th>Mobile No.</th>
						<th>Email Id</th>
						<th>Role (TL/TM)</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$result=mysqli_query($conn,"SELECT mem_id,member_name,member_age,gender,father_name,stream,year,team_mobile,member_email,roll FROM teammember WHERE app_id='$app_id' ORDER BY mem_id ASC");
					$count=1;
					while($row = $result->fetch_assoc()){
					?>
					<tr>
						<td class="hidden"><p class="mem_serial"><?php $count=$row['mem_id'];echo $count; ?></p></td>
						<td><input type="text" class="form-control" value="<?php echo ($row['member_name']);?>" /></td>
						<td><input type="text" class="form-control" value="<?php echo ($row['member_age']);?>" /></td>
						<td>
						<select required class="form-control">
							<option value="" <?php if($row["gender"]==""){echo "selected";}?> >--Select--</option>
							<option value="Male" <?php if($row["gender"]=="Male"){echo "selected";}?> >Male</option>
							<option value="Female" <?php if($row["gender"]=="Female"){echo "selected";}?> >Female</option>
						</select>
						</td>
						<td><input type="text" class="form-control" value="<?php echo ($row['father_name']);?>" /></td>
						<td>
						<select required class="form-control">
							<option value="" <?php if($row["stream"]==""){echo "selected";}?> >--Select--</option>
							<option value="CSE" <?php if($row["stream"]=="CSE"){echo "selected";}?> >CSE and Allied Branches</option>
							<option value="CIVIL" <?php if($row["stream"]=="CIVIL"){echo "selected";}?> >Civil and Allied Branches</option>
							<option value="ECE" <?php if($row["stream"]=="ECE"){echo "selected";}?> >ECE and Allied Branches</option>
						</select>
						</td>
						<td><input type="text" class="form-control" value="<?php echo ($row['year']);?>" /></td>
						<td><input type="text" class="form-control" value="<?php echo ($row['team_mobile']);?>" /></td>
						<td><input type="text" class="form-control" value="<?php echo ($row['member_email']);?>" /></td>
						<td><input type="text" class="form-control" value="<?php echo ($row['roll']);?>" disabled /></td>
						<td>
							<center style="display:inline-flex;">
										<button type="button" onclick="submitmem(this,'update')" class="btn btn-xs btn-info">
											<span class="glyphicon glyphicon-edit"></span>
											<br>
											<span>Update</span>
										</button>
										&nbsp;
										<button type="button" onclick="submitmem(this,'del')" name="submitbtn" value="del" class="btn btn-xs btn-danger">
											<span class="glyphicon glyphicon-trash"></span>
											<br>
											<span>Remove</span>
										</button>
							</center>		
						</td>
					</tr>
					<?php
					}
					?>
					<tr class="empty-member hidden">
							<td class="hidden"><p class="mem_serial"><?php echo ($count+1); ?></p></td>
							<td><input type="text" class="form-control" /></td>
							<td><input type="text" class="form-control" /></td>
							<td>
							<select required class="form-control">
							<option value=""  >--Select--</option>
							<option value="Male"  >Male</option>
							<option value="Female" >Female</option>
						</select>
							</td>
							<td><input type="text" class="form-control" /></td>
							<td>
							<!-- <input type="text" class="form-control" /> -->
							<select required class="form-control">
							<option value=""  >--Select--</option>
							<option value="CSE"  >CSE and Allied Branches</option>
							<option value="CIVIL" >Civil and Allied Branches</option>
							<option value="ECE" >ECE and Allied Branches</option>
						    </select>
							</td>
							<td><input type="text" class="form-control" /></td>
							<td><input type="text" class="form-control" /></td>
							<td><input type="text" class="form-control" /></td>
							<td><input type="text" class="form-control" value="Team Member" disabled /></td>
							<td>
								<center style="">
									<button type="button" onclick="submitmem(this,'save')" name="submitbtn" value="save" class="btn btn-xs btn-warning">
										<span class="glyphicon glyphicon-floppy-disk"></span>
										<br>
										<span>Save</span>
									</button>
								</center>	
							</td>
					</tr>
					<tr>
							<td colspan="10">
								
									<button type="button" onclick="addmem(this)" name="" value="" class="btn btn-xs col-xs-12 btn-info" >
										<span class="glyphicon glyphicon-plus"></span>
										<span>Add New</span>
									</button>
								
							</td>
					</tr>
				</tbody>
			</table>
			</div>
		</div>
		
		<form data-toggle="validator" role="form"  action="javascript:void(0)" onsubmit="return false;" class="form-horizontal ajaxsubmitform" id="sec3" >
		<input type="text" id="mem_id" name="mem_id" class="form-control hidden" required />
		<input type="text" id="member_name" name="member_name" class="form-control hidden" required />
		<input type="text" id="member_age" name="member_age" class="form-control hidden" required />
		<input type="text" id="gender" name="gender" class="form-control hidden" required />
		<input type="text" id="father_name" name="father_name" class="form-control hidden" required />
		<input type="text" id="member_stream" name="member_stream" class="form-control hidden" required />
		<input type="text" id="year" name="year" class="form-control hidden" required />
		<input type="text" id="team_mobile" name="team_mobile" pattern='[6-9]{1}[0-9]{9}' class="form-control hidden" required />
		<input type="email" id="member_email" name="member_email" class="form-control hidden" required />
		<input type="text" id="roll" name="roll" class="form-control hidden" required />
		<input type="text" id="member_action" name="member_action" class="form-control hidden" value="" />
		</form>
	</div>
</div>

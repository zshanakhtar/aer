<form data-toggle="validator" role="form" method="post" action="request/registerjudge.php">
  <div class="form-group col-sm-12">
    <label class="col-sm-2 control-label" style="color:#000099; font-size:14px">Role</label>
	<div class="col-sm-10">
                  <input type="text" class="form-control" value="Judge" disabled>
                </div>
  </div>
  <div class="form-group col-sm-12">
    <label for="name" class="col-sm-2 control-label" style="color:#000099; font-size:14px">Name</label>
	<div class="col-sm-10">
                  <input id="name" name="name" type="text" class="form-control" placeholder="Name of Team Leader" required>
                </div>
  </div>
  
  <div class="form-group col-sm-12">
    <label for="email" class="col-sm-2 control-label" style="color:#000099; font-size:14px">Email</label>
	<div class="col-sm-10">
    <input type="email" class="form-control" id="email" placeholder="Email" data-error="Email Is Invalid" onkeyup="checkemail();" required>
    <div class="help-block with-errors"></div>
	</div>
  </div>
  <div class="form-group col-sm-12">
    <label for="password" class="col-sm-2 control-label" style="color:#000099; font-size:14px">Password</label>
      <div class="form-group col-sm-10">
        <input type="password" data-minlength="6" class="form-control" id="password" name="password" placeholder="Password" required>
        <div class="help-block">Minimum of 6 characters</div>
      </div>
	</div>
    <div class="form-group col-sm-12">
        <label for="c_password" class="col-sm-2 control-label" style="color:#000099; font-size:14px"> Confirm Password</label>
        <div class="form-group col-sm-10">
		<input type="password" class="form-control" id="passwordConfirm" data-match="#password" data-match-error="Passwords don't match" placeholder="Confirm" required>
        <div class="help-block with-errors"></div>
		</div>
    </div>
	<div class="form-group">
                <div class="col-sm-2"> </div>
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary btn-sm"> Register</button>
                  <button type="button" class="btn btn-default btn-sm" data-dismiss="modal"> Cancel</button>
                </div>
    </div>
  
</form>

<script>
$('form').validator();
</script>
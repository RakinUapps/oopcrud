<?php 
include('header.php');
?>
	<div class="content">
		<div class="container ctn">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6 main">
					<form class="signleTranscation">
						<div class="control">
							<div class="row">
								<div class="col-md-6">
									<a href="#" class="btn btn-secondary">EDIT</a>
									<a href="#" class="btn btn-secondary">Refresh</a>
								</div>
								<div class="col-md-6">
									<p class="nick text-right">Create User</p>
								</div>
							</div>
						</div>
						<table class="table table-responsive" border="0">
							<tr>
								<td>User Name</td>
								<td>:</td>
								<td><input type="text" class="form-control" name="userName" required></td>
							</tr>
							<tr>
								<td>Email</td>
								<td>:</td>
								<td><input type="email" class="form-control" name="email" required></td>
							</tr>
							<tr>
								<td>Branch</td>
								<td>:</td>
								<td>
									<select name="branch" class="form-control" required>
										  <option value="Chittagong" selected>Chittagong</option>
										  <option value="Dhaka">Dhaka</option>
										  <option value="Comilla">Comilla</option>
										</select>
								</td>
							</tr>
							<tr>
								<td>User Type</td>
								<td>:</td>
								<td>
									<select name="userType" class="form-control" required>
										  <option value="User" selected>User</option>
										  <option value="Admin">Admin</option>
										</select>
								</td>
							</tr>
							<tr>
								<td>Password</td>
								<td>:</td>
								<td><input type="password" class="form-control" name="password" required></td>
							</tr>
							<tr>
								<td>Confirm Password</td>
								<td>:</td>
								<td><input type="password" class="form-control" name="confirmPass" required></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td><input type="submit" class="btn btn-primary" name="submit" value="Save"></td>
							</tr>
						</table>
					</form>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
	</div>
 <?php 
include('footer.php');
?> 
 
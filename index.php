<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
</head>
<body>
	<div class="row" style="text-align: center;font-size: 40px">
		<div class=" col p-3 mb-2 bg-primary text-white">
		Course Registration System</div>
	</div>
		<div class="row">
				<div class="col-md-3">
					<?php
					echo 'User name: '. $_POST['userName']. ' -- Password: '. $_POST['password'];

					?>
				</div>
				<div class="col-md-6">
		<form method="post" action="validate.php">
			  <div class="form-group">
			    <label for="exampleInputEmail1">User Name</label>
			    <input type="text" name="userName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter User Name">
			    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  <div class="form-group form-check">
			    <input type="checkbox" class="form-check-input" id="exampleCheck1">
			    <label class="form-check-label" for="exampleCheck1">Check me out</label>
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
				</div>
				<div class="col-md-3">
					col3
				</div>
		</div>
</body>
</html>
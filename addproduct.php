<!DOCTYPE html>
<html>
<head>
	<title>Online CRS</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
</head>
<body>
	<div class="row" style="text-align: center; font-size: 30px">
		<div class="col p-3 mb-2 bg-primary text-white""> Online Course Registration System 
		</div>
	</div>
	<div class="row" style="text-align: center; font-size: 30px">
		<div class="col-md-3">
			Col 1
			
		</div>

		<div class="col-md-6">
			<form method="post" action="addMgr.php">
			  <div class="form-group">
			    <label for="formGroupExampleInput">Name</label>
			    <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="product Name">
			  </div>
			  <div class="form-group">
			    <label for="formGroupExampleInput2">id</label>
			    <input type="text" name="id" class="form-control" id="formGroupExampleInput2" placeholder="product id">
			  </div>
			  <div class="form-group">
			    <label for="formGroupExampleInput3">type</label>
			    <input type="text" name="type" class="form-control" id="formGroupExampleInput3" placeholder="product type">
			  </div>
			  <div class="form-group">
			    <label for="formGroupExampleInput">numberofpices</label>
			    <input type="text" name="numberofpices" class="form-control" id="formGroupExampleInput" placeholder="numberofpices">
			  </div>
			  <div class="form-group">
			    <label for="formGroupExampleInput">price</label>
			    <input type="text" name="price" class="form-control" id="formGroupExampleInput" placeholder="product price">
			  </div>
			  <div class="form-group">
			    <label for="formGroupExampleInput">color</label>
			    <input type="text" name="color" class="form-control" id="formGroupExampleInput" placeholder="product color">
			  </div>
			  <button type="submit" class="btn btn-primary">Add</button>
			</form>
			
		</div>

		<div class="col-md-3">
			Col 3
		</div>
	</div>
</body>
</html>
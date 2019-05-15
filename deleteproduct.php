<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
</head>
<body>
	<div class="row" style="text-align: center; font-size: 30px">
		<div class="col-md-3">
			Col 1
			
		</div>

		<div class="col-md-6">
			<form method="post" action="DeleteMgr.php">
			  <div class="form-group">
			    <label for="formGroupExampleInput2">id</label>
			    <input type="text" name="id" class="form-control" id="formGroupExampleInput2" placeholder="product id">
			  </div>
			  <button type="submit" class="btn btn-primary">delete</button>
			</form>
			
		</div>

		<div class="col-md-3">
			Col 3
		</div>
	</div>


</body>
</html>
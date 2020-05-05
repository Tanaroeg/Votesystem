<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vote Add</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.3.1.css" rel="stylesheet">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap-4.3.1.js"></script>
  </head>
  <body>
	  <div class="container mt-3 col-md-6">
		<div class="card">
			<div class="card-header">
				เพิ่มหัวข้อ
			</div> 
			<div class="card-body">
			<form method="post" action="save_topic.php">
			  <div class="form-group">
				<label for="Topic_Name">หัวข้อ</label>
				<input type="text" class="form-control" id="Topic_Name" name="Topic_Name">
			  </div>
			  <div class="form-group">
				<label for="Topic_Create">ผู้สร้าง</label>
				<input type="text" class="form-control" id="Topic_Create" name="Topic_Create">
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
			</div>
		</div>
	  </div>
  </body>
</html>
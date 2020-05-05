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
				เพิ่ม Vote
			</div> 
			<div class="card-body">
			<form method="post" action="save_vote.php">
			  <div class="form-group">
				<label for="Topic_ID">Topic ID</label>
				<input type="text" class="form-control" id="Topic_ID" name="Topic_ID" value="<?php echo $_GET["id"]?>">
			  </div>
			  <div class="form-group">
				<label for="Sub_Name">ข้อความ</label>
				<input type="text" class="form-control" id="Sub_Name" name="Sub_Name">
			  </div>
			  <div class="form-group">
				<label for="Sub_Desc">รายละเอียด</label>
				<input type="text" class="form-control" id="Sub_Desc" name="Sub_Desc">
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
			</div>
		</div>
	  </div>
  </body>
</html>
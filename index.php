<?php
	require("dbconnect.php");
	$sql = "SELECT * FROM topic";
    $query = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vote Home</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.3.1.css" rel="stylesheet">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap-4.3.1.js"></script>
  </head>
  <body>
	  <div class="container mt-3 col-md-8">
		  <a href="addtopic.php" class="btn btn-success">เพิ่มหัวข้อ</a>
	  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">หัวข้อ</th>
      <th scope="col">ผู้สร้าง</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
	<?php
		while($row = $query->fetch_assoc()){
	?>
    <tr>
      <th scope="row"><?php echo $row["Topic_ID"];?></th>
      <td><?php echo $row["Topic_Name"];?></td>
      <td><?php echo $row["Topic_Create"];?></td>
      <td><a class="btn btn-outline-success" href="topic.php?id=<?php echo $row["Topic_ID"];?>">Vote</a></td>
    </tr>
    <?php
		}
	?>
  </tbody>
</table>
	  </div>
	
  </body>
</html>
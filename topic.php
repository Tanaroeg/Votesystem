<?php
	require("dbconnect.php");
	$sql = "SELECT * FROM topic WHERE Topic_ID = '".$_GET["id"]."'";
    $query = $conn->query($sql);
	$row = $query->fetch_assoc();
	$a = 1;
	$sql2 = "SELECT * FROM sub_topic WHERE Topic_ID = '".$_GET["id"]."'";
    $query2 = $conn->query($sql2);
	if($_GET["id"] == null || $_GET["id"] == 0){
		header("redirect:index.php");
	}
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
	  <div class="container mt-3 col-md-10">
		<div class="card">
			<div class="card-header">
			Vote
			</div>  
			<div class="card-body">
			ID : <?php echo $row["Topic_ID"];?><br>
			หัวข้อ : <?php echo $row["Topic_Name"];?><br>
			ผู้สร้าง : <?php echo $row["Topic_Create"];?><br>
			<a href="index.php"> < กลับ</a>
			</div>
		</div>
		<a href="add_vote.php?id=<?php echo $_GET["id"];?>" class="btn btn-success my-3">+ Vote</a>
	  <table class="table">
		  <thead>
			<tr>
			  <th scope="col">#</th>
			  <th scope="col">ข้อความ</th>
				<th scope="col">รายละเอียด</th>
			  <th scope="col">จำนวนผู้ชอบ</th>
			  <th scope="col">วันที่สร้าง</th>
			  <th scope="col"></th>
			</tr>
		  </thead>
		  <tbody>
			  <?php
				while($row2 = $query2->fetch_assoc()){
			?>
			<tr>
			  <th scope="row"><?php echo $a;?></th>
			  <td><?php echo $row2["Sub_Name"];?></td>
			  <td><?php echo $row2["Sub_Desc"];?></td>
			  <td><?php echo $row2["Sub_Like"];?></td>
			  <td><?php echo $row2["Sub_Date"];?></td>
			  <td><a class="btn btn-outline-primary" href="like.php?subid=<?php echo $row2["Sub_ID"];?>&id=<?php echo $row2["Topic_ID"];?>">ชอบ</a></td>
			</tr>
			<?php 
					$a++;
				}
			?>
		  </tbody>
		</table>
	  </div>
	
  </body>
</html>
<?php
    require("dbconnect.php");
	$getid = $_GET["id"];
	$sql = "UPDATE sub_topic SET Sub_Like=Sub_Like+1 WHERE Sub_ID = '".$_GET["subid"]."'";
	if($conn -> query($sql) === TRUE){
		header("location:topic.php?id=$getid");
	}else{
		header("location:topic.php?id=$getid&status=error");
	}
?>
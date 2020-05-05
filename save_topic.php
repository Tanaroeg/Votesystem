<?php
    require("dbconnect.php");
    $sql = "INSERT INTO topic(Topic_Name, Topic_Create) VALUES ('".$_POST["Topic_Name"]."', '".$_POST["Topic_Create"]."')";
	if($conn -> query($sql) === TRUE){
		header("location:addtopic.php");
	}else{
		header("location:addtopic.php?status=error");
	}
?>
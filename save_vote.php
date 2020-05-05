<?php
    require("dbconnect.php");
	$topicid = $_POST["Topic_ID"];
    $sql = "INSERT INTO sub_topic(Sub_Name, Topic_ID, Sub_Desc) VALUES ('".$_POST["Sub_Name"]."','".$_POST["Topic_ID"]."','".$_POST["Sub_Desc"]."')";
	if($conn -> query($sql) === TRUE){
		header("location:topic.php?id=$topicid");
	}else{
		header("location:topic.php?id=$topicid&status=error");
	}
?>
<?php
    $db_hostname = "localhost";
    $db_username = "";//database username
    $db_password = "";//database password
    $db_name = "votepg";
	date_default_timezone_set("Asia/Bangkok");
    $conn = new mysqli($db_hostname,$db_username,$db_password,$db_name);
    $conn->set_charset("utf8");
	if($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
?>

<?php 
	$con = mysqli_connect("localhost", "root", "", "mytechlearn");
	$username = $_POST['username'];
	$sql = "SELECT * FROM simple_ajax WHERE username = '$username'";
	$res = mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($res);
	echo $row['phone'];
?>

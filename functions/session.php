<?php
include("connect.php");
session_start();

$uid = $_SESSION["id"]; 					//This variable has the user id
$email = $_SESSION["email"];
 
   $sql = "SELECT name, fullname, contact, role FROM userlogin WHERE id = '$uid'";
        $result = mysqli_query($dbcon,$sql);
        $row = mysqli_fetch_array($result); 
		$name = $row[0];
		$fullname = $row[1];
	    $phone = $row[2];
	    $role = $row[3];
		

?>

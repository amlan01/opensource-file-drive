<?php
include("functions/connect.php");

if($_POST['user'] && $_POST['pass'])
{
	  
    $user=$_POST['user'];
    $pass=md5($_POST['pass']);
    
    $sql="INSERT INTO userlogin (`email`, `password`) VALUES ('$user', '$pass')";
    $res=mysqli_query($dbcon,$sql)or die("unable to run query".mysqli_error());
           
      if(mysqli_affected_rows($dbcon)>0)
      {
        echo "1"; 
      }

      else
      {
        echo "2";
      }

}
?>
<?php
include("functions/connect.php");

if($_POST['user'] && $_POST['pass'])
{
	  
    $user=$_POST['user'];
    $pass=md5($_POST['pass']);
    
    $sql="SELECT id, email FROM userlogin WHERE email='$user' AND password='$pass'";
		$res=mysqli_query($dbcon,$sql)or die("unable to run query".mysqli_error());
    
    $rec=mysqli_fetch_array($res);
           
      if(mysqli_affected_rows($dbcon)>0)
      {
              session_start();
              
              $_SESSION["id"]=$rec[0];
              $_SESSION["email"]=$rec[1];
              echo "1"; 
      }

      else
      {

        echo "2";
      }

}
?>
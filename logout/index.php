<?php
session_start();

// remove all session variables
session_unset(); 


if(session_destroy()) // Destroying All Sessions
{
	header("Location: ../index.html"); // Redirecting To Home Page
}
?> 

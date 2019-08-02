<?php
    //defining database,username, password and the database name
	$servername="";
	$myUser = "myUsername";
	$myPass = "myPassword";
	$myDB = "John Paul College";
	$arr = array("Database"=>$myDB, "UID" => $myUser, "PWD" => $myPass);
	$conn = sqlsrv_connect($servername,$arr);
	if($conn=='false')
	{
		echo "Connection error";
	}
	else
	{
		session_start();
	}
?>
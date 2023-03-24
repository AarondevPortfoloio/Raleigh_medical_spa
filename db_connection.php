<?php

function OpenCon()
{
	$dbhost = "localhost";
	$dbuser = "annewaters";
	$dbpass = "ecpi2022";
	$db = "medicaloffice";
	
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);
	
	return $conn;
}

function CloseCon($conn)
{
	$conn -> close();
}

?>

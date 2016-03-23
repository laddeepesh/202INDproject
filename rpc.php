<?php
require_once("clientDB.php.inc");

$request = $_POST['request'];

switch($request)

{
    case "login":
	$username = $_POST['username'];
	$password = $_POST['password'];
	$login = new clientDB("connect.ini");
	$response = $login->validateClient($username,$password);
	if ($response['success']===true)
	{
		$response = "Congrats Login Successful Bless up!<p>";
	}
	else
	{
		$response = "Login Failed Son:".$response['message']."<p>";
	}
	break;
}

?>
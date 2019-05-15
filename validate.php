<?php
$userName = $_POST['userName'];
$password = $_POST['password'];

include_once('dbconnection.php');
$dbConnection = DbConnection::getDbConnection();
if($dbConnection->verifyUser($userName,$password))
	header("Location: admin.php");
else
	header("Location: index.php");


?>
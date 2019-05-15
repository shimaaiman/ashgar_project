<?php
$name = $_POST['name'];
$type = $_POST['type'];
$id = (double) $_POST['id'];
$color = $_POST['color'];
$numberofpices = (double) $_POST['numberofpices'];
$price = (double) $_POST['price'];

include_once('Student.php');

$product = new product();
$product->setName($name);
$product->settype($type);
$product->setid($id);
$product->setcolor($color);
$product->setnumberofpices($numberofpices);
$product->setprice($price);

include_once('dbconnection.php');
$DbConnection = DbConnection:: getDbConnection();
$DbConnection->deleteproduct($product);
header("Location: deleteproduct.php")


?>
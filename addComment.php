<?php
require_once 'connection.php';
require_once 'PDOp.php';

$name = $_POST['Name'];
$email = $_POST['Email'];
$text = $_POST['message'];

$link = new PDOp("mysql:host=$db_host;dbname=$db",$db_user,$db_password);


$statement = $link->prepare("INSERT INTO ".$db_table." 
(`Name`, `Email`, `Text`) VALUES ('$name','$email','$text')");

$statement->execute();

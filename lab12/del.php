<?php
require_once("DbConnection.php");
$obj= new DbConnection();

$msg=$obj->deletetion($_GET['user_id']);
echo $msg;

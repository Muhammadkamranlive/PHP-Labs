<?php
require_once("DbConnection.php");

$DataObject= new DbConnection();

$std->setname($_POST['Username']);
$std->setsalary($_POST['Password']);
$std->setgrade($_POST['Email']);
$data=array();
array($_POST['Username'], $_POST['Password'], $_POST['Email'])
$msg=$std->insertRecord($data);
echo $msg;
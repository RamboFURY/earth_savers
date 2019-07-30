<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once("dbconnect.php");
$dbconnection=new dbconnector;
$dbconnection->connect();
if (isset($_POST['submitbtn'])== 'SUBMIT')
{
$dbconnection->addfunc($_POST['waste'],$_POST['quantity'],$_POST['age'],$_POST['address']);
echo"Form data saved successfully.";
header("Location:quote.php");
sleep(0.5);
}
else
{
  echo "An error occured. Please try again";
}

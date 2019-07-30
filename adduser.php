<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once("dbconnect.php");
$dbconnection=new dbconnector;
$dbconnection->connect();
if (isset($_POST['submitbtn'])== 'SUBMIT') {

    $dbconnection->addentry($_POST['u_name'],$_POST['name'],$_POST['mobile'],$_POST['dob'],$_POST['password'],$_POST['email']);
      echo "You Have Been Registered as a new user. Redirecting......";
      header("Location:dashboard.php");
      sleep(2);

  }
  else
  {
    echo "An error occured. Please try again";
  }

<?php session_start();

// variable declaration
$username = "";
$email    = "";
$errors = array(); 
$_SESSION['success'] = "";

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'aadhar number');


if (isset($_POST['verify_users1'])) {
  $Aadhar number= mysqli_real_escape_string($db, $_POST['Aadhar number']);


  if (empty($Aadhar number)) {
  	array_push($errors, "Aadhar number is required");
  }
  

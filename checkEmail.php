<?php
include "includes/connect.php";
$response = "true";
$Invalid = "false";
function test($data) {
    return $data;
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$email = ""; 
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
      echo test($Invalid);
    }else{
       echo test($response); 
    }
  }
 //echo test($response);

?>
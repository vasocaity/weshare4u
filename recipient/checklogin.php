<?php

$test = "อีเมล หรือ รหัสผ่านของคุณไม่ถูกต้อง";
$response = "true";

function test($data) {
    return $data;
}
include "includes/connect.php";

$email = $_POST["email"];
$password = $_POST["password"];
$result = $pdo->prepare("SELECT uid,fname,lname,email,password FROM user WHERE email = ?");
$result->bindParam(1, $email);
$result->execute();
$row = $result->fetch();

if ($row["password"] == md5($password)) {
    $_SESSION["fname"] = $row["fname"];
    $_SESSION["lname"] = $row["lname"];
    $_SESSION["username"] = $row["uid"];
    $_SESSION["status"] = "member";
    // 60 sec * 60 min * 24 hours
    setcookie("username", $row["uid"], time()+60*60*24);
    setcookie("status", "member", time()+60*60*24); 
    echo test($response);
    //echo $_SESSION["username"];
    //header("location: selectstatus.php");
} else {
    // header("location: weshare4u.php?error=1");
    echo test($test);
}
?>
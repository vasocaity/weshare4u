<?php
include "includes/connect.php";
session_start();
$username = $_SESSION["username"];
$phone = $_POST["phone"];
$address = $_POST["addressUser"];
$question_name = $_POST["Question"];
$answer = $_POST["answer"];
$passwordOld = $_POST["Oldpassword"];


$User = $pdo->prepare(" SELECT * FROM user WHERE uid = :uid");
$User->bindParam(':uid', $username);
$User->execute();
$UserQuery = $User->fetch();

$question = $pdo->prepare(" SELECT question_id FROM question WHERE  question_name = :question_name");
$question->bindParam(':question_name', $question_name);
$question->execute();
$questionQuery = $question->fetch();

//echo $newpassword."                               ".md5($passwordconfirm);

if ($_POST["passwordconfirm2"] == null) { //don't update password
    $result = $pdo->prepare("UPDATE user SET phone = ?, address = ?, question_id = ?, answer = ? WHERE uid = ?");
    $result->bindParam(1, $phone);
    $result->bindParam(2, $address);
    $result->bindParam(3, $questionQuery["question_id"]);
    $result->bindParam(4, $answer);
    $result->bindParam(5, $username);
    $result->execute();
    header("Location: profile.php?uid=" . $username);
    exit();    
    //echo "string";
}else{ //update password
    $passwordconfirm = $_POST["passwordconfirm2"];
    $newpassword = md5($passwordconfirm);    
    $result = $pdo->prepare("UPDATE user SET phone = ?, address = ?, question_id = ?, answer = ?, password = ? WHERE uid = ?");
    $result->bindParam(1, $phone);
    $result->bindParam(2, $address);
    $result->bindParam(3, $questionQuery["question_id"]);
    $result->bindParam(4, $answer);
    $result->bindParam(5, $newpassword);
    $result->bindParam(6, $username);
    $result->execute();
    //echo "2";
    header("Location: profile.php?uid=" . $username);
    exit();    
}

?>

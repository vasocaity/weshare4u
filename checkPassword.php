<?php
include "includes/connect.php";
session_start();
$username = $_SESSION["username"];
$passwordOld = $_POST["Oldpassword"];
$checkpass = md5($passwordOld);
$User = $pdo->prepare(" SELECT * FROM user WHERE uid = :uid");
$User->bindParam(':uid', $username);
$User->execute();
$UserQuery = $User->fetch();

$question = $pdo->prepare(" SELECT question_id FROM question WHERE  question_name = :question_name");
$question->bindParam(':question_name', $question_name);
$question->execute();
$questionQuery = $question->fetch();

$notmath = "รหัสผ่านไม่ถูกต้อง";
$correct = "true";
$Invalid = "false";
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
function test($data1) {
    return $data1;
}
//echo $newpassword."                               ".md5($passwordconfirm);
if(($UserQuery["password"] == $checkpass)){
    $cpassword1 = test_input($_POST["passwordconfirm1"]);
    $cpassword2 = test_input($_POST["passwordconfirm2"]);

    if (!(strlen($_POST["passwordconfirm2"]) < '17' &&  strlen($_POST["passwordconfirm2"]) > '7') || (!preg_match("#[0-9]+#",$cpassword2)) || (!preg_match("#[A-Z]+#",$cpassword2)) || (!preg_match("#[a-z]+#",$cpassword2)) || (!preg_match("/[\'^£$%&*(.)}{@#~?><!>,|=_+¬-]/", $cpassword2))) {
        $passwordErr = "Your Password Must Contain At Least 8 Characters!";
        //echo $passwordErr;
        echo test($Invalid);      
    }else{
     
      echo test($correct);  

    }    

}else{
    //header("Location: profile.php?uid=" . $username);
   // exit();
    echo test($notmath);  
}
?>

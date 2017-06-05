<?php
include "../includes/connect.php";
session_start();
if (!isset($_SESSION["username"]))
    header("location: index.php");

$username = $_SESSION["username"];
$uid = $_GET['uid'];
$resultUser = $pdo->prepare("SELECT * FROM user WHERE uid = ?");
$resultUser->bindParam(1, $uid);
$resultUser->execute();

$resultUserQuestion = $pdo->prepare("SELECT * FROM user WHERE uid = ?");
$resultUserQuestion->bindParam(1, $uid);
$resultUserQuestion->execute();
$row2 = $resultUserQuestion->fetch();

$resultQuestion = $pdo->prepare("SELECT * FROM question WHERE question_id = ?");
$resultQuestion->bindParam(1, $row2['question_id']);
$resultQuestion->execute();
$QuestionName = $resultQuestion->fetch();
?>
<html>
    <head>
        <title>Weshare4U | ข้อมูลส่วนตัว</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../layout/styles/main.css" rel="stylesheet" type="text/css" media="all">
        <link href="../layout/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="../layout/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="../layout/css/hover-min.css" rel="stylesheet">
        <link href="../layout/css/style.css" rel="stylesheet">
        <script type="text/javascript" src="../layout/js/jquery-1.9.0.min.js"></script>     
    </head>
    <body>
        <?php
        include 'menuForINeedHelp.php';
        ?>
        <br>
        <style type="text/css">
            .error {
                background-color: #ffbc7c;
            }    
        </style>
        <div>
            <div class="container">
                <div class="panel panel-default">             
                    <div class="panel-heading"><h4>ข้อมูลส่วนตัว</h4></div>
                    <div class="panel-body">
                        <?php while ($row = $resultUser->fetch()) : ?>
                            <label for="inputPassword3" class="col-sm-2 control-label">รหัสประจำตัวประชาชน: </label>
                            <div style="color:#848484;">
                                <?php echo $row['ssn']; ?>
                            </div>                             
                            <hr>
                            <!-- **************************** Name  ******************************* -->

                            <label for="inputPassword3" class="col-sm-2 control-label">ชื่อ: </label>
                            <div style="color:#848484;">
                                <?php echo $row['fname']; ?>
                            </div>                             
                            <hr>
                            <label for="inputPassword3" class="col-sm-2 control-label">สกุล: </label>
                            <div style="color:#848484;">
                                <?php echo $row['lname']; ?>
                            </div>                             
                            <hr>                                                 
                            <!-- **************************** E-mail  ******************************* -->

                            <label class="col-sm-2 control-label">อีเมล: </label>
                            <div style="color:#848484;">                                       
                                <?php echo $row['email']; ?>
                            </div>
                            <hr>
                            <!-- **************************** Phone ******************************* -->

                            <label class="col-sm-2 control-label">เบอร์โทรศัพท์: </label>
                            <div style="color:#848484;">                                       
                                <?php echo $row['phone']; ?>
                            </div>
                            <hr>                                                         
                            <!-- **************************** Address  ******************************* -->            

                            <label class="col-sm-2 control-label">ที่อยู่: </label>
                            <div  style="color:#848484;">            
                                <?php echo $row['address']; ?>                              
                            </div>
                            <hr>                                   
                            <!-- **************************** Question  ******************************* -->
                            <label class="col-sm-2 control-label">คำถามของคุณ: </label>
                            <p style="color:#848484;">   <?php echo $QuestionName['question_name']; ?> 
                            </p>
                            <hr>                    
                            <!-- **************************** Answer  ******************************* -->
                            <label class="col-sm-2 control-label">คำตอบ: </label>
                            <div style="color:#848484;">                                        
                                <?php echo $row['answer']; ?> 
                            </div>               
                        <?php endwhile; ?> </div>                                                                                       
                </div>
                <!-- Button Add -->
                <div class="form-group">
                    <div>
                        <button type="submit" class="btn btn-primary btn-lg" name="submitUpdate" id="submitUpdate">
                            <a href="profile_update.php" style="color: white;">Edit</a></button>
                    </div>
                </div> 
            </div>            

        </div>
    </div>
</div>
<div class="clear"></div><br><br>
<?php
include 'footer.php'
?>
<!-- Scripts -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>
<script>window.jQuery || document.write('<script src="../layout/scripts/jquery-latest.min.js"><\/script>\
<script src="../layout/scripts/jquery-ui.min.js"><\/script>')</script>
<script>jQuery(document).ready(function ($) {
            $('img').removeAttr('width height');
        });</script>
<script src="../layout/scripts/jquery-mobilemenu.min.js"></script>
<script src="../layout/scripts/custom.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="../layout/js/bootstrap.min.js"></script>
</body>
</html>
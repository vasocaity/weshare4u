
<?php
include "../includes/connect.php";
session_start();
  if(!isset($_SESSION["username"]))
          header("location: index.php");
  $username = $_SESSION["username"];
$resultUser = $pdo->prepare("SELECT * FROM user WHERE uid = ?");
$resultUser->bindParam(1, $username);
$resultUser->execute();

$resultUserQuestion = $pdo->prepare("SELECT * FROM user WHERE uid = ?");
$resultUserQuestion->bindParam(1, $username);
$resultUserQuestion->execute();
$row2 = $resultUserQuestion->fetch();

$resultQuestion = $pdo->prepare("SELECT * FROM question WHERE question_id = ?");
$resultQuestion->bindParam(1, $row2['question_id']);
$resultQuestion->execute();
$QuestionName = $resultQuestion->fetch();

?>
<html>
<head>
	<title>Weshare4U | แก้ไขข้อมูลส่วนตัว</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../layout/styles/main.css" rel="stylesheet" type="text/css" media="all">
        <link href="../layout/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="../layout/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="../layout/css/hover-min.css" rel="stylesheet">
        <link href="../layout/css/style.css" rel="stylesheet">
        <script type="text/javascript" src="../layout/js/jquery-1.9.0.min.js"></script>
        <script type="text/javascript" src="../layout/js/profileFunction.js"></script>
</head>
<body>
        <?php
        include 'menu.php';
        ?>
        <br>
<style type="text/css">
.error {
   background-color: #ffbc7c;
}    
</style>
        <div>
            <div class="container">        
                <fieldset>
                    <legend><h3>แก้ไขข้อมูลส่วนตัว: </h3></legend>
                    <div>
                        <form action="update_profile.php" method="post" enctype="multipart/form-data" class="form-horizontal" autocomplete="off" id="FormupdateUser">
                            <?php while ($row = $resultUser->fetch()) : ?>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">รหัสประจำตัวประชาชน: </label>
                                <div class="col-xs-6 col-sm-5">
                            <input  name='ssn' type="text" id="ssn" pattern="[0-9]{13}" maxlength="13" value="<?php echo $row['ssn']; ?>">
                                </div>                             
                            </div>
                             <!-- **************************** Name  ******************************* -->
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">ชื่อ: </label>
                                <div class="col-xs-6 col-sm-5">
                                    <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $row['fname']; ?>" disabled="disabled">
                                </div>                             
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">สกุล: </label>
                                <div class="col-xs-6 col-sm-5">
                                    <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $row['lname']; ?>" disabled="disabled">
                                </div>
                            </div>                           
                             <!-- **************************** E-mail  ******************************* -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label">อีเมล: </label>
                                <div class="col-xs-6 col-sm-5">		      		  				      
                                    <input type="email" id="email" name="email" class="form-control" value="<?php echo $row['email']; ?>" disabled="disabled">
                                </div>
                            </div>
                             <!-- **************************** Phone******************************* -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label">เบอร์โทรศัพท์: </label>
                                <div class="col-xs-6 col-sm-5">                                       
                                    <input type="text" id="phone" name="phone" class="form-control"  placeholder="เบอร์โทรศัพท์" value="<?php echo $row['phone']; ?>" maxlength="10">
                                    <p id="phoneError" style="color: red;"></p>
                                </div>
                            </div>                                                          
                             <!-- **************************** Address  ******************************* -->			   
                            <div class="form-group">
                                <label class="col-sm-2 control-label">ที่อยู่: </label>
                                <div class="col-sm-5">		      
                                    <textarea class="form-control col-sm-8" rows="3" name="addressUser" id="addressUser" placeholder="ที่อยู่"><?php echo $row['address']; ?></textarea>
                                    <p id="AddressError" style="color: red;"></p>                                    
                                </div>
                            </div>                          	     
                            <!-- **************************** Question  ******************************* -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label">คำถามของคุณ: </label>
                                <div class="col-sm-5">		      		  				      
                                    <select name="Question" id="Question" class="form-control">
                                        <option value="<?php echo $QuestionName['question_name']; ?>" id="type2"> <?php echo $QuestionName['question_name']; ?></option> 
                                        <option value="คุณเกิดวันอะไร">คุณเกิดวันอะไร</option>                
                                        <option value="เพื่อนที่คุณสนิทมากที่สุดชื่ออะไร" >เพื่อนที่คุณสนิทมากที่สุดชื่ออะไร</option>
                                        <option value="สัตว์เลี้ยงตัวแรกของคุณชื่อว่าอะไร">สัตว์เลี้ยงตัวแรกของคุณชื่อว่าอะไร</option>
                                        <option value="อาชีพในฝันของคุณคือ">อาชีพในฝันของคุณคือ</option>
                                        <option value="คุณชอบสีอะไร">คุณชอบสีอะไร</option>        
                                    </select>
                                    <p id="QuestionError" style="color: red;"></p> 
                                </div>
                            </div>

                            <script>
                            var typei = "<?php echo $QuestionName['question_name']; ?>"
                            $(document).ready(function () {
                            function getTypeItem(typei){
                                if ($('#Question').val() == typei && $('#Question :selected').val()) {
                                    $('#type2').hide();
                                }
                            }
                            getTypeItem(typei); //Call function getTypeItem
                            });
                            </script>                            
                            <!-- **************************** Answer  ******************************* -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label">คำตอบ: </label>
                                <div class="col-sm-5">		      		  				      
                                    <textarea class="form-control col-sm-8" rows="3" name="answer" id="answer" placeholder="คำตอบของคุณ"><?php echo $row['answer']; ?></textarea>
                                    <p id="answerError" style="color: red;"></p>     
                                </div>
                            </div>
                            <?php endwhile; ?>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">รหัสผ่าน: </label>
                                    <div class="col-sm-10">
                                        <a href="#button" id="changPassword">แก้ไขรหัสผ่าน</a>
                                    </div>

                                </div>
                            <div id="wantToChange">
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">รหัสผ่านเดิม: </label>
                                <div class="col-xs-6 col-sm-5">
                                    <input type="password" class="form-control" id="Oldpassword" name="Oldpassword" placeholder="ความยาวตั้งแต่ 8 ถึง 16 ตัว">
                                </div>                             
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">รหัสผ่านใหม่: </label>
                                <div class="col-xs-6 col-sm-5">
                                    <input type="password" class="form-control" id="passwordconfirm1" name="passwordconfirm1" placeholder="ความยาวตั้งแต่ 8 ถึง 16 ตัว">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">ยืนยันรหัสผ่านใหม่: </label>
                                <div class="col-xs-6 col-sm-5">
                                    <input type="password" class="form-control" id="passwordconfirm2" name="passwordconfirm2" placeholder="ความยาวตั้งแต่ 8 ถึง 16 ตัว">
                                    <p id="passwordconfirmError" style="color: red;"></p>
                                </div>
                            </div>                            
                            </div>                                                   		  			 			  			 
                            <!-- Button Add -->
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary" name="submitUpdate" id="submitUpdate">Edit</button>
                                </div>
                            </div>                            
                        </form>
                </fieldset>
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
        $('img').removeAttr('width height'); });</script>
    <script src="../layout/scripts/jquery-mobilemenu.min.js"></script>
    <script src="../layout/scripts/custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../layout/js/bootstrap.min.js"></script>
</body>
</html>
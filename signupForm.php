<!DOCTYPE html>
<html>
<head>
	<title>Weshare4U | Signup</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="layout/styles/main.css" rel="stylesheet" type="text/css" media="all">
        <link href="layout/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="layout/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="layout/css/hover-min.css" rel="stylesheet">
        <link href="layout/css/style.css" rel="stylesheet">
        <script type="text/javascript" src="layout/js/jquery-1.9.0.min.js"></script>
        <script type="text/javascript" src="layout/js/signupFunction.js"></script>
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
                    <legend><h3>สร้างบัญชีผู้ใช้ใหม่: </h3></legend>
                    <div>
                        <form action="Signup.php" method="post" enctype="multipart/form-data" class="form-horizontal" autocomplete="off" name="Signup">
                             <!-- **************************** Name  ******************************* -->
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">ชื่อ: </label>
                                <div class="col-xs-6 col-sm-5">
                                    <input type="text" class="form-control" id="fname" name="fname" placeholder="ชื่อ" autofocus="ture">
                                    <p id="FnameError" style="color: red;"></p>
                                </div>                             
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">สกลุ: </label>
                                <div class="col-xs-6 col-sm-5">
                                    <input type="text" class="form-control" id="lname" name="lname" placeholder="สกุล" autofocus="ture">
                                    <p id="LnameError" style="color: red;"></p>
                                </div>
                            </div>                           
                             <!-- **************************** E-mail  ******************************* -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label">อีเมล: </label>
                                <div class="col-xs-6 col-sm-5">		      		  				      
                                    <input type="email" id="email" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="xxxx@kkumail.com">
                                    <p id="emailError" style="color: red;"></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">รหัสประจำตัวประชาชน: </label>
                                <div class="col-xs-6 col-sm-5">
                            <input  name='ssn' type="text" id="ssn" pattern="[0-9]{13}" placeholder="รหัสประจำตัวประชาชน 13 หลัก" maxlength="13">
                                    <p id="passwordError" style="color: red;"></p>
                                </div>                             
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">รหัสผ่าน: </label>
                                <div class="col-xs-6 col-sm-5">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="ความยาวตั้งแต่ 8 ถึง 16 ตัว" autofocus="ture">
                                    <p id="passwordError" style="color: red;"></p>
                                </div>                             
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">ยืนยันรหัสผ่าน: </label>
                                <div class="col-xs-6 col-sm-5">
                                    <input type="password" class="form-control" id="passwordconfirm" name="passwordconfirm" placeholder="ความยาวตั้งแต่ 8 ถึง 16 ตัว" autofocus="ture">
                                    <p id="passwordconfirmError" style="color: red;"></p>
                                </div>
                            </div>
                             <!-- **** Phone  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"******************************* -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label">เบอร์โทรศัพท์: </label>
                                <div class="col-xs-6 col-sm-5">                                       
                                    <input type="text" id="phone" name="phone" class="form-control"  placeholder="เบอร์โทรศัพท์">
                                    <p id="emailError" style="color: red;"></p>
                                </div>
                            </div>                                                          
                             <!-- **************************** Address  ******************************* -->			   
                            <div class="form-group">
                                <label class="col-sm-2 control-label">ที่อยู่: </label>
                                <div class="col-sm-5">		      
                                    <textarea class="form-control col-sm-8" rows="3" name="address" id="address" placeholder="ที่อยู่"></textarea>
                                    <p id="DescriptError" style="color: red;"></p>                                    
                                </div>
                            </div>                          	     
                            <!-- **************************** Question  ******************************* -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label">คำถามของคุณ: </label>
                                <div class="col-sm-5">		      		  				      
                                    <select name="Question" class="form-control">
                                        <option value="คุณเกิดวันอะไร">คุณเกิดวันอะไร</option>                
                                        <option value="เพื่อนที่คุณสนิทมากที่สุดชื่ออะไร" >เพื่อนที่คุณสนิทมากที่สุดชื่ออะไร</option>
                                        <option value="สัตว์เลี้ยงตัวแรกของคุณชื่อว่าอะไร">สัตว์เลี้ยงตัวแรกของคุณชื่อว่าอะไร</option>
                                        <option value="อาชีพในฝันของคุณคือ">อาชีพในฝันของคุณคือ</option>
                                        <option value="คุณชอบสีอะไร">คุณชอบสีอะไร</option>        
                                    </select>
                                    <p id="QuestionError" style="color: red;"></p> 
                                </div>
                            </div>
                            <!-- **************************** Answer  ******************************* -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label">คำตอบ: </label>
                                <div class="col-sm-5">		      		  				      
                                    <textarea class="form-control col-sm-8" rows="3" name="answer" id="answer" placeholder="คำตอบของคุณ"></textarea>
                                    <p id="answerError" style="color: red;"></p>     
                                </div>
                            </div>
                            <!-- **************************** Upload image  ******************************* -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label">รูปบัตรประชาชน: </label>
                                <div class="col-sm-5">                                        
                                    <input type="file" name="Pic_list"  accept="image/*" id="myFile">
                                    <p style="color: red;"><i>**ขนาดไม่เกิน 2 เมกะไบต์**</i></p>
                                </div>
                            </div>                            		  			 			  			 
                            <!-- Button Add -->
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary" name="submit" id="submit">สมัครสมาชิก</button>
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
    <script>window.jQuery || document.write('<script src="layout/scripts/jquery-latest.min.js"><\/script>\
<script src="layout/scripts/jquery-ui.min.js"><\/script>')</script>
    <script>jQuery(document).ready(function ($) {
        $('img').removeAttr('width height'); });</script>
    <script src="layout/scripts/jquery-mobilemenu.min.js"></script>
    <script src="layout/scripts/custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="layout/js/bootstrap.min.js"></script>
</body>
</html>
